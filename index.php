<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style-index.css">
    <link rel="stylesheet" href="style/notifycation.css">
    <title>Airplane</title>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <div class="head">
            <? include('templates/header.php') ?>
        </div>
        <? $password_confirm = $_GET['password'];
           $user_register = $_GET['user'];
        if ($password_confirm == 'non-confirm') {
            ?>
            <div class="alert">
                <span class="closebtn">×</span>
                <strong>Внимание!</strong> Введённые вами пароли не совпадают. Попробуйте ещё раз!
            </div>
            <?
        } else {
            if ($user_register == 'user-register') {
                ?>
                <div class="alert">
                    <span class="closebtn">×</span>
                    <strong>Внимание!</strong> Пользователь с таким электронным адресом уже зарегистрирован на нашем
                    сайте! Введите другой E-mail.
                </div>
                <?
            } else {
                if ($user_register == 'user-register-success') {
                    ?>
                    <div class="alert success">
                        <span class="closebtn">×</span>
                        Ваш аккаунт успешно зарегистрирован в нашей системе! Спасибо, что Вы с нами!
                    </div>
                    <?
                } else {

                }
            }
        }
        $email_confirm = $_GET['email'];
        $user_isset = $_GET['user'];
        $user_auth = $_GET['user'];
          if ($email_confirm == 'non-confirm'){
              ?>
              <div class="alert">
                  <span class="closebtn">×</span>
                  <strong>Внимание!</strong> Введённые вами электронные адреса не совпадают. Попробуйте ещё раз!
              </div>
              <?
          }else{
              if ($user_isset == 'isset'){
                  ?>
                  <div class="alert">
                      <span class="closebtn">×</span>
                      <strong>Внимание!</strong> Такого пользователя не существует либо введённый вами пароль неверен. Попробуйте ещё раз!
                  </div>
                  <?
              }else{
                  if ($user_register == 'user-auth-success') {
                      ?>
                      <div class="alert success">
                          <span class="closebtn">×</span>
                          <div class="alert-blur">Вы успешно вошли в систему! Спасибо, что Вы с нами!</div>
                      </div>
                  <?
              }
          }
          }
        ?>

        <div class="index-content">
            <div class="index-content-left-block">
                <div class="content-left-block-table">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Номер рейса</th>
                            <th scope="col">Откуда</th>
                            <th scope="col">Куда</th>
                            <th scope="col">Дата прибытия</th>
                            <th scope="col">Время прибытия</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>

                        <tr>
                            <th scope="row">1</th>
                            <td>Родаково</td>
                            <td>Ровеньки</td>
                            <td>24.07</td>
                            <td>16:00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="index-content-right-block">
                <div class="block-news">
                    <div class="head-news">
                        Новости нашего аэропорта
                        <div class="line"></div>
                    </div>
                    <div class="body-news"> <!--todo-->
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                        <div class="text-news">
                            <img src="img/live.png"> В нашем аэропорту запустили ТУ-154 по направлениям: Таганрог -
                            Ровеньки, Сумы - Киев
                        </div>
                    </div>

                </div>
            </div>
            <div class="order">
                <? include('templates/modal-auth.php'); ?>
            </div>

        </div>
    </div>
    <div class="index-main-block">
        <div class="index-video-background">
            <video width="100%" height="auto" muted preload="auto" autoplay="autoplay">
                <source src="video\Sunset.mp4" type="video/mp4">
            </video>
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<script src="js/notifycation.js"></script>
<script src="/js/input-controller.js"></script>

</body>
</html>