<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Component;

class ListComment extends Component
{
    protected $listeners = [
        'commentCreated'=>'$refresh'
    ];
    public function render()
    {
        return view('livewire.list-comment',[
            'comments'=>Comment::all()
        ]);
    }
}
