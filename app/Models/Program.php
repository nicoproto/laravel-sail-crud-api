<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    // Guarded is the reverse of fillable.
    // If fillable specifies which fields to be mass assigned,
    // guarded specifies which fields are not mass assignable.
    protected $guarded = [];
}
