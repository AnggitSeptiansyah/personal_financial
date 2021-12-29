<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Income extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['income_type_id', 'description', 'amount'];

    public function income_type()
    {
        return $this->belongsTo(IncomeType::class);
    }
}
