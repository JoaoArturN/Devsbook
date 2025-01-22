@extends('layouts.header_login')

@section('content')
    <section class="container main">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input placeholder="Digite seu e-mail" class="input" type="email" name="email" />

            <input placeholder="Digite sua senha" class="input" type="password" name="password" />

            <input class="button" type="submit" value="Acessar o sistema" />

            <a href="{{ route('register') }}">Ainda não tem conta? Cadastre-se</a>
        </form>
    </section>
@endsection
