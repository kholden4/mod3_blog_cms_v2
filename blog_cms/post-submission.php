<?php
    include "header.php";
?><!--PHP content always loads before the rest of web content--> 

    <body>
        <main>

            <form action="/action_page.php" method="get">
                Title: <input type="text" name="postTitle"><br>
                Author: <input type="text" name="authorName"><br>
                Date: <input type="date" name="postDate"><br>
                Post: <textarea>Write here...</textarea>
                <input type="submit" value="Submit">
            </form><!--close for form-->

        </main><!--close for main-->
    </body><!--close for body-->

<?php
    include "footer.php";
?>
</html>