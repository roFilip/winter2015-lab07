<?php

/**
 * This is a "CMS" model for quotes, but with bogus hard-coded data.
 * This would be considered a "mock database" model.
 *
 * @author jim
 */
class Menu extends CI_Model
{

    protected $xml = null;
    protected $patty_names = array();
    protected $patties = array();
    protected $cheeses = array();
    protected $toppings = array();
    protected $sauces = array();

    // Constructor
    public function __construct()
    {
        parent::__construct();
        $this->xml = simplexml_load_file(DATAPATH . 'menu.xml');

        // build the list of patties - approach 1
        foreach ($this->xml->patties->patty as $patty)
        {
            $patty_names[(string) $patty['code']] = (string) $patty;
        }


    }



    // retrieve a patty record
    function getPatty($code)
     {
        if (isset($this->patties[$code]))
            return $this->patties[$code];
        else
            return null;
    }

    function getCheese($code)
    {
        if (isset($this->cheeses[$code]))
            return $this->cheeses[$code];
        else
            return null;
    }

    function getTopping($code)
    {
        if (isset($this->toppings[$code]))
            return $this->toppings[$code];
        else
            return null;
    }

    function getSauce($code)
    {
        if (isset($this->sauces[$code]))
            return $this->sauces[$code];
        else
            return null;
    }

}
