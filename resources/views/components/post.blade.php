@foreach ($posts as $post)
    <div class="box feed-item">
        <div class="box-body">
            <div class="feed-item-head row mt-20 m-width-20">
                <div class="feed-item-head-photo">
                    <a href=""><img src="{{ asset('media/avatars/avatar.jpg') }}" /></a>
                </div>
                <div class="feed-item-head-info">
                    <a href="{{ route('renderperfil', ['id' => $post->user->id]) }}"><span
                            class="fidi-name">{{ $post->user->name }}</span></a>
                    <span class="fidi-action">fez um post</span>
                    <br />
                    <span class="fidi-date">{{ date('d-m-Y', strtotime($post->created_at)) }}</span>
                </div>

                @if ($post->user->id == Auth::user()->id)
                    <div class="feed-item-head-btn">
                        <img src="{{ asset('images/more.png') }}" />
                    </div>
                @endif

            </div>
            <div class="feed-item-body mt-10 m-width-20">
                {{ $post->body }}
            </div>
            <div class="feed-item-buttons row mt-20 m-width-20">
                <div class="like-btn on">56</div>
                <div class="msg-btn">3</div>
            </div>
            <div class="feed-item-comments">


                @foreach ($post->comment as $comment)
                    <div class="fic-item row m-height-10 m-width-20">
                        <div class="fic-item-photo">
                            <a href=""><img src="{{ asset('media/avatars/avatar.jpg') }}" /></a>
                        </div>
                        <div class="fic-item-info">
                            <a
                                href="{{ route('renderperfil', ['id' => $comment->user->id]) }}">{{ $comment->user->name }}</a>
                            {{ $comment->body }}
                        </div>
                    </div>
                @endforeach


                <div class="fic-answer row m-height-10 m-width-20">
                    <div class="fic-item-photo">
                        <a href=""><img src="{{ asset('media/avatars/avatar.jpg') }}" /></a>
                    </div>
                    <input type="text" class="fic-item-field" placeholder="Escreva um comentário" />
                </div>

            </div>
        </div>
    </div>
@endforeach
