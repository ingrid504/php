<form method="POST" action="">
    <label for="numero1">Número 1:</label>
    <input type="text" id="numero1" name="numero1">
    <br>
    <label for="numero2">Número 2:</label>
    <input type="text" id="numero2" name="numero2">
    <br>
    <label for="idade">Operação:</label>
    <select id="operacao" name="operacao">
        <option></option>
        <option>SOMA</option>
        <option>SUBTRAÇÃO</option>
        <option>MULTIPLICAÇÃO</option>
        <option>DIVISÃO</option>
    </select>
    <br>
    <button type="submit">Enviar</button>
</form>

<?php
if(isset($_POST["numero1"]) && isset($_POST["numero2"]) && isset($_POST["operacao"])){
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $operacao = $_POST["operacao"];
    $resultado = 0;

    if($operacao == "SOMA"){
        $resultado = $numero1 + $numero2;
    }elseif($operacao == "SUBTRAÇÃO"){
        $resultado = $numero1 - $numero2;
    }elseif($operacao == "MULTIPLICAÇÃO"){
        $resultado = $numero1 * $numero2;
    }elseif($operacao == "DIVISÃO"){
        $resultado = $numero1 / $numero2;
    }

    echo "Resultado: $resultado";
}
?>
