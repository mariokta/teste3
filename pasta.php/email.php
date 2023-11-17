<?php
if(isset($_POST['email']) && !empty($_POST['email'])) {
    $nome = addcslashes($_POST['name']);
    $email = addcslashes($_POST['email']);
    $mensagem = addcslashes($_POST['message']);

    $to = "mariokta01@gmail.com";
    $subject = "Contato - Loja de cupcakes";
    $body = "Nome: " . $nome . "\n" .
            "E-mail: " . $email . "\n" .   
            "Mensagem: " . $mensagem;
    $header = "from: mariokta01@gmail.com" . "\r\n" .
            "Reply-to:" . $email . "\r\n" . // Correção aqui
            "X-Mailer: PHP/" . phpversion(); // Correção aqui

    if(mail($to, $subject, $body, $header)) {
        echo "Email enviado com sucesso";
    } else {
        echo "O Email não pôde ser enviado";
    }
}
?>