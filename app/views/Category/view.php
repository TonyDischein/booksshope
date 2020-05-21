<div class="container breadcrumb-wraper">
    <ul class="breadcrumb">
        <?=$breadcrumbs;?>
    </ul>
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

    <div class="category">
        <div class="category__title"><?=$category->title;?></div>
        <div class="category__row">
            <?php if (isset($products)): ?>
                <?php foreach ($products as $product): ?>
                    <div class="category__item product">
                        <a href="product/<?=$product->alias;?>" class="product__link">
                            <div class="product__sale"></div>
                            <div class="product__image">
                                <img src="img/products/<?=$product->img;?>" alt="product image">
                            </div>
                            <div class="product__title"><?=$product->title;?></div>
                            <div class="product__price"><?=$product->price;?> Р</div>
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

        <?php if ($pagination->countPages > 1): ?>
        <div class="pagination-wrapper">
            <p class="pagination__total-page">(<?=count($products)?> товара(ов) из <?=$total?>)</p>
            <?php echo $pagination->getHtml();?>
        </div>
        <?php endif; ?>
    </div>
</div>

