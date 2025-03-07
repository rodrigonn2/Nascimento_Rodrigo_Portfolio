<?php
session_start(); 
if (!isset($_SESSION['user_id'])) {
    header("Location: login_form.php");
    exit(); 
}

require_once('../includes/connect.php');

$project_id = isset($_GET['id']) ? $_GET['id'] : null;

// Recuperando as informações do projeto
$query1 = "SELECT id, TITLE, JOB, SHORT_DESCRIPTION, ROLES, OVERVIEW, TOOLS_USED_TEXT, CLIENTS_ID, DISCOVERY_TEXT, IDEATION_TEXT, FINAL_RESULT_TEXT, DEVELOPMENT_TEXT FROM PROJECTS WHERE id = :projectId";
$stmt1 = $connection->prepare($query1);
$stmt1->bindParam(':projectId', $project_id, PDO::PARAM_INT);
$stmt1->execute();
$text_projects = $stmt1->fetch(PDO::FETCH_ASSOC);

// Recuperando as imagens associadas ao projeto
$queryImages = "SELECT IMG_NAME, IMG_CATEGORY FROM PROJECT_IMAGES WHERE PROJECTS_ID = :projectId AND (IMG_CATEGORY = 'hero_details' OR IMG_CATEGORY = 'overview')";
$stmtImages = $connection->prepare($queryImages);
$stmtImages->bindParam(':projectId', $project_id, PDO::PARAM_INT);
$stmtImages->execute();
$project_images = $stmtImages->fetchAll(PDO::FETCH_ASSOC);

// Verificando se as imagens existem para as categorias 'overview' e 'hero_details'
$overview_image = null;
$hero_image = null;

foreach ($project_images as $image) {
    if ($image['IMG_CATEGORY'] == 'overview') {
        $overview_image = $image['IMG_NAME'];
    } elseif ($image['IMG_CATEGORY'] == 'hero_details') {
        $hero_image = $image['IMG_NAME'];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Project</title>
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
        <p class="p_title_white">Edit Project</p>
        <h2 class="h2_contact">Project Update</h2>
        <p class="p_contact">Update the project details here</p>
    </div>

    <div class="box_add_project_form col-span-full m-col-span-full l-col-start-6 l-col-end-12">
        <h4 class="h4_box_contact">Edit the project here</h4>
        <form action="edit_project.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="pk" value="<?php echo $project_id; ?>">

            <label class="label_contact">Project Title:</label>
            <p><input name="title" class="input_contact" type="text" value="<?php echo htmlspecialchars($text_projects['TITLE']); ?>" required></p>

            <label class="label_contact">Job:</label>
            <p><input name="job" class="input_contact" type="text" value="<?php echo htmlspecialchars($text_projects['JOB']); ?>" required></p>

            <label class="label_contact">Short Description:</label>
            <p><textarea name="short_description" class="input_contact" required><?php echo htmlspecialchars($text_projects['SHORT_DESCRIPTION']); ?></textarea></p>

            <label class="label_contact">Roles:</label>
            <p><input name="roles" class="input_contact" type="text" value="<?php echo htmlspecialchars($text_projects['ROLES']); ?>" required></p>

            <label class="label_contact">Overview:</label>
            <p><textarea name="overview" class="input_contact" required><?php echo htmlspecialchars($text_projects['OVERVIEW']); ?></textarea></p>

            <label class="label_contact">Discovery Text:</label>
            <p><textarea name="discovery_text" class="input_contact" required><?php echo htmlspecialchars($text_projects['DISCOVERY_TEXT']); ?></textarea></p>

            <label class="label_contact">Ideation Text:</label>
            <p><textarea name="ideation_text" class="input_contact" required><?php echo htmlspecialchars($text_projects['IDEATION_TEXT']); ?></textarea></p>

            <label class="label_contact">Final Result Text:</label>
            <p><textarea name="final_result_text" class="input_contact" required><?php echo htmlspecialchars($text_projects['FINAL_RESULT_TEXT']); ?></textarea></p>

            <label class="label_contact">Development Text:</label>
            <p><textarea name="development_text" class="input_contact" required><?php echo htmlspecialchars($text_projects['DEVELOPMENT_TEXT']); ?></textarea></p>

            <label class="label_contact">Tools Used:</label>
            <p><textarea name="tools_used_text" class="input_contact" required><?php echo htmlspecialchars($text_projects['TOOLS_USED_TEXT']); ?></textarea></p>

            <!-- Imagens -->
            <label for="img" class="label_contact">Project Image (Overview):</label>
            <p><input name="img" type="file" class="send_button"></p>
            <?php if ($overview_image): ?>
                <p>Current Overview Image: <img src="../images/<?php echo htmlspecialchars($overview_image); ?>" alt="Overview Image" width="100"></p>
            <?php else: ?>
                <p>No current image available for Overview.</p>
            <?php endif; ?>

            <label for="hero_img" class="label_contact">Hero Banner Image:</label>
            <p><input name="hero_img" type="file" class="send_button"></p>
            <?php if ($hero_image): ?>
                <p>Current Hero Image: <img src="../images/<?php echo htmlspecialchars($hero_image); ?>" alt="Hero Banner Image" width="100"></p>
            <?php else: ?>
                <p>No current image available for Hero Banner.</p>
            <?php endif; ?>

            <!-- Client Selection -->
            <h4>Select Client:</h4>
            <p>
                <select name="client_id" class="input_contact">
                    <?php
                    $clientQuery = "SELECT id, name FROM CLIENTS ORDER BY name ASC";
                    $clientStmt = $connection->prepare($clientQuery);
                    $clientStmt->execute();

                    while ($client = $clientStmt->fetch(PDO::FETCH_ASSOC)) {
                        $selected = ($client['id'] == $text_projects['CLIENTS_ID']) ? 'selected' : '';
                        echo "<option value='" . $client['id'] . "' $selected>" . $client['name'] . "</option>";
                    }
                    ?>
                </select>
            </p>

            <p><input name="submit" type="submit" class="send_button" value="Update Project"></p>
        </form>    
    </div>
</section>
</body>
</html>