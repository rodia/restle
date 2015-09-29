<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home controller for first render the main page.
 *
 * In this controller we manage the template for html
 */
class Home extends Base_Controller {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Controller base
     */
    public function index() {
        echo $this->template->render('welcome_message');
    }

}
