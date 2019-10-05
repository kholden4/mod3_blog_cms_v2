<?php
    include "header.php";
    include "footer";
?><!--PHP content always loads before the rest of web content--> 

    <body>

        <main>
            <?php   
                function getPostTitlesFromDatabase () {
                    // TODO in Modual 4
                    // get this data from a database instead of hardcoding it
                    $postTitles - array("Blog Post 1", "Blog Post 2", "Blog Post 3");
                    return $postTitles;
                }
            ?>
            <h3>Previous Posts</h3>
                <ul>
                    <?php
                        $postTitles = getPostTitlesFromDatabase();

                        foreach($postTitles as $postTitle) {
                            echo "<li><a href='post.php'>" . $postTitle . "</a></li>";
                        }
                     ?>   
                </ul>
        </main><!--close for main-->

    </body><!--close for body-->   
</html>
