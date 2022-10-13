<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlunoModel extends Model
{
    protected $table = 'alunos';
    protected $fillable = ['nome','email', 'telefone', 'image'];
    public $timestamps = false;

}
