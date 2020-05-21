<div class="container breadcrumb-wraper">
    <ul class="breadcrumb">
        <li><a href="<?=PATH;?>" class='breadcrumb__link'>Гавная</a></li>
        <li>Оформление заказа</li>
    </ul>
</div>
<div class="container checkout-wrapper">
    <div class="checkout-block">
        <h3 class="checkout-block__title">Оформлене заказа</h3>
        <?php if (!empty($_SESSION['cart'])): ?>
            <div class="table-responsive">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Фото</th>
                            <th>Наименование</th>
                            <th>Количество</th>
                            <th>Цена</th>
                            <th class="cart-table__remove-td"><span class="cart-table__remove-item"></span></th
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $id => $item): ?>
                            <tr>
                                <td><a href="product/<?=$item['alias'];?>"><img src="img/products/<?=$item['img'];?>" alt=""></a></td>
                                <td><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></a></td>
                                <td><?=$item['qty'];?></td>
                                <td><?=$item['price'];?></td>
                                <td><span data-id="<?=$id;?>" class="cart-table__remove-item text-danger del-item"></span></td>
                            </tr>
                        <? endforeach; ?>
                        <tr class="cart-table__total">
                            <td class="cart-table__total-text">Итого: </td>
                            <td class="cart-table__total-value" colspan="4" class="cart-qty"><?=$_SESSION['cart.qty'];?></td>
                        </tr>
                        <tr>
                            <td class="cart-table__total-text" >На сумму: </td>
                            <td class="cart-table__total-value" colspan="4" class="cart-summ"><?=$_SESSION['cart.summ'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form action="cart/checkout" method="post" class="checkout-block__form">
                <?php if (!isset($_SESSION['user'])): ?>
                    <div class="registration__input">
                        <label for="login">Login</label>
                        <input id="login" name="login" type="text" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>">
                    </div>
                    <div class="registration__input">
                        <label for="login">Password</label>
                        <input id="password" name="password" type="password">
                    </div>
                    <div class="registration__input">
                        <label for="login">Name</label>
                        <input id="name" name="name" type="text" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>">
                    </div>
                    <div class="registration__input">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="text" value="<?=isset($_SESSION['form_data']['email'])? h($_SESSION['form_data']['email']) : '';?>">
                    </div>
                    <div class="registration__input">
                        <label for="address">Address</label>
                        <input id="address" name="address" type="text" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>">
                    </div>
                <?php endif; ?>
                <div class="checkout-block__input">
                    <label for="note">Note</label>
                    <textarea id="note" name="note"><?=isset($_SESSION['form_data']['note'])? h($_SESSION['form_data']['note']) : '';?></textarea>
                </div>
                <button type="submit">Оформить заказ</button>
            </form>
            <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
        <?php else: ?>
            <h3>Корзина пуста</h3>
        <?php endif; ?>
    </div>
</div>