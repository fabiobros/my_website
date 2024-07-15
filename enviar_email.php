<?php
//pagina que recebera o form e fará o envio do email
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'fabiortecnologia@gmail.com'; 
    $subject = 'Mensagem do formulário de contato';
    $headers = "From Meu site: $name <$email>";
    $body = "Nome: $name\n\nEmail: $email\n\nMensagem:\n$message";
    
    // Enviar email
    if (mail($to, $subject, $body, $headers)) {
        echo '<script>alert("Mensagem enviada com sucesso!"); window.location.replace("contato.html");</script>';
    } else {
        echo '<script>alert("Erro ao enviar mensagem."); window.history.back();</script>';
    }
} else {
    echo '<script>window.history.back();</script>';
}
?>
