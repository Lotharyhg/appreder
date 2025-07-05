<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de contraseña</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      display: flex;
      height: 100vh;
      justify-content: center;
      align-items: center;
    }
    .form-container {
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      margin-bottom: 10px;
    }
    button {
      padding: 8px 16px;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h2>Ingresa tu contraseña</h2>
    <form action="#" method="post">
      <input type="password" name="password" placeholder="Contraseña" required>
      <button type="submit">Enviar</button>
    </form>
  </div>
</body>
</html>
