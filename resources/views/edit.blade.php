<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AnimeList</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Styles -->
        
        @vite(['resources/css/app.css', 'resources/scss/app.scss' , 'resources/js/app.js'])

        
    </head>
    <body>
        <div class="container">
            <h1>Welcome</h1>
            <div class="d-flex justify-content-end">
                <form method="post" action="{{route('saveAnime')}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <!-- <input type="text" name="title" require>
                    <input type="file" class="" name="display_photo" >
                    <button class="icon-btn add-btn ">
                        <div class="add-icon"></div>
                        <div class="btn-txt">Add</div>
                    </button> -->
                </form>
                
            </div>
            <div>
                <ul>
                    <li class="li">category</li>
                </ul>
            </div>
                <form method="post" action="{{url('update/'.$animeList->id)}}" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @method('PUT')
                    <input type="text" name="title" value="{{$animeList->title}}" require>
                    genre<input type="text" name="genre"value="{{$animeList->genre}}">
                    details<input type="text" name="details"value="{{$animeList->details}}">
                    <input type="file" class="" name="display_photo">
                    <img src="{{asset("images/".$animeList->display_photo)}}" alt="" class="img-fluid">
                    <button class="icon-btn add-btn ">
                        <div class="add-icon"></div>
                        <div class="btn-txt">update</div>
                    </button>
                </form>
        </div>
        
    </body>
</html>
