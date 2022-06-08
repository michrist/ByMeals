<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use App\Models\PostModel;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

// class ListComment extends Component
// {
//     public $comment;
//     public $commentId;

//     protected $listeners = [
//         'commentCreated'=>'$refresh',
//         'getContact'=> 'showContact'
//     ];
//     // public function mount($commentId){
//     //     $this->commentId = $commentId;
//     // }
//     public function render()
//     {
//         return view('livewire.list-comment',[
//             'comments'=>Comment::all()
//         ]);
//     }
//     public function showContact($comments)
//     {
//         $this->comment=$comments['comment'];
//         $this->commentId = $comments['id'];
//     }
//     public function getComment($id)
//     {
//         $post = PostModel::find($id);
//         $this->emit('showComment', $post->id);
//     }

// }
class ListComment extends Component
{
    public $idartikel;
    protected $listeners = [
        'commentCreated'=>'$refresh'
    ];
    public function mount($idartikel){
        $this->idartikel=$idartikel;
    }
    public function render()
    {
        return view('livewire.list-comment',[
            // 'comments'=>DB::table('comments')->where('postmodel_id', $this->posts)->get()
            'comments'=>Comment::where(['postmodel_id' => $this->idartikel])->get(),
        ]);
    }
}
