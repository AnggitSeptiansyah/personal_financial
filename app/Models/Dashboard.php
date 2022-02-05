<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;

    protected int $incomeThisMonth = 0;
    protected int $expenseThisMonth = 0;

    public function getExpenseThisMonth()
    {
        // Get year and month
        $year = date('Y');
        $month = date('m');
        $date = \Carbon\Carbon::parse($year . "-" . $month . "-01");
        $startOfMonth = $date->startOfMonth()->format('Y-m-d H:i:s');
        $endOfMonth = $date->endOfMonth()->format('Y-m-d H:i:s');

        // Get amount of this month
        $this->expenseThisMonth = Expense::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('amount');
        return $this->expenseThisMonth;
    }

    public function getIncomeThisMonth()
    {
        // Get year and month
        $year = date('Y');
        $month = date('m');
        $date = \Carbon\Carbon::parse($year . "-" . $month . "-01");
        $startOfMonth = $date->startOfMonth()->format('Y-m-d H:i:s');
        $endOfMonth = $date->endOfMonth()->format('Y-m-d H:i:s');

        // Get amount of this month
        $this->incomeThisMonth = Income::whereBetween('created_at', [$startOfMonth, $endOfMonth])->sum('amount');
        return $this->incomeThisMonth;
    }

    public function getProfitThisMonth()
    {
        $profit = 0;
        $query = $this->incomeThisMonth - $this->expenseThisMonth;
        return $profit + $query;
    }
}
