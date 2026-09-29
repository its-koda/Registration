<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>

<body>
    <!-- Formulário de captura de dados via método POST -->
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" required><br>

        <label for="ano">Ano:</label>
        <input type="text" name="ano" id="ano" required><br>

        <button type="submit">Verificar</button>
    </form>

    <?php
    // Orientação padrão exibida na página
    echo "Preencha o formulário com seu nome e ano de nascimento";
    
    // Verifica se a requisição atual veio do envio do formulário (método POST)
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        // Recebe os dados do formulário e obtém o ano dinâmico do servidor
        $nome = $_POST['nome'];
        $ano = (int)$_POST['ano'];
        $anoAtual = (int)date('Y');

        // Processa o cálculo de idade
        $idade = $anoAtual - $ano;

        // Estrutura condicional para verificação de maioridade
        if ($idade >= 18) {
            
            // Abre (ou cria) o arquivo de log no modo 'a' (append/anexo)
            $arquivo = fopen('log_acessos.txt', 'a');

            // Estrutura a linha com os dados formatados
            $linha = $nome . ";" . $idade . "\n";

            // Registra os dados no arquivo .txt e encerra a conexão com o arquivo
            fwrite($arquivo, $linha);
            fclose($arquivo);

            // Emite alerta JavaScript de sucesso no cadastro
            echo "<script>alert('Usuário cadastrado com sucesso ✅');</script>";

        } else {
            // Emite alerta JavaScript para restrição de menor de idade
            echo "<script>alert('Acesso negado 🚫, {$nome}!');</script>";
        }
    }
    ?>
</body>

</html>
