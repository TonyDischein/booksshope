<div class="container-content-page">
    <div class="registration">
        <h3 class="registration__title">Ренистрация</h3>
        <form action="user/signup" method="post" id="form" class="registration__form">
            <div class="registration__input">
                <label for="login">Login</label>
                <input id="login" name="login" class="rfield" type="text" value="<?=isset($_SESSION['form_data']['login']) ? h($_SESSION['form_data']['login']) : '';?>">
            </div>
            <div class="registration__input">
                <label for="login">Password</label>
                <input id="password" name="password" class="rfield" type="password">
            </div>
            <div class="registration__input">
                <label for="login">Name</label>
                <input id="name" name="name" class="rfield" type="text" value="<?=isset($_SESSION['form_data']['name']) ? h($_SESSION['form_data']['name']) : '';?>">
            </div>
            <div class="registration__input">
                <label for="email">Email</label>
                <input id="email" name="email" class="rfield" type="text" value="<?=isset($_SESSION['form_data']['email'])? h($_SESSION['form_data']['email']) : '';?>">
            </div>
            <div class="registration__input">
                <label for="address">Address</label>
                <input id="address" name="address" class="rfield" type="text" value="<?=isset($_SESSION['form_data']['address']) ? h($_SESSION['form_data']['address']) : '';?>">
            </div>
            <button class="btn_submit" type="submit">Зарегистрировть</button>
        </form>
        <?php if (isset($_SESSION['form_data'])) unset($_SESSION['form_data']); ?>
    </div>
</div>