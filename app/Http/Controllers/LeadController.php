<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use App\Models\Product;
use Illuminate\Http\Request;

class LeadController extends Controller
{


    public function leads()
    {
        return Lead::all();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = $this->leads();
        $leads_new = $this->leads()->where('stages','new');
        $leads_flow = $this->leads()->where('stages', 'flow');
        $leads_prospect = $this->leads()->where('stages', 'prospect');
        $leads_negotiation = $this->leads()->where('stages', 'negotiation');
        $leads_win = $this->leads()->where('stages', 'win');
        $leads_lost = $this->leads()->where('stages', 'lost');

        $leads_new_value = $leads_new->sum('value');
        $leads_flow_value = $leads_flow->sum('value');
        $leads_prospect_value = $leads_prospect->sum('value');
        $leads_negotiation_value = $leads_negotiation->sum('value');
        $leads_win_value = $leads_win->sum('value');
        $leads_lost_value = $leads_lost->sum('value');

        return view('lead.index',compact(
            'leads', 'leads_new', 'leads_flow',
            'leads_prospect', 'leads_negotiation',
            'leads_win', 'leads_lost', 'leads_new_value',
            'leads_flow_value', 'leads_prospect_value',
            'leads_negotiation_value', 'leads_win_value', 'leads_lost_value')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::where('status', 'active')->get();

        return view('lead.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $lead = new Lead;

        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->value = $request->value;
        $lead->name_customer = $request->name_customer;
        $lead->phone_customer = $request->phone_customer;
        $lead->email_customer = $request->email_customer;
        $lead->product = $request->product;
        $lead->source = $request->source;

        $lead->save();

        return redirect()->route('lead.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('lead.show',[
            'lead' => Lead::findOrFail($id),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('lead.edit',[
            'lead' => Lead::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $lead = Lead::findOrFail($id);

        $lead->title = $request->title;
        $lead->description = $request->description;
        $lead->value = $request->value;
        $lead->name_customer = $request->name_customer;
        $lead->phone_customer = $request->phone_customer;
        $lead->email_customer = $request->email_customer;
        $lead->product = $request->product;
        $lead->source = $request->source;

        $lead->save();

        return redirect()->route('lead.index');
    }

    public function stages(string $id, string $stage)
    {

        $lead = Lead::findOrFail($id);
        $lead->stages = $stage;
        $lead->save();

        return redirect()->route('lead.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $lead = Lead::findOrFail($id);
        $lead->delete();

        return redirect()->route('lead.index');
    }
}
