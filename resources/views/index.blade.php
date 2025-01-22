@extends('layouts.layout-app')


@section('content')
    <section class="feed mt-10">

        <div class="row">
            <div class="column pr-5">

                <div class="box feed-new">
                    <div class="box-body">
                        <div class="feed-new-editor m-10 row">
                            <div class="feed-new-avatar">
                                <img src="media/avatars/avatar.jpg" />
                            </div>
                            <div class="feed-new-input-placeholder">O que você está pensando, {{ Auth::user()->name }} ?
                            </div>
                            <form method="POST" action="{{ route('createpost') }}">

                                @csrf

                                <div style="display: flex; justify-content:space-between;">

                                    <input class="feed-new-input" contenteditable="true" name="body"></input>


                                    <button class="feed-new-send"
                                        style="background-color: transparent; /* Remove o fundo padrão do botão */
    border: none; /* Remove a borda do botão */
    cursor: pointer; /* Torna o botão clicável */
    padding: 0; /* Remove qualquer padding extra */
    display: inline-flex; /* Garante que a imagem se alinhe corretamente */
    justify-content: center; /* Alinha a imagem no centro */
    align-items: center; /* Alinha a imagem no centro */">
                                        <img src="{{ asset('images/send.png') }}" />
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>


                <x-post :posts="$posts"></x-post>



            </div>
            <div class="column side pl-5">
                <div class="box">
                    <div class="box-body m-10">
                        OPA
                    </div>
                </div>
            </div>
        </div>

    </section>
    </section>



    <div class="modal">
        <div class="modal-inner">
            <a rel="modal:close">&times;</a>
            <div class="modal-content"></div>
        </div>
    </div>
@endsection('content')


</body>

</html>
