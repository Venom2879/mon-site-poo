<?php

namespace App\Controller;

use App\Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home', [
            'title' => 'Page Home',// $title = 'Home'
            'description' => 'Voici une description',
            'age' => 54
        ]);
    }
    public function contact(): void
    {
        //$_GET, $_POST
        print_r($_POST);

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->render('contact', [
                'title' => 'Page Contact',
                'email' => $_POST ['email'],
                'email' => $_POST ['subject'],
                'message' => $_POST ['message'],
            ]);
            return;
        }

        $this->render('contact', [
            'title' => 'Page Contact',
        ]);
    }
}

//$email = htmlspecialchars($_POST['email']);
//echo $email;
//$subject = htmlspecialchars($_POST['subject']);
//echo $subject;




