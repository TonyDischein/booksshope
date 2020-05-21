<div class="slider-block">
    <div class="container">
        <div class="slider">
            <div class="slider__wrapper">
                <div class="slider__items">
                    <div class="slider__item">
                        <img class="slider__background" src="img/slider/background_slider.png" alt="">
                        <div class="slider__content">
                            <div class="slider__img">
                                <img src="img/slider/product_1.png" alt="123">
                            </div>
                            <div class="slider__text">
                                <h2 class="slider__title">A Wanted Man</h2>
                                <h3 class="slider__author">Jack Reacher</h3>
                            </div>
                        </div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 300px; background: green;"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 300px; background: violet;"></div>
                    </div>
                    <div class="slider__item">
                        <div style="height: 300px; background: coral;"></div>
                    </div>
                </div>
            </div>
            <a class="slider__control slider__control_prev" href="#" role="button"></a>
            <a class="slider__control slider__control_next" href="#" role="button"></a>
        </div>

        <div class="slider-sale">
            <div class="slider-sale__title">
                <h2>Deal of the Mouth</h2>
                <h3>The Human Face of Big Data</h3>
            </div>
            <div class="slider-sale__img">
                <img src="img/slider/product_for_slider_sale.png" alt="">
            </div>
            <div class="slider-sale__price">
                <p class="slider-sale__sale"> Save <span>45&</span> Today</p>
                <p class="slider-sale__new-price">$27.50</p>
            </div>
            <form class="slider-sale__buy" action="">
                <button type="submit">Buy now</button>
            </form>
        </div>
    </div>
</div>

<div class="container main__container">

    <nav class="vertical-menu">
        <div class="vertical-menu__title">Категории</div>
        <a href="category/all" class="vertical-menu__all-category">Все</a>
        <?php new \app\widgets\menu\Menu([
            'tpl' => WWW . '/menu/vertical_menu.php',
            'cacheKey' => 'vertical_menu',
        ]);?>
    </nav>
    <div class="main-content-wrapper">
        <div class="special-tab">
            <ul>
                <li><a href="" data-title="bestsellers"  class="special-tab__link <?php if ($current_offer == 'bestsellers'):?> active<? endif; ?>">Best sellers</a></li>
                <li><a href="" data-title="arrival" class="special-tab__link <?php if ($current_offer == 'arrival'):?> active<? endif; ?>">New Arrival</a></li>
                <li><a href="" data-title="used" class="special-tab__link <?php if ($current_offer == 'used'):?> active<? endif; ?>">Used books</a></li>
            </ul>
        </div>
        <div class="category">
            <div class="category__title">Science Fiction</div>
            <div class="category__row">
                <?php if (isset($products)): ?>
                    <?php foreach ($products as $product): ?>
                        <div class="category__item product">
                            <a href="product/<?=$product['alias'];?>" class="product__link">
                                <div class="product__sale"></div>
                                <div class="product__image">
                                    <img src="img/products/<?=$product['img'];?>" alt="product image">
                                </div>
                                <div class="product__title"><?=$product['title'];?></div>
                                <div class="product__price"><?=$product['price'];?> Р</div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <h3>В этой категории товаров нет..</h3>
                <?php endif;?>
                <div class="category__item product">
                    <div class="product__sale"></div>
                    <div class="product__image">
                        <img src="img/products/product_1.png" alt="product image">
                    </div>
                    <div class="product__title">The Hare With Amber Eyes</div>
                    <div class="product__price">$50</div>
                </div>
                <div class="category__item product">
                    <div class="product__sale"></div>
                    <div class="product__image">
                        <img src="img/products/product_1.png" alt="product image">
                    </div>
                    <div class="product__title">The Hare With Amber Eyes</div>
                    <div class="product__price">$50</div>
                </div>
                <div class="category__item product">
                    <div class="product__sale"></div>
                    <div class="product__image">
                        <img src="img/products/product_1.png" alt="product image">
                    </div>
                    <div class="product__title">The Hare With Amber Eyes</div>
                    <div class="product__price">$50</div>
                </div>
            </div>

        </div>
    </div>
</div>