<form method="post" action="">
    <label for="nome">nome</label>
    <input type="text" id="nome" name="nome">
    <label for="idade">Idade</label>
    <input type="text" id="idade" name="idade">
    <button type="subimit">Enviar</button>
</form>
<?php
if (isset($_POST["nome"])) {
    echo "Nome recebido via POST:".$_POST["nome"];
}
?>

<?php
if (isset($_POST["idade"])) {
    echo "idade recebido via POST:".$_POST["idade"];
}
?>