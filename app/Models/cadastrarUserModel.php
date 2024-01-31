<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastrarUserModel extends Model
{
    use HasFactory;

    //referindo que a tabela usuario pertence a este model
    protected $table = 'usuario';
}//fim da classe
