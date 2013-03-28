<?php

class Admin_IndexController extends Zend_Controller_Action
{

    public function init()
    {
        
    }

    public function indexAction()
    {        
        // die('ik zit in de admin module');
        $postNewsForm = new admin_Forms_PostNews();
        $this->view->form = $postNewsForm;
    }


}

