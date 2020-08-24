<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Cadastro</h1>


    <form action="<?= url("/usuario/novo"); ?>" method="post">

        <?= csrf_field(); ?>

        <label for="">Nome</label><br>
        <input type="text" name="nome" id=""><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>

</html>
