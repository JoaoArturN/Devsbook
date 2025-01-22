@props(['userprofile', 'count'])

<div class="row">
    <div class="box flex-1 border-top-flat">
        <div class="box-body">
            <div class="profile-cover" style="background-image: url('media/covers/cover.jpg');"></div>
            <div class="profile-info m-20 row">
                <div class="profile-info-avatar">
                    <img src="{{ asset('media/avatars/avatar.jpg') }}" />
                </div>
                <div class="profile-info-name">
                    <div class="profile-info-name-text">{{ $userprofile->name }}</div>
                    <div class="profile-info-location"> {{ $userprofile->detail->city ?? 'Sem endereço' }}</div>
                </div>
                @if ($userprofile->id != Auth::user()->id)
                    @if ($checkfollow != false)
                        <div>
                            <a href="{{ route('unfollowuser', ['id' => $userprofile->id]) }}"
                                style="text-decoration: none; padding:10px 20px; background-color:blue; color:white; border-radius:4px; cursor:pointer;">Deixar
                                de seguir</a>
                        </div>
                    @else
                        <div>
                            <a href="{{ route('followuser', ['id' => $userprofile->id]) }}"
                                style="text-decoration: none; padding:10px 20px; background-color:blue; color:white; border-radius:4px; cursor:pointer;">Seguir</a>
                        </div>
                    @endif
                @endif
                <div class="profile-info-data row">
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">{{ $count['followed'] }}</div>
                        <div class="profile-info-item-s">Seguidores</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">{{ $count['following'] }}</div>
                        <div class="profile-info-item-s">Seguindo</div>
                    </div>
                    <div class="profile-info-item m-width-20">
                        <div class="profile-info-item-n">12</div>
                        <div class="profile-info-item-s">Fotos</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
