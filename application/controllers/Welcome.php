<?php

/**
 * Our homepage. Show the most recently added quote.
 * 
 * controllers/Welcome.php
 *
 * ------------------------------------------------------------------------
 */
class Welcome extends Application {

    function __construct()
    {
	parent::__construct();
    }

    //-------------------------------------------------------------
    //  Homepage: show a list of the orders on file
    //-------------------------------------------------------------

    function index()
    {
        $map = directory_map('./data/', 1);

        sort($map);

        $test = '.xml';
        $orders = array();

        foreach ($map as $str)
        {
            if (substr_compare($str, $test, strlen($str)-strlen($test), strlen($test)) === 0)
            {
                if ($str != 'menu.xml')
                    p
            }
        }

        $this->data['orders'] = $orders;
    	// Build a list of orders
    	
    	// Present the list to choose from
    	$this->data['pagebody'] = 'homepage';
    	$this->render();
    }
    
    //-------------------------------------------------------------
    //  Show the "receipt" for a specific order
    //-------------------------------------------------------------

    function order($filename)
    {
    	// Build a receipt for the chosen order
    	
    	// Present the list to choose from
    	$this->data['pagebody'] = 'justone';
    	$this->render();
    }
    

}

