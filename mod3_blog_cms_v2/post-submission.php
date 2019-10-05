<!DOCTYPE html>
    <header>
        <title>Kristy's Portfolio & Blog | 19.10</title>
        <nav>
          <ul>
            <li><a href="index.php">HOMEPAGE</a></li>
            <li><a href="post-submission.php">CREATE NEW POST</a></li>
          </ul>
        </nav><!--close for navigation-->
    </header><!--close for header-->

    <body>
        <main>
            <head>
                <h1>Kristy's Portfolio & Blog</h1>
                <h2>Data Coordinator by Day | UX Design Student by Night</h2>
            </head><!--close for head-->

            <form action="/action_page.php" method="get">
                Title: <input type="text" name="postTitle"><br>
                Author: <input type="text" name="authorName"><br>
                Date: <input type="date" name="postDate"><br>
                Post: <textarea>Write here...</textarea>
                <input type="submit" value="Submit">
            </form><!--close for form-->

        </main><!--close for main-->

        <footer>
            <p><strong>Created by:</strong> Kristy Holden - San Diego, CA</p>
            <p><strong>Contact information:</strong> <a href="mailto:kholden4@lesley.edu">Kholden4@lesley.edu</a></p>
        </footer><!--close for footer-->
    </body><!--close for body-->
    
</html>