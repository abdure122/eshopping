@extends('home')
@section('detail_view')
<fieldset class=" border-bottom border-primary mt-sm-4">
    <legend class="text-center font-weight-bolder text-warning">Login/Register</legend>
    <div class="row">
        <div class="col">
            <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                @csrf
                @method('GET')



                <div class="form-group row">

                        <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>

                <div class="form-group row">

                        <input id="password" placeholder="Pawwword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div>


                <div class="form-group row mb-0">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Login') }}
                        </button>

                </div>
            </form>
        </div>
        <div class="col-sm-2 text-center"> <span class="font-weight-bolder rounded-circle bg-warning text-center p-sm-2">OR</span> </div>
        <div class="col">

                <form method="POST" action="/customer/register" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">

                            <input id="name" placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>


                    <div class="form-group row">

                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group row">

                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                    </div>

                    <div class="form-group row">

                            <input placeholder="confirm-Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>

        </div>
    </div>
</fieldset>
@endsection
