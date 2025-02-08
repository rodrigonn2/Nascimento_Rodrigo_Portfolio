<!DOCTYPE html>
<html lang="en">
<?php

require_once('includes/connect.php');
$query ="SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, p.TITLE, p.ROLES from PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND pi.IMG_CATEGORY = 'overview'";
$stmt = $connection->prepare($query);
$stmt->execute();


//require_once('includes/connect.php');
//$stmt = $connection->prepare("SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, p.TITLE, p.ROLES from PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND pi.IMG_CATEGORY = 'overview'";
//$results = mysqli_query($connect, $query);

    ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rodrigo Nascimento</title>
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://kit.fontawesome.com/983615787b.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    <h1 class="hidden">Rodrigo Nascimento Portfolio</h1>
    <div id="sticky-nav-con">
        <header class="grid-con" id="main-header">
            <nav id="main-nav" class="container_menu_mob col-span-full m-col-start-4 m-col-end-12 l-col-start-6 l-col-end-12">
                <h2 class="hidden">MENU</h2>
                <button id="button"></button>
                <div id="burger-con">
                    <ul>
                        <li><a href="#about-me">ABOUT ME</a></li>
                        <li><a href="#work">WORK</a></li>
                        <li><a href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
            <div id="logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4">
                <a href="index.html"><img src="images/logo_rnascimento.svg" alt="Rodrigo Nascimento"></a>
            </div>
        </header>
    </div>
    <section class="full-width-grid-con container_hero" id="hero">
        <h2 class="hidden">Hero Image</h2>


<!--img mobile-->
<div class="box_img_hero_mobile col-span-full m-col-start-6 m-col-end-12">
            <img src="images/RODRI_ILUSTRATION.png" class="img_hero" alt="my illustration">
        </div>
        <!--end-->

        <div class="box_text_hero col-span-full m-col-start-1 m-col-end-6">
            <h4 class="h4_box_hero">HELLO! I'M</h4>
            <h3 class="h3_box_hero">RODRIGO</h3>
            <p class="p_hero">Brazilian designer based in London, ON, specializing in <span class="span_hero">strategic product design</span> My focus is on creating <span class="span_hero">innovative solutions that drive results and enhance user experiences.</span></p>
           <a href="#contact" class="banner_button">CONTACT ME</a>
        </div>
        <div class="box_img_hero col-span-full m-col-start-6 m-col-end-12">
            <img src="images/RODRI_ILUSTRATION.png" class="img_hero" alt="my ilustration">
        </div>

    </section>

 



<!--CONTENT SECTION-->


<section class="grid-con section_about" id="about-me">
    <h2 class="hidden">About me</h2>

    <article class="box_image_large col-span-full m-col-start-9 m-col-end-13">
        <h2 class="hidden">ABOUT ME CONTENT</h2>
        <div class="m-col-start-12 m-col-end-13 about-title">
            <img src="images/IMG_RODRI.png" class="image-size-devices" alt="image about me">
        </div>
        <div id="high_desk" class="m-col-start-12 m-col-end-13 about-title box_highlight">
            <p class="highlight"> In addition to my design skills, I bring curiosity, leadership, strategic vision, user advocacy, empathy, resilience, and fast learning as key soft skills.
            </p>
        </div>
    </article>
    <article class="about-text col-span-full m-col-start-1 m-col-end-7">
        <div class="m-col-start-1 m-col-end-4 about-title">
            <p class="p_title_black">ABOUT ME</p>
            <h2>WOULD YOU LIKE TO KNOW ME?</h2>
            <p>With a background in Multimedia Design, my goal is to create and manage user-centered digital experiences that solve real-world problems and improve everyday life. By blending creativity with strategic thinking, I design impactful products that prioritize users and deliver meaningful results.</p>
            <div id="high_mobile" class=" col-span-full about-title box_highlight_mob">
                <p class="highlight"> In addition to my design skills, I bring curiosity, leadership, strategic vision, user advocacy, empathy, resilience, and fast learning as key soft skills.
                </p>
            </div>
            <p>I utilize tools such as Figma, Adobe Photoshop, Illustrator, After Effects, and Premiere to bring my projects to life. However, my most important tools remain the simplest: pen and pencil, where every idea begins.
            <p></p>
            <p>I've always been curious and eager to break into the design industry. Earlier in my career, before moving to Canada, I worked as a digital project coordinator in the marketing department of a large company. These experiences provided me with a strong foundation in management, success metrics, customer experience, and even design concepts, as I collaborated with and managed designers in digital agencies.</p>    
          
            <p><span class="ilustrating">P.S. I love to make some Ilustrations</span></p>    
        </div>
        
        </article>
   
