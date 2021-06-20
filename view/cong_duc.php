<?php

use Src\Controller\MoneyController;

$moneyController = new MoneyController();
$moneys = $moneyController->getAllMoney();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="index.php?page=cong_duc" method="post">
    Ông bà
    <input type="text" class="form-control" id="exampleInputEmail1" name="userName">
    <br>
    Địa chỉ
    <input type="text" class="form-control" id="exampleInputPassword1" name="address">
    <br>
    Số tiền
    <select name="money">
        <?php foreach ($moneys as $money): ?>
            <option value="<?php echo $money['id'] ?>"><?php echo $money['denominations'] ?></option>
        <?php endforeach; ?>
    </select>
    <br>
    <button type="submit" class="btn btn-primary">Bỏ vào hòm công đức</button>
</form>
</body>
</html>
