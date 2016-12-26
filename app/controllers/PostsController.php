<?php

namespace app\controllers;

use app\models\Posts;

class PostsController extends AppController {

    protected $model;

    public function indexAction() {
        $model = new Posts();
        $title = 'Posts page';
        $posts = $model->findAll();
//        $posts = $model->findBySql("SELECT * FROM {$model->table} ORDER BY id DESC");
//        $posts = $model->findBySql("SELECT * FROM {$model->table} WHERE title LIKE ? ORDER BY id DESC", ['%st%']);
//        $posts = $model->findLike('ost', 'title');
//        $res = $model->query("UPDATE posts SET author='Vovan' WHERE id=2");
        $this->set(compact('title', 'posts'));

    }

    public function postAction() {
        $model = new Posts();
        $post = $model->findOne(2);
//        $post = $model->findOne("Vilan", 'author');
        $title = $post['title'];

        $this->set(compact('title', 'post'));
    }

}