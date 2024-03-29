<!DOCTYPE html>
<html lang="zh-CN">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Curriculum Vitae</title>
        <link rel="stylesheet" href="全局元素\style.css" />
        <style>
            body {
            background-color:#1D1D1D;
            min-height:100vh;
            margin:0;
            font-family: 'Droid Sans', sans-serif;
            &:before {
                content: '';
                position: fixed;
                top:0px;
                left:50%;
                bottom:0px;
                transform:translateX(-50%);
                width:4px;
                background-color:#fff;
            }
            .entries {
                width:calc(100% - 80px);
                max-width:800px;
                margin:auto;
                position: relative;
                left:-5px;
                .entry {
                width:calc(50% - 80px);
                float:left; 
                padding:20px;
                clear:both;
                text-align:right;
                &:not(:first-child) {
                    margin-top:-60px;
                }
                .title {
                    font-size:32px;
                    margin-bottom:12px;
                    position: relative;
                    color:#fff;
                    &:before {
                    content: '';
                    position: absolute;
                    width:8px;
                    height:8px;
                    border:4px solid #ffffff;
                    background-color:#1D1D1D;
                    border-radius:100%;
                    top:50%;
                    transform:translateY(-50%);
                    right:-73px;
                    z-index:1000;
                    }
                    &.big:before {
                    width:24px;
                    height:24px;
                    transform:translate(8px,-50%);
                    }
                }
                .body {
                    color:#aaa;
                    p {
                    line-height:1.4em;
                    }
                }
                &:nth-child(2n) {
                    text-align:left;
                    float:right;
                    .title {
                    &:before {
                        left:-63px;
                    }
                    &.big:before {
                        transform:translate(-8px,-50%);
                    }
                    }
                }
                }
            }
            }
        </style>
    </head>

    <body>
        <!-- 导航栏 -->
        <?php include '全局元素\导航栏.php'; ?>


        






        <div class="entries">
            <div class="entry">
                <div class="title">23 agosto 1948</div>
                <div class="body">
                <p>Nato a Reggio Emilia il 23 agosto 1948.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">1967/68</div>
                <div class="body">
                <p>Iscrittosi alla facoltà di Medicina e Chirurgia dell' Università degli Studi di Parma, nell'anno accademico 1967/68, ha conseguito, presso la stessa Università, la laurea in Medicina e Chirurgia, riportando voti 104/110 il 22/11/73, discutendo la tesi "I coma diabetici iperglicemici". Durante l'ultimo biennio del corso universitario ha frequentato l' Istituto di Patologia Speciale medica, dove ha svolto la ricerca bibliografica per la propria tesi. Ha ottenuto l' abilitazione alla professione presso l' Università di Parma, nel gennaio 1974.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">1 luglio 1974 - 15 giugno 1980</div>
                <div class="body">
                <p>Assistente del Servizio di Cardiologia</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">16 giugno 1980 - 30 novembre 1990</div>
                <div class="body">
                <p>Aiuto Corresponsabile Ospedaliero di Cardiologia</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">1 dicembre 1990 - 5 dicembre 1996</div>
                <div class="body">
                <p>Responsabile del modulo organizzativo di "Emergenza cardiologica"</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">6 dicembre 1996 -</div>
                <div class="body">
                <p>Medico di I° livello dirigenziale Cardiologia</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">1 gennaio 1998 - 30 agosto 2006</div>
                <div class="body">
                <p>Responsabile della "Diagnostica per immagine per pazienti ricoverati nell' ambito del settore ambulatoriale."</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">novembre 1978</div>
                <div class="body">
                <p>Specialità in "Malattie dell'apparato Cardiovascolare"<br>Ha conseguito nel novembre 1978, presso l'Università degli Studi di Siena, la Specialità in "Malattie dell'apparato Cardiovascolare" con voti 70/70, discutendo la tesi sperimentale "L'Ecocardiografia nei portatori di sindrome di W.P.W."</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">ottobre 1984</div>
                <div class="body">
                <p>Specialità in "Medicina dello Sport"<br>Ha conseguito nell' ottobre 1984, presso l'Università degli Studi di Chieti la Specialità in "Medicina dello Sport" con voti 70/70, discutendo la tesi sperimentale "Caratteristiche ecocardiografiche di un gruppo di sollevatori di pesi."</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">sessione 1979</div>
                <div class="body">
                <p>Idoneità ad Aiuto di Cardiologia<br>Ha conseguito nella sessione 1979 l' Idoneità ad Aiuto di Cardiologia, riportando punti 92/100.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">sessione 1983</div>
                <div class="body">
                <p>Idoneità a Primario di Cardiologia<br>Ha conseguito nella sessione 1983 l' Idoneità a Primario di Cardiologia, riportando punti 81/100.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">novembre 1978</div>
                <div class="body">
                <p>Corso di perfezionamento in ecocardiografia<br>Nel 1978 è stato comandato presso la Divisione di Cardiologia dell'Ospedale "Le Molinette" di Torino per un corso di perfezionamento in ecocardiografia.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">novembre-dicembre 1991</div>
                <div class="body">
                <p>Laboratorio di Ecocardiografia della Mayo Clinic di Rochester, Minnesota (USA)<br>Nel novembre-dicembre 1991 è stato comandato presso il Laboratorio di Ecocardiografia della Mayo Clinic di Rochester, Minnesota (USA) per l' apprendimento dell' ecocardiografia transesofagea.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title">novembre-dicembre 1993</div>
                <div class="body">
                <p>Dipartimento di Chirurgia Cardiaca e Vascolare dell' Hopital Broussais di Parigi<br>Nel novembre-dicembre 1993 ha frequentato uno stage di perfezionamento presso il dipartimento di Chirurgia Cardiaca e Vascolare dell' Hopital Broussais di Parigi, finalizzato al monitoraggio ecocardiografico transesofageo intraoperatorio, durante gli interventi di chirurgia ricostruttiva della mitrale.</p>
                </div>
            </div>
            <div class="entry">
                <div class="title"></div>
                <div class="body">
                <p>Interessi e attività<br>Si è sempre interessato di diagnostica cardiologica incruenta, in particolare di ecocardiografia transtoracica e transesofagea, principalmente incentrata sul malato critico in terapia intensiva, con particolare orientamento alla diagnostica precoce delle complicanze meccaniche dell'IMA ed al follow-up del paziente ischemico e valvolare. Ha partecipato a numerosi corsi di aggiornamento cardiologico ed a congressi nazionali ed internazionali in qualità di relatore. È autore di numerose pubblicazioni scientifiche.</p>
                </div>
            </div>
        </div>

        <script>
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









        <!-- 页脚 -->
        <?php include '全局元素\页脚.php'; ?>

    </body>

</html>