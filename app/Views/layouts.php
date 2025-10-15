<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="index,follow">
  <meta name="description" content="Hola mundo con base de datos, hola + CRUD">
  <title>Hola Mundo - MVC + PHP + CRUD</title>
  <link rel="icon" href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/imagenes/mensaje.img.png">
  <link rel="stylesheet" href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/assets/css/style.css">
</head>
<body>
  <header class="container">
    <h1>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/"> 👋hola mundo - MVC + PHP + CRUD</a>
    </h1>
    <nav>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/mensajes"> Mensajes</a>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/crear"> Crear Mensaje</a>
    </nav>
  </header>
  
  <main class="container">
    <h2>Bienvenido al sistema de mensajes</h2>
    <p>Selecciona una opción del menú para comenzar.</p>
  </main>
  
  <div>
    <?php include $viewfile; ?>
  </div>

  <footer>
    <small>
        hecho con corazón en PHP MVC
    </small>
  </footer>
  
  <script src="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/assets/js/app.js"></script>
</body>
</html>