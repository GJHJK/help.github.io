<?php

include_once 'handleuser.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <script src="/darkmode.js"></script>
    <style>
        .body {
            overflow: hidden;
        }

        .active-link {
            color: #017aff;
            font-weight: 600;
        }

        .custom-link {
            color: #333;
            transition: all ease-in-out 0.3s;
            font-weight: 600;
        }

        .custom-link:hover {
            color: #017aff;
            text-decoration: none;
        }

        .left-align {
            float: left;
            margin-right: 10px;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 9999;
            background-color: transparent !important;
        }

        .navbar.navbar-scrolled {
            background-color: rgba(255, 255, 255, 0.9) !important;
            /* Change the value of '0.9' to adjust the opacity of the background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Optional: Add a box-shadow for a subtle effect */
        }

        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #8e8e8e;
            border-radius: 20px;
            border: 3px solid #f1f1f1;
        }

        ::-webkit-scrollbar-thumb:hover {
            background-color: #555;
        }

        /* Lighter dark mode styles */
        body.dark-mode {
            background-color: #2b2b2b;
            color: #e0e0e0;
        }

        body.dark-mode .custom-link,
        body.dark-mode .custom-link:hover,
        body.dark-mode .active-link {
            color: #82b1ff;
        }

        body.dark-mode .border-dark {
            border-color: #616161 !important;
        }
    </style>
    <script>
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= 100) {
                $(".navbar").addClass("navbar-scrolled");
            } else {
                $(".navbar").removeClass("navbar-scrolled");
            }
        });

    </script>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <br>
    <br>
    <br>
    <div class="container pt-5">
    <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
        <h1 class="fw-600" style="font-size:60px;">Features of Help-U</h1>

        <div class="row gx-3 gy-3 pt-5">
            <!--<div class="col-md-12">
        <p class="lh-lg">Help-U is a website that specialize in giving information in maintaining a good and healthy body such as exercise tips and dietary guides, this also gives information about maintaining a healthy mental and clear mind for those who have troubles with their mental health, we wont forget about our open forum where you can chat to all sorts of people and give advice and tips to each other. HelpU is only for giving information about maintaining health on both mental and physical and not for any serious cases, for any serious cases it would be best to hear it from a specialist in that field. We hope for u to be healthy both mentaly and physically and as always HelpME HelpU.</p>
    </div>-->

            <div class="LoginFeature">
                <h3 class="fw-600" style="font-size:35px">Login System </h3>
                <br>
                <!--<h3 style="font-size:25px">Security</h3>-->
                <ul style="font-size:18px">
                    <li>Upon entering the website user's will be required to create an account.</li>
                    <li>Creating an account in the website requires the user to use the 'Student Office 365' account.
                        This will ensure that no burlesque activities will be happening inside the website. </li>
                    <li>Help-U also offers its users the ability to become Anonymous when visiting the website, although
                        with limited access to other features.</li>
                </ul>
            </div>

            <div class="FrontPageFeature">
                <h2 class="fw-600" style="font-size:35px">Front Page </h2>
                <br>
                <!--<h3 style="font-size:25px">Security</h3>-->
                <ul style="font-size:18px">
                    <li>Entering the website's front page. The Navigation bar will be available for the user to use.
                    </li>
                    <li>And at the front page. The user will be able to pick from the 2 options to either see the
                        articles that talks about both physical and mental health.</li>
                </ul>
            </div>

            <div class="ArticlesFeature">
                <h2 class="fw-600" style="font-size:35px">Articles </h2>
                <br>
                <!--<h3 style="font-size:25px">Security</h3>-->
                <ul style="font-size:18px">
                    <li>The website's frontpage allows the user to pick between articles that focuses in either
                        <strong>Physical</strong> or <strong>Mental</strong> health.
                    </li>
                </ul>
            </div>

            <div class="NavigationFeature">
                <h2 class="fw-600" style="font-size:35px">Navigation Bar </h2>
                <br>
                <!--<h3 style="font-size:25px">Security</h3>-->
                <ul style="font-size:18px">
                    <li>The Navigation bar contains: <strong>Home</strong>,
                        <strong>Forum</strong>, <strong>Features</strong>,
                        <strong>About</strong>, and a dropdown option to customize their profile.
                    </li>
                </ul>
            </div>

            <div class="ForumFeature">
                <h2 class="fw-600" style="font-size:35px">Forum</h2>
                <p>Our forum is the perfect place to connect with like-minded people and engage in meaningful
                    discussions about a variety of topics. Here are just a few of the features that make it so great:
                </p>
                <ul style="font-size:18px">
                    <li>Create your own threads of discussion and get feedback from others</li>
                    <li>Engage in lively conversations by commenting on other people's threads</li>
                    <li>Filter threads to find exactly what you're looking for, whether it's the latest posts or the
                        most popular discussions</li>
                </ul>
                <p>With our user-friendly interface and robust feature set, you'll be able to dive right into the
                    conversations that matter most to you. Take a look at some examples of our forum below:</p>
                <img src="forum-interface.png" alt="Example of forum interface" class="img-thumbnail w-50"
                    style="border: 1px solid #ccc;">
            </div>

            <div class="AboutFeature">
                <h2 class="fw-600" style="font-size:35px">About </h2>
                <p>At Help-U, we are committed to providing a safe and supportive environment for individuals looking to
                    improve their physical and mental health. Here are some of the features that make us stand out:</p>
                <ul style="font-size:18px">
                    <li>Access to exercise tips and dietary guides to help you maintain a healthy body</li>
                    <li>Mental health advice and resources to support your emotional well-being</li>
                    <li>An open forum where you can connect with like-minded individuals and engage in meaningful
                        discussions</li>
                    <li>Ability to create your own threads of discussion and get feedback from others</li>
                    <li>Engage in lively conversations by commenting on other people's threads</li>
                    <li>Filter threads to find exactly what you're looking for, whether it's the latest posts or the
                        most popular discussions</li>
                </ul>
                <p>We understand that maintaining good health is not just about physical fitness, but also mental
                    wellness. That's why we have a team of dedicated professionals who are committed to providing you
                    with the best resources and support. With our user-friendly interface and robust feature set, you
                    can be confident that you have everything you need to achieve your health goals.</p>
            </div>



            <div class="PersonalizationFeature">
                <h2 class="fw-600" style="font-size:35px">Personalization </h2>
                <br>
                <!--<h3 style="font-size:25px">Security</h3>-->
                <ul style="font-size:18px">
                    <li>The website's personalization feature allows the user to:</li>
                    <li><strong>Change</strong> their usernames, allowing the user to personalize their accounts.</li>
                    <li><strong>Upload</strong> images to change their profile picture.</li>
                    <li><strong>Password Customization</strong> allowing the user to change their passwords whenever
                        they want, to have a better security.</li>
                </ul>
            </div>
        </div>
    </div>
    <br>

    <script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>