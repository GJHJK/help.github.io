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

        /* Add styles for the bg-body-secondary and border-dark-subtle classes */
        body.dark-mode .bg-body-secondary {
            background-color: #4a4a4a;
            color: #e0e0e0;
        }
    </style>
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
        <h1 class="fw-600" style="font-size:60px;">PHYSICAL</h1>
        <div class="row gx-3 gy-3 pt-5">
            <p class="h2">5 Tips in Maintaining a Healthy Weight.</p>
            <div class="border rounded-4 p-4 border-2 ">
                <div class="p-4 mb-2">

                    <b>Maintaining a healthy</b> weight is essential for good health. It can be
                    challenging to achieve and maintain a healthy weight, but there are simple steps you can take to
                    help reach your goals. In this article, we’ll provide tips and information on how to maintain a
                    healthy weight.
                    <br>
                    <img src="exer.jpg" alt="Description of image" width="400" height="300"
                        class="left-align img-fluid">
                    <b>Portion Control</b>- Portion control is important for maintaining a healthy weight. Aim for
                    smaller portion sizes and avoid going back for seconds. Use smaller plates and bowls to help control
                    your portions.<br><br>
                    <b>Eat A Balanced Diet </b>- Eating a balanced diet is crucial for maintaining a healthy weight.
                    Make sure to include plenty of fruits and vegetables, whole grains, lean protein sources, and
                    healthy fats in your diet. Avoid processed foods, sugary drinks, and foods high in saturated and
                    trans fats, as they can contribute to weight gain. <br><br>
                    <b>Limit Sugary Drinks</b>- Sugary drinks, such as soda and soft drinks, can contribute to weight
                    gain. Instead, you should opt for water, unsweetened tea, or low-fat milk.

                    <br>
                    <br>
                    <b>Get Enough Sleep</b>- Getting enough sleep is crucial for maintaining a healthy weight. Lack of
                    sleep can disrupt hormones that regulate appetite and metabolism, which can lead to overeating and
                    weight gain. Aim for 7-9 hours of sleep each night.
                    <br>
                    <br>
                    <b>Doing Exercises</b>- And lastly, doing exercises. Regular exercise is essential for good physical
                    health. It helps you to strengthen your muscles and it can also improve your cardiovascular health.
                    Aim for at least 30 minutes of moderate physical activity most days of the week. This can include
                    activities such as a brisk walk, jogging, cycling, or even swimming.

                    In conclusion, maintaining a good physical health requires regular exercise, a healthy diet, enough
                    sleep, and avoidance of harmful substances. By incorporating these habits into your daily routine,
                    you can ensure a healthier, happier life.
                    <br>
                    <br>
                </div>
                <p class="fs-8">From: <a href="http://bit.ly/3YT7fuY" target="_blank">28 Health and Nutrition Tips That
                        Are Actually Evidence-Based</a></p>
            </div>

            <div class="row gx-3 gy-3 pt-5">
                <p class="h2">The Importance of a Good Sleep for your Health</p>
                <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                    <div class="p-4 mb-2">

                        <b>Getting enough quality sleep</b> is crucial for a good health and
                        wellbeing. However, with our busy lives, it can be challenging to maintain a good sleeping
                        schedule. In this article, we’ll explain why having a good sleeping schedule is essential for
                        your health and how it affects your overall wellbeing.
                        <br>
                        <img src="sleeping.jpg" alt="Description of image" width="1500" height="300"
                            class="left-align img-fluid">
                        <br>
                        <br>
                        <b>It Helps in Regulating Hormones</b>- Quality sleep helps regulate hormones that control
                        appetite, metabolism, and stress. Lack of sleep can disrupt the production of these hormones,
                        leading to overeating, weight gain, and increased stress levels.
                        <br><br>
                        <b>Enhances your Physical Performance</b>- Getting enough quality sleep is essential for
                        enhancing physical performance. During sleep, your body repairs, and regenerates tissues,
                        including muscles and bones. Lack of sleep can lead to reduced physical performance, increased
                        risk of injury, and longer recovery times.
                        <br><br>
                        <b>Boosts your Immune System</b>- Quality sleep helps boost your immune system, which helps
                        protect you from illness and disease. During sleep, your body produces cytokines, which are
                        proteins that help fight infection, inflammation, and stress. Lack of sleep can reduce the
                        production of cytokines, making you more susceptible to illness and disease.
                        <br><br>
                        <b>Reduces risk of Chronic Diseases</b>- Getting enough quality sleep can help reduce the risk
                        of chronic diseases, such as obesity, diabetes, and heart disease. Lack of sleep can disrupt
                        hormones that control appetite, metabolism, and blood sugar levels, increasing the risk of
                        developing these conditions.

                        <br><br>

                        In conclusion, having a good sleeping schedule is crucial for good health and wellbeing. It
                        helps regulate hormones, boosts the immune system, improves mental health, enhances physical
                        performance, and reduces the risk of chronic diseases. By prioritizing quality sleep and
                        maintaining a consistent sleeping schedule, you can help improve your overall health and
                        wellbeing.


                        <br><br>
                    </div>
                    <p class="fs-8">From: <a href="http://bit.ly/3YT7fuY" target="_blank">28 Health and Nutrition Tips
                            That Are Actually Evidence-Based</a></p>
                </div>
                <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                    <div class="p-4 mb-2 "><b class="fs-4">Breathing exercise (to help calm yourself in
                            stressful situations)</b><br>
                        Box breathing is an exercise used by those under stressful professions like firemen, soldiers,
                        and
                        doctors.
                        It encourages to lower the stress hormone called cortisol and can even lower blood pressure, it
                        helps calm the mind and body for you to be able to think more clearly and make the right
                        decisions.<br><br>
                        Box breathing can be done by imagining a box with lines that consist of 4 seconds each, with
                        each
                        line you can start to imagine how to do box breathing.
                        First inhale for 4 seconds, pause or hold your breath for 4 seconds, exhale for 4 seconds, then
                        pause or hold your breath for another 4 seconds,
                        then you can repeat the cycle, do this for 3 to 4 rounds and you can expect a calmer state of
                        mind
                        and body.<br><br>
                        It is always important that you stick to this breathing routine throughout the situation, though
                        you
                        can expect yourself to fail after a few tries,
                        it is important to exercise discipline throughout the whole exercise.<br> <br>


                        <b class="fs-4">Yoga poses that help you be more flexible!</b><br>
                        These are some of the poses that are good for pretty much anyone to become more flexible. If you
                        have heart problems please consult your doctor first.<br><br>
                        <b>Cat/Cow Pose -</b> This pose increases the flexibility in your neck, shoulders, and
                        spine.<br>
                        <b> Mountain Pose -</b> helps improve posture, alignment, and balance.<br>
                        <b> Cobra Pose - </b> Improves balance, spinal posture, and flexibility.<br>
                        <b>Downward facing Dog pose -</b> stretches and widens the hamstrings, the calves, and the
                        Achilles
                        tendon.<br><br>
                        <p class="fs-8">From: <a href=" https://health.clevelandclinic.org/box-breathing-benefits/"
                                target="_blank"> https://health.clevelandclinic.org/box-breathing-benefits/</a></p>
                    </div>
                </div>

                <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                    <div class="p-4 mb-2 ">
                        <b class="fs-4">Relieving Neck Pain</b><br><br>
                        1. Apply cold ice or anything cold into your neck for 15 minutes to reduce the pain and
                        swelling.
                        <br><br>
                        2. Apply hot compress, as an alternative if the cold compress does not work. Remember to wait
                        for
                        about an hour if you just used a cold compress on your neck. A warm shower may also do the
                        trick.
                        <br><br>
                        3. Basic stretching of the neck can help relieve some of the pain, simple exercises like simply
                        looking from side to side can help your neck release some of the tension that has built up from
                        your
                        recent activities, you can also pair this up with light massages to further alleviate the pain
                        in
                        your neck.<br><br>
                        <p class="fs-8">From: <a
                                href="https://www.mayoclinic.org/diseases-conditions/neck-pain/diagnosis-treatment/drc-20375587"
                                target="_blank">https://www.mayoclinic.org/diseases-conditions/neck-pain/diagnosis-treatment/drc-20375587</a>
                        </p>
                    </div>

                </div>



                <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                    <div class="p-4 mb-2 ">
                        <b class="fs-4">Stopping Nosebleeds</b><br><br>
                        1.Sit down and firmly pinch above your nostrils, for 10-15 minutes <br><br>
                        2.Lean yourself forward so the blood inside your nose will dry inside it instead of leaking into
                        your throat. <br><br>
                        3.Stay upright so that the blood pressure in the blood vessels of your nose will discourage
                        further
                        bleeding. <br><br>
                        4.You may also put a cold compress on your forehead or at the back of your neck to help with the
                        nosebleed.<br><br>

                        <p class="fs-8">From: <a
                                href="https://www.nhsinform.scot/illnesses-and-conditions/ears-nose-and-throat/nosebleed/"
                                target="_blank">https://www.nhsinform.scot/illnesses-and-conditions/ears-nose-and-throat/nosebleed/</a>
                        </p>
                    </div>
                </div>


                <div class="border rounded-4 p-4 border-2 border-dark-subtle ">
                    <div class="p-4 mb-2 ">
                        <b class="fs-4">Being Active Physically</b><br><br>
                        1. Aerobic activities, like a simple jogging to biking can help you become more active, of
                        course
                        you should do this at least once a week if you have time constraints. <br><br>
                        2. Sports that you like, or interested in. By doing sports you challenge your body into
                        competing
                        with other people and having fun along the way, though you must always remember to warm up
                        first.<br><br>
                        3. Gym, if you don't want to go outdoors, you can try the gym, it's full of stationary equipment
                        that won't require you to go out, this can also be
                        a good opportunity for you to make new friends with people that also go to the gym, and always
                        remember that you don't have to push yourself too much when doing exercises.
                        <br>
                        <br>
                        <p class="fs-8">From: <a
                                href="https://www.niddk.nih.gov/health-information/weight-management/tips-get-active/tips-starting-physical-activity"
                                target="_blank">https://www.niddk.nih.gov/health-information/weight-management/tips-get-active/tips-starting-physical-activity</a>
                        </p>
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