<?php if (!empty($_SESSION['cart'])): ?>
    <div class="table-responsive">
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th class="cart-table__remove-td"><span class="cart-table__remove-item"></span></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                    <tr>
                        <td><a href="product/<?=$item['alias'];?>"><img src="img/products/<?=$item['img'];?>" alt=""></a></td>
                        <td><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></td>
                        <td><?=$item['qty'];?></td>
                        <td><?=$item['price'];?></td>
                        <td class="cart-table__remove-td"><span data-id="<?=$id;?>" class="cart-table__remove-item text-danger del-item"></span></td>
                    </tr>
                <?php endforeach; ?>
                <tr class="cart-table__total">
                    <td class="cart-table__total-text">Итого: </td>
                    <td class="cart-table__total-value cart-qty" colspan="4"><?=$_SESSION['cart.qty'];?></td>
                </tr>
                <tr>
                    <td class="cart-table__total-text" >На сумму: </td>
                    <td class="cart-table__total-value cart-summ" colspan="4"><?=$_SESSION['cart.summ'];?></td>
                </tr>
            </tbody>
        </table>
    </div>

<?php else: ?>
    <h3>Корзина пуста</h3>
<?php endif; ?>
