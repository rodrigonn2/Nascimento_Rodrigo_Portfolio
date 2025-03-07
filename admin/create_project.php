<!DOCTYPE html>
<html lang="en">

<?php
session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit(); 
}


require_once('../includes/connect.php');
$stmt = $connection->prepare('SELECT id, title FROM PROJECTS ORDER BY title ASC');
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

<section class="full-width-grid container_add_project">
    <h2 class="hidden">PROJECT</h2>
    <div class="box_title_contact col-span-full m-col-start-1 m-col-end-7">
        <p class="p_title_white">ADD A PROJECT</p>
        <h2 class="h2_contact_vn">PROJECT CREATION</h2>
        <p class="p_contact">Add your new projects here</p>
    </div>

    <div class="box_add_project_form col-span-full m-col-span-full l-col-start-6 l-col-end-12">
        <h4 class="h4_box_contact">CREATE THE PROJECT HERE</h4>
        <form action="add_project.php" method="post" enctype="multipart/form-data">

            <label for="title" class="label_contact">Project Title: </label>
            <p><input name="title" class="input_contact" type="text" required></p>

            <label for="job" class="label_contact">Job: </label>
            <p><input name="job" class="input_contact" type="text" required></p>

            <label for="short_description" class="label_contact">Short Description: </label>
            <p><textarea name="short_description" class="input_contact" required></textarea></p>

            <label for="roles" class="label_contact">Roles: </label>
            <p><input name="roles" class="input_contact" type="text" required></p>

            <label for="overview" class="label_contact">Overview: </label>
            <p><textarea name="overview" class="input_contact" required></textarea></p>

            <label for="discovery_text" class="label_contact">Discovery Text: </label>
            <p><textarea name="discovery_text" class="input_contact" required></textarea></p>

            <label for="ideation_text" class="label_contact">Ideation Text: </label>
            <p><textarea name="ideation_text" class="input_contact" required></textarea></p>

            <label for="final_result_text" class="label_contact">Final Result Text: </label>
            <p><textarea name="final_result_text" class="input_contact" required></textarea></p>

            <label for="development_text" class="label_contact">Development Text: </label>
            <p><textarea name="development_text" class="input_contact" required></textarea></p>

            <label for="tools_used_text" class="label_contact">Tools Used Text: </label>
            <p><textarea name="tools_used_text" class="input_contact" required></textarea></p>

            <!-- Project Image (Overview) -->
            <label for="img" class="label_contact">Project Image (Overview): </label>
            <p><input name="img" type="file" class="send_button"></p>

            <!-- Hero Banner -->
            <label for="hero_img" class="label_contact">Hero Banner Image: </label>
            <p><input name="hero_img" type="file" class="send_button"></p>

            <!-- Client Selection -->
            <h4>Select Client:</h4>
            <p><select name="client_id" class="input_contact">
                <?php
                $clientQuery = "SELECT id, name FROM CLIENTS ORDER BY name ASC";
                $clientStmt = $connection->prepare($clientQuery);
                $clientStmt->execute();

                while ($client = $clientStmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='" . $client['id'] . "'>" . $client['name'] . "</option>";
                }
                ?>
            </select></p>

            <p><input name="submit" type="submit" class="send_button" value="Add Project"></p>

        </form>
    </div>
</section>

<br><br><br>

<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/ScrollTrigger.js"></script>
<script src="https://cdn.plyr.io/3.7.8/plyr.polyfilled.js"></script>
<script src="../js/main.js"></script>-->

</body>
</html>