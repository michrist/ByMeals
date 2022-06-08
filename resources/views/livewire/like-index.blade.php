@php
        use App\Models\like;
        $count = 0;
        $likeId;
        $likeIdArtikel;
    @endphp
    @foreach ($likes as $like)
        @if ($like->idartikel = $idartikel)
            @php
                $count++;
                $likeId = $like->idartikel;
                $likeIdArtikel = $like->idartikel;
            @endphp
        @endif
    @endforeach
    @auth
    @if (like::where(['idartikel' => $idartikel, 'id' => auth()->user()->id])->exists())
    <div class="">
        <a wire:click="like({{ $idartikel }})" class="ms-3"><i style="color: black; font-size:20px" class="fas fa-thumbs-up"></i></a>
    </div>
    @else
    <a wire:click="like({{ $idartikel }})" class="ms-3"><i style="color: black;font-size:20px" class="far fa-thumbs-up"></i></a>
    @endif
    @endauth
