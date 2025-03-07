<?php
require_once('../includes/connect.php');


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

 
        $query = "INSERT INTO PROJECTS (TITLE, JOB, SHORT_DESCRIPTION, ROLES, OVERVIEW, DISCOVERY_TEXT, IDEATION_TEXT, FINAL_RESULT_TEXT, DEVELOPMENT_TEXT, TOOLS_USED_TEXT, CLIENTS_ID) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
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
            $_POST['client_id']
        ]);

        $projectId = $connection->lastInsertId(); 

       
        $queryImgHero = "INSERT INTO PROJECT_IMAGES (PROJECTS_ID, IMG_NAME, IMG_CATEGORY, IMG_CAPTION) VALUES (?, ?, ?, ?)";
        $stmtImgHero = $connection->prepare($queryImgHero);
        $stmtImgHero->execute([
            $projectId,
            $newnameHero, 
            'hero_details',  
            $_POST['hero_img_caption']
        ]);

       
        $queryImgOverview = "INSERT INTO PROJECT_IMAGES (PROJECTS_ID, IMG_NAME, IMG_CATEGORY, IMG_CAPTION) VALUES (?, ?, ?, ?)";
        $stmtImgOverview = $connection->prepare($queryImgOverview);
        $stmtImgOverview->execute([
            $projectId,
            $newnameOverview, 
            'overview', 
            $_POST['img_caption'] 
        ]);

        
        header('Location: project_list.php');
    }
}
?>
