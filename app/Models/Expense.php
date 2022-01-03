<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Expense extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['expense_type_id', 'description', 'amount'];

    public function expenseType()
    {
        return $this->belongsTo(ExpenseType::class);
    }
}
