<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loser extends Model
{
    use HasFactory;
    
    protected $fillable = [
    	'surname',
    	'othername',
    	'samaritan'
    ];
    public $timestamps = false;
}
