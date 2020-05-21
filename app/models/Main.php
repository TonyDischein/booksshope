<?php


namespace app\models;


class Main extends AppModel {
    public static function getSpecialOffer($titleOffer = '') {
        $product_model = new Product();

        if (!empty($titleOffer)) {
            $special_title = $titleOffer;

            if ($special_title == 'bestsellers') {
                $data['products'] = $product_model->getBestsellers();
                $data['current_offer'] =  $special_title;
            }
            if ($special_title == 'used') {
                $data['products'] = $product_model->getUsed();
                $data['current_offer'] =  $special_title;
            }
            if ($special_title == 'arrival') {
                $data['products'] = $product_model->getArrival();
                $data['current_offer'] =  $special_title;
            }
        } else {
            $data['products'] = $product_model->getBestsellers();
            $data['current_offer'] = 'bestsellers';
        }
        return $data;
    }
}