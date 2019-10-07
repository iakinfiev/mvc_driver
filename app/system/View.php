<?php


namespace app\system;


class View
{
    private $path;
    private $route;
    private $layout = 'default';

    public function __construct($route)
    {
        $this->route = $route;
        $this->path = $route['controller'] . DS . $route['action'];
    }

    public function getPath()
    {
        return $this->path;
    }

    public function getLayout()
    {
        return $this->layout;
    }

    public function render($title, $vars = [])
    {
        extract($vars);

        $path = 'app'. DS .'view'. DS . $this->getPath() .'.php';

        if (file_exists($path)) {
            ob_start();
            require_once $path;
            $content = ob_get_clean();
            require_once 'app'. DS .'view'. DS .'layouts'. DS . $this->getLayout() .'.php';
        } else {
            echo 'Отсутствует '. $this->path;
        }
    }

    public static function errorCode($code)
    {
        http_response_code($code);
        $path = 'app'. DS .'view'. DS .'errors'. DS . $code .'.php';
        if (file_exists($path)) {
            require_once $path;
            exit;

        }
    }

    public function redirect($url)
    {
        header('location: '.$url);
        exit;
    }
}