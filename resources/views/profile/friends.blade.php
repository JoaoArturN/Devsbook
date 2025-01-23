@extends('layouts.layout-app')

@section('content')
    <section class="feed">

        <x-user-header-profile :userprofile="$userProfile" :checkfollow="$checkFollow" :count="$count"></x-user-header-profile>



        <div class="row">

            <div class="column">

                <div class="box">
                    <div class="box-body">

                        <div class="tabs">
                            <div class="tab-item" data-for="followers">
                                Seguidores
                            </div>
                            <div class="tab-item active" data-for="following">
                                Seguindo
                            </div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-body" data-item="followers">

                                <div class="full-friend-list">

                                    @if ($userProfile->followers->count() == 0)
                                        <div style="margin-left: 10px; width:300px">
                                            Sem seguidores no momento
                                        </div>
                                    @endif

                                    @foreach ($userProfile->followers as $followers)
                                        <div class="friend-icon">
                                            <a href="{{ route('renderperfil', ['id' => $followers->id]) }}">
                                                <div class="friend-icon-avatar">
                                                    <img src="media/avatars/avatar.jpg" />
                                                </div>
                                                <div class="friend-icon-name">
                                                    {{ $followers->name }}
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                            <div class="tab-body" data-item="following">

                                <div class="full-friend-list">

                                    @if ($userProfile->following->count() == 0)
                                        <div style="margin-left: 10px; width:300px">

                                            {{ $userProfile->name }} ainda não segue ninguém
                                        </div>
                                    @endif


                                    @foreach ($userProfile->following as $following)
                                        <div class="friend-icon">
                                            <a href="{{ route('renderperfil', ['id' => $following->id]) }}">
                                                <div class="friend-icon-avatar">
                                                    <img src="media/avatars/avatar.jpg" />
                                                </div>
                                                <div class="friend-icon-name">
                                                    {{ $following->name }}
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>

                            </div>
                        </div>

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
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript" src="assets/js/vanillaModal.js"></script>
    </body>

    </html>
@endsection
