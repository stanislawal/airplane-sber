<div class="index-header">
    <div class="header-left-menu">
        <a href="../index.php"><img src="../img/logo.png"></a>
    </div>
    <div class="header-middle">
        <? include('date.php'); ?>
    </div>

    <div class="header-right">
        <?
        if(isset($_COOKIE['auth_user'])){
            ?><p class="header-text"><a href="../script/exit.php" class="btn"">Выйти</a></p><?
        }else{
            if (isset($_COOKIE['auth_admin'])){
                ?><p class="header-text"><a href="../script/exit.php" class="btn"">Выйти</a></p><?
            }else{
                if (isset($_COOKIE['auth_manager'])){
                    ?><p class="header-text"><a href="../script/exit.php" class="btn"">Выйти</a></p><?
                }else{
                    ?><p class="header-text"><button type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg">Войти</button></p><?
                }
            }
        }
        ?>

    </div>
</div>

<!--<script src="../js/date.js">-->
</script>

