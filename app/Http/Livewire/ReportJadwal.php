<?php

namespace App\Http\Livewire;


use Livewire\Component;

class ReportJadwal extends Component
{
    public $schedules;
    public $menus;
    public $tanggal;

    public function mount(){
        $this->tanggal = $this->schedules[0]->tanggal;
    }

    public function render()
    {
        return view('livewire.report-jadwal');
    }
}
