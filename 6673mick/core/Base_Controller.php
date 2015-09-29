<?php

defined('BASEPATH') OR esti('NO direct access allowed');

class Base_Controller extends CI_Controller {

    public $template;

    public function __construct() {
        parent::__construct();
        $this->template = new League\Plates\Engine(APPPATH . "/views");
    }

}
