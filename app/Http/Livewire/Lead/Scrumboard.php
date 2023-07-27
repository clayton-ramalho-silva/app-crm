<?php

namespace App\Http\Livewire\Lead;

use App\Models\Lead;
use Livewire\Component;

class Scrumboard extends Component
{

    public $leads_new;
    public $leads_new_value;
    public $leads_flow;
    public $leads_flow_value;
    public $leads_prospect;
    public $leads_prospect_value;
    public $leads_negotiation;
    public $leads_negotiation_value;
    public $leads_win;
    public $leads_win_value;
    public $leads_lost;
    public $leads_lost_value;

    public $teste = 0;

    protected $listeners = [
        'evento' => 'eventoTeste'
    ];


    public function render()
    {
        $this->leads_new = $this->leads()->where('stages','new');
        $this->leads_new_value = $this->leads()->where('stages','new')->sum('value');

        $this->leads_flow = $this->leads()->where('stages','flow');
        $this->leads_flow_value = $this->leads()->where('stages','flow')->sum('value');

        $this->leads_prospect = $this->leads()->where('stages','prospect');
        $this->leads_prospect_value = $this->leads()->where('stages','prospect')->sum('value');

        $this->leads_negotiation = $this->leads()->where('stages','negotiation');
        $this->leads_negotiation_value = $this->leads()->where('stages','negotiation')->sum('value');

        $this->leads_win = $this->leads()->where('stages','win');
        $this->leads_win_value = $this->leads()->where('stages','win')->sum('value');

        $this->leads_lost = $this->leads()->where('stages','lost');
        $this->leads_lost_value = $this->leads()->where('stages','lost')->sum('value');


        return view('livewire.lead.scrumboard');
    }

    public function leads()
    {
        return Lead::all();
    }

    public function eventoTeste(int $id_lead, string $stage)
    {
        $lead = Lead::findOrFail($id_lead);
        $lead->stages = $stage;
        $lead->save();

        return;
    }


}
