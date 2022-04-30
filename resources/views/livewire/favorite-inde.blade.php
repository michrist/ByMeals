{{-- @php
use App\Models\Favorit;
$count = 0;
$favoriteId;
$favoriteIdmpasi;
@endphp
@foreach ($favorites as $favorite)
@if ($favorite->idmpasi = $idmpasi)
    @php
        $count++;
        $favoriteId = $favorite->id;
        $favoriteIdmpasi = $favorite->idmpasi;
    @endphp
@endif
@endforeach
<div>
@auth
    <div class="align-items-center">
        @if (Favorit::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists())
            <a wire:click="favorite({{ $idmpasi }})" class="btn btn-light btn-lg bi bi-heart-fill">
                {{ $count }}</a>
        @else
            <a wire:click="favorite({{ $idmpasi }})" class="btn btn-light btn-lg bi bi-heart">
                {{ $count }}</a>
        @endif
    </div>
@endauth
@guest
    <div class="align-items-center">
        <a type="button" class="btn btn-light btn-lg bi bi-heart" href="/login"> {{ $count }}</a>
    </div>
@endguest
</div> --}}
<h1>halo</h1>
