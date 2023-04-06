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
        </head>
    <body class="">
        
        
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
            
                <div class="row d-flex gap-3 justify-content-around ">
                    @if($search_items)
                    @foreach( $search_items as $animeList)<div class="col-xl-2 col-lg-3 col-m-3 col-sm-4 col-xs-6  d-flex justify-content-center">
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
                    @endif
                </div>
            
        </div>
        
    </body>
</html>


