<div>
    @if ($comments->count())
    @foreach ($comments as $comment )
    <div class="d-flex">
        <div class="flex-shrink-0"><img height="30px" class="rounded-circle" src="{{ url('/data_file/'.$comment->user->image) }}" alt="..." /></div>
        <div class="ms-3 mb-3">
            <div class="fw-bold">{{ $comment->user->name }}</div>
            {{ $comment->comment }}
        </div>
    </div>
    @endforeach
    @else
    <div class="ms-3 mb-2">
     <div class="fw-bold">No comment found</div>
     </div>
    @endif
</div>
