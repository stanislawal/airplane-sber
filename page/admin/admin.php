<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../../style/admin.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
<?
include('../../script/db.php');
?>
<div class="wrapper">
    <div>
        <div class="header-admin">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="50" height="50"
                 viewBox="0 0 172 172"
                 style=" fill:#000000;">
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                   stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0"
                   font-family="none" font-weight="none" font-size="none" text-anchor="none"
                   style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#ffffff">
                        <path d="M72.24,0c-19.33656,0 -36.92625,3.49375 -49.9875,9.3525c-6.53062,2.92938 -11.98625,6.47688 -15.91,10.6425c-3.73562,3.96406 -6.1275,8.61344 -6.3425,13.6525c-0.01344,0.17469 -0.01344,0.36281 0,0.5375c0,0.06719 0,0.14781 0,0.215v33.755c-0.02687,0.215 -0.02687,0.43 0,0.645v33.755c-0.02687,0.215 -0.02687,0.43 0,0.645v30.96c0,5.33469 2.41875,10.23938 6.3425,14.405c3.92375,4.16563 9.37938,7.71313 15.91,10.6425c13.06125,5.85875 30.65094,9.3525 49.9875,9.3525c7.33688,0 14.39156,-0.3225 21.1775,-1.3975c1.29,-0.09406 2.41875,-0.91375 2.91594,-2.10969c0.49719,-1.19594 0.28219,-2.58 -0.56437,-3.56094c-0.84656,-0.98094 -2.16344,-1.41094 -3.42656,-1.10188c-6.28875,0.99438 -12.99406,1.29 -20.1025,1.29c-18.50344,0 -35.31375,-3.38625 -47.1925,-8.7075c-5.93937,-2.66062 -10.58875,-5.77812 -13.6525,-9.03c-3.06375,-3.25187 -4.515,-6.51719 -4.515,-9.7825v-16.0175c3.88344,3.93719 9.12406,7.29656 15.3725,10.105c13.06125,5.85875 30.65094,9.3525 49.9875,9.3525c3.09063,0 5.99313,0.05375 9.03,-0.3225c1.89469,-0.24187 3.25188,-1.97531 3.01,-3.87c-0.24187,-1.89469 -1.97531,-3.25187 -3.87,-3.01c-2.4725,0.30906 -5.07937,0.3225 -8.17,0.3225c-18.50344,0 -35.31375,-3.38625 -47.1925,-8.7075c-5.93937,-2.66062 -10.58875,-5.77812 -13.6525,-9.03c-3.06375,-3.25187 -4.515,-6.51719 -4.515,-9.7825c0.02688,-0.215 0.02688,-0.43 0,-0.645v-18.8125c3.88344,3.93719 9.12406,7.29656 15.3725,10.105c13.06125,5.85875 30.65094,9.3525 49.9875,9.3525c19.33656,0 36.92625,-3.49375 49.9875,-9.3525c6.24844,-2.80844 11.48906,-6.16781 15.3725,-10.105v2.2575c-0.01344,1.23625 0.63156,2.39188 1.70656,3.02344c1.075,0.61813 2.39187,0.61813 3.46687,0c1.075,-0.63156 1.72,-1.78719 1.70656,-3.02344v-51.6c0,-0.1075 0,-0.215 0,-0.3225c0,-0.1075 0,-0.215 0,-0.3225c0,-0.04031 0,-0.06719 0,-0.1075c-0.02687,-0.06719 -0.06719,-0.14781 -0.1075,-0.215c-0.28219,-4.945 -2.55312,-9.52719 -6.235,-13.4375c-3.92375,-4.16562 -9.37937,-7.71312 -15.91,-10.6425c-13.06125,-5.85875 -30.65094,-9.3525 -49.9875,-9.3525zM72.24,6.88c18.50344,0 35.31375,3.38625 47.1925,8.7075c5.93938,2.66063 10.58875,5.77813 13.6525,9.03c3.06375,3.25188 4.515,6.51719 4.515,9.7825c0,3.26531 -1.45125,6.53063 -4.515,9.7825c-3.06375,3.25188 -7.71312,6.36938 -13.6525,9.03c-11.87875,5.32125 -28.68906,8.7075 -47.1925,8.7075c-18.50344,0 -35.31375,-3.38625 -47.1925,-8.7075c-5.93937,-2.66062 -10.58875,-5.77812 -13.6525,-9.03c-3.06375,-3.25187 -4.515,-6.51719 -4.515,-9.7825c0,-0.1075 0,-0.215 0,-0.3225c0.09406,-3.15781 1.54531,-6.31562 4.515,-9.46c3.06375,-3.25187 7.71313,-6.36937 13.6525,-9.03c11.87875,-5.32125 28.68906,-8.7075 47.1925,-8.7075zM6.88,49.3425c3.88344,3.93719 9.12406,7.29656 15.3725,10.105c13.06125,5.85875 30.65094,9.3525 49.9875,9.3525c19.33656,0 36.92625,-3.49375 49.9875,-9.3525c6.24844,-2.80844 11.48906,-6.16781 15.3725,-10.105v19.4575c0,3.26531 -1.45125,6.53063 -4.515,9.7825c-3.06375,3.25188 -7.71312,6.36938 -13.6525,9.03c-11.87875,5.32125 -28.68906,8.7075 -47.1925,8.7075c-18.50344,0 -35.31375,-3.38625 -47.1925,-8.7075c-5.93937,-2.66062 -10.58875,-5.77812 -13.6525,-9.03c-3.06375,-3.25187 -4.515,-6.51719 -4.515,-9.7825c0.02688,-0.215 0.02688,-0.43 0,-0.645zM127.065,96.32l-0.43,2.9025l-1.3975,8.385c-1.15562,0.41656 -2.27094,0.91375 -3.3325,1.3975l-9.46,-6.88l-10.32,10.32l1.72,2.365l4.8375,6.88c-0.52406,1.03469 -0.94062,2.09625 -1.29,3.225l-8.17,1.3975l-2.9025,0.43v14.405l2.9025,0.5375l8.0625,1.3975c0.41656,1.15563 0.81969,2.28438 1.29,3.3325l-4.73,7.095l-1.6125,2.365l1.935,2.0425l6.235,6.235l2.0425,1.935l9.46,-6.45c1.14219,0.52406 2.23063,1.06156 3.3325,1.3975l1.3975,8.385l0.43,2.9025h14.5125l0.43,-2.9025l1.3975,-8.385c1.19594,-0.43 2.35156,-0.90031 3.44,-1.3975l9.46,6.45l8.17,-8.17l2.0425,-2.15l-1.72,-2.365l-5.16,-6.7725c0.51063,-1.11531 1.075,-2.16344 1.3975,-3.225l8.17,-1.72l2.795,-0.645v-14.2975l-2.9025,-0.43l-8.385,-1.3975c-0.43,-1.19594 -0.90031,-2.35156 -1.3975,-3.44l6.45,-9.46l-2.0425,-1.935l-5.805,-5.9125l-2.15,-2.0425l-2.365,1.72l-6.7725,5.16c-1.11531,-0.51062 -2.16344,-1.075 -3.225,-1.3975l-1.3975,-8.385l-0.43,-2.9025zM132.87,103.2h2.795l1.29,7.4175l0.3225,2.15l2.15,0.645c2.40531,0.68531 4.43438,1.27656 5.9125,2.2575l2.0425,1.3975l1.935,-1.505l5.9125,-4.3l1.6125,1.6125l-4.1925,6.235l-1.1825,1.72l0.9675,1.8275c0.9675,1.92156 1.86781,4.11188 2.4725,6.235l0.645,2.15l2.15,0.3225l7.4175,1.29v2.795l-7.2025,1.505l-2.0425,0.43l-0.645,2.0425c-0.68531,2.40531 -1.27656,4.43438 -2.2575,5.9125l-1.3975,2.0425l1.505,1.935l4.4075,5.9125l-2.0425,2.0425l-6.235,-4.3l-1.72,-1.075l-1.8275,0.86c-1.92156,0.9675 -4.11187,1.86781 -6.235,2.4725l-2.15,0.645l-0.3225,2.15l-1.29,7.4175h-2.795l-1.1825,-7.4175l-0.3225,-2.15l-2.15,-0.645c-2.40531,-0.68531 -4.43437,-1.27656 -5.9125,-2.2575l-1.935,-1.29l-1.8275,1.29l-6.235,4.3l-2.2575,-2.2575l4.3,-6.235l1.075,-1.6125l-0.86,-1.8275c-0.9675,-1.92156 -1.86781,-4.11187 -2.4725,-6.235l-0.645,-2.15l-2.15,-0.3225l-7.095,-1.1825v-2.9025l7.095,-1.1825l2.4725,-0.43l0.3225,-2.4725c0.25531,-1.77375 1.12875,-3.78937 2.2575,-5.4825l1.29,-1.935l-1.29,-1.935l-4.1925,-5.9125l2.0425,-2.0425l6.235,4.515l1.72,1.1825l1.8275,-0.9675c1.92156,-0.9675 4.11188,-1.86781 6.235,-2.4725l2.15,-0.645l0.3225,-2.15zM134.16,120.4c-7.60562,0 -13.76,6.15438 -13.76,13.76c0,7.60563 6.15438,13.76 13.76,13.76c7.60563,0 13.76,-6.15437 13.76,-13.76c0,-7.60562 -6.15437,-13.76 -13.76,-13.76zM134.16,127.28c4.09844,0 6.88,2.78156 6.88,6.88c0,4.09844 -2.78156,6.88 -6.88,6.88c-4.09844,0 -6.88,-2.78156 -6.88,-6.88c0,-4.09844 2.78156,-6.88 6.88,-6.88z"></path>
                    </g>
                </g>
            </svg>
        </div>

        <div class="admin-all-block">
            <div class="left-admin-all-block">
                <div class="admin-manager-block hover">
                    <p class="text-admin-manager-block">Добавить менеджера</p>
                    <form class="add-manager">
                        <input class="add-name form-control-plaintext" placeholder="Имя" type="text"><br>
                        <input class=" add-password form-control-plaintext" placeholder="Пароль" type="text"><br><br>
                        <button class="btn-add-manager btn btn-success">Добавить</button>
                    </form>
                </div>
                <div class="admin-manager-block hover">
                    <p class="text-admin-manager-block">Удалить менеджера</p>
                    <?
                    $query = "SELECT * FROM user WHERE role = 'manager'";
                    $data = mysqli_query($dbc, $query);
                    $array = mysqli_fetch_array($data);
                    ?>
                    <form class="remove-manager" >
                        <select class="name_manager">
                            <option disabled value="">
                                Выберите кого хотите удалить
                            </option>
                            <?
                            do {
                                ?>
                                <option value="<?php echo $array['id']; ?>"><?php echo $array['email']; ?></option>
                                <?php
                            } while ($array = mysqli_fetch_array($data));
                            ?>
                        </select><br><br>
                        <button class="btn btn-danger">Удалить</button>
                    </form>
                </div>
                <div class="edit-manager admin-manager-block hover">
                    <p class="text-admin-manager-block">Редактировать менеджера</p>
                    <form class="edit-manager" action="">
                        <select name="name_manager">
                            <option disabled value="">
                                Выберите кого редактировать
                            </option>
                            <?
                            $query = "SELECT * FROM user WHERE role = 'manager'";
                            $data = mysqli_query($dbc, $query);
                            $array = mysqli_fetch_array($data);
                            ?>
                            <?
                            do {
                                ?>
                                <option value="<?php echo $array['id']; ?>"><?php echo $array['email']; ?></option>
                                <?php
                            } while ($array = mysqli_fetch_array($data));
                            ?>
                        </select><br><br>
                        <input class="form-control-plaintext" type="text" placeholder="Имя">
                        <input class="form-control-plaintext" type="text" placeholder="Пароль"><br>
                        <button class="btn btn-warning">Редактировать</button>
                    </form>
                </div>
            </div>
            <div class="right-admin-all-block">
                <div class="first-right-block hover">
                    <div class="first-right-block-head">
                        <p>Список менеджеров</p>
                        <div class="line"></div>
                    </div>

                    <?
                    $query = "SELECT * FROM user WHERE role = 'manager'";
                    $data = mysqli_query($dbc, $query);
                    $array = mysqli_fetch_array($data);
                    ?>
                    <?
                    do {
                        ?>
                        <div class="first-right-block-body mt-4">
                            <div class="vertical ml-3 mr-3"></div>
                            <div class="add-name-text text-white"><?
                                echo $array['email'];
                                ?></div>
                        </div>
                        <?
                    } while ($array = mysqli_fetch_array($data));
                    ?>


                </div>
                <div class="second-right-block hover">

                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../js/ajax-admin.js">
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../../js/admin-change-background.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>