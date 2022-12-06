<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de php</title>
</head>
<body>
<form action="teste.php" method="post">
<input type="text" name="name" placeholder="Seu nome">
<input type="email" name="email" placeholder="Seu email">
<input type="text" name="age" placeholder="Sua idade">
<button type="submit">Cadastrar</button>

</form>    


</body>
</html> -->
<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de php</title>
</head>

<body> -->
    <!-- <form action="teste.php" method="post" enctype="multipart/form-data"> -->
    <!-- <form action="teste.php" method="post"> -->
    <!-- <input type="file" name="img"> -->
    <!-- <form action="teste.php" method="get"> -->
        <!-- <input type="text" name="name" placeholder="Nome">
    <input type="text" name="email" placeholder="Email"> -->
        <!-- <input type="text" name="s" placeholder="Sua Busca">
        <button type="submit">Cadastrar</button>
    </form>
</body>

</html> -->
<?php require "../bootstrap.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP devclass</title>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php 
        try {
            require load();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        ?>
    </div>
</body>
</html>

