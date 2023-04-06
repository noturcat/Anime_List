<link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <div class="d-flex justify-content-end">
            <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('login')}}" class="" >
                    <button> <h5>Sign In</h5> <span></span> </button></a>
                </div>
                
                <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('register-user')}}" class="" >
                    <button> <h5>Register</h5> <span></span> </button>
                </a>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                <a href="{{route('signout')}}" class="" >
                    <button> <h5>logout</h5> <span></span> </button>
                </a>
                </div>
        </div>  
<div> Register User </div>
{{-- pag mali ung login credentials --}}
@if(\Session::has('message'))
    <div class="alert alert-info">
        {{\Session::get('message')}}
    </div>
@endif
<form method="POST" action="{{route('postsignup')}}">
    @csrf
    <div class="form-group">
        <label for="email">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
        {{-- error handling --}}
        @if ($errors->has('name'))
        <span class="text-danger">{{$errors->first('name')}}</span>
        @endif
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
        {{-- error handling --}}
        @if ($errors->has('email'))
        <span class="text-danger">{{$errors->first('email')}}</span>
        @endif
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        {{-- error handling --}}
        @if ($errors->has('password'))
        <span class="text-danger">{{$errors->first('password')}}</span>
        @endif
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>