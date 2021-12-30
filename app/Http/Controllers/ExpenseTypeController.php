<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExpenseTypeRequest;
use App\Models\ExpenseType;
use Illuminate\Http\Request;

class ExpenseTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expense_types.index', [
            'expenseTypes' => ExpenseType::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expense_types.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExpenseTypeRequest $request)
    {
        ExpenseType::create($request->validated());
        return redirect()->route('expense_types.index')->with('success', 'Expense type has been added');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseType $expenseType)
    {
        return view('expense_types.edit', compact('expenseType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ExpenseTypeRequest $request, ExpenseType $expenseType)
    {
        $expenseType->update($request->validated());
        return redirect()->route('expense_types.index')->with('success', 'Expense type has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExpenseType $expenseType)
    {
        $expenseType->delete();
        return redirect()->route('expense_types.index')->with('success', 'Expense type has been deleted');
    }
}
