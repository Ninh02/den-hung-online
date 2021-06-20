<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .left {
            position: absolute;
            left: 480px;
            top: 1260px;
        }
    </style>
</head>
<body>
<img src="public/image/den_ha_trong_2.png" alt="..." class="center">
<div id="anh"></div>
<div id="audio"></div>
<a href="index.php?page=den_ha&action=cong_duc"><img src="public/image/hom_cong_duc.png" alt="..." class="left" style="width:100px;height:200px;"></a>
<button type="button" style="position: absolute; left: 480px; top: 1560px" class="btn btn-warning"
        onclick="thapHuong()">Thắp hương
</button>
<button type="button" style="position: absolute; left: 600px; top: 1560px" class="btn btn-warning" onclick="tungKinh()">Tụng kinh
</button>
<a href="index.php?page=ds_cong_duc"><button type="button" style="position: absolute; left: 700px; top: 1560px" class="btn btn-warning">Danh sách người công đức</a>
</button>
<a class="btn btn-danger btn-lg" href="index.php?page=den_trung" role="button"
   style="position: absolute; left: 1270px; top: 1540px">Đi Đền Trung</a>
<script>
    function thapHuong() {
        document.getElementById("anh").innerHTML = '<img src="public/image/LuHuong.gif" alt="..." style="position: absolute; top: 1200px; left: 900px" width="210px" height="210px">';
        document.getElementById("audio").innerHTML = '<audio src="public/audio/NamMoADiDaPhat.mp3" autoplay loop></audio>';
    }

    function tungKinh() {
        document.getElementById("anh").innerHTML = '<img src="public/image/mo.png" alt="..." style="position: absolute; top: 1270px; left: 840px" width="300px" height="300px">';
        document.getElementById("audio").innerHTML = '<audio src="public/audio/tung-kinh.mp3" autoplay loop></audio>';
    }
</script>
</body>
</html>