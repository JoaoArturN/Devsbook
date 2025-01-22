@extends('layouts.layout-app')

@section('content')
    <section class="feed">

        <x-user-header-profile :userprofile="$userProfile" :check="$checkFollow" :count="$count"></x-user-header-profile>



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
                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                            <div class="tab-body" data-item="following">

                                <div class="full-friend-list">
                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>

                                    <div class="friend-icon">
                                        <a href="">
                                            <div class="friend-icon-avatar">
                                                <img src="media/avatars/avatar.jpg" />
                                            </div>
                                            <div class="friend-icon-name">
                                                Bonieky
                                            </div>
                                        </a>
                                    </div>
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
