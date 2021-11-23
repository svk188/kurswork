<nav class="top-menu">
    <ul class="menu-main">
        <li><a href="onas.html">О нас</a></li>
        <li><a href="index.php" >Заказать ОСАГО для авто</a></li>
        <li><a href="index2.php" class="current">Заказать спортивную страховку</a></li>
        <li><a href="index3.php">Заказать страховку для Путшествий</a></li>
        <li><a href="admin/admin.php">Авторизация</a></li>
    </ul>
</nav>
<style>@import url('https://fonts.googleapis.com/css?family=PT+Sans');
    .top-menu {
    position: relative;
    background: #fff;
    box-shadow: inset 0 0 10px #ccc;
    }
    .top-menu:before,
    .top-menu:after {
    content: "";
    display: block;
    height: 1px;
        border-top: 3px solid #575350;
        border-bottom: 1px solid #575350;
        margin-bottom: 2px;
    }
    .top-menu:after {
    border-bottom: 3px solid #575350;
        border-top: 1px solid #575350;
        box-shadow: 0 2px 7px #ccc;
        margin-top: 2px;
    }
    .menu-main {
    list-style: none;
        padding: 0 30px;
        margin: 0;
        font-size: 18px;
        text-align: center;
        position: relative;
    }
    .menu-main:before,
    .menu-main:after {
    content: "\25C8";
    line-height: 1;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
    }
    .menu-main:before {left: 15px;}
    .menu-main:after {right: 15px;}
    .menu-main li {
    display: inline-block;
    padding: 5px 0;
    }
    .menu-main a {
    text-decoration: none;
        display: inline-block;
        margin: 2px 5px;
        padding: 6px 15px;
        font-family: 'PT Sans', sans-serif;
        font-size: 16px;
        color: #777777;
        border-bottom: 1px solid transparent;
        transition: .3s linear;
    }
    .menu-main .current, .menu-main a:hover {
    border-radius: 3px;
        background: #f3ece1;
        color: #313131;
        text-shadow: 0 1px 0 #fff;
        border-color: #c6c6c6;
    }
    @media (max-width: 500px) {
    .menu-main li {display: block;}
    }
</style>
<style>
    html{
        background-image: url("https://cdnimg.rg.ru/img/content/167/15/95/TASS_17835905_d_850.jpg");
        background-color: #0a0a0a;
        background-size: 100%;
    }
