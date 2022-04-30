<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CreateComment extends Component
{
    public $comment;
    public $post;


    public function render()
    {
        return view('livewire.create-comment', [

        ]);
    }
    public function createComment(){
        Comment::create([
            'comment'=>$this->comment,
            'user_id'=>Auth::id(),
            'postmodel_id'=>1
        ]);
        $this->comment = "";
        $this->emit('commentCreated');
    }
}
