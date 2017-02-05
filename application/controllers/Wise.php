<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Wise extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    function bingo() {
        
        // this is the view we want shown
        $this->data['pagebody'] = 'justone'; 

        // we want the 6th author
        $source = $this->quotes->get(6);

        // pull data from quotes data
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];;

        $this->render();
    }
}