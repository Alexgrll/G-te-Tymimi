<?php

namespace App\Router;

use App\Controllers\MainController;

class Router {

    public function start() {
        $uri = $_SERVER['REQUEST_URI'];

        // Suppression du slash final si présent
        if (!empty($uri) && $uri != '/' && $uri[-1] === "/") {
            $uri = substr($uri, 0, -1);
            http_response_code(301);
            header(('Location: ' . $uri));
            exit;
        }

        // Récupérer les paramètres d'URL
        $params = [null];
        if (isset($_GET['p'])) {
            $params = explode('/', $_GET['p']);
        }

        // Déterminer si on est dans le namespace admin ou public
        $isAdmin = $params[0] === 'admin';
        if ($isAdmin) {
            array_shift($params); // Retire 'admin' de $params
            $controllerNamespace = '\\Admin\\Controllers\\';
        } else {
            $controllerNamespace = '\\App\\Controllers\\';
        }

        // Charger le contrôleur
        if ($params[0] != '') {
            $controller = $controllerNamespace . ucfirst(array_shift($params)) . 'Controller';

            // Vérifie l'existence du contrôleur
            if (class_exists($controller)) {
                $controller = new $controller();
            } else {
                http_response_code(404);
                echo "Le contrôleur n'existe pas";
                return;
            }

            // Déterminer l'action
            $action = (isset($params[0])) ? array_shift($params) : 'index';

            // Vérifie l'existence de la méthode du contrôleur
            if (method_exists($controller, $action)) {
                // Appel de la méthode avec les paramètres s'il y en a
                (isset($params[0])) ? $controller->$action(...$params) : $controller->$action();
            } else {
                http_response_code(404);
                echo "La page recherchée n'existe pas";
            }
        } else {
            // Par défaut, afficher la page d'accueil de la partie publique
            $controller = new MainController;
            $controller->index();
        }
    }
}