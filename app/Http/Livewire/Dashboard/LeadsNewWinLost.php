<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Lead;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class LeadsNewWinLost extends Component
{
    public $leadNewValue;
    public $leadWinValue;
    public $leadLostValue;

    public function render()
    {

        $this->leadNewValue = $this->leadsNew();
        $this->leadLostValue = $this->leadsLost();
        $this->leadWinValue = $this->leadsWin();

        return view('livewire.dashboard.leads-new-win-lost');
    }

    public function leads()
    {
       return Lead::select('value', 'stages')->get();
    }

    public function leadsNew()
    {
        return $this->leads()->where('stages', 'new')->sum('value');;
    }

    public function leadsLost()
    {
        return $this->leads()->where('stages', 'lost')->sum('value');
    }

    public function leadsWin()
    {
        return $this->leads()->where('stages', 'win')->sum('value');
    }




}
