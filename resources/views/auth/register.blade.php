@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card
                header="Registro"
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

                <b-form method="POST" action="{{ route('register') }}" aria-label="{{ __('Login') }}">
                    @csrf
                    <b-form-group label="Nombre:" label-for="name">
                        <b-form-input type="text"
                        name="name" id="name"
                        value="{{ old('name') }}"  required autofocus
                        ></b-form-input>

                    </b-form-group>

                    <b-form-group label="Correo Electronico:" label-for="email"
                    description="Nunca compartiremos tu correo. Esta seguro con nosotros.">
                        <b-form-input type="email"
                        name="email" id="email"
                        placeholder="example@gmail.com"
                        value="{{ old('email') }}"  required
                        ></b-form-input>
                    </b-form-group>

                    <b-form-group label="Contrasena:" label-for="password">
                        <b-form-input type="password"
                        name="password" id="password" required>
                    </b-form-input>
                    </b-form-group>

                    <b-form-group label="Confirmar  contrasena:" label-for="password_confirmation">
                        <b-form-input type="password"
                        name="password_confirmation" id="password_confirmation" required
                        ></b-form-input>
                    </b-form-group>

                    <b-button type="submit" variant="primary">Confirmar registro</b-button>

                    <b-button href="{{ route('password.request') }}" variant="link">Ya te has registrado?</b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
