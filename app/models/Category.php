<?php


namespace app\models;


use myframework\App;

class Category extends AppModel {
    public function getCategoryByAlias($alias) {
        $category = \R::findOne('category', 'alias =?', [$alias]);

        return $category;
    }

    public function getChildesIds($id) {
        $cats = App::$app->getProperty('cats');
        $ids = null;

        foreach ($cats as $k => $v) {
            if ($v['parent_id'] == $id) {
                $ids .= $k . ',';
                $ids .= $this->getChildesIds($k);
            }
        }
        return $ids;
    }

    public function getProducts($ids, $start, $perpage) {
        $products = \R::find('product', "category_id IN ($ids) LIMIT $start, $perpage");

        return $products;
    }

    public function getProductCount($ids) {
        $total = \R::count('product', "category_id IN ($ids)");

        return $total;
    }
}