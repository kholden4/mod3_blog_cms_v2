<?php
    include "header.php";
    include "footer";
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

            <div id="title"> 
                <h3>Blog Post 1</h3>
            </div><!--close for Title-->

            <div id="author">
                <h4>Kristy Holden</h4>
            </div><!--close for Author-->

            <div id="date">
                <h4>10.4.19</h4>
            </div><!--close for Date-->

            <div id="content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div><!--close for Content-->

        </main><!--close for main-->
    </body><!--close for body-->
</html>