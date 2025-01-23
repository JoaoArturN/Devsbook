@extends('layouts.layout-app')

@section('content')
    <style>
        input {
            width: 400px;
            padding: 12px;
            border-radius: 4px;
            border: none;
            outline: none;
            margin-bottom: 10px;
        }
    </style>




    <div style="margin:auto;">


        <h1 style="margin-bottom: 10px; margin-top: 30px;">Configurações</h1>


        <form method="POST" action="{{ route('edituser') }}">

            @csrf

            <input type="text" placeholder="Digite seu nome" name="name" value="{{ $userProfile->name }}"><br>
            <input type="email" placeholder="Digite seu e-mail" name="email" value="{{ $userProfile->email }}"><br>
            <input type="text" placeholder="Digite sua Cidade" name="city"
                value="{{ $userProfile->detail->city }}"><br>
            <input type="text" placeholder="Digite seu Trabalho" name="work"
                value="{{ $userProfile->detail->work }}"><br>
            <input type="date" placeholder="Digite sua Data de Nascimento" name="birthdate"
                value="{{ $userProfile->detail->birthdate }}"><br>


            <button type="submit"
                style="padding:10px 20px; border: none; background-color:#4A76A8; color:white; border-radius:4px; margin-bottom: 20px;">Atualizar</button>

        </form>

        @if (session()->has('success'))
            <div style="padding: 7px; width: 100%; background-color: green; color: white; border: 1px solid black;">
                {{ session()->get('success') }}
            </div>
        @endif

        <h1 style="margin-bottom: 10px; margin-top: 30px;">Alterar senha</h1>

        <form method="POST">
            @csrf

            <input type="password" placeholder="Digite sua senha" name="password"><br>
            <input type="password" placeholder="Digite sua Nova Senha" name="new-password"><br>

            <button type="submit"
                style="padding:10px 20px; border: none; background-color:#4A76A8; color:white; border-radius:4px; margin-bottom: 20px;">Alterar
                senha</button>
        </form>

    </div>
@endsection
