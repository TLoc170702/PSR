<?php

namespace Controllers;

use Models\User;

class HomeController
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}