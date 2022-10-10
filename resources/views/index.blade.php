<h1>Listagem</h1>

<ul>
    @foreach ($alunos as $aluno)
    <li>
       <b> Id:</b> {{$aluno->id}} <br>
       <b> Aluno:</b> {{$aluno->nome}} <br>
       <a href="{{route('show', $aluno->id)}}">detalhes</a><br><br>
    </li>
    @endforeach
</ul>
