<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('lead.index',[
            'leads' => Lead::all(),
            'leads_new' => Lead::where('stages','new')->get(),
            'leads_flow' => Lead::where('stages', 'flow')->get(),
            'leads_prospect' => Lead::where('stages', 'prospect')->get(),
            'leads_negotiation' => Lead::where('stages', 'negotiation')->get(),
            'leads_win' => Lead::where('stages', 'win')->get(),
            'leads_lost' => Lead::where('stages', 'lost')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('lead.create');
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
        $lead->product = $request->product;
        $lead->status = 'active';

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
        $lead->product = $request->product;
        $lead->status = 'active';

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
