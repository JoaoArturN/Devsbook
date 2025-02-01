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

        <h1 style="margin-bottom: 10px; margin-top: 30px;">Alterar Imagens</h1>

        <form method="POST" enctype="multipart/form-data" action="{{ route('changeimages') }}">
            @csrf

            <input type="file" placeholder="Digite sua senha" name="avatar"><br>
            <input type="file" placeholder="Digite sua Nova Senha" name="banner"><br>

            <button type="submit"
                style="padding:10px 20px; border: none; background-color:#4A76A8; color:white; border-radius:4px; margin-bottom: 20px;">Enviar
                Imagens</button>
        </form>


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

        <form method="POST" action="{{ route('changepassword') }}">
            @csrf

            <input type="password" placeholder="Digite sua senha" name="password"><br>
            <input type="password" placeholder="Digite sua Nova Senha" name="new_password"><br>

            <button type="submit"
                style="padding:10px 20px; border: none; background-color:#4A76A8; color:white; border-radius:4px; margin-bottom: 20px;">Alterar
                senha</button>
        </form>

        @if ($errors->any())
            <div
                style="margin:auto; background-color: red; color: white; border: 1px solid black; width: 100%; padding: 4px;">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session()->has('errorPassword'))
            <div
                style="margin:auto; background-color: red; color: white; border: 1px solid black; width: 100%; padding: 4px;">
                {{ session()->get('errorPassword') }}
            </div>
        @endif

    </div>
@endsection
