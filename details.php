

    <!DOCTYPE html>
    <html lang="en">
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


<?php
   require_once('includes/connect.php');


    $query = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY from PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND pi.IMG_CATEGORY = 'Hero_details'";
    $results = mysqli_query($connect, $query);

    //$query = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, p.TITLE, p.ROLES from PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND pi.IMG_CATEGORY = 'Hero_details'";
    

    $project_id = isset($_GET['id']) ? $_GET['id'] : null;

    $query1 = "SELECT id, TITLE, JOB, SHORT_DESCRIPTION, ROLES, OVERVIEW, DISCOVERY_TEXT, IDEATION_TEXT, FINAL_RESULT_TEXT, DEVELOPMENT_TEXT, TOOLS_USED_TEXT FROM PROJECTS WHERE id = $project_id";
    $text_projects = mysqli_query($connect, $query1);
    
    $query2 = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY FROM PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND p.id = $project_id AND pi.IMG_CATEGORY = 'ideation'";
    $img_ideation = mysqli_query($connect, $query2);

    $query3 = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY FROM PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND p.id = $project_id AND pi.IMG_CATEGORY = 'development'";
    $img_development = mysqli_query($connect, $query3);

    $query4 = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY FROM PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND p.id = $project_id AND pi.IMG_CATEGORY = 'video'";
    $img_video = mysqli_query($connect, $query4);

    $query5 = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, pi.IMG_CAPTION FROM PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND p.id = $project_id AND pi.IMG_CATEGORY = 'result'";
    $img_result = mysqli_query($connect, $query5);

    $query6 = "SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, pi.IMG_CAPTION FROM PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND p.id = $project_id AND pi.IMG_CATEGORY = 'overview'";
    $img_overview = mysqli_query($connect, $query6);

    $query7 = "SELECT pi.IMG_NAME FROM PROJECT_IMAGES as pi WHERE pi.PROJECTS_ID = $project_id AND pi.IMG_CATEGORY = 'Hero_details'";
    $hero_images = mysqli_query($connect, $query7);
    ?>


<body>
    <h1 class="hidden">Rodrigo Nascimento Portfolio</h1>
    <div id="sticky-nav-con">
        <header class="grid-con" id="main-header">
            <nav id="main-nav" class="container_menu_mob col-span-full m-col-start-4 m-col-end-12 l-col-start-6 l-col-end-12">
                <h2 class="hidden">MENU</h2>
                <button id="button"></button>
                <div id="burger-con">
                    <ul>
                        <li><a href="index.php#about-me">ABOUT ME</a></li>
                        <li><a href="index.php#work">WORK</a></li>
                        <li><a href="index.php#contact">CONTACT</a></li>
                    </ul>
                </div>
            </nav>
            <div id="logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4">
                <a href="index.php"><img src="images/logo_rnascimento.svg" alt="Rodrigo Nascimento"></a>
            </div>
        </header>
    </div>
    <section class="full-width-grid-con container_hero_prj" id="hero">
    <h2 class="hidden">Hero Image</h2>
    <div class="col-span-full hero-container_details">


<?php
    while($row = mysqli_fetch_array($hero_images)) {
        $imageName = $row['IMG_NAME'];
        echo '
        <picture>
        <source media="(max-width: 767px)" srcset="images/banner_mobile/'.$imageName.'">
         <source media="(max-width: 1199px)" srcset="images/banner_tablet/'.$imageName.'">

            <img src="images/'.$imageName.'" class="background_banner_details" alt="project image">
        </picture>';
    }
?>
       
<?php
        while($row = mysqli_fetch_array($hero_images)) {

echo '<img src="images/'.$row['IMG_NAME'].'" class="background_banner_details" alt="project image"/></a>';
}
?>





        <div class="hero-text_details">
            
        <?php
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<h3 class="h3_box_details_hero"><span class="h4_span_white">'. $row['TITLE'] .'</span></h3>
        <h3 class="h3_box_details_hero"><span class="h4_span_yellow">'. $row['JOB'].'</span></h3>
        <p class="p_hero_details">'. $row['SHORT_DESCRIPTION'].'</p>';
    }
    ?>
              
                
            
        </div>
    </div>
</section>

<!--END HERO-->





<!--PROJECT_OVERVIEW-->

<section class="grid-con section_prj_details container_overview" id="overview">
    <h2 class="hidden">PROJECT OVERVIEW</h2>

    <article class=" col-span-full m-col-start-9 m-col-end-13">
        <h2 class="hidden">PROJECT CONTENT</h2>
        <div class="m-col-start-12 m-col-end-13 box_img_over">
        <?php
    $img_overview = mysqli_query($connect, $query6);
    while ($row = mysqli_fetch_array($img_overview)) {
        echo ' <img src="images/'. $row['IMG_NAME'].'" class="prj_image-size-devices" alt="image project">';
    }
    ?>
       
        </div>
    </article>
    <article class="box_text_over col-span-full m-col-start-1 m-col-end-7">
        
           
            <?php
    $text_projects = mysqli_query($connect, $query1);
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<div class="m-col-start-1 m-col-end-4">
            <p class="p_title_black">'. $row['TITLE'] .'</p>
            <h2 class="h2_prj_title">PROJECT OVERVIEW</h2> <p class="text_details">' . $row['OVERVIEW'] . '</p>';
    }
    ?>
           
           
        </div>
        
        </article>
   
</section>

<!--END_PROJECT OVERVIEW-->

<hr>

