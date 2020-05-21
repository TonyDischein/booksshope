<?php

namespace app\controllers;

use app\models\Breadcrumbs;
use app\models\Product;

class ProductController extends AppController {
    public function viewAction() {
        $alias = $this->route['alias'];

        $p_model = new Product();
        $product = $p_model->getProductInfoByAlias($alias);

        if (!$product) {
            throw new \Exception('Страница не найдена', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($product['category_id'], $product['title']);

        $this->setMeta($product['title'], $product['description'], $product['keywords']);
        $this->set(compact('product', 'breadcrumbs'));
    }
}