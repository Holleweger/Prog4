<?php session_start();
include "banco.php";
include "ajudantes.php";

if(array_key_exists('nome', $_POST) && $_POST['nome'] != ''){
    echo "eu";
    $tarefa = [
        'nome' => $_POST['nome'],
        'descricao' => '',
        'prazo' => '',
        'prioridade' => $_POST['prioridade'],
        'concluida' => '',
    ];

    $tarefa['nome'] = $_POST['nome'];


    if(array_key_exists('concluida', $_POST)){
        $tarefa['concluida'] = $_POST['concluida'];
    }
    else{
        $tarefa['concluida'] = '';
    }

    if(array_key_exists('descricao', $_POST)){
        $tarefa['descricao'] = $_POST['descricao'];
    }

    if(array_key_exists('prazo', $_POST)){
        $tarefa['prazo'] = traduz_data_para_banco($_POST['prazo']);
    }

    $tarefa['prioridade'] = $_POST['prioridade'];

    if(array_key_exists('concluida', $_POST)){
        $tarefa['concluida'] = 1;
    }
    else{
        $tarefa['concluida'] = 0;
    }

    $lista_tarefas = buscar_tarefas($conexao);

    echo "Cheguei AQUI";
    gravar_tarefa($conexao, $tarefa);
    echo "Passei";
}

$lista_tarefas=[];


if(array_key_exists('lista_tarefas', $_POST)){
    $lista_tarefas = $_POST['lista_tarefas'];
}

include "template.php";
