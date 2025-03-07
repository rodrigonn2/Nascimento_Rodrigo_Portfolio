<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigo Nascimento</title>
<link rel="stylesheet" href="../css/grid.css">
<link rel="stylesheet" href="../css/main.css">

<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js"></script> 
<script type="module" defer src="js/animations.js"></script>
<script src="https://kit.fontawesome.com/983615787b.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />



<script defer src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>


<script type="module" defer src="js/menu.js"></script>
<script type="module" defer src="js/animations.js"></script>
<script type="module" defer src="js/contact.js"></script>
<script type="module" defer src="js/video.js"></script>

</head>
<body>

<div id="sticky-nav-con">
        <header class="grid-con" id="main-header">
            <nav id="main-nav" class="container_menu_mob col-span-full m-col-start-4 m-col-end-12 l-col-start-6 l-col-end-12">
                <h2 class="hidden">MENU</h2>
                <button id="button"></button>
                <div id="burger-con">
                    <ul>
                        <li><a href="logout.php"></a></li>
                    
                        
                    </ul>
                </div>
            </nav>
            <div id="logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4">
                <a href="index.html"><img src="../images/logo_rnascimento.svg" alt="Rodrigo Nascimento"></a>
            </div>
        </header>
    </div>


<section class="full-width-grid container_add_project">
    <h2 class="hidden">PROJECT</h2>
    <div class="box_title_contact col-span-full m-col-start-1 m-col-end-7">
        <p class="p_title_white">RODRIGO NASCIMENTO PORTFOLIO</p>
        <h2 class="h2_contact_vn">ADMIN LOGIN</h2>
        <p class="p_contact">Log in here</p>
    </div>

    <div class="box_add_project_form col-span-full m-col-span-full l-col-start-6 l-col-end-12">
        <h4 class="h4_box_contact">ADD YOUR USER AND PASSWORD</h4>
<form action="login.php" method="post">
<p><label for="username" class="label_contact">Username: </label>
<input type="text" name="username" class="input_contact"  id="username"></p>
<p><label for="password" class="label_contact">Password: </label>
<p><input type="password" name="password" class="input_contact"  id="password"></p>
<input type="submit" value="login" class="send_button"></p>
</form>
</div>
</section>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script src="../js/main.js"></script>-->

</body>
</html>
