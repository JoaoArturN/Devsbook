@extends('layouts.layout-app')

@section('content')
    <section class="feed">

        <x-user-header-profile :userprofile="$userProfile" :checkfollow="$checkFollow" :count="$count"></x-user-header-profile>

        <div class="row">

            <div class="column">

                <div class="box">
                    <div class="box-body">

                        <div class="full-user-photos">

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

                            <div class="user-photo-item">
                                <a href="#modal-5" rel="modal:open">
                                    <img src="media/uploads/1.jpg" />
                                </a>
                                <div id="modal-5" style="display:none">
                                    <img src="media/uploads/1.jpg" />
                                </div>
                            </div>

                            <div class="user-photo-item">
                                <a href="#modal-6" rel="modal:open">
                                    <img src="media/uploads/1.jpg" />
                                </a>
                                <div id="modal-6" style="display:none">
                                    <img src="media/uploads/1.jpg" />
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
