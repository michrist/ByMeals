<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\favorite;

class FavoriteIndex extends Component
{
    public $idmpasi;
    public function mount($idmpasi)
    {
        $this->idmpasi = $idmpasi;
    }
    public function render()
    {
        return view('livewire.favorite-index', [
            'favorites' => favorite::where(['idmpasi' => $this->idmpasi])->get(),
            'idmpasi',
            'heart',
        ]);
    }
    public function unfavorite($idmpasi)
    {
        if (favorite::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists()) {
            favorite::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }
    public function favorite($idmpasi)
    {
        if (!favorite::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists()) {
            favorite::create(['idmpasi' => $idmpasi, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unfavorite($idmpasi);
        }
    }
}
