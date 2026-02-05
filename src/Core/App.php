<?php

namespace App\Core;

class App
{

    public static function run()
    {
        $path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH) ?? '/'; //user, /, /product, /contact -- $path = chemin

        /**
         * @parmas $routes array<string, array<string, string>>
         */
        $routes = [
            '/' => [\App\Controller\HomeController::class, 'index'],
            '/contact' => [\App\Controller\ContactController::class, 'contact'],
            '/product/new' => [\App\Controller\ProductController::class, 'new']
        ];

        if (isset($routes[$path])) {
            [$controllerClass, $methodName] = $routes[$path];

            (new $controllerClass)->$methodName();
            return;
        }

        http_response_code(404);
        echo '404 Not Found';
    }
}
