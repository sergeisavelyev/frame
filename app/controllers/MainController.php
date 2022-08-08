<?php

namespace app\controllers;

use app\models\Main;

class MainController extends AppController
{

    // public $layout = 'main';

    public function indexAction()
    {
        $model = new Main;
        // $res = $model->query("CREATE TABLE posts SELECT * FROM my_db.users");
        $posts = $model->findAll();
        $title = 'PAGE TITLE';
        $this->set(compact('title', 'posts'));
    }
}