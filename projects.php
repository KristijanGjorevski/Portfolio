<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projects</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/projects.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
    <div class="projects-container">
        <?php   include("assets/header/header.php") ?>
        <section class="main-projects">
            <div class="projects-template">
                <div class="project-info">
                    <h2>Website - ICBOM</h2>
                    <p>This is a website for Non-Goverment Organization, which primarely focus is Defence, Safety and Peace in the Balkan.</p>
                </div>
                <div class="project-images">
                    <figure>
                        <img src="assets/pictures/projects/second/Index.jpg" alt="image">
                        <img src="assets/pictures/projects/second/Blog.jpg" alt="image">
                        <!-- <img src="assets/pictures/projects/second/Gallery.jpg" alt="image"> -->
                    </figure>
                </div>
                <div class="oppinion">
                    <p><span>This is my first project that i've build.</span> <span>  The main idea for this project was using the color and shapes of the Logo to create a compact light-weight site that has a lot of content ready to deploy.</span></p>
                </div>
            </div>
            <div class="projects-template">
                <div class="project-info">
                    <h2>Website - Portfolio</h2>
                    <p>Almost always begins with a...</p>
                </div>
                <div class="project-images">
                    <figure>
                        <img src="assets/pictures/projects/third/Index.jpg" alt="image">
                        <img src="assets/pictures/projects/third/About.jpg" alt="image">
                        <!-- <img src="assets/pictures/projects/third/3.png" alt="image"> -->
                    </figure>
                </div>
                <div class="oppinion">
                    <p><span>The idea behind my portfolio is be precise, informative and less complicated.</span></p>
                </div>
            </div>
            <div class="projects-template">
                <div class="project-info">
                    <h2>Website - Lawyering</h2>
                    <p>This is a site for Organization that has couple of different bases throught the continent.</p>
                </div>
                <div class="project-images">
                    <figure>
                        <img src="assets/pictures/projects/first/Index.jpg" alt="image">
                        <img src="assets/pictures/projects/first/Contact.jpg" alt="image">
                        <img src="assets/pictures/projects/first/Gallery.jpg" alt="image">
                    </figure>
                </div>
                <div class="oppinion">
                    <p><span>My main focus on this project was delivering the visitor a quick contact information throughout the site and information about the organization wherebouts through mapping.</span></p>
                </div>
            </div>
        </section>
        <div id="modalBox">
            <img id="modalImg" src="" alt="">
            <span id="modalText"></span>
        </div>
        <?php   include("assets/footer/footer.php") ?>
    </div>
    <script src="assets/javascript/projects.js"></script>
</body>
</html>