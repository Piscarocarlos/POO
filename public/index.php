 <?php
require_once '../vendor/autoload.php';

use App\Services\App;
use App\Services\Router;

define("BASE_VIEW", dirname(__DIR__) . DIRECTORY_SEPARATOR . 'ressources' . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);

$router = new Router();

$router->register("/", ['PageController', 'home']);
$router->register("/contact", ['PageController', 'contact']);

$router->register("/home", function(){
    return "Je suis une page home";
});


(new App($router))->run();
