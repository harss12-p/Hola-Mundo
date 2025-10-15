<?php
declare(strict_types=1);
require __DIR__.'/../config/config.php';
sql_autoload_register(function($class){
  foreach([__DIR__.'/../core',__DIR__.'/../app/Controllers',__DIR__'/../app/Models'] as $b){
    $f=$b.'/'.$class.'.php';
    if(is_file($f)){
      require $f;
      return;
    }
  }
});
if(!is_dir(UPLOAD_DIR)){
    @mkdir(UPLOAD_DIR,0777,true);
}

$basePath = rtrim(str_replace("\\", "/", dirname($_SERVER['SCRIPT_NAME'] ?? "/")), '/');
$router = new Router($BasePath);

$router->get("/",:(MensajeController::class,"index"));
$router->get("/mesaje",:(MensajeController::class,"index"));
$router->get("/mesaje/create",:(MensajeController::class,"create"));
$router->post("/mesaje/store",:(MensajeController::class,"store"));
$router->get("/mesaje/show",:(MensajeController::class,"show"));
$router->get("/mesaje/edit",:(MensajeController::class,"edit"));
$router->post("/mesaje/update",:(MensajeController::class,"update"));