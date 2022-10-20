<?php

namespace App\Http\Controllers;

use App\Models\ChamadaModel;
use App\Models\TurmaModel;
use Illuminate\Http\Request;
use Termwind\Components\Raw;

class ChamadaController extends Controller
{
    public function index()
    {
        $turmas = TurmaModel::get();

        return view('chamada.index', compact('turmas'));
    }

    public function listarAlunos(Request $request)
    {
        $data = $request->input('inpdata');
        $id_turma = $request->input('selTurma');

        $turma = TurmaModel::find($id_turma);
        $alunos = $turma->alunos;

        return view('chamada.listarAlunos', compact('alunos', 'turma', 'data'));
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
        return $this->index();
    }

    public function relatorio()
    {

        $turmas = TurmaModel::get();

        return view('chamada.relatorio', compact('turmas'));
    }

    public function gera_relatorio(Request $request)
    {

        $id_turma = $request->input('selTurma');
        $dataInicio = $request->input('dataIn');
        $dataFinal = $request->input('dataFim');

        $presencas = ChamadaModel::where('id_turma', $id_turma)
            ->whereBetween('data', [$dataInicio, $dataFinal])
            ->get();
            dd($presencas);

        //return view('chamada.relatorio');
    }
}
