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
    <br>

    <div class="container pt-5">
    <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
        <h1 class="fw-600" style="font-size:60px;">Forum</h1>
        <div class="row gx-3 gy-3 pt-5">
            <div class="col-md-6">
                <div class="card border rounded-4 p-4 border-dark border-5 ">
                    <div class="text-center">
                        <img src="mental icon.png" class="pb-2" width="100" alt="">
                        <h3 class="m-5 fs-1">Mental Forum</h3>
                    </div>
                    <a href="/fmental.php" class="stretched-link"></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border rounded-4 p-4 border-dark border-5">
                    <div class="text-center">
                        <img src="physical icon.png" class="pb-2" width="100" alt="">
                        <h3 class="m-5 fs-1">Physical Forum</h3>
                        <a href="/fphysical.php" class="stretched-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/darkmode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>