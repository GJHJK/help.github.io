<?php

include_once 'handleuser.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="style.css">
    <script src="/darkmode.js"></script>
    <style>
        .body {
            overflow: scroll;
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
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container pt-5">
        <!-- Add the dark mode toggle button -->
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
        <h1 class="fw-600" style="font-size:60px;">Welcome,
            <?php echo ucfirst($username); ?>!
        </h1>


        <div class="row gx-3 gy-3 pt-5">
            <div class="col-md-6">
                <div class="border rounded-4 p-4 border-5 border-dark">
                    <div class="text-center">
                        <img src="mental icon.png" class="pb-2" width="50" alt="">
                        <h3 class="m-0 pb-2">Mental</h3>
                        <p class="m-0 pb-2">
                            Mental fitness is just as important as physical fitness,
                            and shouldn’t be neglected. Including mental dexterity exercises into
                            your daily routine can help you reap the benefits of a sharper mind and a healthier body for
                            years to come.
                        </p>
                        <a href="mental.php" class="text-decoration-none">Visit</a>

                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border rounded-4 p-4 border-5 border-dark">
                    <div class="text-center">
                        <img src="physical icon.png" class="pb-2" width="50" alt="">
                        <h3 class="m-0 pb-2">Physical</h3>
                        <p class="m-0 pb-2">
                            Physical health represents one dimension of total well-being.
                            The term refers to the state of your physical body and how well it's operating.
                            With my students, I break physical health down into four elements.

                        </p>
                        <br>
                        <a href="physical.php" class="text-decoration-none">Visit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>