
<?php include_once 'handleuser.php'; ?><!-- NAV -->
    <nav class="navbar bg-gray navbar-expand-md h-auto py-3 shadow-md border border-bottom-4 border-dark-subtle p-4">
        <div class="container-fluid d-flex justify-content-between">
            <a class="navbar-brand fw-bold d-flex align-items-center" href="/">
                <img src="logo.png" alt="Logo" width="35" height="35" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between custom-pt-1" id="navbarNav">
                <ul class="navbar-nav gap-3 d-flex align-items-center justify-content-center w-100">
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="/forum">Forum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="/features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link custom-link" href="/about">About</a>
                    </li>
                    <li>
                    </li>
                </ul>
                <ul class="navbar-nav gap-3 d-flex align-items-end justify-content-end">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?= isset($picture) && strlen($picture) > 0 ? $picture : 'avatar.jpg' ?>" width="35" height="35" class="img-fluid rounded-circle" />
                        </a>
		                <ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item" href="/profile">Profile</a></li>
							<li><a class="dropdown-item" href="/logout">Logout</a></li>
						</ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    