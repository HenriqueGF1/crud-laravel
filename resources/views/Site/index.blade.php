<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inicio</h1>

    <br>

    <h3>
        <a href="<?= url("/usuario/cadastrar"); ?>">Cadastrar Usuario</a>
    </h3>

    <?php
    foreach ($usuarios as $usuario) {
        $remover = url("/usuario/remover/" . $usuario->id);
        $editar = url("/usuario/editar/" . $usuario->id);
    ?>
        <h1>
            Nome: <?= $usuario->nome ?>
            <a href="<?= $editar ?>">Editar</a>
            <a href="<?= $remover ?>">Excluir</a>
        </h1>

    <?php
    }
    ?>
</body>

</html>
