<?php

namespace Viblo\Controllers;

use Viblo\Models\User;

class HomeController
{
    public function actionIndex()
    {
        return (new User)->list();
    }
}