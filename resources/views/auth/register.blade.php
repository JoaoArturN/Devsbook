@extends('layouts.header_login')

@section('content')
    <section class="container main">
        <form method="POST" action="{{ route('register') }}">


            @csrf

            <input placeholder="Digite seu nome completo" class="input" type="text" name="name" />

            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password_confirmation" />

            <input placeholder="Digite seu Data de Nascimento" class="input" type="date" name="birthdate" />

            <input class="button" type="submit" value="Realizar registro" />

            <a href="{{ route('login') }}">Já possui uma conta? Faça login</a>
        </form>
    </section>
@endsection
