<?php

include_once 'handleuser.php';

$error = '';
$email = $user->email;
$username = $user->username;
$fullname = $user->fullname;

if (isset($_POST['username'])) {
	$fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
	$username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$picture = $_POST['picture'];
	
	if (empty(trim($username))) {
		$error .= 'Username is empty.';
	}
	
	if (empty($error)) {
		$password = empty(trim($password)) ? $user->password : password_hash($password, PASSWORD_DEFAULT);
		
		$pdo->beginTransaction();
		$sql = 'UPDATE users SET fullname = :fullname, username = :username, password = :password WHERE id = :id';
		$stmt = $pdo->prepare($sql);
		$success = $stmt->execute([
			'fullname' => $fullname,
			'username' => $username,
			'password' => $password,
			'id' => $user->id
		]);
		
		if ($success && strlen($picture) > 0) {
			$sql = 'INSERT INTO pictures (id, picture) VALUES (:id, :picture) ON DUPLICATE KEY UPDATE picture = :newpicture';
			$stmt = $pdo->prepare($sql);
			$success = $stmt->execute([
				'id' => $user->id,
				'picture' => $picture,
				'newpicture' => $picture
			]);
		}
		
		if ($success) {
			$pdo->commit();
		} else {
			$pdo->rollBack();
		}
	}
	
	if (!$success && empty($error)) {
		$error = 'Unable to update profile';
	}
}

