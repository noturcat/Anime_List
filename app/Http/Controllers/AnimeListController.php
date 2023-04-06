<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\AnimeList;
use App\models\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Hash;
use File; //for file management

class AnimeListController extends Controller
{
    // display dbase

    

    public function index() {

        $count = AnimeList::all('is_watched')->count();//count the is_watched from db with is_watched

        // ['animeLists' => AnimeList::paginate(10)->sortBy('title')]
        $animeLists = AnimeList::orderBy('title')->paginate(15);

        

        if(Auth::check()){
            return view('welcome', compact('animeLists'),compact('count'));
        }
        return view('welcome', compact('animeLists') , compact('count'));
        
    }
    
    //login page
    // public function index() {
        
    //     return view('login');
        
    // }

    //submit login
    public function login(Request $request){

        //validate kung meron sa db
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        //chcheck sa dbase ung mga credentials error handling din
        $credentials = $request->only('email','password');
        if (Auth::attempt($credentials)){ //wag kalimutan tawagin ung Illuminate\Support\Facades\Auth;
            return redirect()->intended('/')
                                ->with('message','signed in!');
        }

        return redirect('/')->with('message','login details are not valid!');  
    }

    //registration page
    public function signup(){

        return view('registration');
    }
    

    //submit registration
    public function signupsave(Request $request){
        //validate kung meron sa db 
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
        
        $data = $request->all(); //kukunin ung mga data na ininput
        $check = $this->create($data); //call the function create

        return redirect("/");
    }

    public function create(array $data){

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']), //wag kalimutan use hash
        ]);

    }

    public function signout(){
        Session::flush(); 
        Auth::logout();

        return redirect('/');
    }
    // public function dashboard(){

    //     if(Auth::check()){
    //         return view('dashboard');
    //     }
    //     return redirect('/login');
    // }

    //save anime
    public function saveAnime(Request $request){
        $newAnimeList = new AnimeList;
        $newAnimeList->title = ucwords($request->title);
        $newAnimeList->genre = ucwords($request->genre);
        $newAnimeList->details = ucwords($request->details);
        
        if($newAnimeList->details == null){
            $newAnimeList->details = "";
        }
        else{
            $newAnimeList->details = $request->details;
        }

        $newAnimeList->is_watched = 0;
        if ($request->hasfile('display_photo')) {
            $file = $request->file('display_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('images/', $filename);
            $newAnimeList->display_photo = $filename;
        }
        else{
            $newAnimeList->display_photo = "klee.jpg";
        }
        $newAnimeList->save();
        
        return redirect('/');
    }

    //search
    public function search(Request $request){

    // if($request->has('query')) {
            
    //     dd('user_id is exists.');
    // } else {
    //     dd('user_id is not exists.');
    // }
    //     if($request->filled('query')) {
            
    //     dd('user_id is exists.');
    // } else {
    //     dd('user_id is not exists.');
    // }
            $query = $request->input('query');

            $search_items = AnimeList::where('title', 'like', "%$query%")
                                        ->orWhere('genre', 'like', "%$query%") // add additional search method search genre
                                        ->orderBy('title') //return in ordey by the title
                                            ->get();
            
            // echo "$search_items";
            return view('search_item', compact('search_items'));

        // $results = null;

        // //Runs only if the search has something in it.
        // if (!empty($request->title)) {
        //     $results = AnimeList::all()->where('title', 'like', "%$results%")->get();
        // }
        // return view('welcome');
    }
    //sort
    public function watched(){
        // return view('welcome', ['animeLists' => AnimeList::all()]);
        $count = AnimeList::where('is_watched', 1)->count(); //count the is_watched from db with 0
        
        $animeLists = AnimeList::orderBy('title')
                                    ->where('is_watched', 1)
                                        ->paginate(15);
        return view('welcome', compact('animeLists'),compact('count'));
    }
    
    public function waiting(){
        // return view('welcome', ['animeLists' => AnimeList::all()]);
        $count = AnimeList::where('is_watched', 0)->count(); //count the is_watched from db with 1
        $animeLists = AnimeList::orderBy('title')
                                    ->where('is_watched', 0)
                                        ->paginate(15);
        return view('welcome', compact('animeLists'),compact('count'));
    }

    

    //edit
    public function edit($id){
        $newAnimeList = AnimeList::find($id);
        return view('modal.modal', compact('animeList'));
    }

    //update
    public function update(Request $request, $id){
        
        $newAnimeList = AnimeList::find($id);
        
        $newAnimeList->title = ucwords($request->title);
        $newAnimeList->genre = ucwords($request->genre);
        $newAnimeList->details = ucwords($request->details);
        if($newAnimeList->details == null){
            $newAnimeList->details = "";
        }
        else{
            $newAnimeList->details = $request->details;
        }
        if ($request->hasfile('display_photo')) {
            $destination='images/'.$newAnimeList->display_photo;
            if(file::exists($destination)){
                file::delete($destination);
            }
            $file = $request->file('display_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;

            $file->move('images/', $filename);
            $newAnimeList->display_photo = $filename;
        }
        
        $newAnimeList->update();
        
        return redirect('/');
    }

    //delete
    public function delete($id){
        $newAnimeList = AnimeList::find($id);
        $destination='images/'.$newAnimeList->display_photo;
        if(file::exists($destination)){
                file::delete($destination);
            }
        $newAnimeList->delete();

        return redirect('/');
    }

    //mark as watched
    public function mark($id){
        $newAnimeList = AnimeList::find($id);
            if($newAnimeList->is_watched == 0){
                $newAnimeList->is_watched = 1;
            }
            else {
                $newAnimeList->is_watched = 0;
            }

        $newAnimeList->update();

        return redirect('/');
    }

    

    //sort
    // public function genre($genre){
    //     if(AnimeList::where('genre', $genre)->exists()){
    //         $newAnimeList = AnimeList::where('genre', $genre)->first();
    //         $newAnimeList = AnimeList::where('id', $genre->id)->get();   

    //         return view('welcome', compactt('genre', 'newAnimeList'));
    //     }
    //     else {
    //         return redirect('/')->with('status','genre does not exist');
    //     }
    // }
    
}
