<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Curriculum Vitae</title>
        <link rel="stylesheet" href="全局元素\style.css" />
        <style>
            /* 设置时间线样式 */
            .timeline {
                width: 50%; /* 将时间线宽度设置为屏幕的一半 */
                background: linear-gradient(to right, #4A90E2, #4169E1); /* 使用渐变背景色 */
                position: relative; /* 将时间线相对定位 */
                overflow-y: auto; /* 设置垂直方向上溢出内容的滚动 */
                padding: 20px; /* 设置内边距 */
                box-sizing: border-box; /* 设置盒模型为 border-box */
                color: #fff; /* 设置文字颜色 */
                width: calc(100vw / 1.618); /* 设置宽度为浏览器宽度的黄金比例 */
                margin: 0 auto; /* 居中 */
            }

            /* 设置时间线项目样式 */
            .timeline-item {
                position: relative; /* 设置相对定位 */
                padding-left: 20px; /* 设置左侧内边距 */
                margin-bottom: 20px; /* 设置下方间距 */
            }

            /* 设置时间线项目的伪元素样式 */
            .timeline-item::before {
                content: ''; /* 设置伪元素的内容为空 */
                position: absolute; /* 设置绝对定位 */
                top: 0; /* 距离顶部距离 */
                left: 0; /* 距离左侧距离 */
                width: 10px; /* 设置宽度 */
                height: 10px; /* 设置高度 */
                background-color: #fff; /* 设置背景颜色 */
                border-radius: 50%; /* 设置圆角 */
            }

            /* 设置时间线项目内容样式 */
            .timeline-item-content {
                margin-left: 10px; /* 设置左侧外边距 */
            }

            /* 设置时间线项目标题样式 */
            .timeline-item-title {
                margin-top: 0; /* 设置顶部外边距 */
            }

            /* 设置时间线项目日期样式 */
            .timeline-item-date {
                color: rgba(255, 255, 255, 0.7); /* 设置日期文字颜色 */
                font-size: 0.9em; /* 设置日期文字大小 */
                margin-bottom: 5px; /* 设置下方外边距 */
            }
        </style>
    </head>

    <body>
        <!-- 导航栏 -->
        <?php include '全局元素\导航栏.php'; ?>


        



















        <div class="timeline" id="timeline">
            <script class="timeline" id="timeline">
                const timeline = document.getElementById('timeline');

                // 时间线数据
                const timelineData = [
                    { date: '23 agosto 1948', title: 'Nato a Reggio Emilia', description: 'Nato a Reggio Emilia il 23 agosto 1948.' },
                    { date: '1967/68', title: 'Laurea in Medicina e Chirurgia', description: 'Iscrittosi alla facoltà di Medicina e Chirurgia dell\' Università degli Studi di Parma, nell\'anno accademico 1967/68, ha conseguito, presso la stessa Università, la laurea in Medicina e Chirurgia, riportando voti 104/110 il 22/11/73, discutendo la tesi "I coma diabetici iperglicemici". Durante l\'ultimo biennio del corso universitario ha frequentato l\' Istituto di Patologia Speciale medica, dove ha svolto la ricerca bibliografica per la propria tesi. Ha ottenuto l\' abilitazione alla professione presso l\' Università di Parma, nel gennaio 1974.' },
                    { date: '1 luglio 1974 - 15 giugno 1980', title: 'Assistente del Servizio di Cardiologia' },
                    { date: '16 giugno 1980 - 30 novembre 1990', title: 'Aiuto Corresponsabile Ospedaliero di Cardiologia' },
                    { date: '1 dicembre 1990 - 5 dicembre 1996', title: 'Responsabile del modulo organizzativo di "Emergenza cardiologica"' },
                    { date: '6 dicembre 1996 -', title: 'Medico di I° livello dirigenziale Cardiologia' },
                    { date: '1 gennaio 1998 - 30 agosto 2006', title: 'Responsabile della "Diagnostica per immagine per pazienti ricoverati nell\' ambito del settore ambulatoriale."' },
                    { date: 'novembre 1978', title: 'Specialità in "Malattie dell\'apparato Cardiovascolare"', description: 'Ha conseguito nel novembre 1978, presso l\'Università degli Studi di Siena, la Specialità in "Malattie dell\'apparato Cardiovascolare" con voti 70/70, discutendo la tesi sperimentale "L\'Ecocardiografia nei portatori di sindrome di W.P.W.".' },
                    { date: 'ottobre 1984', title: 'Specialità in "Medicina dello Sport"', description: 'Ha conseguito nell\' ottobre 1984, presso l\'Università degli Studi di Chieti la Specialità in "Medicina dello Sport" con voti 70/70, discutendo la tesi sperimentale "Caratteristiche ecocardiografiche di un gruppo di sollevatori di pesi".' },
                    { date: 'sessione 1979', title: 'Idoneità ad Aiuto di Cardiologia', description: 'Ha conseguito nella sessione 1979 l\' Idoneità ad Aiuto di Cardiologia, riportando punti 92/100.' },
                    { date: 'sessione 1983', title: 'Idoneità a Primario di Cardiologia', description: 'Ha conseguito nella sessione 1983 l\' Idoneità a Primario di Cardiologia, riportando punti 81/100.' },
                    { date: 'novembre 1978', title: 'Corso di perfezionamento in ecocardiografia', description: 'Nel 1978 è stato comandato presso la Divisione di Cardiologia dell\'Ospedale "Le Molinette" di Torino per un corso di perfezionamento in ecocardiografia.' },
                    { date: 'novembre-dicembre 1991', title: 'Laboratorio di Ecocardiografia della Mayo Clinic di Rochester, Minnesota (USA)', description: 'Nel novembre-dicembre 1991 è stato comandato presso il Laboratorio di Ecocardiografia della Mayo Clinic di Rochester, Minnesota (USA) per l\' apprendimento dell\' ecocardiografia transesofagea.' },
                    { date: 'novembre-dicembre 1993', title: 'Dipartimento di Chirurgia Cardiaca e Vascolare dell\' Hopital Broussais di Parigi', description: 'Nel novembre-dicembre 1993 ha frequentato uno stage di perfezionamento presso il dipartimento di Chirurgia Cardiaca e Vascolare dell\' Hopital Broussais di Parigi, finalizzato al monitoraggio ecocardiografico transesofageo intraoperatorio, durante gli interventi di chirurgia ricostruttiva della mitrale.' },
                    { date: '', title: 'Interessi e attività', description: 'Si è sempre interessato di diagnostica cardiologica incruenta, in particolare di ecocardiografia transtoracica e transesofagea, principalmente incentrata sul malato critico in terapia intensiva, con particolare orientamento alla diagnostica precoce delle complicanze meccaniche dell\'IMA ed al follow-up del paziente ischemico e valvolare. Ha partecipato a numerosi corsi di aggiornamento cardiologico ed a congressi nazionali ed internazionali in qualità di relatore. È autore di numerose pubblicazioni scientifiche.' }
                ];

                // 在时间线中添加项目
                timelineData.forEach(item => {
                    const timelineItem = document.createElement('div');
                    timelineItem.classList.add('timeline-item');

                    const date = document.createElement('div');
                    date.classList.add('timeline-item-date');
                    date.textContent = item.date;
                    timelineItem.appendChild(date);

                    const title = document.createElement('h3');
                    title.classList.add('timeline-item-title');
                    title.textContent = item.title;
                    timelineItem.appendChild(title);

                    if (item.description) {
                        const description = document.createElement('p');
                        description.textContent = item.description;
                        timelineItem.appendChild(description);
                    }

                    timeline.appendChild(timelineItem);
                });
            </script>
        </div>
































































        <!-- 页脚 -->
        <?php include '全局元素\页脚.php'; ?>

    </body>

</html>