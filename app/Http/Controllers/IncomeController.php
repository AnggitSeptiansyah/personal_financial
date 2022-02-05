<?php

namespace App\Http\Controllers;

use App\Http\Requests\IncomeRequest;
use App\Models\Income;
use App\Models\IncomeType;
use Illuminate\Http\Request;

class IncomeController extends Controller
{

    public function index()
    {
        return view('incomes.index', [
            'incomes' => Income::with('incomeType')->get()
        ]);
    }

    public function create()
    {
        return view('incomes.create', [
            'incomeTypes' => IncomeType::all()
        ]);
    }

    public function store(IncomeRequest $request)
    {   
        Income::create($request->validated());
        return redirect()->route('incomes.index')->with('success', 'Income data has been added');
    }

    public function edit(Income $income)
    {
        return view('incomes.edit', [
            'incomeTypes' => IncomeType::all(),
            'income' => $income
        ]);
    }

    public function update(IncomeRequest $request, Income $income)
    {
        $income->update($request->validated());
        return redirect()->route('incomes.index')->with('success', 'Income data has been updated');
    }

    public function destroy(Income $income)
    {
        $income->delete();
        return redirect()->route('incomes.index')->with('success', 'Income data has been deleted');
    }
}
