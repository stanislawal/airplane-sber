<!-- Большое модальное окно -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="auth">
                <div class="text-success" style="text-align: center; font-weight: bold;">Вход</div>
                <form action="../script/auth.php" method="post">
                    <input  id="auth-email" type="text" placeholder="Почта" name="email" class="form-control-plaintext" ><br>
                    <input id="auth-email-confirm" type="email" placeholder="Подтвердите почту" name="confirm-email" class="form-control-plaintext"><br>
                    <input id="auth-password" type="password" placeholder="Пароль" name="password" class="form-control-plaintext"><br>
                    <button disabled data-toggle="tooltip" data-placement="bottom" title="Введите все данные и кнопка будет доступна" id="button-auth" class="btn btn-success">Войти</button>

                </form>
            </div>
            <div class="icon">
                <img style="width: 10em; height: 10em;" src="../img/world.png">
            </div>
            <div class="reg">
                <div class="text-success" style="text-align: center; font-weight: bold;">Регистрация</div>
                <form action="../script/reg.php" method="post">
                    <input id="reg-email" type="email" placeholder="Почта" name="email" class="form-control-plaintext" ><br>
                    <input id="reg-password" type="password" placeholder="Пароль" name="password" class="form-control-plaintext"><br>
                    <input id="reg-password-confirm" type="password" placeholder="Подтвердите пароль" name="confirm-password" class="form-control-plaintext"><br>
                    <button disabled data-toggle="tooltip" data-placement="bottom" title="Введите все данные и кнопка будет доступна" id="button-reg" type="submit" class="btn btn-success">Зарегистрироваться</button>

                </form>
            </div>
        </div>
    </div>
</div>

