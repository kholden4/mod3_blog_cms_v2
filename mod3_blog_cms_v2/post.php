<?php
    include "header.php";
?><!--PHP content always loads before the rest of web content--> 

    <body>
        <main>
            <?php
                function getPostDetailsFromDatabase() {
                    // TODO in Modual 4
                    // get this data from a database instead of hardcoding it
                    $postDetails = array('title' => 'Blog Post 1',
                                        'content' => 'My first blog post',
                                        'date' => '10.4.19',
                                        'author' => 'Kristy Holden');
                    return $postDetails;                    
                }
            ?>

            <?php 
                // Post details contains all data to generate the blog from
                $postDetails = getPostDetailsFromDatabase();
            ?>    
            <h1> <?php echo $postDetails["title"]; ?> </h1>
            <div> <?php echo $postDetails["author"]; ?> </div>
            <div> <?php echo $postDetails["date"]; ?> </div>
            <div> <?php echo $postDetails["content"]; ?> </div>

        </main><!--close for main-->
    </body><!--close for body-->

<?php
    include "footer.php";
?>
</html>