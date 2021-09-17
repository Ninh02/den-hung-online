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
            top: 850px;
        }
    </style>
</head>
<body>
<img src="public/image/den_gieng.png" alt="..." class="center">
<div id="anh"></div>
<div id="audio"></div>
<a href="index.php?page=den_gieng&action=cong_duc"><img src="public/image/hom_cong_duc.png" alt="..." class="left" style="width:100px;height:150px;top: 800px"></a>
<button type="button" style="position: absolute; left: 480px; top: 915px" class="btn btn-warning"
        onclick="thapHuong()">Thắp hương
</button>
<button type="button" style="position: absolute; left: 600px; top: 915px" class="btn btn-warning" onclick="tungKinh()">Tụng kinh
</button>
<a href="index.php?page=ds_cong_duc"><button type="button" style="position: absolute; left: 700px; top: 915px" class="btn btn-warning">Danh sách người công đức</a>
</button>
<a class="btn btn-danger btn-lg" href="index.php?page=gioi-thieu" role="button"
   style="position: absolute; left: 1340px; top: 905px">Đi Về</a>
<script>
    function thapHuong() {
        document.getElementById("anh").innerHTML = '<img src="public/image/LuHuong.gif" alt="..." style="position: absolute; top: 640px; left: 760px" width="210px" height="210px">';
        document.getElementById("audio").innerHTML = '<audio src="public/audio/NamMoADiDaPhat.mp3" autoplay loop></audio>';
    }

    function tungKinh() {
        document.getElementById("anh").innerHTML = '<img src="public/image/mo.png" alt="..." style="position: absolute; top: 680px; left: 700px" width="300px" height="300px">';
        document.getElementById("audio").innerHTML = '<audio src="public/audio/tung-kinh.mp3" autoplay loop></audio>';
    }
</script>
</body>
</html>
