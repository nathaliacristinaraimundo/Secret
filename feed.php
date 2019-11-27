<?php  
  $feed=[ 
    [
    "texto"=> "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam architecto facilis quam doloribus adipisci voluptatem perferendis officia ratione dolorem, repudiandae, voluptate eos pariatur cumque, sequi ad provident aspernatur eius! Possimus.",
    
    "likes"=> "3",
    
    "comentario"=> "2"
    ],

    [
     "texto"=> "A lógica do Lorem ninguém entende, portanto: Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet recusandae maiores similique dicta natus libero exercitationem. Aliquam tempora ipsam optio est, reiciendis ratione omnis magni tenetur, facilis mollitia temporibus incidunt.",
   
    "likes"=> "56",
   
    "comentario"=> "22"
    ]

];




?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Feed - Secret</title>
  <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="iconmonstr-iconic-font-1.3.0/css/iconmonstr-iconic-font.min.css">
  <link rel="stylesheet" type="text/css" href="estilo.css">

</head>
<body>
	<header>
    <h1>Secret</h1> 
  </header>
  <main>
    <?php 
    foreach ($feed as $secret):      
    
    ?>
     <div class="secret">
       <div class="texto"> <?= $secret ["texto"] ?>       </div>
        <div class="opcoes">
          <div class="coracao">
            <span> <?= $secret ["likes"] ?> </span>
            <span class="im im-heart"></span>            
          </div>
          <div class="comentario">
            <span> <?= $secret ["comentario"] ?> </span>
            <span class="im im-speech-bubble-comment"></span>            
          </div>          
        </div>
     </div>
     <?php 
     endforeach;
     ?>
  </main>
  <nav>
   <a href="#"><span class="im im-home"></span></a>
   <a href="#"><span class="im im-magnifier"></span></a>
   <a href="#"><span class="im im-plus"></span></a>   
   <a href="#"><span class="im im-user-settings"></span></a>
  </nav>
</body>
</html>