</section>

<!--<section class="full-width-grid-con info_more">

        <h2 class="hidden">WORK</h2>
        <div class="box col-span-full">
            <h4>WANT MORE INFO?</h4>
        </div>
        <div class="box col-span-full m-col-start-3 m-col-end-5">
            
            </div>
            <div class="box col-span-full m-col-start-6 m-col-end-8">
            <button class="resume_button">DOWNLOAD MY RESUME</button>
        </div>
       </div>
</section>-->


<section class="full-width-grid-con box_contact_highlight">
    <div class=" col-span-full  m-col-span-full"><h2 class="h2_more_info">WANT MORE INFO?</h2></div>
    <div class="col-start-1 col-end-4 m-col-start-1 m-col-end-12">
       <a href="#" class="resume_button">DOWNLOAD MY RESUME</a>
       <a href="#contact" class="secondary_button">CONTACT ME</a>
    </div>
</section>




<section class="grid-con" id="work">
    <h2 class="hidden">WORK</h2>
    <div class="box_titles col-span-full m-col-span-full">
    <p class="p_title_black_c">WORK</p>
    <h2 class="h2_title_center">SELECTED WORK</h2></div>
    <div class="box_home_work_text col-span-full m-col-span-full"><p class="work_text">My work is grounded in clean design and provides a fluid user experience achieved through thorough research and a deep understanding of the project's objectives and needs.</p></div>  
<h2 class="hidden">Section content 2</h2>
    <div class="col-span-full container_reels">
        <video class="player" controls preload="metadata" poster="images/placeholder.jpg">
            <source src="video/nascimento_rodrigo_portfolio_demo_reel.mp4" type="video/mp4">
            <p>Ooops, something went wrong. You may be using an oudated browser or have javascript disabled.</p>
        </video>
            
</div>
</section>





<section class="grid-con container_work_n">
    <h2 class="hidden">My Work</h2>

    <?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="project_link col-span-full">
        <a href="details.php?id='.$row['p_id'].'"><img src="images/'.$row['IMG_NAME'].'" class="prj_img" alt="project image" /></a>
        <h3 class="project_ti">'.$row['TITLE'].'</h3>
        <p class="p_roles">'.$row['ROLES'].'</p>
        <p></p>
        <a href="details.php?id='.$row['p_id'].'" class="project_button">MORE</a>
    </div>';
}

$stmt = null;

?> 

</section>

<section class="full-width-grid container_contact_n" id="contact">
<h2 class="hidden">CONTACT</h2>
    <div class="box_title_contact  col-span-full m-col-start-1 m-col-end-7">
    <p class="p_title_white">CONTACT</p>
        <h2 class="h2_contact">LET'S TALK!</h2>
        <p class="p_contact">Feel free to reach out. It would be a pleasure to connect or take a coffee!</p>
    </div>
    
    <div class="box_form_contact col-span-full m-col-span-full l-col-start-6 l-col-end-12">
      <h4 class="h4_box_contact">DROP YOUR MESSAGE HERE</h4>
      <form method="post" action="sendmail.php">

      <input type="hidden" name="submitted" value="1">

    <label for="name" class="label_contact">Name</label>
    <p><input type="text" class="input_contact" name="name" id="name"></p>

   <label for="email" class="label_contact">Email</label>
   <p><input type="text" class="input_contact" name="email" id="email"></p>

    <label for="phone" class="label_contact">Phone</label>
    <p><input type="text" class="input_contact" name="phone" id="phone"></p>

    <label for="message" class="label_contact">Message: </label>
    <p><textarea name="message" class="text_contact" id="message"></textarea></p>



    <input type="submit" class="send_button" value="SEND">
</form>
</div>
</section>


 




<footer id="footer-hero" class="footer_hero">
        <section id="footer-contact-info" class="col-span-full m-col-start-2 m-col-end-5">
        <h2 class="hidden">FOOTER</h2>
            <img src="images/NEGATIVE.png" class="logo_footer" alt="Logo">
            </section>
       
            <section class="grid-con col-span-full m-col-start-6 m-col-end-11">
                <h2 class="hidden">social media</h2>
                <div class=" social_media col-span-full m-col-start-7 m-col-end-9">
                    <a href="https://www.instagram.com/rodrigonn2/"><i class="fa-brands fa-instagram fa-2xl" style="color: #ffffff;"></i></a>
                    <a href="https://www.linkedin.com/in/rodrigo-nobre-donascimento/"><i class="fa-brands fa-linkedin fa-2xl" style="color: #ffffff;"></i></a>
                </div>
            </section>  
          
</footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
    <script src="js/main.js"></script>
    

</body>
</html>