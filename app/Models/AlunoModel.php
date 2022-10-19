<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AlunoTurmaModel;
use App\Models\TurmaModel;

class AlunoModel extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome','email', 'telefone', 'image'];
    public $timestamps = false;

    public function turmas(){
        return $this->belongsToMany(TurmaModel::class, 'alunos_turmas', 'id_aluno', 'id_turma');
    }

}
