<!-- Большое модальное окно -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="auth">
                <div class="text-success" style="text-align: center; font-weight: bold;">Вход</div>
                <form action="../script/auth.php" method="post">
                    <input type="text" placeholder="Почта" name="email" class="form-control-plaintext" ><br>
                    <input type="text" placeholder="Подтвердите почту" name="confirm-email" class="form-control-plaintext"><br>
                    <input type="password" placeholder="Пароль" name="password" class="form-control-plaintext"><br>
                    <button class="btn btn-success">Войти</button>

                </form>
            </div>
            <div class="icon">
                <img style="width: 10em; height: 10em;" src="../img/world.png">
            </div>
            <div class="reg">
                <div class="text-success" style="text-align: center; font-weight: bold;">Регистрация</div>
                <form action="../script/reg.php" method="post">
                    <input type="text" placeholder="Почта" name="email" class="form-control-plaintext" ><br>
                    <input type="password" placeholder="Пароль" name="password" class="form-control-plaintext"><br>
                    <input type="password" placeholder="Подтвердите пароль" name="confirm-password" class="form-control-plaintext"><br>
                    <button class="btn btn-success">Зарегистрироваться</button>

                </form>
            </div>
        </div>
    </div>
</div>
