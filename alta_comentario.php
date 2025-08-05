<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$comentario = $_POST['comentario'] ?? '';

if (!empty($comentario)) {
    $con = new mysqli("localhost", "root", "", "arrendaoco");

    if ($con->connect_error) {
        die("Conexión fallida: " . $con->connect_error);
    }

    $stmt = $con->prepare("INSERT INTO comentarios(comentario) VALUES (?)");
    $stmt->bind_param("s", $comentario);

    if ($stmt->execute()) {
        // Redirige de regreso a la misma página para mostrar los comentarios actualizados
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    } else {
        echo "Error al insertar: " . $stmt->error;
    }

    $stmt->close();
    $con->close();
} else {
    echo "
    <script>
        alert('Por favor, escribe un comentario antes de enviar.');
        window.history.back();
    </script>";
}
?>