$sql = 'SELECT * FROM pictures WHERE id = :id';
$stmt = $pdo->prepare($sql);
$stmt->execute(['id' => $user->id]);
$pic = $stmt->fetch(PDO::FETCH_OBJ);
$picture = !empty($pic) && strlen($pic->picture) > 0 ? $pic->picture : 'avatar.jpg';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP-U</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="main.css">
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
        
		.image_area {
		  position: relative;
		}

		.cropModal:img {
		  	display: block;
		  	max-width: 100%;
		}

		.preview {
  			overflow: hidden;
  			width: 160px; 
  			height: 160px;
  			margin: 10px;
  			border: 1px solid red;
		}

		.modal-lg{
  			max-width: 1000px !important;
		}

		.overlay {
		  position: absolute;
		  bottom: 10px;
		  left: 0;
		  right: 0;
		  background-color: rgba(255, 255, 255, 0.5);
		  overflow: hidden;
		  height: 0;
		  transition: .5s ease;
		  width: 100%;
		}

		.image_area:hover .overlay {
		  height: 50%;
		  cursor: pointer;
		}

		.text {
		  color: #333;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
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

    <div class="container pt-5">
	<div class="d-flex justify-content-end">
            <button class="btn btn-outline-secondary" id="dark-mode-toggle">Toggle Dark Mode</button>
        </div>
        <h1 class="fw-600" style="font-size:60px;">Profile</h1>
        
        <?php if (isset($success) && $success): ?>
        <div class="alert alert-success" role="alert">
			Update successful
		</div>
		<?php elseif (!empty($error)): ?>
		<div class="alert alert-danger" role="alert">
			<?= $error ?>
		</div>
		<?php endif ?>
        
        <div class="row gx-3 gy-3 pt-5">
            <div class="col-md-9">
                <div class="me-5 pe-5">
                	<form method="POST" class="needs-validation" novalidate>
						<div class="mb-3">
							<label for="inputEmail" class="form-label">Email Address</label>
							<input type="email" class="form-control" id="inputEmail" value="<?= $email ?>" disabled>
						</div>
						<div class="mb-3">
							<label for="inputFullName" class="form-label">Full Name</label>
							<input type="text" class="form-control" id="inputFullName" name="fullname" value="<?= $fullname ?>">
						</div>
						<div class="mb-3">
							<label for="inputFullName" class="form-label">Username</label>
							<input type="text" class="form-control" name="username" id="inputFullName" value="<?= $username ?>" required>
							<div class="invalid-feedback">Username is required.</div>
						</div>
						<div class="mb-3">
							<label for="inputPassword" class="form-label">Password</label>
							<input type="password" class="form-control" name="password" id="inputPassword" placeholder="- unchanged -">
							<div class="invalid-feedback">Password must be at least 8 characters.</div>
						</div>
						<div class="mb-3">
							<label for="inputPasswordConfirm" class="form-label">Confirm Password</label>
							<input type="password" class="form-control" id="inputPasswordConfirm" placeholder="- unchanged -">
							<div class="invalid-feedback">Password mismatched.</div>
						</div>
						<button type="submit" class="btn btn-primary" id="submitButton">Update</button>
						<input type="hidden" name="picture" id="profilePicture" />
					</form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center align-middle">
                	<a href="#" id="openImgUpload">
                    	<img src="<?= $picture ?>" width="100%" class="border rounded-4 border-5" id="profileImg" />
                    </a>
                    <div class="mt-1 text-muted">Click to change</div>
                    <input type="file" id="imgUpload" style="display:none"/>
                </div>
            </div>
        </div>
    </div>
	
	<div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title fs-5" id="modalLabel">Crop Image</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="img-container">
						<div class="row">
							<div class="col-md-8">
								<img src="" id="sampleImage" />
							</div>
							<div class="col-md-4">
								<div class="preview"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					<button type="button" class="btn btn-primary" id="cropButton">Crop</button>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
    <script>
    function checkPasswordValidity() {
		var password = $("#inputPassword").val().trim();
		var confirm = $("#inputPasswordConfirm").val().trim();
    	var valid = true;
    	
    	$("#inputPassword").removeClass("is-valid");
    	$("#inputPassword").removeClass("is-invalid");
    	$("#inputPasswordConfirm").removeClass("is-valid");
    	$("#inputPasswordConfirm").removeClass("is-invalid");
    	
    	if (password.length < 8 && password.length > 0) {
    		$("#inputPassword").addClass("is-invalid");
    		$inputPassword.attr("disabled", true);
    		valid = false;
    	}
    	
    	if (password != confirm) {
    		$("#inputPasswordConfirm").addClass("is-invalid");
    		$("#submitButton").attr("disabled", true);
    		valid = false;
    	}
    	
    	if (valid) {
	    	if (password.length > 0) $("#inputPassword").addClass("is-valid");
	    	if (password.length > 0) $("#inputPasswordConfirm").addClass("is-valid");
	    	$("#submitButton").removeAttr("disabled");
    	}
    	
    	return valid;
    }

    $(document).ready(function() {
    	var forms = document.querySelectorAll('.needs-validation');
    	
		Array.prototype.slice.call(forms).forEach(function (form) {
			form.addEventListener('submit', function (event) {
				if (!checkPasswordValidity() && !form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}
			
				form.classList.add('was-validated');
			}, false);
		});
    	
		$("#inputPassword, #inputPasswordConfirm").on("keyup", function () {
			checkPasswordValidity();
		});
    	
    	$('#openImgUpload').click(function() {
    		$('#imgUpload').trigger('click');
    	});
		
		var $modal = $('#cropModal');
		var image = document.getElementById('sampleImage');
		var cropper;
		
		$('#imgUpload').change(function(event) {
			var files = event.target.files;
			var done = function(url) {
				image.src = url;
				$modal.modal('show');
			};
		
			if (files && files.length > 0) {
				reader = new FileReader();
				reader.onload = function(event) {
					done(reader.result);
				};
				reader.readAsDataURL(files[0]);
			}
		});
		
		$modal.on('shown.bs.modal', function() {
			cropper = new Cropper(image, {
				aspectRatio: 1,
				viewMode: 3,
				preview:'.preview'
			});
		}).on('hidden.bs.modal', function() {
			cropper.destroy();
			cropper = null;
		});
		
		$('#cropButton').click(function() {
			canvas = cropper.getCroppedCanvas({
				width: 400,
				height: 400
			});
		
			canvas.toBlob(function(blob) {
				url = URL.createObjectURL(blob);
				var reader = new FileReader();
				reader.readAsDataURL(blob);
				reader.onloadend = function() {
					var base64data = reader.result;
					$modal.modal('hide');
					$('#profileImg').attr('src', base64data);
					$('#profilePicture').val(base64data);
					console.log($('#profilePicture').val());
				};
			});
		});
		
		setInterval(() => { $(".alert").slideUp(500); }, 5000);
    });

	
    </script>
	<script src="/darkmode.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
