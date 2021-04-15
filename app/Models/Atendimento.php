<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimentos';
    protected $primaryKey = 'id_atendimento';

    public $incrementing = false;

}
