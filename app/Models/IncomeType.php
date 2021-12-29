<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IncomeType extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name'];

    public function incomes()
    {
        return $this->hasMany(Income::class);
    }
}
