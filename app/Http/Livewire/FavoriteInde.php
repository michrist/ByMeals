<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Favorit;

class FavoriteInde extends Component
{
    // public $idmpasi;

    // public function mount($idmpasi)
    // {
    //     $this->idmpasi = $idmpasi;
    // }


    // public function render()
    // {
    //     return view('livewire.favorite-index', [
    //         'favorites' => Favorit::where(['idmpasi' => $this->idmpasi])->get(),
    //         'idmpasi',
    //         'heart',
    //     ]);
    // }

    // public function unfavorite($idmpasi)
    // {
    //     if (Favorit::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists()) {
    //         Favorit::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->delete();
    //         $this->render();
    //     }
    // }

    // public function favorite($idmpasi)
    // {
    //     if (!Favorit::where(['idmpasi' => $idmpasi, 'id' => auth()->user()->id])->exists()) {
    //         Favorit::create(['idmpasi' => $idmpasi, 'id' => auth()->user()->id]);
    //         $this->render();
    //     } else {
    //         $this->unfavorite($idmpasi);
    //     }
    // }
}
