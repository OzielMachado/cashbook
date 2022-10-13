<?php

namespace App\Controllers;

class Main extends BaseController
{
    // ===================================================
    public function getIndex()
    {
        // get all moviments from database
        $data['moviments'] = $this->getAllMoviments();

        // display the home page
        return view('home', $data);
    }

    // ===================================================
    public function getNewMoviment(){
        echo 'Novo movimento';
    }


    // ===================================================
    private function getAllMoviments(){
        $db = db_connect();
        $dados = $db->query("SELECT * FROM moviment")->getResultObject();
        $db->close();

        return $dados;
    }
}
