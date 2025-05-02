<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "kirana@kfifood.com"; 
    $subject = htmlspecialchars($_POST["subject"]);
    $message = "From: " . htmlspecialchars($_POST["name"]) . "\n";
    $message .= "Phone: " . htmlspecialchars($_POST["phone"]) . "\n";
    $message .= "Email: " . htmlspecialchars($_POST["email"]) . "\n\n";
    $message .= "Message:\n" . htmlspecialchars($_POST["message"]);

    $headers = "From: noreply@yourdomain.com\r\n";
    $headers .= "Reply-To: " . htmlspecialchars($_POST["email"]) . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Email berhasil dikirim!'); window.location.href='index.php#contact';</script>";
    } else {
        echo "<script>alert('Gagal mengirim email.'); window.location.href='index.php#contact';</script>";
    }
}
?>
