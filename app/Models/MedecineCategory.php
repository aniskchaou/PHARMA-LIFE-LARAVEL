<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedecineCategory extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table='medecine_categorys';
}
