<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;
    //especifico qual campo posso adicionar no bd sem que precise dizer qual input no controller
    protected $fillable = ['name'];
}
