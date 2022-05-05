<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./Assests/css/styles.css">
    <link rel="stylesheet" href="./Assests/css/exercicio.css">
    <title>Curso PHP</title>
</head>

<body class="exercicio">
    <header class="header">
        <h1>Curso PHP</h1>
        <h2>Visualização do Exercicio</h2>
    </header>
    <nav class="navegacao">
        <a href="#" class="verde">Sem Formatação</a>
        <a href="index.php" class="vermelho">Voltar</a>
    </nav>
    <main class="main">
        <div class="conteudo">
            <?php
            include("teste/teste.php")
            ?>

        </div>
    </main>
    <footer class="footer">
        Moiśes Alex &copy; <?= date("Y"); ?>
    </footer>
</body>

</html>