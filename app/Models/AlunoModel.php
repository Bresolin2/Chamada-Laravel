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

    public function alunos(){
        return $this->belongsToMany(TurmaModel::class);
    }

}
