<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class First extends Application
{

    function __construct()
    {
        parent::__construct();
    }

    /**
     * Homepage for our app
     */
    public function index()
    {
        // this is the view we want shown
        $this->data['pagebody'] = 'justone';

        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(1);
        $author = array ();

        // pull data from quotes data
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }
    
    public function gimmie($id)
    {
        // view we want shown
        $this->data['pagebody'] = 'justone';

	// get the quote #3. id grabs the quote #3.
        $source = $this->quotes->get($id);
	
        // pull data from quotes data
	$this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }
}
