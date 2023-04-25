<?php

require_once 'conn.php';

session_start();
session_regenerate_id();


$email = $password = "";
$email_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // check email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, email, password FROM users WHERE email = :email";


        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                // Check if username exists, if yes then verify password
                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $email = $row["email"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {
                            // Password is correct, so start a new session
                            // session_start();

                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["email"] = $email;

                            // Redirect user to home page

                            if (empty($_SESSION['current_page'])) {
                                header("Location: ../home");
                            } else {
                                header("location: " . $_SESSION['current_page'] . "");
                            }
                        } else {
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    // Display an error message if username doesn't exist
                    $email_err = "No account found with that email.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }


    // Close connection
    unset($pdo);
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="logo.png">
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <style>
        .body {
            overflow: scroll;
        }

        .form-signin {
            max-width: 390px;
            padding: 15px;
        }
    </style>
</head>

<body>

    <div class="form-signin mx-auto">
        <div class="px-4 pt-5 my-5">
            <div class="text-center">
                <img class="mb-3" src="logo.png" alt="" width="75">
                <h1 class="display-6 fw-bold">Welcome to HELP-U</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="loginacc"
                class="form-signin w-100 m-auto">
                <div class="mb-3">
                    <label for="uname" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control custom-input" id="uname"
                        placeholder="example@sti.edu.ph" aria-describedby="unameHelp" autocomplete="off"
                        value="<?php echo $email; ?>" require>
                    <div id="unameHelp" class="form-text text-danger2">
                        <?php echo $email_err; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control custom-input" id="password"
                            placeholder="••••••••" autocomplete="off" aria-describedby="passwordHelp" require>
                        <button type="button" class="btn btn-outline-secondary" id="toggle-password"
                            style="border-top-left-radius: 0; border-bottom-left-radius: 0;">
                            <span id="toggle-password-icon" class="bi bi-eye"></span>
                        </button>
                    </div>
                    <div id="passwordHelp" class="form-text text-danger2">
                        <?php echo $password_err; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary rounded-pill w-100">Login</button>
                </div>
                <div class="pb-5"></div>
                <div class="mt-3">
                    <p> &nbsp;Don't have an account? <a href="../signup" class="text-decoration-none fw-semibold">Sign
                            up</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        $(document).ready(function () {
            $("#loginacc").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 1,
                    },
                    password: {
                        required: true,
                        minlength: 5,
                    },
                },
                messages: {
                    username: {
                        required: "Please enter a username",
                        minlength: "Your username must consist of at least 2 characters",
                    },
                    password: {
                        required: "Please provide a password",
                    },
                },
                errorElement: "em",
                errorPlacement: function (error, element) {
                    // Add the `help-block` class to the error element
                    error.addClass("help-block");

                    if (element.prop("type") === "checkbox") {
                        error.insertAfter(element.parent("label"));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-error").removeClass("has-success");
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents(".col-sm-5").addClass("has-success").removeClass("has-error");
                },
            });
        });

        $(document).ready(function () {
            $("#toggle-password").on("click", function () {
                let passwordInput = $("#password");
                let passwordType = passwordInput.attr("type");
                if (passwordType === "password") {
                    passwordInput.attr("type", "text");
                    $("#toggle-password-icon").removeClass("bi-eye").addClass("bi-eye-slash");
                } else {
                    passwordInput.attr("type", "password");
                    $("#toggle-password-icon").removeClass("bi-eye-slash").addClass("bi-eye");
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>