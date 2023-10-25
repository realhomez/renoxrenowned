<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
        include "assets/include/css.php";
    ?>
    <style>
        
    </style>
    <title>Blog</title>
</head>
<body>
<section class="content ">

        
    <?php
        include "assets/include/headerblog.php";
    ?>
    
    
</section>    
<!-- overview section -->



<section class="container">
    <div class="row">
        <div class="col col-12 col-lg-9 col-md-12 mt-5 mb-5">

            <div class="row">
                <?php
                    include "assets/include/blogcard.php"
                ?>                
            </div>
    
        </div>
        <div class="col-12 col-lg-3 border">
            <?php
                include "assets/include/form.php"
            ?>
        </div>
    </div>
</section>
<?php
    include "assets/include/footer.php"
?>