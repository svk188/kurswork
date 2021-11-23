<nav class="top-menu">
    <ul class="menu-main">
        <li><a href="../onas.html">О нас</a></li>
        <li><a href="../index.php" >Заказать ОСАГО для авто</a></li>
        <li><a href="../index2.php">Заказать спортивную страховку</a></li>
        <li><a href="../index3.php">Заказать страховку для Путшествий</a></li>
        <li><a href="admin.php" class="current">Авторизация</a></li>
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
    th,td {
        padding:10px;

    }
    th {
        background: #606060;
    }
    td{
        background: #b5b5b5;
    }
    table {
        font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
        font-size: 14px;
        border-collapse: collapse;
        text-align: center;
    }
    th, td:first-child {
        background: #AFCDE7;
        color: white;
        padding: 10px 20px;
    }
    th, td {
        border-style: solid;
        border-width: 0 1px 1px 0;
        border-color: white;
    }
    td {
        background: #D8E6F3;
    }
    th:first-child, td:first-child {
        text-align: left;
    }
    html{
        background-image: url("https://cdnimg.rg.ru/img/content/167/15/95/TASS_17835905_d_850.jpg");
        background-color: #0a0a0a;
        background-size: 100%;
    }
</style>

<body>

<center>
    <table>
        <tr>
            <td>ID</td>
            <td>FIO</td>
            <td>Price</td>
            <td>Type</td>
            <td>Mail</td>
        </tr>

        <?php

        $mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
        $result = $mysqli->query("SELECT * FROM orders");
        foreach ($result as $row){
            echo "
 	    <tr>
                     <td>{$row['ID']}</td>
                    <td>{$row['name']}</td>
                     <td>{$row['prize']}</td>
                     <td>{$row['type']}</td>
                     <td>{$row['mail']}</td>
                     <td><a href='update.php?id={$row['ID']}'>Update</a></td>
                     <td><a href='delete.php?id={$row['ID']}'>Delete</a></td>
         </tr>
         ";
        }
        ?></table></center>

</body>