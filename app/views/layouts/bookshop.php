<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <?=$this->getMeta(); ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width">
    <title>BooksShop</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
</head>
<body>

<div class="wrapper">
    <div class="header">
        <div class="header__row top-menu">
            <div class="container top-menu">
                <ul class="menu">
                    <?php if (isset($_SESSION['user'])): ?>
                        <li class="menu__li"><a href="user/logout">Log out</a></li>
                        <li class="menu__li"><a href="user/account">My Account</a></li>
                        <li class="menu__li"><a href="user/order">Order Status</a></li>
                    <?php else: ?>
                        <li class="menu__li"><a href="user/login">Sign In</a></li>
                        <li class="menu__li"><a href="user/signup">Registration</a></li>
                        <li class="menu__li"><a href="user/order">Order Status</a></li>
                    <?php endif; ?>
                    <li class="menu__li"><a href="article/help">Help</a></li>
                </ul>
            </div>
        </div>
        <div class="header__row header-background">
            <div class="container">
                <div class="logo">
                    <a href="<?=PATH;?>"><img src="img/logo.png" alt="logo"></a>
                </div>
                <form action="" class="search">
                    <input type="text" class="search__input">
                    <button type="submit" class="search__button"><i class="search__icon"></i><p class="search__text">Search</p></button>
                </form>
                <div class="cart">
                    <div class="cart__row">
                        <a href="cart/show" onclick="getCart(); return false;" class="cart__link">
                            <div class="cart__icon">
                                <img src="img/cart.png" alt="cart">
                            </div>
                            <div class="cart__text">Your cart</div>
                            <div class="cart__count-items">
                                <?php if (!empty($_SESSION['cart'])): ?>
                                    (<?=$_SESSION['cart.qty'];?>)
                                <?php else: ?>
                                (0)
                                <? endif; ?>
                            </div>
                        </a>
                    </div>
                    <div class="cart__row">
                        <div class="cart__price">
                            <?php if (!empty($_SESSION['cart'])): ?>
                                <?=$_SESSION['cart.summ'];?> Р
                            <?php else: ?>
                                0 Р
                            <? endif; ?>
                        </div>
                        <form action="" class="cart__checkout">
                            <button type="submit" class="cart__button">Checkout</button>
                        </form>
                    </div>
                </div>
                <div class="vertical"></div>
                <a href="" class="wishlist">
                    <div class="wishlist__row">
                        <div class="wishlist__icon">
                            <img src="img/wish.png" alt="">
                        </div>
                        <div class="wishlist__count-items">
                            20
                        </div>
                    </div>
                    <div class="wishlist__row">
                        <div class="wishlist__text">Whish list</div>
                    </div>
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="horizontal-menu">
        <div class="container">
            <?php new \app\widgets\menu\Menu([
                    'tpl' => WWW . '/menu/horizontal_menu.php',
                    'class' => 'horizontal-menu__ul',
            ]);?>
        </div>
    </div>

    <div class="container-message">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="container-message__error">
                <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                <span class="container-message__close"></span>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['success'])): ?>
            <div class="container-message__success">
                <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                <span class="container-message__close"></span>
            </div>
        <?php endif; ?>
    </div>

    <?=$content;?>

    <div class="footer">
        <div class="footer__category-row one">
            <div class="container">
                <div class="footer__column">
                    <h3 class="footer__title">Earth Sciences</h3>
                    <ul class="footer__categories">
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Earth Sciences</h3>
                    <ul class="footer__categories">
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Earth Sciences</h3>
                    <ul class="footer__categories">
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                    </ul>
                </div>

                <div class="footer__column">
                    <h3 class="footer__title">Earth Sciences</h3>
                    <ul class="footer__categories">
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                        <li class="footer__category"><a href="">General</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer__pay pay">
            <div class="container">
                <h3 class="pay__title">We accept all major</h3>
                <div class="pay_images">
                    <img src="img/pay_method/mastercart.png" alt="mastercart">
                    <img src="img/pay_method/american.png" alt="american">
                    <img src="img/pay_method/visa.png" alt="visa">
                </div>
            </div>
        </div>
        <div class="footer__copy-right copy-right">
            <div class="container">
                <div class="copy-right__text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut, doloremque.
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="cart" style="display: none">
    <div class="modal__popup">
        <div class="modal__content">
            <div class="modal__header">
                <h4 class="modal__title">Корзина</h4>
                <button type="button" class="modal__close"><span></span></button>
            </div>
            <div class="modal__body">

            </div>
            <div class="modal__footer">
                <div class="modal__buttons">
                    <button type="button">Продолжить покупки</button>
                    <a id="modal__checkout" href="cart/view" >Оформить заказ</a>
                    <button id="modal__clear-cart" type="button" onclick="clearCart()">Отчистить корзину</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
<script src="js/slider.js"></script>

<script src="js/check_form.js"></script>
</body>
</html>