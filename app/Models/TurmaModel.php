<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AlunoModel;

class TurmaModel extends Model
{
    protected $table = 'turmas';
    protected $fillable = ['nome','observacao'];
    public $timestamps = false;

    public function alunos(){
        return $this->belongsToMany(AlunoModel::class, 'alunos_turmas', 'id_turma', 'id_aluno');
    }
}


