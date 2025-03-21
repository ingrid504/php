<form action="upload.php" method="post" enctype="multipart/form-data">
    <label>Escolha um arquivo:</label>
    <input type="file" name="arquivo">
    <button type="submit">Enviar</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // VERIFICA SE O ARQUIVO FOI ENVIADO
    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        $arquivo = $_FILES["arquivo"];
        $nome = $arquivo["name"]; // Nome original do arquivo
        $tipo = $arquivo["type"]; // Tipo do Arquivo (MIME)
        $tamanho = $arquivo["size"]; // Tamanho em bytes
        $tmp = $arquivo["tmp_name"]; // Caminho temporário no servidor

        // Diretório onde o arquivo será salvo
        $diretorio = "uploads/";

        // Caminho final do arquivo
        $caminho_final = $diretorio . basename($nome);

        // Extensões permitidas
        $extensoes_permitidas = ["jpg", "jpeg", "png", "gif", "pdf"];
        $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

        // Valida a extensão
        if (!in_array($extensao, $extensoes_permitidas)) {
            echo "Erro: Tipo de arquivo não permitido!";
            exit;
        }

        // Move o arquivo para o diretório final
        if (move_uploaded_file($tmp, $caminho_final)) {
            echo "Upload realizado com sucesso! <br>";
            echo "<img src='".$caminho_final."'>";
        } else {
            echo "Erro ao mover o arquivo.";
        }
    } else {
        echo "Erro: Nenhum arquivo foi enviado.";
    }
}
?>