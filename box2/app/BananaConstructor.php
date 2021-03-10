<?php

class BananaConstructor {

    public function index()
    {
        $pageTitle = 'Banana Boxes';
        $boxes = Json::getDB()->store($box);
        require DIR.'views/index.php';
    }
    public function create()
    {
        $pageTitle = 'New Banana Box';
        require DIR.'views/create.php';
    }
    public function store()
    {
        $box = new Box;
        $box->banana = (int) ($POST['count'] ?? 0);
        Json::getDB()->store($box); // funkcija kuri sukuria objekta
        header('Location: '.URL);
        die;
    }

    public function edit(int $id)
    {
        $pageTitle = 'Edit Banana Box';
        $box = Json::getDB()->getBox($id);
        require DIR.'views/edit.php';
    }

    public function update(object $box)
    {
        $pageTitle = 'Edit Banana Box';
        $box = Json::getDB()->getBox($id);
        require DIR.'views/edit.php';
    }

    public function deleate(int $id)
    {
        Json::getDB()->deleate($id);
        header('Location: '.URL);
        die;
    }
}