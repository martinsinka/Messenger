@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card
                header="Inicio de sesion"
                header-tag="header">

                @if($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                </b-alert>
                @else
                  <b-alert show>Por favor ingresa tus datos</b-alert>
                @endif

                <b-form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                  @csrf

                  <b-form-group label="Correo Electronico:" label-for="email">

                    <b-form-input type="email"
                    name="email"
                    placeholder="example@gmail.com"
                    value="{{ old('email') }}"  required autofocus
                    ></b-form-input>

                  </b-form-group>

                  <b-form-group label="Contrasena:" label-for="password">

                    <b-form-input type="password"
                    name="password" required
                    ></b-form-input>

                  </b-form-group>
                  <b-form-group >
                    <b-form-checkbox name="remember" {{ old('remember') ? 'checked="true"' : '' }}>
                      Recordar Sesion
                    </b-form-checkbox>
                  </b-form-group>

                  <b-button type="submit" variant="primary">Ingresar</b-button>

                  <b-button href="{{ route('password.request') }}" variant="link">Olvidate tu contrasena</b-button>

                </b-form>

            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
