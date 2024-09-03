<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WEBSITE LAYOUT STRUCTURE</title>
    <link rel="stylesheet" href="../css/customstyle.css">
</head>

<body>
    <!-- STARTING HEADER -->
    <header>
        <h1>College of Information and Computing Sciences</h1>
        <h3>Bachelor of Science in Information System</h3>
        <div class="container">
            <a href="../index.html">Home</a> |
            <a href="about.html">About</a> |
            <a href="contactUs.html">Contact Us</a> |
            <a href="">Inquiry</a> |
            <a href="">Profile</a> |
        </div>
    </header>
    <!-- ENDING HEADER  -->
    <!-- STARTING SECTION -->
    <section>
        <nav>
            <ul class="navigation_menu">
                <li><a href="">Heading</a></li>
                <li><a href="table.html">Tables</a></li>
                <li><a href="list.html">HTML List</a></li>
                <li><a href="forms.html">Forms</a></li>
                <li><a href="form.post.html">Form Post Method</a></li>
                <li><a href="">Images</a></li>
            </ul>
        </nav>
        <article>
            <h2>Form Method Post Action</h2>
            <?php
                // form.post.php

                // Check if the form data was sent via GET method
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // Retrieve data from the query parameters
                    $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : '';
                    $age = isset($_GET['age']) ? htmlspecialchars($_GET['age']) : '';

                    // Display the received data
                    echo "<h2>Received Data</h2>";
                    echo "Name: " . $name . "<br>";
                    echo "Age: " . $age . "<br>";
                } else {
                    echo "Invalid request method.";
                }
                ?>

            
        </article>
    </section>
    <!-- END SECTION -->

    <!-- START FOOTER -->
     <footer>
            <h2>MarSU</h2>
        <div class="footer_menu">
            <a href="about.html">About</a> |
            <a href="">Policy</a> |
            <a href="">Terms of Use</a> |
            <a href="">Privacy</a> |
            <a href="">FAQ</a> |
            <a href="contactUs.html">Contact</a>
        </div>
        <div>
            <p><b>Copyright &copy 2024. </b> MarSU Sta Cruz Campus, BSIS Student</p>
        </div>
     </footer>
     <!-- END FOOTER -->

</body>
</html>