<?php


namespace myframework\base;


use myframework\Db;
use Valitron\Validator;

abstract class Model {
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct() {
        Db::instance();
    }

    public function save($table) {
        $tbl = \R::dispense($table);

        foreach ($this->attributes as $name => $value) {
            $tbl->$name = $value;
        }
        return \R::store($tbl);
    }

    public function load($data) {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function validate($data) {
        Validator::lang('ru');
        $validator = new Validator($data);
        $validator->rules($this->rules);
        if ($validator->validate()) {
            return true;
        }
        $this->errors = $validator->errors();
        return false;
    }

    public function getErrors() {
        $errors = '<ul>';
            foreach ($this->errors as $error) {
                foreach ($error as $item) {
                    $errors .= "<li>$item</li>";
                }
            }
        $errors .= '</ul>';

        $_SESSION['error'] = $errors;
    }
}