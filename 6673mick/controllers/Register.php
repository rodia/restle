<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("Register_model", "registerModel");
    }

    public function index() {
        $data = array("titulo" => "Formulario para obtener una api key");
        $this->load->view("register_view", $data);
    }

    /**
     *
     * level a false
     * ignore_limits a false, así pueden acceder sin límites
     * is_private_key a false, la api es pública
     * al ser pública, ip_addresses no debe contener ninguna ip para poder acceder
     */
    public function newApiKey() {
        if ($this->input->post("miApiKey") != "") {

            $generate = $this->registerModel->new_api_key($level = false, $ignore_limits = false, $is_private_key = false, $ip_addresses = "");
            if ($generate) {
                $data['title'] = "key";
                $data['generate'] = $generate;
                $this->load->view('key_view', $data);
            } else {
                show_404("Ha ocurrido un error");
            }
        } else {
            show_404("Ha ocurrido un error");
        }
    }

}
