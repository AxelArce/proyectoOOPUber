<?php
    require_once("./uberBasic.php");
    class UberX extends UberBasic {
        public function __construct ($id, $license, $driver, $passengers, $brand, $model) {
            parent::__construct($id, $license, $driver, $passengers, $brand, $model);
        }
    }
?>