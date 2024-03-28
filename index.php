<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dr. Igor Monducci</title>
	<link rel="stylesheet" href="子页面\HomePage\HomePage.css" />
</head>

<body>
    <!-- 导航栏 -->
	<?php include '导航栏\导航栏.php'; ?>

    <!-- 医生图片 -->
    <div class="image-container">
        <img src="Allegato\Foto del dottore Igor Monducci.jpg" alt="Your Image" class="centered-image" />
    </div>

    <div class="content">
        <h1>Dr. Igor Monducci</h1>
        <p class="subtitle">Specialista in Cardiologia e Medicina dello Sport</p>
        <p class="location">Reggio Emilia - Scandiano</p>
        <p class="booking">
            Per prenotare visite ed esami telefonare ad una delle strutture sottoindicate, oppure prenotare tramite il loro sito web
        </p>
    </div>

    <!-- 地图 -->
	<?php include '子页面\index\地图.php'; ?>
 
	</body>
</html>