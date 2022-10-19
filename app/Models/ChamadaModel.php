<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChamadaModel extends Model
{
    protected $table = 'presenca';
    protected $fillable = ['id_turma','id_aluno', 'data', 'obs', 'presente'];
    public $timestamps = false;
}