<section class="grid-con" id="work">


    <h2 class="hidden">WORK</h2>
    <div class="box_titles_prj col-span-full m-col-span-full">
    <h2 class="h2_title_center">MY PROCCESS</h2></div>
    <div class="box_text col-span-full m-col-start-1 m-col-end-13"><h5 class="h5_work_title"><span class="span_number">1</span> RESEARCH AND DISCOVERY</h5>
    <?php
    $text_projects = mysqli_query($connect, $query1);
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<p class="research_details">' . $row['DISCOVERY_TEXT'] . '</p>';
    }
    ?></div>
</section>


  
<section class="grid-con container_proccess">
    <h2 class="hidden">IDEATION</h2>

    <article class="col-span-full m-col-start-1 m-col-end-5">
        <h2 class="hidden">IDEATION CONTENT</h2>
        <div class="m-col-start-1 m-col-end-4 box_ideation_img">

<?php
$text_projects = mysqli_query($connect, $query2);
while ($row = mysqli_fetch_array($img_ideation)) {
    echo '<img src="images/' . $row['IMG_NAME'] . '" alt="image ideation">';
}
?>
            <!--<img src="images/IMG_OV_BILLY.jpg" class="image-size-devices" alt="image project">-->
        </div>
    </article>
    <article class=" col-span-full m-col-start-6 m-col-end-13">
        <div class="about-ideation-title">
        <h5 class="h5_work_title"><span class="span_number">2</span> IDEATION</h5>
        <?php
    $text_projects = mysqli_query($connect, $query1);
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<p class="Ideation_details">' . $row['IDEATION_TEXT'] . '</p>';
    }
    ?>
        </div>

        <div class="m-col-start-1 m-col-end-4 box_ideation_img_m">
            <?php
            foreach ($img_ideation as $row) {
                echo '<img src="images/' . $row['IMG_NAME'] . '" alt="image ideation">';
            }
            ?>
        
        </article>
   
</section>

<section class="grid-con container_proccess">
    <h2 class="hidden">DEVELOPMENT</h2>

    <article class="box_image_large col-span-full m-col-start-9 m-col-end-13">
        <h2 class="hidden">PROJECT DEV</h2>
        <div class="m-col-start-09 m-col-end-13 box_development_img">
           
        <?php
$text_projects = mysqli_query($connect, $query3);
while ($row = mysqli_fetch_array($img_development)) {
    echo '<img src="images/' . $row['IMG_NAME'] . '" alt="image development">';
}
?>
        
        </div>
    </article>
    <article class="about-text_details col-span-full m-col-start-1 m-col-end-7">
        <div class="box_development m-col-start-1 m-col-end-4 about-title">
        <h5 class="h5_development_title"><span class="span_number">3</span> DEVELOPMENT</h5>
        <?php
    $text_projects = mysqli_query($connect, $query1);
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<p class="development_details">' . $row['DEVELOPMENT_TEXT'] . '</p>';
    }
    ?>
        </div>

        <div class="m-col-start-1 m-col-end-4 box_development_img_m">
            <?php
            // Reutilizar os mesmos dados da consulta para exibir a imagem em outra posição
            foreach ($img_development as $row) {
                echo '<img src="images/' . $row['IMG_NAME'] . '" alt="image development">';
            }
            ?>
        </div>
           
        
        </article>
   
</section>









<hr> 


<section class="grid-con container_final_delivery">
    <h2 class="hidden">WORK</h2>
    <div class="box_titles_prj  col-span-full m-col-span-full">
    <h2 class="h2_title_center_prj">FINAL DELIVERY</h2>
    <?php
    $text_projects = mysqli_query($connect, $query1);
    while ($row = mysqli_fetch_array($text_projects)) {
        echo '<p class="work_prj_text">' . $row['FINAL_RESULT_TEXT'] . '</p>';
    }
    ?>

    <!--<p class="work_prj_text">Here are the results of the work process, delivering a cohesive and impactful outcome that reflects the project's essence.</p>-->

</div>
    
<h2 class="hidden">VIDEO</h2>
    
    <?php
$text_projects = mysqli_query($connect, $query4);
while ($row = mysqli_fetch_array($img_video)) {
    echo '<div class="col-span-full container_video">'. $row['IMG_NAME'] .'</div>';
}
?>
            

</section>





<section class="grid-con container_work_n">
    <h2 class="hidden">Deliverables</h2>

    <?php

while($row = mysqli_fetch_array($img_result)) {

    echo '<div class="project_link col-span-full">
       <img src="images/'.$row['IMG_NAME'].'" class="prj_img" alt="result image" /></a>
        <h3 class="project_ti">'.$row['IMG_CAPTION'].'</h3>
    </div>';
}
?>
</section>




<section class="full-width-grid-con box_contact_highlight">
    <div class=" col-span-full  m-col-span-full"><h2 class="h2_more_info">LET'S WORK TOGETHER?</h2></div>
    <div class="col-start-1 col-end-4 m-col-start-1 m-col-end-12">
       <a href="#" class="resume_button">DOWNLOAD MY RESUME</a>
       <a href="index.php#contact" class="secondary_button">CONTACT ME</a>
    </div>




    </div>
</section>

 




<footer id="footer-hero" class="footer_hero">
        <section id="footer-contact-info" class="col-span-full m-col-start-2 m-col-end-5">
            <img src="images/NEGATIVE.png" class="logo_footer" alt="Logo">
            <h2 class="hidden">FOOTER</h2>
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