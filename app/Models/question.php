<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class question extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['question','a','b','c','d','ans'];
}
