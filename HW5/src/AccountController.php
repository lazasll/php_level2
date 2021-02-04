<?php

namespace MyApp\Controllers;

use MyApp\Auth;
use MyApp\History;
use MyApp\Hodels\Users;

class AccountController extends Controller
{
    public function actionLogin()
    {
        $error = false;

        if (isset($_POST['login'])){
            if (Users::check($_POST['login'], $_POST['pwd'])) {
                Auth::login(($_POST['login']));
                $this->redirect('/account');
            } else{
                $error = true;
            }
        }
        $this->render('account/login.twig', [
            'error' => $error,
        ]);
    }

    public function actionLogout()
    {
      Auth::logout();
      $this->redirect('/');
    }

    /**
     * /account
     */
    public function actionIndex()
    {
        if(!($user = Auth::getUser())){
          $this->redirect('/account/index.twig');
        }

        $history = History::getlast($user['id']);

        $this->render('account/index.twig', [
            'history' =>$history,
        ]);
    }

    /**
     * /account/setting
     */
    public function actionSettings()
    {
        echo 'Users setting';
    }

    /**
     * /account/password
     */
    public function actionPassword()
    {
        echo 'Users chage pwd page';
    }
}