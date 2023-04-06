<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AnimeList</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> --}}
        <!-- Styles -->
        
        @vite(['resources/css/app.css', 'resources/scss/app.scss' , 'resources/js/app.js'])
        @include('modal.upload') @include('modal.delete') @include('modal.edit') @include('modal.mark') @include('modal.signin') @include('modal.register')
    </head>
    <body class="">
        
        <div class="sidebar d-flex align-items-start flex-column text-break">
            @foreach( $animeLists as $animeList)
            <a href="#{{$animeList->title}}" class="text-decoration-none"><div class="m-2">{{$animeList->title}}</div></a>
            @endforeach
            
        </div>
        
        {{-- <div class="d-flex justify-content-end">
            <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('login')}}" class="" >
                    <button> <h5>Sign In</h5> <span></span> </button></a>
                </div>
                
                <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('register-user')}}" class="" >
                    <button> <h5>Register</h5> < span></span> </button>
                </a>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('signout')}}" class="" >
                    <button> <h5>logout</h5> <span></span> </button>
                </a>
                </div>
        </div> --}}
        

        
        
        <div class="container">
            <div class="header d-flex justify-content-end gap-5">
            <div class="d-flex justify-content-around mt-5">
                {{-- <div class="d-flex justify-content-end align-items-center">
                <a href="" class="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">
                    <button> <h5>Sign In</h5> <span></span> </button></a>
                </div>
                
                <div class="d-flex justify-content-end align-items-center">
                <a href="" class="" data-bs-toggle="modal" data-bs-target="#modalRegisterForm">
                    <button> <h5>Register</h5> <span></span> </button>
                </a>
                </div> --}}
                @if (Auth::check())
                    <div class="d-flex justify-content-end align-items-center">
                    <a href="{{route('signout')}}" class="" >
                        <button> <h5>Sign Out</h5> <span></span> </button>
                    </a>
                    </div>
                @else
                    <div class="d-flex justify-content-end align-items-center">
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#modalLoginForm">
                        <button> <h5>Sign In</h5> <span></span> </button></a>
                    </div>
                    
                    <div class="d-flex justify-content-end align-items-center">
                    <a href="" class="" data-bs-toggle="modal" data-bs-target="#modalRegisterForm">
                        <button> <h5>Register</h5> <span></span> </button>
                    </a>
                    </div>
                @endif
            </div>
            {{-- <button><span class="">adsasd</span></button>
            <button><span class="">adsasd</span></button> --}}
        </div>
        {{-- {{Auth::user()->name}} --}}
            <h1 class="d-flex justify-content-center">Welcome 
                @if (Auth::check())
                    {{Auth::user()->name}}
                @else
                    
                @endif </h1>
            {{-- pag mali ung login credentials --}}
            @if(\Session::has('message'))
                <div class="alert alert-info">
                    {{\Session::get('message')}}
                </div>
            @endif
            <div class="d-flex justify-content-end">
                <a href="#"id="uploadmodal" data-bs-toggle="modal" data-bs-target="#uploadModal" >
                    <button href="" class="icon-btn add-btn mb-5" >
                        <div class="add-icon"></div>
                        <div class="btn-txt">upload</div>
                    </button></a>
            </div>
            <!-- <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
                Sort
            </button>
            <ul class="dropdown-menu">
                @foreach( $animeLists as $animeList)
                <li><a class="dropdown-item" href="{{url('genre/'.$animeList->genre)}}">{{$animeList->genre}}</a></li>
                @endforeach
            </ul>
            </div> -->
            <div class="dropdown d-flex justify-content-center">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                    Sort
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/')}}">All</a></li>
                    <li><a class="dropdown-item" href="{{url('watched')}}">Watched</a></li>
                    <li><a class="dropdown-item" href="{{url('waiting')}}">Waiting</a></li>
                </ul>
            </div>
            <form method="GET" action="{{url('search')}}">
                <div class="search">
                    <input type="search" name="query" class="input" placeholder="Search title...">
                </div>
            </form>
            
            {{-- <form method="GET" action="{{url('search')}}">
                <div class="search">
                    <button type="" name="" class="input" placeholder="Type here..."></button>
                </div>
            </form>
            <li><a class="" href="{{url('search')}}" ><input type="search" name="query" class="input" value="" placeholder="Type here..."></a></li> --}}
            <!-- <div class="dropdown">
                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                    Genre
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{url('/')}}">All</a></li>
                    <li><a class="dropdown-item" href="{{url('watched/')}}">Watched</a></li>
                    <li><a class="dropdown-item" href="{{url('waiting/')}}">Waiting</a></li>
                </ul>
            </div> -->
                <h1 class="d-flex justify-content-center mb-3">Total number of Anime {{$count;}}</h1>

                

                <div class="row d-flex gap-3 justify-content-around ">
                    
                    @foreach( $animeLists as $animeList)<div class="col-xl-2 col-lg-3 col-m-3 col-sm-4 col-xs-6  d-flex justify-content-center">
                    <article class="card d-flex" id="{{$animeList->title}}">
                        
                        <div class="position-relative">
                            <a href="" id="markmodal" data-bs-toggle="modal" data-bs-target="#markModal{{$animeList->id}}">
                                <div class="heart mt-2 position-absolute top-0 end-0">
                                    <label class="container">
                                    <input  type="checkbox" disabled="disabled" <?php if($animeList->is_watched == 1) echo 'checked="checked"' ?>>
                                        <div class="checkmark">
                                            <svg viewBox="0 0 256 256">
                                            <rect fill="none" height="256" width="256"></rect>
                                            <path d="M224.6,51.9a59.5,59.5,0,0,0-43-19.9,60.5,60.5,0,0,0-44,17.6L128,59.1l-7.5-7.4C97.2,28.3,59.2,26.3,35.9,47.4a59.9,59.9,0,0,0-2.3,87l83.1,83.1a15.9,15.9,0,0,0,22.6,0l81-81C243.7,113.2,245.6,75.2,224.6,51.9Z" stroke-width="20px" stroke="#FF5353" fill="none"></path></svg>
                                        </div>
                                    </label>
                                </div>
                            </a>
                        </div>
                        
                        
                        <div class="temporary_text">
                            <img src="{{asset("images/".$animeList->display_photo)}}" alt="" class="img-fluid">
                        </div>
                        <div class="card_content">
                            <span class="card_title" ><div class="d-flex" ><h5>{{$animeList->title}}</h5></div></span>
                            <span class="card_subtitle" ><div class="d-flex"><h6>Genre:&nbsp;</h6>{{$animeList->genre}}</div></span>
                            <p class="card_description" style="height:120px;">{{$animeList->details}}
                                
                            <div class="d-flex justify-content-between " >
                                <a href="#" data-toggle="modal" data-bs-toggle="modal" data-bs-target="#editModal{{$animeList->id}}">
                            <img src="{{ asset('images/edit-report-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:30px;"> 
                            </a>
                                <a href="" id="deletemodal" data-bs-toggle="modal" data-bs-target="#deleteModal{{$animeList->id}}">
                                    <img src="{{ asset('images/delete-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:30px;"></a>
                            </div>
                        </div>
                        
                    </article></div>
                    @endforeach
                </div>

                <div class="d-flex justify-content-center">
                    {{-- pagination link buttons --}}
                    <span class=" m-5">{{ $animeLists->links() }}</span>
                </div>
                
            
        </div>
        
    </body>
</html>


