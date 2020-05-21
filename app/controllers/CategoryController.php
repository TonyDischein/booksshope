<?php


namespace app\controllers;


use app\models\Breadcrumbs;
use app\models\Category;
use myframework\libs\Pagination;
use myframework\App;

class CategoryController extends AppController {
    public function viewAction() {
        $alias = $this->route['alias'];

        $cat_model = new Category();

        $category = $cat_model->getCategoryByAlias($alias);
        if (!$category) {
            throw new \Exception('Страница не найдена!', 404);
        }

        $breadcrumbs = Breadcrumbs::getBreadcrumbs($category->id);

        $childes_id = $cat_model->getChildesIds($category->id);
        $ids = !$childes_id ? $category->id : $childes_id . $category->id;

        //Pagination block
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $perpage = App::$app->getProperty('pagination');
        $total = $cat_model->getProductCount($ids);
        $pagination = new Pagination($page, $perpage, $total);

        $start = $pagination->getStart();
        //End pagination block
        $products = $cat_model->getProducts($ids, $start, $perpage);

        $this->setMeta($category->title, $category->description, $category->keywords);
        $this->set(compact('products', 'breadcrumbs', 'category', 'pagination', 'total'));
    }
}