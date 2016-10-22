<?php
/**
 * Created by IntelliJ IDEA.
 * User: Raihan
 * Date: 10/18/2016
 * Time: 12:33 AM
 */

namespace services;


final class ErrorService {
    private $errors = array();

    /**
     * ErrorService constructor.
     */
    private function __construct(){

    }

    public static function Instance() {
        static $inst = null;
        if ($inst === null) {
            $inst = new ErrorService();
        }
        return $inst;
    }


    public function setError($error) {
        array_push($this->errors, $error);
    }

    public function getErrors() {
        $err = $this->errors;
        $this->errors = array();
        return $err;
    }
}