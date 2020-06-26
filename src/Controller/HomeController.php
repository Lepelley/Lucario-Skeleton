<?php

namespace App\Controller;

use Lucario\Controller\AbstractController;

class HomeController extends AbstractController
{
    public function print(): string
    {
        return $this->render('home/index');
    }
}