</style>
<form action="" class="air" method="post">
    <div class="form-inner">
        <div class="stripes-block"></div>
        <div class="form-row">
            <p>Введите вид спорта:
                <select name="Sport">
                    <option disabled>Выберите спорт</option>
                    <option value="Мотоспорт">Мотоспорт</option>
                    <option value="Автоспорт">Автоспорт</option>
                </select>
            </p>

            <p>Введите возраст застрахованного:
                <input type="number" name="Vozrast" min="2">
            </p>

            <p>Введите покрытие:
                <input type="number" name="Pok" min="30000" max="3000000">
            </p>

            From:
            <input type="date" name="dateFrom" value="2021-11-21" min="2021-11-21"/>
            <br/>
            To:
            <input type="date" name="dateTo" value="2021-11-22" min="2021-11-22"/>

        </div>
        <center>
            <div class="form-row">
                <button type="submit" name = "submit">Рассчитать</button>
            </div></center></div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<style>* {box-sizing: border-box;}
    .form-row button[type=submit]:hover {
        background: #e0b59c;
    }
    select {
        background: transparent;
        width: 288px;
        padding: 5px;
        font-size: 16px;
        border: 1px solid #ccc;
        height: 37px;
    }
    .form-row button[type="submit"] {
        padding: 10px 20px;
        margin-top: 10px;
        background:  #9c8778;
        border-width: 0;
        cursor: pointer;
        outline: none;
        font-family: 'Playfair Display', serif;
        font-size: 13px;
        letter-spacing: 1px;
        color: #fffdee;
        text-transform: uppercase;
        transition: 1s cubic-bezier(.165, .84, .44, 1);
    }
    .air {
        max-width: 350px;
        margin: 50px auto 0;
        padding: 20px;
        background: #E4E3DF;
        font-family: 'Oswald', sans-serif;
    }
    .form-inner {
        border: 2px solid #909090;
        border-bottom: none;
    }
    .stripes-block {
        position: relative;
        padding: 15px;
        margin-bottom: 20px;
        background: repeating-linear-gradient(-45deg, #E4E3DF, #E4E3DF 5px, #909090 6px, #909090 8px);
        border-bottom: 2px solid #909090;
    }
    .stripes-block:before {
        content: "";
        position: absolute;
        left: 50%;
        top: 8px;
        margin-left: -6px;
        width: 14px;
        height: 14px;
        border-radius: 50%;
        background: #fffffe;
        box-shadow: 0 0 0 1px #090606, 0 0 0 12px #9c8778;
    }
    .form-row {
        position: relative;
        padding: 10px;
        border-bottom: 2px solid #909090;
    }
    .form-row label {
        display: block;
    }
    .form-row input {
        display: block;
        width: 100%;
        padding: 0;
        line-height: 30px;
        border-width: 1px;
        background: #E4E3DF;
    }
    .form-row input:hover{
        border:1px solid #9c8778; /* цвет обводки */
    }
    .form-row textarea {
        width: 100%;
        margin-bottom:40px;
        padding: 0;
        outline: 0;
        line-height: 40px;
        background: transparent url(https://html5book.ru/wp-content/uploads/2016/12/bg-form.png) bottom left repeat-x;
        background-size: 8px 40px;
        letter-spacing: 0.2em;
        background-attachment: local;
        background-repeat: repeat;
        border-width: 0;
        resize: none;
    }
    .form-row-icon {
        position: relative;
        border-bottom: 2px solid #909090;
    }
    .form-row-icon .fa {
        position: absolute;
        left: 0;
        top: 0;
        width: 40px;
        height: 40px;
        line-height: 40px;
        text-align: center;
        background: #909090;
        color: #E4E3DF;
        border-bottom: 2px solid;
    }
    .form-row-icon input {
        display: block;
        width: 100%;
        padding: 0 10px 0 50px;
        line-height: 40px;
        box-sizing: border-box;
        border-width: 0;
        background: #E4E3DF;
    }
    .form-row-icon .fa-paper-plane-o {
        border-bottom-color: #909090;
        cursor: pointer;
    }
    .form-row-icon input[type="submit"] {
        cursor: pointer;
    }</style>
<?php
    function calcul()
    {
        $new_date = new DateTime($_POST['dateFrom']);
        $new_date2 = new DateTime($_POST['dateTo']);
        $new_date3 =  $new_date->format('Y-m-d');
        $new_date4 =  $new_date2->format('Y-m-d');
        $datetime1 = new DateTime($new_date3);
        $datetime2 = new DateTime($new_date4);
        $interval = date_diff($datetime1, $datetime2);
        $interval = $interval->format('%d');
        $interval2 = intval($interval);
        $sport = $_POST['Sport'];
        if ($sport == 'Мотоспорт') {
            $coef_sport = 4;
        } elseif ($sport == 'Автоспорт') {
            $coef_sport = 3.5;
        }
        $vozrast = $_POST['Vozrast'];
        if ($vozrast == 2) {
            $coef_vozrast = 1;
        } elseif ($vozrast > 2 and $vozrast <= 10) {
            $coef_vozrast = 1.5;
        } elseif ($vozrast > 10 and $vozrast <= 16) {
            $coef_vozrast = 2;
        } elseif ($vozrast > 16 and $vozrast <= 18) {
            $coef_vozrast = 2.5;
        } elseif ($vozrast > 18) {
            $coef_vozrast = 3;
        }
        $pok = $_POST['Pok'];
        if ($pok >= 30000 and $pok <= 50000) {
            $coef_pok = 1;
        } elseif ($pok > 50000 and $pok <= 100000) {
            $coef_pok = 1.2;
        } elseif ($pok > 100000 and $pok <= 300000) {
            $coef_pok = 1.4;
        } elseif ($pok > 100000 and $pok <= 300000) {
            $coef_pok = 1.6;
        } elseif ($pok > 300000 and $pok <= 500000) {
            $coef_pok = 1.8;
        } elseif ($pok > 500000 and $pok <= 1000000) {
            $coef_pok = 2;
        } elseif ($pok > 1000000 and $pok <= 1500000) {
            $coef_pok = 2.2;
        } elseif ($pok > 1500000 and $pok <= 2000000) {
            $coef_pok = 2.5;
        } elseif ($pok > 2000000 and $pok <= 2500000) {
            $coef_pok = 2.7;
        } elseif ($pok > 2500000 and $pok <= 3000000) {
            $coef_pok = 3;
        }
        if ($interval2 >= 1 and $interval2 < 7) {
            $coef_interval = 1.2;
        }
        if ($interval2 >= 7 and $interval2 < 14) {
            $coef_interval = 1.4;
        }
        if ($interval2 >= 14 and $interval2 < 29) {
            $coef_interval = 1.6;
        }
        if ($interval2 >= 29 and $interval2 < 31) {
            $coef_interval = 1.7;
        }
        if ($interval2 >= 31 and $interval2 < 63) {
            $coef_interval = 1.8;
        }
        if ($interval2 >= 63 and $interval2 < 186) {
            $coef_interval = 2.0;
        }
        if ($interval2 >= 186 and $interval2 < 366) {
            $coef_interval = 2.2;
        }
        $baz_stavka = 100;
        $result = $baz_stavka * $coef_interval * $coef_pok * $coef_sport * $coef_vozrast;
        return $result;
    }

if (isset($_POST['submit'])) {
    $fucn = "calcul";
    $printResult = $fucn();
    $printResult = round($printResult);

    ?>
    <div class="six">
        <center>
            <h3>Стоимость вашей страховки

                <?= $printResult ?> рублей!</h3>
        </center>
    </div>
    <center>
        <div class="form-row">
            <p>Введите вашe имя и фамилию для оформления:
                <input type="text" name="name">
            </p>
            <p>Введите вашу почту для обратной связи:
                <input type="text" name="mail">
            </p>
        </div>
        <div class="form-row">
            <button type="submit" name="ofrm">Оформить</button>
        </div></center>
    <div><br><br><br><br><br><br><br><br></div>
    <?php
}
if (isset($_POST['ofrm'])) {
    $mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
    $fio = $_POST['name'];
    $prize = 2400;
    $mail1 = $_POST['mail'];
    $type = "Спорт";
    $sql = "INSERT INTO `orders` (`ID`,`name`,`prize`,`type`,`mail`) VALUES (NULL, '$fio','$prize','$type','$mail1')";
    if ($mysqli->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $message = "Line 1\r\nLine 2\r\nLine 3";
    mail('pypkin_1337@mail.ru',
        'Новое письмо',
        $message);
}

?>
</form>
    <style>.six h3 {
        font-weight: normal;
        font-family: 'Merriweather', serif;
        position: relative;
        display: inline-block;
        margin: 0;
        line-height: 1;
        color: #ba570c;
        font-size: 40px;
        padding: .4em 1em .55em;
    }
    .six h3:before,
    .six h3:after {
        content: "";
        position: absolute;
        width: 60%;
        height: .1em;
        background: #294200;
    }
    .six h3:before {
        left: 0;
        top: 0;
    }
    .six h3:after {
        right: 0;
        bottom: 0;
    }
    .six h3 span:before,
    .six h3 span:after {
        content: "";
        position: absolute;
        width: .65em;
        height: .65em;
        border: .1em solid #294200;
        border-radius: 50%;
        box-sizing: border-box;
    }
    .six h3 span:before {
        top: -.55em;
        left: -.325em;
    }
    .six h3 span:after {
        bottom: -.55em;
        right: -.325em;
    }
    @media (max-width: 600px) {
        .six h3 {font-size: 2em;}
    }
    @media (max-width: 450px) {
        .six h3 {font-size: 1.5em;}
    }</style>
<div id="footer">
    <div class="main-content">
        <div class="left box">
            <h2>Социальные сети</h2>
            <div class="content">
                <p>Вы можете найти нас в социальных сетях</p>
                <div class="social">
                    <a href="https://www.facebook.com"><span class="fab fa-facebook-f"></span></a>
                    <a href="https://www.twitter.com/"><span class="fab fa-twitter"></span></a>
                    <a href="https://www.instagram.com/vovan_mx188/"><span class="fab fa-instagram"></span></a>
                    <a href="https://www.youtube.com/"><span class="fab fa-youtube"></span></a>
                </div>
            </div>
        </div>
        <div class="center box">
            <h2>Контакты</h2>
            <div class="content">
                <p>Свяжитесь с нами</p>
                <div class="place">
                    <a href="filials.html#cont"><span class="fas fa-map-marker-alt"></span>
                        <span class="text">Москва</span></a>
                </div>
                <div class="phone">
                    <a href="tel: 89269269417"><span class="fas fa-phone-alt"></span>
                        <span class="text">8-926-926-94-17</span></a>
                </div>
                <div class="email">
                    <a href="mailto: sychev_188@mail.ru"><span class="fas fa-envelope"></span>
                        <span class="text">sychev_188@mail.ru</span></a>
                </div>
            </div>
        </div>

        <div class="right box">
            <h2>Отправь сообщение<h2>
                    <div class="content">
                        <form id="form_input">
                            <label for="name">Имя <span>*</span></label><br>
                            <input type="text" placeholder="Введите имя" name="name" id="name"><br>
                            <label for="email">Ваша почта <span>*</span></label><br>
                            <input type="email" placeholder="Введите email" name="email" id="email"><br>
                            <label for="message">Сообщение <span>*</span></label><br>
                            <textarea placeholder="Введите ваше сообщение" name="message" id="message"></textarea><br>
                            <div id="mess_send" class="btn">Отправить</div>
                        </form>
                    </div>
        </div>
    </div>
</div>

<style>/* footer */
    #footer {
        background-color: #92684f;
        border-top: 2px dashed silver;
        width: 100%;
        float: left;
    }
    .main-content {
        display: flex;
    }
    .main-content .box{
        flex-basis:50%;
        padding: 10px 20px;
    }
    .box h2{
        font-size: 1.125rem;
        font-weight: 600;
        text-transform: uppercase;
    }
    .box .content {
        margin: 20px 0 0 0;
        position: relative;
    }
    .box .content:before{
        position: absolute;
        content: '';
        top:-10px;
        height: 2px;
        width: 100%;
        background: #f12020;;
    }

    .left .content p {
        text-align: justify;
    }
    .left .content .social {
        margin: 20px 0 0 0;
    }
    .left .content .social a {
        padding: 0 2px;
    }
    .left .content .social a span {
        height:40px;
        width: 40px;
        color: black;
        background: #c9a2a2;
        line-height: 40px;
        text-align: center;
        font-size: 18px;
        border-radius: 5px;
        transition: 1s;
    }
    .left .content .social a span:hover{
        background:#c15443;
    }
    .center .content .fas {
        font-size: 1.4375rem;
        background: #c9a2a2;
        color:black;
        height: 45px;
        line-height: 45px;
        width: 45px;
        text-align: center;
        border-radius: 50%;
        transition: 1s;
        cursor: pointer;
    }
    .center .content a {
        color:black;
        text-decoration: none;
    }
    .center .content a:hover {
        color:#c15443;
        transition: 1s;
    }
    .center .content .fas:hover {
        background: #c15443;
    }
    .center .content .text{
        font-size: 1.0625rem;
        font-weight: 500;
        padding-left: 10px;

    }
    .center .content .place{
        margin:10px 0
    }
    .center .content .phone{
        margin:10px 0
    }
    .right .content .form{
        margin: 10px 0 0 0;
    }
    @media (max-width:800px)
    {
        footer {
            position: relative;
            bottom: 0;
        }
        .main-content{
            flex-wrap: wrap;
            flex-direction: column;
        }
        .main-content .box{
            margin:5px 0;
        }
    }
    .btn {
        float:left;
        border-radius: 5px;
        padding: 5px 9px;
        font-size: 1.2em;
        background-color:#c9a2a2;
        text-shadow: #454545 0 0 2px;
        cursor: pointer;
        color: white;
        font-family: "Roboto",serif;
    }
    .btn:hover {
        background-color: #c15443;
    }
    #contacts {
        width: 100%;
    }
    h1,h2,h3,h4,h5 {
        font-family: "Roboto Slab", serif;
        font-weight: lighter;
    }
    #contacts h5 {
        font-size:1rem;
        color: #4f4f4f;
    }
    #form_input{
        font-size:0.7em;
    }

    #form_input label {
        color: #000000;;
        cursor: pointer;
        font-size: 1em;
        font-family: "Roboto Slab", serif;
    }
    #form_input label  > span {
        color: #e87e7e;
    }
    #form_input input, #form_input textarea {
        margin-bottom:10px;
        width: 70%;
        padding:10px 2%;
        border-radius: 7px;
        border: 2px solid silver;
        font-size:0.9em;
        color: #4a4a4a;
    }
    #form_input input:focus, #form_input textarea:focus {
        border-color: #2e3a44;
    }
</style>
