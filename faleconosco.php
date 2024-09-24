<?php 

?>
<div class="formulario">
    <h1>Fale conosco</h1>
    <form action="mensagem_receber.php" method="post">

        Nome:<br>
        <input type="text" name="nome" required><br><br>

        E-mail:<br>
        <input type="email" name="email" required><br><br>

        Mensagem:<br>
        <textarea name="mensagem" value="mensagem"></textarea><br><br>
        
        <input type="submit" value="Enviar">
    </form>
</div>