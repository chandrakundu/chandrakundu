<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Blog extends Controller {
    public function index() {
        $parser = \Config\Services::parser();

        $db = \Config\Database::connect();

        $query = $db->query('SELECT * from users');
        $results = $query->getResult();

        helper("form");

        $data = [
            "title" => "this is title",
            "desc"  => "This is a long discription",
            "users" => $results,

        ];
        return $parser->setData($data)->render('blog');
    }

    // public function view($page = 'home')
    // {
    //     // ...
    // }

    public function test() {
        $fdsah = "jljf";
        return $fdsah;
    }
    public function new_test() {
        return "";
    }
}
