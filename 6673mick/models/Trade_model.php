<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * This class manage the definitio for one Trade or transacction for
 * get or consult the information for one product or offer or coupon.
 *
 * @author César Jaldin <rodia.piedra@gmail.com>
 */
class Trade_model extends CI_Model {

    private $name;
    private $description;
    private $image;
    private $type;
    private $discount_offer;
    private $coupon_code;
    private $expiration;

    /**
     * Create object.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     *
     * @param string $code
     * @return boolean
     */
    public function validate($code) {
        $this->db->where("code", $code);
        $query = $this->db->get("trade");
        return ($query->num_rows() > 0) ? $query->result() : FALSE;
    }

    /**
     * This function made or apply one coupon.
     *
     * @param string $code
     */
    public function apply($code) {
        if ($this->validate($code)) {
            
        }
    }

    /**
     * Record the data for trade.
     *
     * @return bool return if the query is right or have one fail
     */
    public function record() {
        $data = array(
            "name" => $this->name,
            "description" => $this->description,
            "image" => $this->image,
            "type" => $this->type,
            "discount" => $this->discount_offer,
            "code" => $this->coupon_code,
            "expiration" => $this->expiration
        );
        return $this->db->insert("trade", $data);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage() {
        return $this->image;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setDiscount($discount) {
        $this->discount_offer = $discount;
    }

    public function setCoupon($coupon) {
        $this->coupon_code = $coupon;
    }

}
