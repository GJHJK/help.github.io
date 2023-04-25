<?php

include_once 'handleuser.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>
        .body {
            overflow: hidden;
            padding-top: 100px;
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
            background-color: white !important;
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

        .container1 {
            position: relative;
            width: 50%;
            height: 250px;
        }

        .image1 {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle1 {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 100%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .container1:hover .image1 {
            opacity: 0.3;
        }

        .container1:hover .middle1 {
            opacity: 1;
        }

        .fa {
            font-size: 70px;
            text-align: center;
            text-decoration: none;
            border-radius: 50%;
            line-height: 250px;
        }

        .fa-facebook {
            font-size: 40px;
        }

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

        /* Add styles for the navbar and cards */
        body.dark-mode .navbar {
            background-color: #333333 !important;
        }

        body.dark-mode .card {
            background-color: #424242;
            color: #e0e0e0;
        }
    </style>
</head>

<body>

    <?php include 'navbar.php'; ?>
    <br>
    <br>
    <br>
    <section style="padding-bottom: 100px;">
    
        <div class="container pt-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
            <h1 class="fw-600" style="font-size:50px; text-align: center;">About</h1> 

            <div class="row gx-3 gy-3 pt-5">
                <div class="col-md-12">
                    <p class="lh-lg" style="text-align: center; font-size: 20px;">Hello and welcome to your safe space
                        and gain knowledge on getting in a better shape and keeping a calm and stabilized mental health.
                        <br>
                        Help-U is a website that specialize in giving information in maintaining a good and healthy body
                        such as exercise tips and dietary guides, this also gives information about maintaining a
                        healthy mental and clear mind for those who have troubles with their mental health, we wont
                        forget about our open forum where you can chat to all sorts of people and give advice and tips
                        to each other. <br>
                        HelpU is only for giving information about maintaining health on both mental and physical and
                        not for any serious cases, for any serious cases it would be best to hear it from a specialist
                        in that field. <br>
                        We hope for u to be healthy both mentaly and physically and as always HelpME HelpU.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <br>
    <section>
        <div class="container pt-5">
            <h1 class="fw-600" style="font-size:50px; text-align: center;">Vision</h1>

            <div class="row gx-3 gy-3 pt-5">
                <div class="col-md-12">
                    <p class="lh-lg" style="text-align: center; font-size: 20px;">Our team believes that our well-being
                        affects our performance as a student. A physically healthy and mentally healthy individual
                        creates and can adapt into more opportunities inside the school and also in life in general so
                        we created HELP-U, A website focusing on giving information about physical and mental health.
                        HELPU will use this information for guiding and inspiring the students of STI College
                        Pasay-Edsa.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5">
            <h1 class="fw-600" style="font-size:50px; text-align: center;">Mission</h1>

            <div class="row gx-3 gy-3 pt-5">
                <div class="col-md-12">
                    <p class="lh-lg" style="font-size: 20px; text-align: center;">To make a tool for the students and to
                        guide them in improving their lifestyle and live a healthy life. As HELP-U guides the students
                        to have better mental and physical health, the website is also aiming for students’ increased
                        good performance academically.</p>
                </div>
            </div>
        </div>
    </section>

    <div style="padding: 70px;">
        <h1 style="font-size:45px; text-align: center;">The Team</h1>
    </div>

    <section style="padding-bottom: 70px;">
        <div class="person">
            <div class="row justify-content-md-center">

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/jajaja.jpg" alt="Jaja Albaladejo" class="image1"
                                style="width: 251px; padding: 3px;">
                            <div class="middle1">
                                <a href="https://www.facebook.com/jaz.manzanello" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px">Albaladejo, Jaja</h2>
                            <p class="title">Leader</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/iverson.jpg" alt="Iverson Dela Cruz" class="image1"
                                style="width: 251px; align-self: center; padding: 3px;">
                            <div class="middle1">
                                <a href="https://www.facebook.com/Jidc20" class="fab fa-facebook" target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Dela Cruz, Jay</h2>
                            <p class="title">Main Programmer</p>
                        </div>
                    </div>
                </div>


                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/Screenshot_270.png" alt="Jacob Desear" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/profile.php?id=100006448577031"
                                    class="fab fa-facebook" target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Desear, Jacob</h2>
                            <p class="title">Programmer</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/wim.png" alt="Wim Robert De Jose" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/wiimmm" class="fab fa-facebook" target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">De Jose, Wim</h2>
                            <p class="title">Programmer</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/DelaCruz_Emar.png" alt="Emar Yron Dela Cruz" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/emaryron.delacruz" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Dela Cruz, Emar</h2>
                            <p class="title">Programmer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-bottom: 100px;">
        <div class="person">
            <div class="row justify-content-md-center">

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/jacob.jpg" alt="Jacob Clemente" class="image1"
                                style="width: 251px; align-self: center; padding: 3px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/100021342398765/" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Clemente, Jacob</h2>
                            <p class="title">Graphic Designer</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/Dana_.png" alt="Dana Elisha Curbi" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/100024437525287/" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Curbi, Dana</h2>
                            <p class="title">Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/nava.jpg" alt="Chauncey Louise Nava" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/100003247895337/" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px">Nava, Chauncey</h2>
                            <p class="title">Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/Dreigh.png" alt="Dreigh Jose" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/100008075086641/" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Jose, Dreigh</h2>
                            <p class="title">Researcher</p>
                        </div>
                    </div>
                </div>

                <div class="col col-lg-2">
                    <div class="card " style="width: 253px;">

                        <div class="container1">
                            <img src="images/dangel.png" alt="Aaron Dangel" class="image1"
                                style="width: 251px; align-self: center; padding: 3px; object-fit: contain; max-height: 250px;">
                            <div class="middle1">
                                <a href="https://web.facebook.com/100002623507825/" class="fab fa-facebook"
                                    target="_blank"></a>
                            </div>
                        </div>

                        <div class="container">
                            <h2 style="font-size: 25px; padding-top: 30px;">Dangel, Aaron</h2>
                            <p class="title">Researcher</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="/darkmode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>