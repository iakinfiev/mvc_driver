<?php

namespace app\controllers;

use app\system\Controller;

class AccountController extends Controller
{

    public function loginAction()
    {
        $this->view->render('Страница входа');
    }

    public function registerAction()
    {
        $this->view->render('Страница регистрации');
    }
}