
<div class="container breadcrumb-wraper">
    <ul class="breadcrumb">
        <?=$breadcrumbs;?>
    </ul>
</div>

<div class="container product-wrapper">
    <div class="product-content">

        <div class="product-content__img">
            <img src="img/products/<?=$product['img'];?>" alt="product_img">
        </div>
        <div class="product-content__description">
            <h1 class="product-content__title">

                <?=$product['title'];?>

            </h1>

            <p class="product-content__text">
                <?=$product['description'];?>
            </p>
            <div class="product-content__stock">
                <img src="img/in_stock.png" alt="">
            </div>
            <div class="block-buy">
                <div class="block-buy_row">
                    <div class="block-buy__info">
                        <div class="block-buy__price">
                            <p class="block-buy__price-text">Цена: </p>
                            <span><?=$product['price'];?> Р</span>
                        </div>
                        <?php if (!is_null($product['special_offer'])): ?>
                        <div class="block-buy__sale">
                            Было $200 Экономия 20%
                        </div>
                        <?php endif;?>
                    </div>
                    <div class="block-buy__cart">
                        <input type="hidden" size="4" name="quantity" min="1" step="1" value="1">
                        <a id="productAdd" data-id="<?=$product['id'];?>" href="cart/add?id=<?=$product['id'];?>" class="add-cart item_add add-to-cart-link">Купить</a>
                    </div>
                </div>
                <div class="block-buy_row">
                    <div class="block-buy__pay-method">
                        <div class="block-buy__pay-method-text">
                            Safe, Secure Shopping
                        </div>
                        <div class="block-buy__pay-method-icons">
                            <img src="img/pay_method/american.png" alt="">
                            <img src="img/pay_method/mastercart.png" alt="">
                            <img src="img/pay_method/visa.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="additional-content">
        <div class="left-column">
            <div class="product-tab">
                <ul>
                    <li><a href="" class="product-tab__link">Описание</a></li>
                    <li><a href="" class="product-tab__link">Особенности</a></li>
                </ul>
                <div class="product-tab__content">
                    <p><?=$product['description'];?></p>
                </div>
            </div>
            <div action="" class="comments">
                <h2 class="comments__title">Отзывы</h2>
                <div class="comments__message">
                    <div class="comments__user-info">
                        <div class="comments__photo">
                            <img src="img/photo.png" alt="">
                        </div>
                        <div class="comments__name">
                            Nama 1
                        </div>
                    </div>
                    <div class="comments__text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially </p>
                    </div>
                </div>
                <div class="comments__message">
                    <div class="comments__user-info">
                        <div class="comments__photo">
                            <img src="img/photo.png" alt="">
                        </div>
                        <div class="comments__name">
                            Nama 2
                        </div>
                    </div>
                    <div class="comments__text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially </p>
                    </div>
                </div>
                <h3 class="comments__write-title">
                    Написать отзыв
                </h3>
                <form action="" class="comments__form">
                    <div class="comments__input">
                        <label for="name">Имя</label>
                        <input type="text" id="name">
                    </div>
                    <div class="comments__input">
                        <label for="mail">Email</label>
                        <input type="text" id="mail">
                    </div>
                    <div class="comments__input">
                        <label for="text_message">Сообщение</label>
                        <input type="textarea" id="text_message">
                    </div>
                    <button class="comments__send" type="submit">Отправить</button>
                </form>
            </div>
        </div>
        <div class="right-column">
            <div class="like-product">
                <h2 class="like-product__title">You may also like</h2>
                <div class="like-product__product">
                    <div class="like-product__img">
                        <img src="img/products/like_product.png" alt="">
                    </div>
                    <div class="like-product__info">
                        <h3 class="like-product__name">The hare with amber</h3>
                        <div class="like-product__price">$50</div>
                        <form action="" class="like-product__read-more">
                            <button type="submit">Read more</button>
                        </form>
                    </div>
                </div>
                <div class="like-product__product">
                    <div class="like-product__img">
                        <img src="img/products/like_product.png" alt="">
                    </div>
                    <div class="like-product__info">
                        <h3 class="like-product__name">The hare with amber</h3>
                        <div class="like-product__price">$50</div>
                        <form action="" class="like-product__read-more">
                            <button type="submit">Read more</button>
                        </form>
                    </div>
                </div>
                <div class="like-product__product">
                    <div class="like-product__img">
                        <img src="img/products/like_product.png" alt="">
                    </div>
                    <div class="like-product__info">
                        <h3 class="like-product__name">The hare with amber</h3>
                        <div class="like-product__price">$50</div>
                        <form action="" class="like-product__read-more">
                            <button type="submit">Read more</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>