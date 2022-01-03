<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Dashboard extends Model
{
    use HasFactory;

    public function getExpenseThisMonth()
    {
        $expense = 0;
        $thisMonth = date('m');
        $query = DB::table('expenses')->whereRaw('month(created_at)', $thisMonth)->sum('amount');
        return $expense + $query;
    }

    public function getIncomeThisMonth()
    {
        $income = 0;
        $thisMonth = date('m');
        $query =  DB::table('incomes')->whereRaw('month(created_at)', $thisMonth)->sum('amount');
        return $income + $query;
    }

    public function getProfitThisMonth()
    {
        $profit = 0;
        $query = self::getIncomeThisMonth() - self::getExpenseThisMonth();
        return $profit + $query;
    }
}
