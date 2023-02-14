<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trasabilite extends Model
{
    use HasFactory;
    protected  $fillable = ['id_operateur', 'splice_name', 'location', 'quantite'];
}
