<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AlunoModel;
use App\Models\TurmaModel;

class AlunoTurmaModel extends Model
{
    protected $table = 'alunos_turmas';
    protected $fillable = ['id_aluno', 'id_turma'];
    public $timestamps = false;

    
}
