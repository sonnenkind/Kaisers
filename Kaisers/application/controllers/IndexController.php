<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
    	$this->view->title = 'Restaurant / Bar / Catering';

    }

    
    public function kontaktAction()
    {
        $this->view->title = 'Kontakt';
    }

}

