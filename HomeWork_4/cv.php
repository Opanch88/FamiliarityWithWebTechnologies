<?php
$name = 'Александр';
$profession = 'Врач';
$city = 'Москва';
$email = 'user@mail.ru';
$phone = '84991234567';
$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
    [
        'name' => 'Рисование',
        'percent' => 40,
    ],
];

$experience = [
    [
        'name' => 'Developer',
        'dataStart' => 'December 2023',
        'dataEnd'=> 'current time',
        'description'=> 'Embarking on a coding odyssey since December 2023, 
        I traverse the digital realms, sculpting elegant solutions from the 
        raw clay of complex problems. As the sands of time slip through my 
        keystrokes, I find joy in crafting seamless user experiences and 
        architecture robust systems. My journey is a perpetual dance with 
        innovation, where each line of code is a brushstroke, painting the 
        canvas of tomorrows technology landscape. With a passion for 
        turning ideas into executable reality, I am not just a developer; 
        I am a storyteller, weaving tales of functionality and form in the 
        vast code-scape.'
    ],
    [
        'name' => 'Business',
        'dataStart' => 'January 2021',
        'dataEnd'=> 'December 2023',
        'description'=> 'In the realm of business, my journey began in January 2021.
         Armed with ambition and a strategic mindset, I navigated through challenges, 
         seizing opportunities to leave an indelible mark on the corporate landscape. 
         During this chapter, I honed my skills in decision-making, relationship-building, 
         and orchestrating success on the stage of commerce.'
    ],
    [
        'name' => 'Intern',
        'dataStart' => 'July 2020',
        'dataEnd'=> 'January 2021',
        'description'=> 'I embarked on my professional voyage as an intern in 
        July 2020, immersing myself in the dynamic currents of real-world experience. 
        Those months were a crucible of learning, where theory met practice, and each 
        task became a stepping stone toward professional growth. The internship not only
        refined my skills but also fueled my passion for the exciting journey ahead.'
    ]
];

$education = [
        [
        'name' => 'Institute',
        'dataStart' => 'January 2019',
        'dataEnd'=> 'December 2020',
        'description'=> 'Excellent, good, good.Institute'
    ],    [
        'name' => 'College',
        'dataStart' => 'December 2015',
        'dataEnd'=> 'January 2019',
        'description'=> 'Excellent, good, good.College'
    ],    [
        'name' => 'School',
        'dataStart' => 'January 2011',
        'dataEnd'=> 'December 2015',
        'description'=> ' Excellent, good, good.School'
    ],
    ];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?=$name?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$profession?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$city?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$email?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$phone?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            
            <?php for($i = 0; $i < count($skills); $i++): ?>
                <p><?=$skills[$i]['name']?></p>
                <div class="w3-light-grey w3-round-xlarge w3-small">
                  <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?=$skills[$i]['percent']?>%"><?=$skills[$i]['percent']?>%</div>
                </div>
            <?php endfor ?>
           
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
          <?php for($i = 0; $i < count($experience); $i++): ?>
            <div class="w3-container">
              <h5 class="w3-opacity"><b><?=$experience[$i]['name']?> </b></h5>
              <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$experience[$i]['dataStart']?> - <?=$experience[$i]['dataEnd']?></h6>
              <p><?=$experience[$i]['description']?></p>
              <hr>
            </div>
          <?php endfor ?>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
             <?php for ($i = 0; $i < count($education);$i++):?>
                <h5 class="w3-opacity"><b> <?= $education[$i]['name']?> </b></h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right">
                </i><?= $education[$i]['dataStart']?> - <?= $education[$i]['dataEnd']?></h6>
                <p><?= $education[$i]['description']?></p>
            <?php endfor ?>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>
