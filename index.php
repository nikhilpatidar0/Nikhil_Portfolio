<?php include 'sendmail.php'; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikhil Portfolio</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="your-path-to-fontawesome/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="CSS/default.css">
    <link id="theme-style" rel="stylesheet" type="text/css" href="">
</head>

<body>
    <section class="s1">
        <div class="main-container">
            <div class="greeting-wrapper">
                <h1>Hello world, I'm Nikhil Patidar</h1>
            </div>

            <div class="intro-wrapper">
                <div class="nav-wrapper">
                    <div class="dots-wrapper">
                        <a href="index.php">
                            <div class="browser-dots dots" id="dot-1"></div>
                        </a>
                        <a href="index.php">
                            <div class="browser-dots dots" id="dot-2"></div>
                        </a>
                        <a href="index.php">
                            <div class="browser-dots dots" id="dot-3"></div>
                        </a>
                    </div>
                    <ul id="navigation">
                        <li><a href="contact_icon.html" target="_blank">Contact</a></li>
                    </ul>
                </div>
                <div class="left-column">
                    <img src="images/profile.jpg" id="profile_pic">
                    <h5 style="text-align:center; line-height:0;">Personalize Theme</h5>

                    <div id="theme-option-wrapper">
                        <div data-mode="light" class="theme-dot" id="light-mode"></div>
                        <div data-mode="blue" class="theme-dot" id="blue-mode"></div>
                        <div data-mode="green" class="theme-dot" id="green-mode"></div>
                        <div data-mode="purple" class="theme-dot" id="purple-mode"></div>
                    </div>

                    <p id="settings-note">*These settings will be saved for <br>your next visit</p>
                </div>
                <div class="right-column">
                    <div id="preview-shadow">
                        <div id="preview">
                            <div class="corner" id="corner-tl"></div>
                            <div class="corner" id="corner-tr"></div>
                            <h3>What I Do</h3>
                            <p>Well not much, I just learn stuff and try to implement it in real world.</p>
                            <div class="corner" id="corner-br"></div>
                            <div class="corner" id="corner-bl"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="s2">
        <div class="main-container">

            <div class="about-wrapper">
                <div class="about-me">
                    <h4>More about me</h4>
                    <p>I build new projects just to tickle my brain and love learning stuff.</p>

                    <hr>

                    <h4>TOP EXPERTIES</h4>

                    <p>Fullstack developer with primary focus on Java * MySQL:
                        <a target="_blank" href="resume.pdf">Download Resume</a>
                    </p>
                    <div id="skills">
                        <ul>
                            <h4>Software skills</h4>
                            <li>Java</li>
                            <li>MySQL</li>
                            <li>C#</li>
                            <li>C++</li>
                        </ul>
                        <ul>
                            <h4>Web skills</h4>
                            <li>HTML</li>
                            <li>CSS</li>
                            <li>JavaScript</li>
                            <li>Bootstrap</li>
                        </ul>
                    </div>
                </div>

                <div class="social-links">
                    <a href="contact_icon.html" target="_blank">
                        <img src="images/contacts.png" id="social_img">
                    </a>
                    <h3>Find me on my socials</h3>
                    <a href="https://www.linkedin.com/in/nikhil-patidar-ba2939182/"><i class="fab fa-linkedin" aria-hidden="true"></i></a>
                    <a href="https://www.instagram.com/nikhilpatidar2020/"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://www.facebook.com/nikhil.patidar.1800"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="mailto:nikhilpatidar0@gmail.com"><i class="fab fa-google" aria-hidden="true"></i></a>
                    <a href="https://github.com/0103CS181091"><i class="fab fa-github" aria-hidden="true"></i></a>
            </div>

        </div>
    </section>

    <section class="s1">
        <div class="main-container">
            <h3 style="text-align:center;" id="past-projects">Some of my past projects</h3>
            <div class="post-wrapper">
                <div class="post">
                    <img src="images/LMS.png" class="thumbnail">
                    <div class="post-preview">
                        <h6 class="post-title">Library Management System</h6>
                        <p class="post-intro">A sample library management software which inserts, fetches and updates books details<br>Using Java & MySQL</p>
                        <a href="post.html">Read More</a>
                    </div>
                </div>
                <div class="post">
                    <img src="images/bookbird.png" class="thumbnail">
                    <div class="post-preview">
                        <h6 class="post-title">BookBird - An online book store</h6>
                        <p class="post-intro">An online web store for purchasing and selling books <br>Using HTML, CSS, php & MySQL(XAMPP)</p>
                        <a href="post.html">Read More</a>
                    </div>
                </div>
                <div class="post">
                    <img src="images/portfolio.png" class="thumbnail">
                    <div class="post-preview">
                        <h6 class="post-title">Portfolio website</h6>
                        <p class="post-intro">A responsive portfolio website containing details of projects & contact information<br> Using HTML, CSS, JavaScript & php</p>
                        <a href="post.html">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="JS/vanilla-tilt.js"></script>
        <script type="text/javascript" src="JS/vanilla-tilt-setting.js"></script>
        
        
    </section>

    <section class="s2">
        <div class="main-container">
            <div class="form-container">
                <form action="" method="post" id="contact-form">

                    <h3>Get in touch</h3>
                    <?php
                        echo $alert;
                    ?>
                    <class class="container">

                        <input name="name" type="text" placeholder="Name" />
                        <input name="subject" type="text" placeholder="Subject" />
                        <input name="email" type="email" placeholder="Email" required/>
                        <textarea name="message" placeholder="Message" style="height:100px;" required></textarea>
                        <input name="submit" type="submit" value="Send"/>

                    <script type="text/javascript" src="JS/mailer.js"></script>
                </form>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="JS/script.js"></script>
</body>

</html>