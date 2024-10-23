<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheffModel extends Model
{
    protected $table = 'cheffs';
    protected $fillable = ['name', 'email', 'experience', 'nationality', 'speciality','image'];
}
