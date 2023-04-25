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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/main2.js"></script>
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="container pt-5">
    <div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
        <h1 class="fw-600">
            <img src="physical icon.png" class="emoji-img" alt="">Physical Forum
        </h1>
        <div>
            <form name="frm2" method="post">
                <input type="hidden" id="commentid" name="Pcommentid" value="0">
                <div class="form-group">
                    <label for="comment">Write your question:</label>
                    <textarea class="form-control" rows="5" name="msg" required></textarea>
                </div><br>
                <input type="button" id="butsave" name="save" class="btn btn-primary rounded-pill" value="Post">
            </form>
        </div>
        <div class="card-body pt-2">
            <form action="" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <select name="filtering" class="form-control" id="filtering">
                                <option value="">--Select Option--</option>
                                <option value="oldpost" <?php if (isset($_GET['filtering']) && $_GET['filtering'] == "oldpost") {
                                    echo "selected";
                                } ?>>Oldest Post</option>
                                <option value="newpost" <?php if (isset($_GET['filtering']) && $_GET['filtering'] == "newpost") {
                                    echo "selected";
                                } ?>>Newest Post</option>
                            </select>
                            <button type="button" class="input-group-text btn btn-primary" id="basic-addon2">
                                Filter</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <div class="panel panel-default">
            <div class="panel-body">
                <h4>Recent questions</h4>
                <table class="table" id="MyTable2" style="background-color: #edfafa; border:0px;border-radius:10px">
                    <tbody id="record2">
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- REPLY MODAL: -->
    <div id="ReplyModal" class="modal fade" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Reply Question</h4>
                </div>
                <div class="modal-body">
                    <form name="frm1" method="post">
                        <input type="hidden" id="commentid" name="Rcommentid">
                        <div class="form-group">
                            <label for="comment">Write your reply:</label>
                            <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
                        </div><br>
                        <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
                    </form>
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