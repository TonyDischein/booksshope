<?php


namespace app\models;


class Cart extends AppModel {
    public function addToCart($product, $quantity = 1, $mod = null) {
        if ($mod) {
            $ID = "{$product->id}-{$mod->id}";
            $title = "{$product->title} ({$mod->title})";
            $price = $mod->price;
        } else {
            $ID = $product['id'];
            $title = $product['title'];
            $price = $product['price'];
        }

        if (isset($_SESSION['cart'][$ID])) {
            $_SESSION['cart'][$ID]['qty'] += $quantity;
        } else {
            $_SESSION['cart'][$ID] = [
              'qty' => $quantity,
              'title' => $title,
              'alias' => $product['alias'],
              'price' => $price,
              'img' => $product['img'],
            ];
        }
        $_SESSION['cart.qty'] = isset($_SESSION['cart.qty']) ? $_SESSION['cart.qty'] + $quantity : $quantity;
        $_SESSION['cart.summ'] = isset($_SESSION['cart.summ']) ? $_SESSION['cart.summ'] + $price : $price;
    }

    public function deleteItem($id) {
        $qtyMinus = $_SESSION['cart'][$id]['qty'];
        $summMinus = $_SESSION['cart'][$id]['price'];
        $_SESSION['cart.qty'] -= $qtyMinus;
        $_SESSION['cart.summ'] -= $summMinus * $qtyMinus;
        unset($_SESSION['cart'][$id]);
    }
}