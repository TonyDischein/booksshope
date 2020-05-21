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
            <? endforeach;?>
        <? endif;?>
</div>