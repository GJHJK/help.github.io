<?php

require_once 'conn.php';

session_start();
session_regenerate_id();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: home.php");
    exit;
}

$username = $fullname = $email = $password = $confirm_password = "";
$username_err = $fullname_err = $email_err = $password_err = $confirm_password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    $whitelist = array('sti.edu.ph');

    function validateEmailDomain($email, $domains)
    {
        $domain = substr(strrchr($email, "@"), 1);
        return in_array($domain, $domains);
    }


    if (validateEmailDomain($email, $whitelist)) {
        $email = trim($_POST["email"]);
    } else {
        $email_err = "Please enter a valid email address.";
    }

    // Validate email
    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter your email address.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE email = :email";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);

            // Set parameters
            $param_email = trim($_POST["email"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $email_err = "This email is already use.";
                } else {
                    $email = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // validate username
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter a username.";
    } else {
        // Prepare a select statement
        $sql = "SELECT id FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

            // Set parameters
            $param_username = trim($_POST["username"]);

            // Attempt to execute the prepared statement
            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $username_err = "This username is already taken.";
                } else {
                    // $no_number_username = preg_replace('/\d+/u', '', $_POST['username']);
                    // $username = strtolower(str_replace(' ', '', $no_number_username));
                    $username = strtolower(trim($_POST["username"]));
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            unset($stmt);
        }
    }

    // validate fullname
    if (empty(trim($_POST['fullname']))) {
        $fullname_err = 'Enter your fullname';
    } else {
        $fullname = trim($_POST['fullname']);
    }


    // Validate password
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter a password.";
    } elseif (strlen(trim($_POST["password"])) < 6) {
        $password_err = "Password must have at least 8 characters.";
    } elseif (!preg_match('/^(?=.*\d)(?=.*[A-Z])(?=.*[^\w\d\s:])([^\s]){6,}$/', $_POST["password"])) {
        $password_err = "Password must contain at least one uppercase letter, one number, and one symbol.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate confirm password
    if (empty(trim($_POST["confirm_password"]))) {
        $confirm_password_err = "Please confirm password.";
    } else {
        $confirm_password = trim($_POST["confirm_password"]);
        if (empty($password_err) && ($password != $confirm_password)) {
            $confirm_password_err = "Password did not match.";
        }
    }

    if (empty($username_err) && empty($email_err) && empty($password_err) && empty($confirm_password_err)) {

        $sql = "INSERT INTO users (username, fullname, email, password) VALUES (:username, :fullname, :email, :password)";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":fullname", $param_fullname, PDO::PARAM_STR);
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            $param_username = $username;
            $param_fullname = $fullname;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            if ($stmt->execute()) {
                header("location: login.php");
            } else {
                exit('Something went wrong. Please try again later.');
            }
        }
    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

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
            overflow: hidden;
        }

        .form-signin {
            max-width: 390px;
            padding: 15px;
        }

        #notification-container {
            position: fixed;
            top: 10px;
            right: 10px;
            z-index: 9999;
        }

        .notification-modal {
            margin-bottom: 10px;
        }

        .notification-content {
            padding: 0.7em;
            border: 1px solid black;
            background-color: white;
            color: black;
            border-radius: 4px;
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
    </style>
</head>

<body>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <div class="form-signin mx-auto">
        <div class="px-4 pt-5 my-5">
            <div class="text-center">
                <img class="mb-3" src="logo.png" alt="" width="75">
                <h1 class="display-6 fw-bold">Create new account</h1>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="registerAcc"
                class="form-signin w-100 m-auto">
                <div class="mb-3">
                    <label for="uname" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control custom-input" id="uname" placeholder="John"
                        aria-describedby="unameHelp" autocomplete="off" value="<?php echo $username; ?>" require>
                    <div id="unameHelp" class="form-text text-danger2">
                        <?php echo $username_err; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="fname" class="form-label">Fullname</label>
                    <input type="text" name="fullname" class="form-control custom-input" id="fname"
                        placeholder="John Doe" aria-describedby="fnamehelp" autocomplete="off"
                        value="<?php echo $fullname; ?>" require>
                    <div id="unameHelp" class="form-text text-danger2">
                        <?php echo $fullname_err; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control custom-input" id="email"
                        placeholder="example@sti.edu.ph" aria-describedby="emailHelp" autocomplete="off"
                        value="<?php echo $email; ?>" require>
                    <div id="emailHelp" class="form-text text-danger2">
                        <?php echo $email_err; ?>
                    </div>
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password*</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control custom-input" id="password"
                            placeholder="••••••••" autocomplete="off" aria-describedby="passwordHelp" require>
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword"><i
                                class="bi bi-eye"></i></button>
                    </div>
                    <div id="passwordHelp" class="form-text text-danger2">
                        <?php echo $password_err; ?>
                    </div>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password2" class="form-label">Confirm Password*</label>
                    <div class="input-group">
                        <input type="password" name="confirm_password" class="form-control custom-input" id="password2"
                            placeholder="••••••••" autocomplete="off" aria-describedby="passwordHelp" require>
                        <button type="button" class="btn btn-outline-secondary" id="toggleConfirmPassword"><i
                                class="bi bi-eye"></i></button>
                    </div>
                    <div id="passwordHelp" class="form-text text-danger2">
                        <?php echo $confirm_password_err; ?>
                    </div>
                </div>

                <div class="mb-3">
                    <button type="submit" class="btn btn-primary rounded-pill w-100">Create Account</button>
                </div>
                <div class="pb-5"></div>
                <div class="mt-3">
                    <p>Already have an account? <a href="login">Log In</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        // Toggle password visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            if (password.type === 'password') {
                password.type = 'text';
                togglePassword.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                password.type = 'password';
                togglePassword.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });

        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#password2');
        toggleConfirmPassword.addEventListener('click', () => {
            if (confirmPassword.type === 'password') {
                confirmPassword.type = 'text';
                toggleConfirmPassword.innerHTML = '<i class="bi bi-eye-slash"></i>';
            } else {
                confirmPassword.type = 'password';
                toggleConfirmPassword.innerHTML = '<i class="bi bi-eye"></i>';
            }
        });
    </script>


    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
        function showError(message) {
            // Create a notification container if it doesn't exist
            var container = document.getElementById("notification-container");
            if (!container) {
                container = document.createElement("div");
                container.id = "notification-container";
                document.body.appendChild(container);
            }

            // Check if notification with the same message already exists
            var existingNotification = Array.from(container.children).find(
                (notification) => notification.textContent === message
            );

            if (existingNotification) {
                // If notification already exists, just update its timestamp
                existingNotification.dataset.timestamp = new Date().getTime();
            } else {
                // Create the notification modal
                var notificationModal = document.createElement("div");
                notificationModal.className = "notification-modal";

                var notificationContent = document.createElement("div");
                notificationContent.className = "notification-content";
                notificationContent.textContent = message;
                notificationContent.dataset.timestamp = new Date().getTime();

                notificationModal.appendChild(notificationContent);
                container.appendChild(notificationModal);

                // Remove the notification after 5 seconds
                setTimeout(function () {
                    container.removeChild(notificationModal);
                }, 5000);
            }
        }


        $(document).ready(function () {
            $("#registerAcc").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 2
                    },
                    fullname: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    password: {
                        required: true,
                        minlength: 8
                    },
                    confirm_password: {
                        required: true,
                        minlength: 8,
                        equalTo: "#password"
                    }
                },
                errorPlacement: function (error, element) {
                    var message = error.text();
                    var type = 'highlight';
                    if (message) {
                        showError(message, type);
                    }
                }
            });
        });


    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>