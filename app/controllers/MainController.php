<?php

namespace app\controllers;

use app\system\Controller;
use app\system\View;

class MainController extends Controller
{
    /**
     * @title string
     * @result array
     */
    public function indexAction()
    {
        $title = 'Главная страница index';
        $result = [
            'name' => 'Lena',
            'type' => 'user',
            'age' => 25,
        ];
        $this->view->render($title, $result);
    }

    public function aboutAction()
    {
        $this->view->render('about');
    }
}