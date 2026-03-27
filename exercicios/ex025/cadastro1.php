<?php
// Verifica se veio via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Captura os dados com segurança
    $nome = htmlspecialchars($_POST['nome'] ?? '');
    $sobrenome = htmlspecialchars($_POST['sobrenome'] ?? '');

    // Validação simples
    if (empty($nome) || empty($sobrenome)) {
        echo "Preencha todos os campos!";
        exit;
    }

    // Monta o texto para salvar
    $linha = "Nome: $nome | Sobrenome: $sobrenome" . PHP_EOL;

    // Nome do arquivo onde será salvo
    $arquivo = "dados.txt";

    // Salva no arquivo
    file_put_contents($arquivo, $linha, FILE_APPEND);

    echo "<h2>Dados salvos com sucesso!</h2>";
    echo "<p>$nome $sobrenome</p>";

} else {
    echo "Acesso inválido!";
}
?>