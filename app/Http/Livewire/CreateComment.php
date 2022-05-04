<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Comment;
use App\Models\PostModel;
use Illuminate\Support\Facades\Auth;

// class CreateComment extends Component
// {
//     public $comment;
//     public $post;
//     public $commentId;
//     protected $listeners = ['showComment' => 'createComment'];

//     public function mount($commentId){
//         $this->commentId = $commentId;
//     }
//     public function mount($id)
//     {
//         $this->post = PostModel::find($id);
//      }
//     public function render()
//     {
//         return view('livewire.create-comment', [

//         ]);
//     }
//     public function createComment(){
//         Comment::create([
//             'comment'=>$this->comment,
//             'user_id'=>Auth::id(),
//             'postmodel_id'=>$this-> commentId
//         ]);
//         $this->comment = "";
//         $this->emit('commentCreated');
//     }

// }
class CreateComment extends Component
{
    public $comment;
    public $posts;


    public function mount($posts){
        $this->posts=$posts;
    }
    public function render()
    {
        return view('livewire.create-comment', [

        ]);
    }
    public function createComment(){
        Comment::create([
            'comment'=>$this->comment,
            'user_id'=>Auth::id(),
            'postmodel_id'=>$this->posts
        ]);
        $this->comment = "";
        $this->emit('commentCreated');
    }
}
