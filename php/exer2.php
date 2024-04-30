<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="post"> <!--action vazio chama a mesma página-->
    <?php
        for ($i=0; $i<7; $i++){
            echo '<input type="number" name="valores[]" >';
        }
    ?>
    <button type="submit">Ok</button>
    </form>

    <?php
        if (isset($_POST)){ // isset verificar se existe a variável, se ela tem valor  - se manda uma variável POST cria um array POST-->
            if (isset($_POST['valores'])){
                $vetor = $_POST['valores'];
                var_dump($vetor);
            }
        }
    ?>
</body>
</html>

