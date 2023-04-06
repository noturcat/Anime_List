<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header text-center">
            <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
            <div type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <img src="{{ asset('images/close-circle-svgrepo-com.svg') }}" alt="" class="img-fluid" style="width:40px;">
            </div>
        </div>
        {{-- pag mali ung login credentials --}}
        @if(\Session::has('message'))
            <div class="alert alert-info">
                {{\Session::get('message')}}
            </div>
        @endif
        <form method="POST" action="{{route('postsignup')}}">
        @csrf
        <div class="modal-body mx-3">
            <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="name" name="name" class="form-control validate">
                <label data-error="wrong" data-success="right" for="name">Your name</label>
                {{-- error handling --}}
                @if ($errors->has('name'))
                <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="email" name="email" class="form-control validate">
                <label data-error="wrong" data-success="right" for="email">Your email</label>
                {{-- error handling --}}
                @if ($errors->has('email'))
                <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>

            <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
                <input type="password" id="password" name="password" class="form-control validate">
                <label data-error="wrong" data-success="right" for="password">Your password</label>
                {{-- error handling --}}
                @if ($errors->has('password'))
                <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
        </div>
        <div class="modal-footer d-flex justify-content-center">
            <button type="submit" class="btn btn-deep-orange">Sign up</button>
        </div>
        </form>
        </div>
    </div>
    </div>

    