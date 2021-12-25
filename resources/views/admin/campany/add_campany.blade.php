@extends('admin.index')

    @section('home_content')
<div class="bg-white">
    <form method="POST" action="/admin/campany/" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="campany_name" class="col-md-4 col-form-label text-md-right">{{ __('campany_name') }}</label>

            <div class="col-md-6">
                <input id="campany_name" type="text" class="form-control @error('campany_name') is-invalid @enderror" name="campany_name" value="{{ old('campany_name') }}" required autocomplete="campany_name" autofocus>

                @error('campany_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
        <div class="form-group row">
            <label for="logo" class="col-md-4 col-form-label text-md-right">{{ __('Upload Logo') }}</label>

            <div class="col-md-6">
                <input id="logo" type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ old('logo') }}" required autocomplete="logo">

                @error('logo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>
   {{-- <form action="/admin/campany" method="POST">
    @csrf
    @method('POST')

    <div class="form-group w-75 m-sm-auto">
        <input type="text"
        name="campany_name"
        placeholder="Add campany-name..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">
        <div class="bg-danger">{{$error=null}}</div>
        @error('campany_name')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
        <input type="text"
        name="manager_name"
        placeholder="Add Manager-name..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">
        <div class="bg-danger">{{$error=null}}</div>
        @error('manager_name')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
       
        <input type="email"
        name="email"
        placeholder="Add Email-name..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">
        <div class="bg-danger">{{$error=null}}</div>
        @error('email')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
        <input type="password"
        name="password"
        placeholder="Add password..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">
        <div class="bg-danger">{{$error=null}}</div>
        @error('password')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
        <input type="file"
        name="logo" class="hidden"
        placeholder="Add logo..."
        class="shadow p-4  border-2 border-primary form-control input-lg ">Add Logo
        <div class="bg-danger">{{$error=null}}</div>
        @error('logo')
            <div class="bg-danger">{{$message}}</div>
        @enderror<br>
        <button type="submit" class="bg-primary w-100">Add</button>
    </div>
    </form> --}}

</div>
    @endsection


