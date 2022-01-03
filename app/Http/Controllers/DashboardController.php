<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\Expense;
use App\Models\Income;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = new Dashboard();
        return view('dashboard.index', [
            'expenseThisMonth' => $dashboard->getExpenseThisMonth(),
            'incomeThisMonth' => $dashboard->getIncomeThisMonth(),
            'profit' => $dashboard->getProfitThisMonth(),
        ]);
    }
}
