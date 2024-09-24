<div class="mensagem">
<?php

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];

    echo "Mensagem enviada com sucesso! <br> <br>";
    echo "Nome: <br> $nome <br> <br>", "E-mail: <br> $email <br><br>", 
    "Mensagem: <br>$mensagem <br> <br>";

?>
</div>