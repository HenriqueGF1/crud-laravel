<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Editar</h1>

    <?php
    $usuario = $usuario[0];
    ?>

    <form action="<?= url("/usuario/update", ["id" => $usuario->id]); ?>" method="post">

        <?= csrf_field(); ?>
        <?= method_field("PUT") ?>

        <input type="text" name="id" value="<?= $usuario->id ?>" hidden><br><br>

        <label for="">Nome</label><br>
        <input type="text" name="nome" value="<?= $usuario->nome ?>"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
