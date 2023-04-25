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
    <!-- NAV -->
    <?php include 'navbar.php'; ?>
    <br>
    <br>
    <div class="container pt-5">
        <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
    <!-- CONTENT -->
    <div class="container pt-5">
        <h1 class="fw-600" style="font-size:60px;">MENTAL</h1>
        <br>
        <div class="row gx-5 gy-5 pt-3">
            <p class="h2">Exercising keeps your worries away!</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2">

                    <b>Exercise</b> is recognized to improve health and prevent disease. Most people are
                    unaware that it can improve mental health.
                    <br>
                    <br>
                    <img src="exercise.jpg" alt="Description of image" width="400" height="300"
                        class="left-align img-fluid">
                    <b>Reduces Symptoms of Anxiety and Depression</b>- Depression and anxiety are prevalent mental
                    health conditions that can impact mood and behavior. Exercise reduces anxiety and depression.
                    Exercise at least 30 minutes three to five days a week to boost mental wellness.<br><br>
                    <b>Increases the Production of Endorphins </b>- The brain releases a substance called endorphins,
                    which is responsible for the euphoric sensations you get when something nice happens. Its production
                    is boosted by exercise, making one feel happier and less stressed. <br><br>
                    <b>Boosts Self-Esteem</b>- Exercising regularly can boost a person's sense of
                    self-worth. It's a great way to relieve tension and unpleasant feelings while also boosting
                    confidence.
                    In conclusion, there are many positive effects of physical exercise on mental health. Doing out is
                    beneficial for your health in many ways, both physically and mentally. Even a light workout can make
                    you feel better.
                    <br>
                    <br>
                </div>
                <p class="fs-8">From: <a href="http://bit.ly/3LwTmj8" target="_blank">How Many Days a Week Should You
                        Workout? – Cleveland Clinic</a></p>
            </div>

            <p class="h2">Why It's Essential to be Kind to Yourself for Mental Health</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2">

                    <b>Self-compassion and refraining from negative self-talk can significantly improve our mental
                        health. It can help us become more resilient, increase our self-worth, and lead to a more
                        positive outlook on life. <br>
                        One of the most effective tools for coping and resilience we have is self-compassion, which
                        helps both our mental and physical health. It has been proven that self-compassion is one of the
                        best ways we can aid ourselves even in challenging circumstances, so don't forget to be kind to
                        yourself and others.
                    </b>

                    <br>
                    <br>
                    <b>Here are some of the ways that we can practice self-compassion: </b> <br><br>
                    <img src="social.jpg" alt="Description of image" width="600" height="500"
                        class="left-align img-fluid">
                    <b>Treat yourself </b>– Whether it’s the movies, or eating desserts, you should allow yourself to
                    enjoy things that you don’t usually get the chance to do. Sometimes the best company you can have is
                    yourself!<br><br>
                    <b>Dedicate a few hours for yourself from time to time</b> – Use this time to reflect on the past
                    events, and practice gratitude for everything. Find a great view and just stop and admire everything
                    for a while. Remember where and how far you’ve come, the challenges you’ve faced, and where you are
                    now, be thankful.
                    <br><br>
                    <b>Motivate yourself to do better </b>– It has been statistically proven that by motivating
                    yourself, you can work more efficiently at your current task. It won’t to try right?
                    The practice of self-compassion considerably improves one's ability to handle difficult situations.
                    Self-compassion and preventing critical self-talk are essential for maintaining a good mental health
                    and wellbeing. We may improve our resilience,
                    boost our self-worth, and maintain a more upbeat attitude on life by being kind and empathetic to
                    ourselves. Self-compassion can be challenging to put into practice at times,
                    but it's worth stating that everyone has bad days and that it’s okay to take a break and rest from
                    time to time.
                    <br><br>
                    In conclusion, taking care of ourselves is good for both our physical and emotional wellbeing.
                    Always remember to practice compassion and gratitude toward one another as well as to ourselves, and
                    to treat ourselves with the same decency and consideration that we would show to a friend in need.
                    <br>
                    <br>
                </div>
                <p class="fs-8">From: <a href="http://bit.ly/3LwTmj8" target="_blank">How Many Days a Week Should You
                        Workout? – Cleveland Clinic</a></p>
            </div>

            <p class="h2">The importance of support groups.</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2 ">

                    <b>Spending</b> time with friends and family is an essential part of life, but did you know that it
                    can
                    also help your mental wellbeing? Here we will be finding out how spending time with your loved ones
                    can improve your mental health.
                    <br>
                    <br>
                    <img src="out.jpg" alt="Description of image" width="400" height="370" class="left-align img-fluid">
                    <br>
                    <b>Provides Emotional Support</b>- Having a good support system is crucial for maintaining good
                    mental health. When we spend time with our friends and family, we receive support, which helps us
                    cope with stress, anxiety, and other emotional challenges. Just be sure that the people you open up
                    to are the ones you trust the most, since you are being vulnerable towards them.<br><br>
                    <b>Promotes Positive Social Interaction </b>- Spending time with the people you love the most
                    provides opportunities for positive social interaction, which can improve your mood. Positive social
                    interaction includes activities such as laughing, sharing stories, and engaging in fun activities.

                    All in all, spending time with your friends and family has numerous benefits for your mental health.
                    Apart from already being a fun way to spend time, you can also reap these benefits!
                    <br><br>
                    <b>Reduces Feelings of Loneliness</b>- Loneliness is a common issue that can affect one’s mental
                    health, Spending time with friends and family can help reduce these feelings and increase your
                    social behavior, which in turn has been associated with lowered levels of depression.
                    <br>
                    <br>
                </div>
                <p class="fs-8">From: <a href="http://bit.ly/3LwTmj8" target="_blank">How Many Days a Week Should You
                        Workout? – Cleveland Clinic</a></p>
            </div>

            <p class="h2">Hobbies, activities, galore!</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2 ">

                    <b>Hobbies and activities</b> can be a great way to improve your mental health and overall
                    well-being. Engaging in activities and hobbies that you love not only improves yourself as a whole,
                    but it also has some benefits mentally.
                    <br>
                    <br>
                    <img src="hobby-money.png" alt="Description of image" width="400" height="370"
                        class="left-align img-fluid">
                    <br>
                    <b>Engaging in hobbies and activities</b> can help you relax and unwind, allowing you to forget
                    about your problems for a while.
                    Which in turn reduces your stress level. Whether it’s
                    drawing, making music, or doing yoga, taking time to focus on something other than your day-to-day
                    responsibilities can be a great way
                    to alleviate stress. Also, it provides you with opportunities for making social connections,
                    boosting your self-confidence,
                    and much more. There are many kinds of activities that can be done alone or with a group of friends,
                    like: taking a dance class, jogging, drawing, painting, gardening, camping, joining a club,
                    volunteering, and much more.
                    <br><br>
                    <b>Doing what you love</b>, where your passion is the best way to ease your stress, find what’s best
                    for you, and your mental health will thank you!
                    <br>
                    <br>
                </div>
                <p class="fs-8">From:
                    <a href="https://connecthealth.org.au/enews/pursuing-a-hobby-can-improve-your-mental-health/#:~:text=Engaging%20in%20creati
                     ve%20activities%20such,wellbeing%20in%20many%20young%20adults" target="_blank">
                        Pursuing a hobby can improve your mental health. (n.d.). </a>
                </p>
            </div>

            <p class="h2">Unlocking the Benefits of Learning New Hobbies and Skills for Improved Mental Health</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2 ">

                    <b>Learning a new hobby or skill can be an incredibly enriching experience</b>. Not only does it
                    challenge your current capabilities,
                    but it also provides an opportunity for you to personally grow and expand your knowledge. Whether
                    it’s learning a new language, taking up a new sport,
                    or trying to cook yourself, there are endless opportunities to explore in this endeavor.
                    Other than having a good yet challenging time.
                    <br>
                    <br> <b> Did you know that learning something new also has its own benefits for your mental health?
                    </b> <br><br>
                    <img src="chess.jpg" alt="Description of image" width="600" height="250"
                        class="left-align img-fluid">
                    <b>Neurologists</b> noted that learning new skills changes the physical structure of our brain. By
                    stimulating it through the execution of new tasks,
                    more neural pathways are formed, which is good because it allows our impulses to travel faster
                    within the brain.
                    Because of this, our memory and overall health of the brain are improved, and you can also say the
                    same for your cognitive function, adaptability,
                    creativity, and self-esteem. So, by simply challenging your brain, you can be healthier.<br><br>
                    In conclusion, picking up new hobbies and abilities can be thrilling and joyful while also having a
                    huge impact on our mental health. Our memory,
                    cognitive performance, creativity, self-esteem, and more can all be enhanced by mentally taxing our
                    brains and forging new neural pathways. So, the advantages are obvious:
                    not only will you increase your knowledge and talents, but you'll also be moving in the direction of
                    improved mental health.
                    Whether you're interested in learning a new language, trying a new sport, or picking up a new
                    pastime, this is your sign to start now.
                </div>
                <p class="fs-8">From: <a href="https://www.upskilled.edu.au/skillstalk/mental-health-benefits-learning-new-skill#:~
                :text=It%20can%20boost%20your%20self,your%20energy%20levels%20and%20immunity" target="_blank">The
                        mental health benefits of learning a new skill. </a></p>
                <p class="fs-8">From: <a
                        href="https://www.psychreg.org/mental-health-benefits-when-you-learn-something-new/"
                        target="_blank">Mental Health Benefits When You Learn Something New. Psychreg. </a></p>
            </div>

            <p class="h2">Did you know that meditation can help your mental health.</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2 ">

                    <b>Meditation</b> can give you a sense of calm, peace, and balance that is very beneficial in terms
                    of your mental health and emotional state, as well as reducing stress and anxiety.
                    <br>
                    <br> <b>Meditation can be done in various ways: </b> <br><br>
                    <img src="guided.jpg" alt="Description of image" width="400" height="250"
                        class="left-align img-fluid">
                    <b>Guided meditation</b>, which is done by forming mental images of places that make you relaxed.
                    <b>Mantra meditation, </b> which is a type of meditation where you repeat something that calms you
                    inside your mind to prevent thoughts that are distracting.<br><br>
                    <b>Mindfulness meditation, </b> which is the type of meditation where you focus on what you are
                    currently experiencing during your meditation, helps you focus on your current situation and live in
                    the present moment. <br><br>
                    These are just some of the types of meditation; you can find the one that suits you the most.
                    You can start by just closing your eyes in a comfortable position and breathing deeply. Try to do
                    this for at least <b>15 minutes</b> a day or whenever you can, and you will start noticing an
                    improvement in your mental wellbeing.
                </div>
                <p class="fs-8">From: <a href="https://bit.ly/3JGWkjR" target="_blank">Meditation: Take a
                        stress-reduction break wherever you are - Mayo Clinic</a></p>
            </div>

            <p class="h2">Feeling down? Take a walk!</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2">

                    <b>Walking</b> outside is a simple and enjoyable physical activity that can be done
                    anywhere and by anyone. Walking is known for its physical benefits, but it also has a wide range of
                    mental benefits that can improve your overall wellbeing.
                    <br>
                    <br> <b>Did you know that walking, like any other physical activity, <u>triggers your brain to
                            release
                            endorphins</u>, which improve your mood and <u>reduce both stress and anxiety?</u> </b>
                    <br><br>
                    <img src="walk.jpg" alt="Description of image" width="500" height="300"
                        class="left-align img-fluid">
                    You can also expect a <u>reduced risk of clinical depression </u> and an <u>improved body image and
                        confidence</u>.
                    Walking in a way can also be meditative and relaxing, either by changing your environment and
                    tending to your own thoughts or while socializing with other people. Walking is a healthy and good
                    way if you have some time to spare, and parks and peaceful places are good places to simply roam and
                    walk around.<br><br>
                    Walking outside can also provide opportunities for <u>making friends</u>, which is essential for
                    good
                    mental health. Whether you’re walking with a friend or joining a walking group, socializing while
                    walking can help <u>reduce feelings of isolation and loneliness</u>. Overall, walking is an
                    excellent ways
                    to organize your thoughts or take a breather. <br><br><br>

                </div>
                <p class="fs-8">From: <a href="https://bit.ly/3mYUhil" target="_blank">Age UK London | The Benefits of
                        Park Walking</a></p>
            </div>

            <p class="h2">Good sleep = Good mindset.</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2">

                    Maintaining a regular sleeping schedule and getting enough rest each night are
                    crucial for one’s <b>physical and mental health.</b>
                    <br>
                    <br><b>Poor sleeping habits, <u>like irregular sleep patterns and sleep deprivation</u>, have been
                        <u>linked
                            to several mental health issues, such as depression, anxiety, and irritability</u>. In
                        contrast, an
                        adequate sleep has been shown to provide various mental health benefits. </b>
                    <br><br><br>
                    <img src="sleep.jpg" alt="Description of image" width="500" height="300"
                        class="left-align img-fluid"><br>
                    Sleeping properly each night has been shown to <u>enhance cognitive function, including memory,
                        attention, and decision-making</u>. Research has shown that individuals who get enough sleep
                    perform
                    better on cognitive tasks than those who are sleep deprived. Furthermore, having a good sleep
                    schedule <u>can help improve cognitive function</u> by improving the body’s natural sleep-wake
                    cycle.<br><br>
                    Overall, having a regular sleep schedule and getting enough rest each night is quite essential for
                    one’s overall well-being. In addition to the mental health benefits, sleeping properly is also
                    linked to improved physical health.<br><br><br><br>

                </div>
                <p class="fs-8">From: <a href="https://www.frontiersin.org/articles/10.3389/fnsys.2014.00046/full"
                        target="_blank">Frontiers | Sleep for cognitive enhancement</a></p>
            </div>

            <p class="h2">Try discovering new skills (From Psychology Today)</p>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">
                <div class="p-4 mb-2">
                    <b>Skill Set 1: “Learn from the Past”</b>
                    <br><b>"Living in the present"</b> implies enjoying the moment and responding intelligently to
                    whatever is happening right now, good or bad. <br>
                    Mindfulness is most important for mental health.
                    <br>
                    <br> <b>Such skills might include:</b> <br><br>
                    <b>Relaxation:</b> Learning to relax and savor the present moment makes life worth living.
                    <br><br>
                    <b>The "Catch It, Challenge It, Change It" Technique:</b> Cognitive-behavioral therapy (CBT)
                    requires identifying problematic thoughts, questioning them, and altering them when they return.
                    <br><br>
                    <b>Noticing Your Thoughts Without Taking Them Seriously:</b> Deciding not to believe hurtful,
                    self-critical, and unrealistic random thoughts brings great mental relief.<br><br>
                    <b>Assertiveness:</b> Respecting the needs and rights of others while respecting your own needs and
                    rights will help you express your ideas, say no, and set boundaries.<br><br>
                    <b>Paying Attention to Your Own Mental States:</b> Recognizing emotions, thoughts, and physical
                    states, such as fatigue, will clue you as to when you need to HALT—never letting yourself get too
                    Hungry, Angry, Lonely, or Tired.
                    <br><br>
                    <b>Paying Attention to Your Environment:</b> Scanning your surroundings for dangers, opportunities,
                    friends, and beauty helps you survive as well as thrive.
                    <br><br>
                    <b>Specific strategies to cultivate mindfulness skills </b> might include assertiveness training
                    classes, couples therapy, taking regular breaks, healthy self-care, meditation, exercise, and
                    periodic pauses to notice the world around you.


                </div>
            </div>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle ">
                <div class="p-4 mb-2">
                    <b> Skill Set 2: “Live in the Present”</b>
                    <br>
                    To <b>“learn from the past,”</b> you might need self-reflection skills, such as the following:
                    <br><br>
                    <b>Self-Compassion: </b> Self-compassion helps you overcome failures without self-criticism.
                    Self-compassion lets you forgive your Past Self.
                    <br><br>
                    <b>Growth Mentality:</b> A <b>"growth mindset"</b> helps you learn from failures and
                    accomplishments.
                    <br><br>
                    <b>Self-Knowledge:</b> Knowing your strengths, limitations, values, and interests helps you express
                    yourself and make effective job choices.
                    <br><br>
                    <b>Relationship Intelligence:</b> Analyze what makes a relationship rewarding for you and how to
                    improve partnerships.
                    <br><br>
                    <b>Gratitude:</b> Being grateful can improve your mood and well-being.<br><br>
                    <b>Skill Set 3: “Plan for the Future”</b>
                    <br>
                    <b>“Plan for the future”</b> would include planning skills to help you meet the needs of your Future
                    Self, such as:
                    <br>
                    <br>
                    <b>Identifying Values:</b> Knowing your most cherished values and acting on them is the foundation
                    of your confidence, sense of purpose, and willpower.<br><br>
                    <b>Goal-Setting:</b> Setting personal goals that jibe with your values and sense of purpose can
                    provide a guide to your actions and help you set priorities.<br><br>
                    <b>Meaningful Work:</b> Guided by values and goals, you can plan a satisfying career path.<br><br>
                    <b>Self-Control:</b> Choosing to bring your highest values and goals to mind before making a
                    decision will activate your willpower.<br><br>
                    <b>Acceptance:</b> Recognizing the realities of aging and death and reaching a level of acceptance
                    of those realities will help you deal with necessary, if sometimes unpleasant, issues, such as
                    financial planning and <b>"⦁ death cleaning."</b><br><br>
                    <b>Legacy:</b> Knowing your values can help you decide how to contribute to your community or leave
                    a meaningful legacy.

                </div>
            </div>
            <div class="border rounded-4 p-4 border-2 border-dark-subtle">

                <div class="p-4 mb-2 "><b class="fs-4">If you are having a bad day</b><br>
                    Get a piece of paper and list the things you're grateful for the whole day. Study shows that
                    expressive writing can help reduce a person’s stress, anxiety and even lift up their moods. <br>
                    Try to have alone time with yourself. Just focus on your breathing, eat the food you want.<br>
                    Rest, sleep as much as you can. <br></div>

                <div class="p-4 mb-2 ">
                    <b class="fs-4">Ways to improve your mental health</b><br>
                    Writing down your thoughts can help you understand them. Keep a diary if you're stressed, depressed,
                    or anxious. Journaling can help you manage emotions and mental health. After confessing your worries
                    in a journal without judgment, the world became clearer.<br><br>
                    <b class="fs-4">Try Journaling</b><br>
                    -Buy a notebook. Journal your inner child.<br>
                    -Set a daily journaling time. Before bed or after waking up. Time is your limit.<br>
                    -Write honestly. Journal your feelings.<br>
                    -Listen to your favorite music while doing this. <br><br>
                </div>
            </div>

            <br>
            <br>
        </div>
    </div>
    <br>
    <br>
    <script src="/darkmode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>