<?php

namespace app\controllers;

use app\models\Main;
use myframework\base\Controller;
use myframework\Cache;

class MainController extends AppController {
    public function indexAction() {
        $this->setMeta('Главная страница', 'Описание', 'Ключевики');

        $this->specialAction();
    }

    public function specialAction() {
        if (isset($_GET['title']) && !empty($_GET['title'])) {
            $data = Main::getSpecialOffer($_GET['title']);

            $this->loadView('special_product_tab', $data);
        } else {
            $data = Main::getSpecialOffer();
            $products = $data['products'];
            $current_offer = $data['current_offer'];

            $this->set(compact('products',  'current_offer'));
        }
    }
}