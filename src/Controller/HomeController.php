<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;

class HomeController extends Controller
{
    public function index(): void
    {

        $db = new Database();

        $query = $db->prepare("SELECT * FROM user");
        $query->execute();

        $user = $query->fetchAll();
        //print_r($users);
        //var_dump($users);

        $this->render('home', [
            'title' => 'Page Home',// $title = 'Page Home'
            'users' => $user
        ]);
    }

    public function contact(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $db = new Database();

            $query = $db->prepare("INSERT INTO contact (email, subject, message) VALUES (:email, :subject, :message)");
            $query->execute([
                'email' => $_POST['email'],
                'subject' => $_POST['subject'],
                'message' => $_POST['message']
            ]);

            $this->redirect('/contact');
        }
        //$_GET, $_POST
        //print_r($_POST);

        //if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //$this->render('contact', [
            //    'title' => 'Page Contact',
            //  'email' => $_POST ['email'],
            //'subject' => $_POST ['subject'],
            //'message' => $_POST ['message'],
            //]);
         //   return;
        //}

        $this->render('contact', [
            'title' => 'Page Contact',
        ]);
    }
}

//$email = htmlspecialchars($_POST['email']);
//echo $email;
//$subject = htmlspecialchars($_POST['subject']);
//echo $subject;




