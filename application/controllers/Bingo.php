<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author JDePourcq
 */
class Bingo extends Application{
    function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->data['pagebody'] = 'justone';

            $source = $this->quotes->get(5);

            $this->data['who'] = $source['who'];
            $this->data['what'] = $source['what'];
            $this->data['mug'] = $source['mug'];

            $this->render();
    }
}
