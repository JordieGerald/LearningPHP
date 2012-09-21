<?php

class Model {

    function __construct() {
        // we have the database reusable in every model this way
        $this->db = new Database();
    }

}
?>
