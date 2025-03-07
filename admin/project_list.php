<!DOCTYPE html>
<html lang="en">

<?php

session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit(); 
}

require_once('../includes/connect.php');
$query ="SELECT p.id as p_id, pi.id as pic_id, pi.IMG_NAME, pi.IMG_CATEGORY, p.TITLE, p.ROLES from PROJECTS as p, PROJECT_IMAGES as pi WHERE p.id = pi.PROJECTS_ID AND pi.IMG_CATEGORY = 'overview'";
$stmt = $connection->prepare($query);
$stmt->execute();
?>

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
                        <li><a href="project_list.php">PROJECT LIST</a></li>
                        <li><a href="create_project.php">CREATE PROJECT</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                    
                        
                    </ul>
                </div>
            </nav>
            <div id="logo" class="col-start-1 col-end-4 m-col-start-1 m-col-end-4 l-col-start-1 l-col-end-4">
                <a href="index.html"><img src="../images/logo_rnascimento.svg" alt="Rodrigo Nascimento"></a>
            </div>
        </header>
    </div>


<section class="grid-con" id="work">
    <h2 class="hidden">WORK</h2>
    <div class="box_titles col-span-full m-col-span-full">
    <p class="p_title_black_c">WORK</p>
    <h2 class="h2_title_center">WORK LIST</h2></div>    
</div>
</section>





<section class="grid-con container_work_n">
<?php

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<div class="project_link col-span-full">
        <img src="../images/'.$row['IMG_NAME'].'" class="prj_img" alt="project image" />
        <h3 class="project_ti">'.$row['TITLE'].'</h3>
        <p class="p_roles">'.$row['ROLES'].'</p>
        <p></p>
        <a href="edit_project_form.php?id='.$row['p_id'].'">edit</a>
        <a href="delete_project.php?id='.$row['p_id'].'">delete</a>
    </div>';
}

$stmt = null;

?> 
</section>






<br><br><br>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script src="../js/main.js"></script>-->

</body>
</html>