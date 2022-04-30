<div>
    @if (Auth::check())
    {{-- <form class="mb-4" method="POST"> --}}
     {{-- @csrf --}}

     <textarea wire:model="comment" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
     <button wire:click="createComment" class="btn btn-warning mt-3">Post</button>
     {{-- </form> --}}
     @else
     <form class="mb-4">
         @csrf
         <textarea readonly class="form-control" rows="3" placeholder="Please login to join the discussion" name="comment"></textarea>
         <a href="/login" class="btn btn-warning mt-3">Login</a>
         </form>
    @endif
</div>
