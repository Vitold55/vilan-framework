<?php


class PostsNews
{

    public function indexAction() {
        echo "PostsNews::index()";
    }

    public function testAction() {
        echo "PostsNews::test()";
    }

    public function testPageAction() {
        echo "PostsNews::testPage()";
    }

    public function before() {
        echo "PostsNews::before()";
    }

}