@php
        use App\Models\favorite;
        $count = 0;
        $favoriteId;
        $favoriteIdMpasi;
    @endphp
    @foreach ($favorites as $favorite)
        @if ($favorite->idmpasi = $idmpasi)
            @php
                $count++;
                $favoriteId = $favorite->idmpasi;
                $favoriteIdMpasi = $favorite->idmpasi;
            @endphp
        @endif
    @endforeach
<div>
    @auth
        <div>
            @if (favorite::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists())
                {{-- <a wire:click="favorite({{ $idmpasi }})" class="btn btn-light btn-lg bi bi-heart-fill">
                    {{ $count }}</a>  --}}
                    <a wire:click="favorite({{ $idmpasi }})" class="btn mt-4" style="border-radius: 10px; background-color:#FEA116; color:black; width:140px"><i class="fas fa-bookmark"></i> <span style="margin-left: 10px"> Saved </span></a>
            @else
            <a wire:click="favorite({{ $idmpasi }})" class="btn mt-4" style="border-radius: 10px; background-color:#FEA116; color:black; width:140px"><i class="far fa-bookmark"></i> <span style="margin-left: 10px"> Save </span></a>
            @endif
        </div>
    @endauth
    @guest
    <a href="/login" class="btn mt-4" style="border-radius: 10px; background-color:#FEA116; color:black; width:140px"><i class="far fa-bookmark"></i> <span style="margin-left: 10px"> Save </span></a>
    @endguest
</div>