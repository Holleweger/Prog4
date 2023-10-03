<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./styles.css">
    <title>Gerenciador de Tarefas</title>
</head>
<body>
<h1>Gerenciador de Tarefas</h1>
<form method="POST">
    <fieldset>
        <legend>
            <label>Tarefa:
                <input type="text" name="nome">
            </label>
            <label>Descricao: (opcional)
                <textarea name="descricao"></textarea>
            </label>
            <label>Prazo: (opcional)
                <input type="text" name="prazo">
            </label>
            <fieldset>
                <legend>Prioridade: </legend>
                <label>
                    <input type="radio" name="prioridade" value="1" checked />baixa
                    <input type="radio" name="prioridade" value="2" checked />media
                    <input type="radio" name="prioridade" value="3" checked />alta
            </fieldset>
            <label>
                Tarefa concluida:
                <input type="checkbox" name="concluida" value="sim" />
            </label>
            <input type="submit" name="Gravar">
        </legend>
    </fieldset>
</form>
<table>
    <tr>
        <th>Tarefas</th>
        <th>Descrição</th>
        <th>Prazo</th>
        <th>Prioridade</th>
        <th>Concluida</th>
    </tr>

    <?



    ?>

</table>

</body>
</html>