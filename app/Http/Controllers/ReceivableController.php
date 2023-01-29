<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReceivableRequest;
use App\Models\Receivable;
use Illuminate\Http\Request;

class ReceivableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('receivables.index', [
            'receivables' => Receivable::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('receivables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceivableRequest $request)
    {
        Receivable::create($request->validated());
        return redirect()->route('receivables.index')->with('success', 'Data piutang telah ditambah');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Receivable $receivable)
    {
        return view('receivables.edit', [
            'receivable' => $receivable
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ReceivableRequest $request, Receivable $receivable)
    {
        $receivable->update($request->validated());
        return redirect()->route('receivables.index')->with('success', 'Data piutang telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receivable $receivable)
    {
        $receivable->delete();
        return redirect()->route('receivables.index')->with('success', 'Data piutang telah dihapus');
    }
}
