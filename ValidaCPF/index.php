<?php
//Homer para não permitir uma sequência de números iguais
require_once 'Valida.php';

$validaCPF = new Valida();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>

<body>
    <form action="index.php" method="post">
        <div class="form-group">
            <label for="">CPF</label>
            <input type="text" id="cpf" class="form-control" name="cpf" id="" aria-describedby="helpId" placeholder="Digite o CPF..." maxlength="14">
            <input type="submit">
        </div>
    </form>

    <div>
        <label>
            <?php  
                if(isset($_POST['cpf']) && !empty($_POST['cpf'])){
                    echo "CPF: " . $_POST['cpf'] . "<br><br>";
                
                    $cpf = $validaCPF->cpf($_POST['cpf']);
                    if ($cpf) {
                        echo "CPF é válido!";
                    } else {
                        echo "CPF não é válido!";
                    }
                
                } 
            ?>
        </label>
    </div>
    <script type="text/javascript" src="validador.js"></script>
</body>

</html>