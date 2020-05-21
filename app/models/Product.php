<?php


namespace app\models;


class Product extends AppModel {
    public function getProduct($product_id) {

    }
    public function getProductInfoByAlias($alias) {
        $sql = 'SELECT * FROM product p
        INNER JOIN product_info pi WHERE p.id = pi.id AND p.alias = ? LIMIT 1 ';
        $product = \R::getRow($sql, [$alias]);

        return $product;
    }

    public function getProductInfoById($id) {
        $sql = 'SELECT * FROM product p
        INNER JOIN product_info pi WHERE p.id = pi.id AND p.id = ? LIMIT 1 ';
        $product = \R::getRow($sql, [$id]);

        return $product;
    }

    public function getBestsellers() {
        $sql = "SELECT * FROM product p
        INNER JOIN product_info pi WHERE p.id = pi.id AND p.hit = '1' ";
        $bestsellers = \R::getAll($sql);

        return $bestsellers;
    }

    public function getUsed() {
        $sql = "SELECT * FROM product p
        INNER JOIN product_info pi WHERE p.id = pi.id AND p.used = '1' ";
        $used = \R::getAll($sql);

        return $used;
    }

    public function getArrival() {
        $sql = "SELECT * FROM product p
        INNER JOIN product_info pi WHERE p.id = pi.id AND pi.year LIKE  '2020-05-%'";
        $arrival = \R::getAll($sql);

        return $arrival;
    }
}