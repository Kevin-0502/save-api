<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $table='expenses';
    protected $fillable=['user_id','product_id','expense_description','expense_units','expese_unitprice'];
    
}