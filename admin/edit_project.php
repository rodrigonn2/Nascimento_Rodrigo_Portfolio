<?php
require_once('../includes/connect.php');


$project_id = $_POST['pk'];


$query = "UPDATE PROJECTS SET 
          TITLE = ?, JOB = ?, SHORT_DESCRIPTION = ?, ROLES = ?, OVERVIEW = ?, 
          DISCOVERY_TEXT = ?, IDEATION_TEXT = ?, FINAL_RESULT_TEXT = ?, DEVELOPMENT_TEXT = ?, 
          TOOLS_USED_TEXT = ?, CLIENTS_ID = ? 
          WHERE ID = ?";

$stmt = $connection->prepare($query);
$stmt->execute([
    $_POST['title'],
    $_POST['job'],
    $_POST['short_description'],
    $_POST['roles'],
    $_POST['overview'],
    $_POST['discovery_text'],
    $_POST['ideation_text'],
    $_POST['final_result_text'],
    $_POST['development_text'],
    $_POST['tools_used_text'],
    $_POST['client_id'],
    $project_id
]);


if (isset($_FILES['img']) && $_FILES['img']['error'] == 0) {
    $random = rand(10000, 99999);
    $newnameOverview = 'image' . $random;
    $filetypeOverview = strtolower(pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION));


    if ($filetypeOverview == 'jpeg') {
        $filetypeOverview = 'jpg'; 
    }


    if ($filetypeOverview == 'exe') {
        exit('Nice try');
    }

    $newnameOverview .= '.' . $filetypeOverview;
    $target_fileOverview = '../images/' . $newnameOverview;


    if (move_uploaded_file($_FILES['img']['tmp_name'], $target_fileOverview)) {

        $queryOverviewCheck = "SELECT ID FROM PROJECT_IMAGES WHERE PROJECTS_ID = ? AND IMG_CATEGORY = 'overview'";
        $stmtOverviewCheck = $connection->prepare($queryOverviewCheck);
        $stmtOverviewCheck->execute([$project_id]);
        $existingOverview = $stmtOverviewCheck->fetch(PDO::FETCH_ASSOC);

        if ($existingOverview) {
  
            $queryUpdateOverview = "UPDATE PROJECT_IMAGES SET IMG_NAME = ? WHERE ID = ?";
            $stmtUpdateOverview = $connection->prepare($queryUpdateOverview);
            $stmtUpdateOverview->execute([$newnameOverview, $existingOverview['ID']]);
        } else {
   
            $queryInsertOverview = "INSERT INTO PROJECT_IMAGES (PROJECTS_ID, IMG_NAME, IMG_CATEGORY) VALUES (?, ?, 'overview')";
            $stmtInsertOverview = $connection->prepare($queryInsertOverview);
            $stmtInsertOverview->execute([$project_id, $newnameOverview]);
        }
    }
}


if (isset($_FILES['hero_img']) && $_FILES['hero_img']['error'] == 0) {
    $random = rand(10000, 99999);
    $newnameHero = 'hero_' . $random;
    $filetypeHero = strtolower(pathinfo($_FILES['hero_img']['name'], PATHINFO_EXTENSION));

   
    if ($filetypeHero == 'jpeg') {
        $filetypeHero = 'jpg'; 
    }

    if ($filetypeHero == 'exe') {
        exit('Nice try');
    }

    $newnameHero .= '.' . $filetypeHero;
    $target_fileHero = '../images/' . $newnameHero;


    if (move_uploaded_file($_FILES['hero_img']['tmp_name'], $target_fileHero)) {

        $queryHeroCheck = "SELECT ID FROM PROJECT_IMAGES WHERE PROJECTS_ID = ? AND IMG_CATEGORY = 'hero_details'";
        $stmtHeroCheck = $connection->prepare($queryHeroCheck);
        $stmtHeroCheck->execute([$project_id]);
        $existingHero = $stmtHeroCheck->fetch(PDO::FETCH_ASSOC);

        if ($existingHero) {

            $queryUpdateHero = "UPDATE PROJECT_IMAGES SET IMG_NAME = ? WHERE ID = ?";
            $stmtUpdateHero = $connection->prepare($queryUpdateHero);
            $stmtUpdateHero->execute([$newnameHero, $existingHero['ID']]);
        } else {

            $queryInsertHero = "INSERT INTO PROJECT_IMAGES (PROJECTS_ID, IMG_NAME, IMG_CATEGORY) VALUES (?, ?, 'hero_details')";
            $stmtInsertHero = $connection->prepare($queryInsertHero);
            $stmtInsertHero->execute([$project_id, $newnameHero]);
        }
    }
}


header('Location: project_list.php');
exit;
?>