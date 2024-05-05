<?php
defined('BASEPATH') or exit('No direct script access allowed');
class NavModel extends CI_Model {
    public function nav(){
        $a = 10;
        $b = 30;
        return $a + $b;
    }
}