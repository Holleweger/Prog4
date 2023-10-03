<?php
$dbServidor = 'localhost';
$dbUsuario = 'root';
$dbSenha = 'root';
$dbBanco = 'tarefas';

$conexao = mysqli_connect($dbServidor,$dbUsuario,$dbSenha,$dbBanco);

/*if(mysqli_connect_errno($conexao)){
    echo "Não foi possível se conectar ao banco. Erro: ";
    echo mysqli_connect_error();

}
*/

function buscar_tarefas($conexao){
    echo "Teste";
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = array();

    while($tarefa = mysqli_fetch_assoc($resultado)){
        $tarefas[] = $tarefa;
    }

    return $tarefas;
}

function gravar_tarefa($conexao, $tarefa){
    if($tarefa['prazo'] == ''){
        $prazo = 'NULL';
    } else {
        $prazo = "'{$tarefa['prazo']}'";
    }

    $sqlGravar = "
        INSERT INTO tarefas
            (nome, descricao, prioridade, prazo, concluida)
        VALUES
            (
            '{$tarefa['nome']}',
            '{$tarefa['descricao']}',
             {$tarefa['prioridade']},
             {$prazo},
             {$tarefa['concluida']});
    ";

    mysqli_query($conexao, $sqlGravar);
}
