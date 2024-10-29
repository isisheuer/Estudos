<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['mail'];
    $estado = $_POST['estado'];
    $mensagem = $_POST['msg'];
    $receberAtualizacoes = isset($_POST['check']) ? 'Sim' : 'Não';

    $to = "hudsonrb@gmail.com";
    $subject = "Formulário de Contato";
    $body = "Nome: $nome\n";
    $body .= "E-mail: $email\n";
    $body .= "Estado: $estado\n";
    $body .= "Mensagem: $mensagem\n";
    $body .= "Deseja receber atualizações: $receberAtualizacoes\n";

    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente mais tarde.";
    }
}
?>
