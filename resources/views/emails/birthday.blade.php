<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Birthday!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            background-color: #ffcb6b;
            padding: 10px;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
            color: #ffffff;
        }
        .body {
            padding: 20px;
            text-align: center;
        }
        .body p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            font-size: 12px;
            color: #999;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>🎉 Happy Birthday, {{ $name }}! 🎂</h1>
        </div>
        <div class="body">
            <p>Estimado {{ $name }}:</p>
            <p>Te deseo un día lleno de amor, alegría y todas tus cosas favoritas.</p>
            <p>Gracias por ser una parte increíble de nuestro equipo. ¡Somos muy afortunados de tenerte con nosotros!</p>
            <p>¡Disfruta al máximo de tu día especial!</p>
            <p>Mis mejores deseos,</p>
            <p><strong></strong></p>
            </div>
            <div class="footer">
            <p>&copy; {{ date('Y') }} </p>
        </div>
    </div>
</body>
</html>
