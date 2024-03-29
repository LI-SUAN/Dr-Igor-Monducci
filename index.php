<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Dr. Igor Monducci</title>
        <link rel="stylesheet" href="全局元素\style.css" />
        <style>
            /* 设置内容区样式 */
            .content {
                text-align: center; /* 文字居中对齐 */
                padding: 20px; /* 设置内边距 */
                font-family: Arial, sans-serif; /* 使用常见的无衬线字体 */
            }

            /* 设置副标题样式 */
            .subtitle {
                font-style: italic; /* 设置为斜体 */
                color: #555; /* 设置文字颜色 */
            }

            /* 设置位置信息样式 */
            .location {
                margin-top: 10px; /* 设置顶部间距 */
                font-weight: bold; /* 设置文字加粗 */
            }

            /* 设置预约信息样式 */
            .booking {
                margin-top: 20px; /* 设置顶部间距 */
                color: #777; /* 设置文字颜色 */
                line-height: 1.5; /* 设置行高 */
            }

            /* 设置图片容器样式 */
            .image-container {
                margin-top: 40px; /* 设置顶部间距 */
                display: flex; /* 使用 Flexbox 布局 */
                justify-content: center; /* 水平居中排列子元素 */
            }

            /* 设置居中图片样式 */
            .centered-image {
                max-width: calc(66.666% - 40px); /* 设置图片最大宽度为屏幕宽度的 2/3 */
                height: auto; /* 自动调整高度 */
                border-radius: 8px; /* 设置边框圆角 */
                pointer-events: none; /* 禁止点击 */
            }

            /* 设置卡片样式 */
            .card {
                border: 1px solid #ccc; /* 设置边框 */
                border-radius: 8px; /* 设置边框圆角 */
                margin-bottom: 20px; /* 设置底部间距 */
                padding: 20px; /* 设置内边距 */
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* 设置阴影 */
                background-color: #f9f9f9; /* 设置背景色 */
                width: calc(100vw / 1.618); /* 设置宽度为浏览器宽度的黄金比例 */
                margin: 0 auto; /* 居中 */
            }

            /* 设置标题样式 */
            .card h2 {
                margin-top: 0; /* 设置顶部间距 */
                color: #333; /* 设置文字颜色 */
            }

            /* 设置地址信息样式 */
            .address-info {
                color: #666; /* 设置文字颜色 */
            }

            /* 设置链接样式 */
            .map-link {
                color: #4A90E2; /* 设置链接颜色 */
                text-decoration: none; /* 取消下划线 */
                font-weight: bold; /* 设置文字加粗 */
            }

            /* 设置图片样式 */
            .map-image {
                width: 100%; /* 设置图片宽度为父容器宽度 */
                height: auto; /* 自动调整高度 */
                border-radius: 8px; /* 设置边框圆角 */
            }
        </style>
    </head>

    <body>
        <!-- 导航栏 -->
        <?php include '全局元素\导航栏.php'; ?>


















        <!-- 医生简介 -->
        <div>
            <div class="image-container">
                    <img src="附件\Foto del dottore Igor Monducci.jpg" alt="Igor Monducci" class="centered-image" />
            </div>

            <div class="content">
                <h1>Dr. Igor Monducci</h1>
                <p class="subtitle">Specialista in Cardiologia e Medicina dello Sport</p>
                <p class="location">Reggio Emilia - Scandiano</p>
                <p class="booking">
                    Per prenotare visite ed esami telefonare ad una delle strutture sottoindicate, oppure prenotare tramite il loro sito web
                </p>
            </div>
        </div>



















        <!-- 地图 -->
        <div>
            <div class="card">
                <div class="map-info">
                    <h2>Poliambulatorio San Michele, Reggio Emilia</h2>
                    <p class="address-info">Via Monte San Michele 5/d, 42121 Reggio Emilia</p>
                    <p class="address-info">Tel. 0522-455614</p>
                    <p class="address-info">Sito web: <a href="https://www.labsanmichele.it" target="_blank" class="map-link">www.labsanmichele.it</a></p>
                    <p class="address-info">Giorno di visita: MARTEDÌ MATTINA</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=Poliambulatorio+San+Michele,+Reggio+Emilia+Via+Monte+San+Michele+5/d,+42121+Reggio+Emilia" target="_blank" class="map-link">Visualizza su Google Maps</a>
                </div>
                <div class="map-container">
                    <img src="附件\poliambulatorio_san_michele_map.png" alt="Poliambulatorio San Michele Map" class="map-image" />
                </div>
            </div>

            <div class="card">
                <div class="map-info">
                    <h2>Centro Medico Lazzaro Spallanzani, Reggio Emilia</h2>
                    <p class="address-info">Via Fratelli Cervi 75/b, 42124 Reggio Emilia</p>
                    <p class="address-info">Tel. 0522-303840</p>
                    <p class="address-info">Sito web: <a href="https://www.lazzarospallanzani.it" target="_blank" class="map-link">www.lazzarospallanzani.it</a></p>
                    <p class="address-info">Giorno di visita: MARTEDÌ POMERIGGIO</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=Centro+Medico+Lazzaro+Spallanzani,+Reggio+Emilia+Via+Fratelli+Cervi+75/b,+42124+Reggio+Emilia" target="_blank" class="map-link">Visualizza su Google Maps</a>
                </div>
                <div class="map-container">
                    <img src="附件\centro_medico_lazzaro_spallanzani_map.png" alt="Centro Medico Lazzaro Spallanzani Map" class="map-image" />
                </div>
            </div>

            <div class="card">
                <div class="map-info">
                    <h2>Centro Palmer, Reggio Emilia</h2>
                    <p class="address-info">Via Gianbattista Isacchi 8, 42124 Reggio Emilia</p>
                    <p class="address-info">Tel. 0522-792400</p>
                    <p class="address-info">Sito web: <a href="https://www.centropalmer.it" target="_blank" class="map-link">www.centropalmer.it</a></p>
                    <p class="address-info">Giorno di visita: GIOVEDÌ POMERIGGIO</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=Centro+Palmer,+Reggio+Emilia+Via+Gianbattista+Isacchi+8,+42124+Reggio+Emilia" target="_blank" class="map-link">Visualizza su Google Maps</a>
                </div>
                <div class="map-container">
                    <img src="附件\centro_palmer_map.png" alt="Centro Palmer Map" class="map-image" />
                </div>
            </div>

            <div class="card">
                <div class="map-info">
                    <h2>Poliambulatorio Futura, Scandiano</h2>
                    <p class="address-info">Strada Statale 467 n. 26/I, 42019 Scandiano RE</p>
                    <p class="address-info">Tel. 0522-984880</p>
                    <p class="address-info">Sito web: <a href="https://www.poliambulatoriofutura.it" target="_blank" class="map-link">www.poliambulatoriofutura.it</a></p>
                    <p class="address-info">Giorno di visita: MERCOLEDÌ MATTINA</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=Poliambulatorio+Futura,+Scandiano+Strada+Statale+467+n.+26/I,+42019+Scandiano+RE" target="_blank" class="map-link">Visualizza su Google Maps</a>
                </div>
                <div class="map-container">
                    <img src="附件\poliambulatorio_futura_map.png" alt="Poliambulatorio Futura Map" class="map-image" />
                </div>
            </div>

            <div class="card">
                <div class="map-info">
                    <h2>Check-Up Service Srl, Reggio Emilia</h2>
                    <p class="address-info">Via Aristotele 109, 42122 Reggio Emilia</p>
                    <p class="address-info">Tel. 0522-369011</p>
                    <p class="address-info">Sito web: <a href="https://www.checkupservice.it" target="_blank" class="map-link">www.checkupservice.it</a></p>
                    <p class="address-info">Giorno di visita: da definire</p>
                    <a href="https://www.google.com/maps/search/?api=1&query=Check-Up+Service+Srl,+Reggio+Emilia+Via+Aristotele+109,+42122+ Reggio+Emilia" target="_blank" class="map-link">Visualizza su Google Maps</a>
                </div>
                <div class="map-container">
                    <img src="附件\check-up_service_map.png" alt="Check-Up Service Map" class="map-image" />
                </div>
            </div>
        </div>























        <!-- 页脚 -->
        <?php include '全局元素\页脚.php'; ?>
    
    </body>


</html>