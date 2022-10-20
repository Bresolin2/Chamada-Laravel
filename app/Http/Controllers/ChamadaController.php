<?php

namespace App\Http\Controllers;

use App\Models\ChamadaModel;
use App\Models\TurmaModel;
use Illuminate\Http\Request;

class ChamadaController extends Controller
{
    public function index(Request $request)
    {
        $turmas = TurmaModel::get();

        return view('chamada.index', compact('turmas'));
    }

    public function listarAlunos(Request $request)
    {

        $id_turma = $request->input('selTurma');

        $turma = TurmaModel::find($id_turma);
        $alunos = $turma->alunos;

        return view('chamada.listarAlunos', compact('alunos', 'turma'));
    }

    public function salvar(Request $request)
    {
        //todos os campos do post
        $all = $request->all();

        $data = $request->input('inpdata');

        //recuperar objeto turma
        $id_turma = $request->input('idTurma');
        $turma = TurmaModel::find($id_turma);

        //recupera todos os alunos da turma
        $alunos = $turma->alunos;

        //inicializa variável
        $presentes = array();

        //percore todos os campos do post em busca dos componentes checkbox
        foreach ($all as $key => $value) {
            $pos = strpos($key, 'ck');

            //se existir o checkbox, sinal que está marcado. então recupera o valor dele que é o código do aluno e guarda no array
            if ($pos === 0) {
                $presentes[] = $value;
            }
        }

        //percorre todos os alunos da turma
        foreach ($alunos as $aluno) {
            //se o aluno estiver presente no array, então ele esteve presente na aula
            if (in_array($aluno->id, $presentes)) {
                $presente = true;
            } else {
                $presente = false;
            }

            //variavel recebe obs do aluno
            $obs = $request->input('inp_' . $aluno->id);


            //insere ou atualiza dados da chamada da turma, do aluno no dia
            $chamada = ChamadaModel::updateOrCreate(
                [
                    'id_turma' => $turma->id,
                    'data' => $data,
                    'id_aluno' => $aluno->id
                ],
                [
                    'presente' => $presente,
                    'obs' => $obs
                ]
            );
        }
    }

    public function relatorio() {

        return view('chamada.relatorio');
    }
}
