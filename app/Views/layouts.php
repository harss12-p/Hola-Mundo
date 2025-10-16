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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  <header class="container">
    <h1>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/">
        <svg class="icon" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        Hola Mundo - MVC + PHP + CRUD
      </a>
    </h1>
  <nav>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/mensaje">
        <i class="fas fa-list"></i> Mensajes
      </a>
      <a href="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/mensaje/create">
        <i class="fas fa-plus"></i> Crear Mensaje
      </a>
    </nav>
  </header>
  
  <main class="container">
    <h2>Bienvenido al sistema de mensajes</h2>
    <p>Selecciona una opción del menú para comenzar.</p>
  </main>
  
  <div>
    <?php include $viewFile; ?>
  </div>

  <footer>
    <small>
        hecho con corazón en PHP MVC
    </small>
  </footer>
  
  <script src="<?= BASE_URL ? rtrim(BASE_URL, '/') : '' ?>/assets/js/app.js"></script>
</body>
</html>