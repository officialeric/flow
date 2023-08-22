<?php
include 'process/index.php';
include 'process/edit_flow.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flow</title>

    <!-- Custom Css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" >
        <div class="form">
            <h3>Aluta Contonto</h3>
            <form action="process/index.php" method="post">
                <textarea name="content" id="content" cols="60" rows="4" ></textarea><br>                
                <input type="submit" value="Akunta">
            </form>
        </div>
        <div class="lists">
            <h3>Flows</h3>
            <?php
            foreach ($flows as $key => $flow) { ?>
                <div class="flow" >
                    <p><?=$flow['content']?></p>
                    <p><?=$flow['date']?></p>
                    <!-- <a href="process/index.php?id=<?= $flow['id']?>"><button class="flow__edit">Edit</button></a> -->
                    <a href="process/delete_flow.php?id=<?=$flow['id']?>"><button class="flow__erase" name='erase'>Erase</button></a>
                </div>            
            <?php } ?>
        </div>
    </div>
</body>
</html>