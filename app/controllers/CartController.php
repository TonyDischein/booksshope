<?php


namespace app\controllers;


use app\models\Cart;
use app\models\Order;
use app\models\Product;
use app\models\User;

class CartController extends AppController {
    public function viewAction() {
        $this->setMeta('Корзина');
    }

    public function addAction() {
       $id = !empty($_GET['id']) ? (int)$_GET['id'] : null;
       $quentity = !empty($_GET['quentity']) ? (int)$_GET['quentity'] : null;
       $mod_id = !empty($_GET['mod']) ? (int)$_GET['mod'] : null;

       $mod = null;

       if ($id) {
           $p_model = new Product();
           $product = $p_model->getProductInfoById($id);
       }

       $cart = new Cart();
       $cart->addToCart($product, $quentity, $mod);

       if ($this->isAjax()) {
           $this->loadView('cart_modal');
       }
       redirect();
    }

    public function showAction() {
        $this->loadView('cart_modal');
    }

    public function deleteAction() {
        $id = !empty($_GET['id']) ? $_GET['id'] : null;

        if (isset($_SESSION['cart'][$id])) {
            $cart = new Cart();
            $cart->deleteItem($id);
        }

        if ($this->isAjax()) {
            $this->loadView('cart_modal');
        }
        redirect();
    }

    public function clearAction() {
        unset($_SESSION['cart']);
        unset($_SESSION['cart.qty']);
        unset($_SESSION['cart.summ']);

        $this->loadView('cart_modal');
    }

    public function checkoutAction() {
        if (!empty($_POST)) {
            if (!User::checkAuth()) {
                $user = new User();
                $data = $_POST;
                $user->load($data);

                if (!$user->validate($data) || !$user->checkUnique()) {
                    $user->getErrors();
                    $_SESSION['form_data'] = $data;
                    redirect();
                } else {
                    $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                    if (!$user_id = $user->save('users')) {
                        $_SESSION['error'] = 'Ошибка!';
                        redirect();
                    }
                }
            }
            //сохранение заказа
            $data['user_id'] = isset($user_id) ? $user_id : $_SESSION['user']['id'];
            $data['note'] = !empty($_POST['note']) ? $_POST['note'] : '';
            $user_email = isset($_SESSION['user']['email']) ? $_SESSION['user']['email'] : $_POST['email'];

            $order_id = Order::saveOrder($data);
            Order::mailOrder($order_id, $user_email);
        }
        redirect();
    }
}