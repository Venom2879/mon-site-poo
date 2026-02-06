<?php

namespace App\Controller;

use App\Core\Controller;
use App\Core\Database;
use App\Repository\UserRepository;

class HomeController extends Controller
{
    public function index(): void
    {
        $userRepository = new UserRepository();
        $users = $userRepository->findAll();


        $this->render('home', [
            'title' => 'Page Home',// $title = 'Page Home'
            'users' => $users
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
        //$_GET, $_POST ------------------------------Rendre une page
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




