<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/circle.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/fonts.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
    <div class="page_container">
        <?php   include("assets/header/header.php"); ?>
        <div class="sections">
            <div class="main">
                <div class="video">
                    <video autoplay loop>
                        <!-- <source src="assets/videos/backround.webm" type="video/webm"> -->
                        <source src="assets/videos/backround.mp4" type="video/mp4">
                        <!-- <source src="assets/videos/full.mp4" type="video/mp4"> -->
                    </video>
                </div>
                <div class="main_content">
                    <h1>Hello! I'm Kristijan</h1>
                    <span>Welcome</span>
                    <a class="about_btn" href="about.php">FULL INFO</a>
                </div>
                <div class="mouse-scroll">
                    <div class="icon-scroll"></div>
                    <div class="icon-text">Scroll down</div>
                </div>
            </div>
            <div class="short_container">
                <div class="short_about">
                <div class="short_content">
                    <h2>
                        <div class="potentiation kalam">Simplicity</div>
                        from the inside out
                    </h2>
                    <p>
                        <span class="potentiation">Hello</span>, I’m 25 year old enthusiastic <span class="potentiation">designer</span> with a modest experience in the digital <span class="potentiation">profession</span> with appealing glasses.
                    </p>
                    <a class="about_btn" href="#">CHECK BIO</a>
                </div>
                <div class="kiko"><img src="assets/pictures/kiko/slika.png" alt="image"></div>
                </div>
            </div>
            <div class="projects_container">
                <div class="projects">
                    <div id="project-template">
                        <div class="first">
                        <h2>PROJECT #1</h2>
                        <div class="examples">
                            <img src="assets/pictures/projects/first/1.png" alt="picture project">
                            <img src="assets/pictures/projects/first/2.png" alt="picture project">
                            <img src="assets/pictures/projects/first/3.png" alt="picture project">
                        </div>
                        </div>
                     </div>   
                    <div id="project-template">
                        <div class="second">
                        <h2>PROJECT #2</h2>
                        <div class="examples">
                            <img src="assets/pictures/projects/second/1.png" alt="picture project">
                            <img src="assets/pictures/projects/second/2.png" alt="picture project">
                            <img src="assets/pictures/projects/second/3.png" alt="picture project">
                        </div>
                        </div>
                    </div>
                    <div id="project-template">
                        <div class="third">
                        <h2>PROJECT #3</h2>
                        <div class="examples">
                            <img src="assets/pictures/projects/third/1.png" alt="picture project">
                            <img src="assets/pictures/projects/third/2.png" alt="picture project">
                            <img src="assets/pictures/projects/third/3.png" alt="picture project">
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="skills_container">
            <div class="skills_content">
                <h2>Confidence</h2>
                <div class="graphical_scale">
                    <section>
                        <div class="c100 p80">
                            <span>80%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>WEB DESIGN</span>
                    </section>
                    <section>
                        <div class="c100 p35">
                            <span>35%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>ARTWORK</span>
                    </section>
                    <section>
                        <div class="c100 p60">
                            <span>60%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>MARKETING</span>
                    </section>
                    <section>
                        <div class="c100 p70">
                            <span>70%</span>
                            <div class="slice">
                                <div class="bar"></div>
                                <div class="fill"></div>
                            </div>
                        </div>
                        <span>BRAND IDENTITY</span>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <?php   include("assets/footer/footer.php"); ?>
    <script src="assets/javascript/index.js"></script>
</body>

</html>