<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
    <html lang="nl">

    <head>
        <title>Attractiepagina</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
        <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
    </head>

    <body>

        <?php require_once 'header.php'; ?>
        <div class="container content">
            <aside>


            </aside>
            <main>
               <?php require_once 'admin/backend/conn.php';

               $query = "SELECT * FROM rides";
               $statement = $conn->prepare($query);
               $statement->execute();
               $attracties = $statement ->fetchAll(PDO::FETCH_ASSOC);

               ?>

               <div class="container_grid">
                <?php foreach($attracties as $attractie): ?>
                    <div class="rideCard">
                        <img src="img/attracties/<?php echo $attractie['img_file']; ?> " alt="">
                        <div class="theme"> 
                            <p> <?php echo $attractie['themeland'];?></p>

                        </div>  
                            <div class="title"> 
                                <p> <?php echo $attractie['title'];?></p>
                            </div>
                            <div class="des">   
                                <p> <?php echo $attractie['description'];?></p>
                            </div>
                            
                            
                        
                    </div>


                    <div class="rideCard Large">
                        <p> t</p>
                    </div>
                    <div class="rideCard">      
                        <p> t</p>
                    </div>
                    <div class="rideCard">
                        <p> t</p>
                    </div>
                    <div class="rideCard">
                        <p> t</p>
                    </div>
                    <div class="rideCard Large">
                        <p> t</p>
                    </div>
                    <div class="rideCard Large">
                        <p> t</p>
                    </div>
                    <div class="rideCard">
                        <p> t</p>
                    </div>
                    <div class="rideCard">
                        <p> t</p>
                    </div>
                    
                <?php endforeach; ?>
            </div>

        </main>
    </div>


</body>

</html>
