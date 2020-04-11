@extends('admin.layout')
@section('admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header"><b>{{ __('Edit User') }}: </b> {{$user->name}}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.edit_user', $user->id) }}">
                        @method("patch")
                        {{csrf_field()}}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" disabled>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('New Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>
                        @if ( (Auth::User()->rol === 1) )
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Rol de usuario</label>
                            <div class="col-md-6">
                                <select class="custom-select" name="rol">
                                    <?php 
                                    $rol = ['I' => 'Invitado','A' => 'Administrador',];
                                    ?>
                                    @foreach ($rol as $tipo => $nombre)
                                        @if ($user->rol === 1)
                                            <option value=" {{$tipo}} " selected> {{$nombre}} </option>
                                        @else
                                            <option value=" {{$tipo}} "> {{$nombre}} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        @endif

                        

                        <div class="container">
                            <div class="row">
                                <div class="col-md offset-5">
                                    <button type="submit" class="btn btn-success">
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="container">
                        <div class="col-md offset-10 mt-4">
                            <a href="{{ route('admin.users') }}">
                                <button class="btn btn-outline-primary">
                                    Cancelar
                                </button>
                            </a>
                        </div>
                    </div>  
                </div>      
            </div>
        </div>
    </div>
</div>
@endsection
