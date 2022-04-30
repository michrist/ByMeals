<div>
    @if ($comments->count())
    @foreach ($comments as $comment )
    <div class="d-flex">
        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
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
