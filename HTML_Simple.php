<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Chat con IA</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; padding: 20px; }
        .chat-box { background: #fff; padding: 15px; border-radius: 8px; max-width: 600px; margin: auto; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        .message { margin-bottom: 10px; }
        .user { color: #1e90ff; }
        .bot { color: #28a745; }
        textarea, button { width: 100%; margin-top: 10px; }
    </style>
</head>
<body>
<div class="chat-box">
    <h2>Chat con Menaylex API</h2>
    <form method="post">
        <textarea name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>
        <button type="submit">Enviar</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['mensaje'])) {
        $mensaje = htmlspecialchars($_POST['mensaje']);
        $respuesta = json_decode(file_get_contents('https://menaylex.com/Tools/api.php', false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => 'Content-Type: application/json',
                'content' => json_encode(['message' => $mensaje])
            ]
        ])), true);

        echo "<div class='message user'><strong>Tú:</strong> $mensaje</div>";
        echo "<div class='message bot'><strong>IA:</strong> " . htmlspecialchars($respuesta['reply'] ?? $respuesta['error'] ?? 'Sin respuesta') . "</div>";
    }
    ?>
</div>
</body>
</html>