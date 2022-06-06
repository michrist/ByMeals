<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\like;

class LikeIndex extends Component
{
    public $idartikel;
    public function mount($idartikel)
    {
        $this->idartikel = $idartikel;
    }
    public function render()
    {
        return view('livewire.like-index', [
            'likes' => like::where(['idartikel' => $this->idartikel])->get(),
            'idartikel',
            'heart',
        ]);
    }
    public function unlike($idartikel)
    {
        if (like::where(['idartikel' => $idartikel, 'id' => auth()->user()->id])->exists()) {
            like::where(['idartikel' => $idartikel, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function like($idartikel)
    {
        if (!like::where(['idartikel' => $idartikel, 'id' => auth()->user()->id])->exists()) {
            like::create(['idartikel' => $idartikel, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unlike($idartikel);
        }
    }
}
