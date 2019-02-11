<?php

namespace App\Http\Controllers\Backend;

use App\Models\tickets\tickets;
use App\Http\Requests\Backend\ticketsFormRequest;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Backend\DataTables\ticketsDataTable;

class ticketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ticketsDataTable $dataTable)
    {
        return $dataTable->render('Amamarul::datatable',['title' => 'tickets','subtitle' => 'Listado']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tickets = new tickets;
        $data = collect([

        \Form::model($tickets, ['route' => ['admin.tickets.store', $tickets->id],'class' => 'form-horizontal', 'role' => 'form', 'method' => 'POST', 'id' => 'edit-tickets']),

                \Form::bsText('id',old('id') ?: $tickets->id,['placeholder' => 'id']),
        \Form::bsText('name',old('name') ?: $tickets->name,['placeholder' => 'name']),
        \Form::bsText('ticket',old('ticket') ?: $tickets->ticket,['placeholder' => 'ticket']),
        \Form::bsText('created_at',old('created_at') ?: $tickets->created_at,['placeholder' => 'created_at']),
        \Form::bsText('updated_at',old('updated_at') ?: $tickets->updated_at,['placeholder' => 'updated_at']),


        \Form::bsSubmit('Crear','success','md'),
        \Form::close(),
        ]);
        $box_link = collect([
            \Form::bs_box_link('admin.tickets.index', 'Todos',[],'primary'),
            \Form::bs_box_link('admin.tickets.create', 'Nuevo',[],'success'),
        ]);
        $title = 'tickets: Crear';
        session(['title_tickets' => $title]);

        return view('Amamarul::show', ['title' => $title,'subtitle' => '','data' => $data,'box_link' => $box_link]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Backend\ticketsFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ticketsFormRequest $request)
    {
        $tickets = tickets::create($request->all());
        return redirect()->route('admin.tickets.show',$tickets->id)->with('flash_success', 'Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tickets\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tickets = tickets::findOrFail($id);
        $data = collect([
                \Form::bsText_show('id',old('id') ?: $tickets->id,['placeholder' => 'id']),
        \Form::bsText_show('name',old('name') ?: $tickets->name,['placeholder' => 'name']),
        \Form::bsText_show('ticket',old('ticket') ?: $tickets->ticket,['placeholder' => 'ticket']),
        \Form::bsText_show('created_at',old('created_at') ?: $tickets->created_at,['placeholder' => 'created_at']),
        \Form::bsText_show('updated_at',old('updated_at') ?: $tickets->updated_at,['placeholder' => 'updated_at']),

        ]);
        $box_link = collect([
            // link_to_route('admin.tickets.edit', 'Editar', [$tickets->id]),
            \Form::bs_box_link('admin.tickets.edit', 'Editar',[$tickets->id],'warning'),
            \Form::bs_box_link('admin.tickets.index', 'Todos',[],'primary'),
            \Form::bs_box_link('admin.tickets.create', 'Nuevo',[],'success'),
        ]);
        $title = 'tickets: '.$tickets->name ? $tickets->name : '';
        session(['title_tickets' => $title]);
        return view('Amamarul::show', ['title' => $title,'subtitle' => '','data' => $data,'box_link' => $box_link]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tickets\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tickets = tickets::findOrFail($id);
        $data = collect([

        \Form::model($tickets, ['route' => ['admin.tickets.update', $tickets->id],'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PUT', 'id' => 'edit-tickets']),

                \Form::bsText('id',old('id') ?: $tickets->id,['placeholder' => 'id']),
        \Form::bsText('name',old('name') ?: $tickets->name,['placeholder' => 'name']),
        \Form::bsText('ticket',old('ticket') ?: $tickets->ticket,['placeholder' => 'ticket']),
        \Form::bsText('created_at',old('created_at') ?: $tickets->created_at,['placeholder' => 'created_at']),
        \Form::bsText('updated_at',old('updated_at') ?: $tickets->updated_at,['placeholder' => 'updated_at']),


        \Form::bsSubmit('Editar','success','md'),
        \Form::close(),
        ]);
        $box_link = collect([
            \Form::bs_box_link('admin.tickets.index', 'Todos',[],'primary'),
            \Form::bs_box_link('admin.tickets.create', 'Nuevo',[],'success'),
        ]);
        $title = 'tickets: '.$tickets->name ? $tickets->name : '';
        session(['title_tickets' => $title]);

        return view('Amamarul::show', ['title' => $title,'subtitle' => '','data' => $data,'box_link' => $box_link]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Backend\ticketsFormRequest  $request
     * @param  \App\Models\tickets\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(ticketsFormRequest $request, $id)
    {
        $tickets = tickets::findOrFail($id);
        $tickets->update($request->all());
        return redirect()->route('admin.tickets.show',$tickets->id)->with('flash_success', 'Guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tickets\tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tickets = tickets::findOrFail($id);
        $tickets->delete();
        return redirect()->route('admin.tickets.index')->with('flash_success', 'Eliminado');

    }
}
