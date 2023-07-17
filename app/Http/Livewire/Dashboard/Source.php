<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Lead;
use Livewire\Component;

class Source extends Component
{

    public $sources;
    public $sourceFirst;
    public $sourceSecond;
    public $sourceOthers;





    public function render()
    {

        $this->sourceFirst = $this->primeiro();
        $this->sourceSecond = $this->segundo();
        $this->sourceOthers = $this->outros();



        return view('livewire.dashboard.source');
    }



    public function total()
    {
        return $this->sources()->sum('value');
    }

    public function sources()
    {
        return Lead::all();
    }

    public function colecaoOrdem()
    {
        $site = $this->sources()->where('source', 'site');
        $facebook = $this->sources()->where('source', 'facebook');
        $google = $this->sources()->where('source', 'google');
        $whatsapp = $this->sources()->where('source', 'whatsapp');
        $instagram = $this->sources()->where('source', 'instagram');
        $indicacao = $this->sources()->where('source', 'indicacao');


       $colecao = collect([
            'site'       => $site->sum('value'),
            'facebook'   => $facebook->sum('value'),
            'google'     => $google->sum('value'),
            'whatsapp'   => $whatsapp->sum('value'),
            'instagram'  => $instagram->sum('value'),
            'indicacao'  => $indicacao->sum('value')
        ])->sortDesc();

        $colecaoArray = $colecao->toArray();

        $lista = [];
        foreach($colecaoArray as $key => $value){
            array_push($lista, [$key => $value]);
        }

        return $lista;

    }

    public function primeiro()
    {

        $sourceName = key($this->colecaoOrdem()[0]);

        $sourceValue = $this->sources()->where('source', $sourceName)->sum('value');

        $percent = ($sourceValue / $this->total()) * 100;

        return [
            'name' => $sourceName,
            'value' => $sourceValue,
            'percent' => $percent
        ];


    }

    public function segundo()
    {
        $sourceName = key($this->colecaoOrdem()[1]);

        $sourceValue = $this->sources()->where('source', $sourceName)->sum('value');

        $percent = ($sourceValue / $this->total()) * 100;

        return [
            'name' => $sourceName,
            'value' => $sourceValue,
            'percent' => $percent
        ];

    }

    public function outros()
    {
        $outros = $this->total() - ($this->primeiro()['value'] + $this->segundo()['value']);
        $percent = ($outros / $this->total()) * 100;

        return [
            'value' => $outros,
            'percent' => $percent,
        ];
    }











}
