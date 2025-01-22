@extends('layouts.layout-app')

@section('content')
    <section class="feed">


        <x-user-header-profile :userprofile="$userProfile" :checkfollow="$checkFollow" :count="$count"></x-user-header-profile>


        <div class="row">

            <div class="column side pr-5">

                <div class="box">
                    <div class="box-body">

                        <div class="user-info-mini">
                            <img src="{{ asset('images/calendar.png') }}" />
                            {{ date('d-m-Y', strtotime($userProfile->detail->birthdate)) }}
                        </div>

                        <div class="user-info-mini">
                            <img src="{{ asset('images/pin.png') }}" />
                            {{ $userProfile->detail->city ?? 'Sem endereço' }}
                        </div>

                        <div class="user-info-mini">
                            <img src="{{ asset('images/work.png') }}" />
                            {{ $userProfile->detail->work ?? 'Desempregado' }}
                        </div>

                    </div>
                </div>

                <div class="box">
                    <div class="box-header m-10">
                        <div class="box-header-text">
                            Seguindo
                            <span>({{ $count['following'] }})</span>
                        </div>
                        <div class="box-header-buttons">
                            <a href="">ver todos</a>
                        </div>
                    </div>
                    <div class="box-body friend-list">


                        @foreach ($users as $user)
                            <div class="friend-icon">
                                <a href="{{ route('renderperfil', ['id' => $user->id]) }}">
                                    <div class="friend-icon-avatar">
                                        <img src="{{ asset('media/avatars/avatar.jpg') }}" />
                                    </div>
                                    <div class="friend-icon-name">
                                        {{ $user->name }}
                                    </div>
                                </a>

                            </div>
                        @endforeach



                    </div>
                </div>

            </div>
            <div class="column pl-5">

                <div class="box">
                    <div class="box-header m-10">
                        <div class="box-header-text">
                            Fotos
                            <span>(12)</span>
                        </div>
                        <div class="box-header-buttons">
                            <a href="">ver todos</a>
                        </div>
                    </div>
                    <div class="box-body row m-20">

                        <div class="user-photo-item">
                            <a href="#modal-1" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-1" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-2" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-2" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-3" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-3" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                        <div class="user-photo-item">
                            <a href="#modal-4" rel="modal:open">
                                <img src="media/uploads/1.jpg" />
                            </a>
                            <div id="modal-4" style="display:none">
                                <img src="media/uploads/1.jpg" />
                            </div>
                        </div>

                    </div>
                </div>

                @foreach ($userProfile->post as $posts)
                    <div class="box feed-item">
                        <div class="box-body">
                            <div class="feed-item-head row mt-20 m-width-20">
                                <div class="feed-item-head-photo">
                                    <a href=""><img src="media/avatars/avatar.jpg" /></a>
                                </div>
                                <div class="feed-item-head-info">
                                    <a href=""><span class="fidi-name">{{ $userProfile->name }}</span></a>
                                    <span class="fidi-action">fez um post</span>
                                    <br />
                                    <span class="fidi-date">{{ date('d-m-Y', strtotime($posts->created_at)) }}</span>
                                </div>
                                <div class="feed-item-head-btn">
                                    <img src="{{ asset('images/more.png') }}" />
                                </div>
                            </div>
                            <div class="feed-item-body mt-10 m-width-20">
                                {{ $posts->body }}
                            </div>
                            <div class="feed-item-buttons row mt-20 m-width-20">
                                <div class="like-btn on">56</div>
                                <div class="msg-btn">3</div>
                            </div>
                            <div class="feed-item-comments">


                                @foreach ($posts->comment as $c)
                                    <div class="fic-item row m-height-10 m-width-20">
                                        <div class="fic-item-photo">
                                            <a href="{{ route('renderperfil', ['id' => $c->user->id]) }}"><img
                                                    src="media/avatars/avatar.jpg" /></a>
                                        </div>
                                        <div class="fic-item-info">
                                            <a
                                                href="{{ route('renderperfil', ['id' => $c->user->id]) }}">{{ $c->user->name }}</a>
                                            {{ $c->body }}
                                        </div>
                                    </div>
                                @endforeach

                                <div class="fic-answer row m-height-10 m-width-20">
                                    <div class="fic-item-photo">
                                        <a href=""><img src="media/avatars/avatar.jpg" /></a>
                                    </div>
                                    <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach



            </div>

        </div>

    </section>
    </section>
@endsection
