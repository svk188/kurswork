
<?php
    $mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
    $order_id = $_GET['id'];
    $result = $mysqli->query("SELECT * FROM `orders` WHERE `id` = '$order_id'");
    $result = mysqli_fetch_assoc($result);
?>
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
</style>
<body><form action="up.php" method="post">
    <input type="hidden" name="id" value="<?= $result['ID'] ?>"
    <p>Введите ваше имя:
        <input type="text" name="name" value = "<?= $result['name'] ?>">
    </p>
    <p>Введите новую цену:
        <input type="text" name="prize" value = "<?= $result['prize'] ?>">
    </p>
    <p>
        <button type="submit" name="change">Изменить</button>
    </p>
</form>
<?php
//$mysqli = new mysqli("mysql", "root", "qwerty", "DB", 3306);
//$result = $mysqli->query("SELECT * FROM orders");
//foreach ($result as $row){
//    echo "
// 	    <tr>
//                     <td>{$row['ID']}</td>
//                    <td>{$row['name']}</td>
//                     <td>{$row['prize']}</td>
//         </tr>
//         ";
//}?>
</body>