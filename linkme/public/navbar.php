<nav class="navbar navbar-expand-md py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <span class="d-flex justify-content-center align-items-center me-2">
                <img src="../images/logo.png" alt="Linkme" width="35" height="35" class="d-inline-block align-text-top">
            </span>
            <span>Linkme<span>
        </a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-menu">
            <span class="visually-hidden">Menu</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if (isset($_SESSION['logged']) && isset($_SESSION['username'])) : ?>
            <div id="nav-menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a target="_blank" href="user_profile.php?my=<?php echo $username; ?>" class="nav-link">@<?php echo $username ?></a>
                    </li>
                    <li class="nav-item">
                        <form action="../private/Services/Logout.php" method="post"> 
                            <button type="submit" class="nav-link">Logout <i class="fa fa-sign-out fa-lg"></i></button>
                        </form>
                    </li>
                </ul>
            </div>
            <?php  else : ?>
            <div id="nav-menu" class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="user_register.php" class="nav-link">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Login <i class="fa fa-sign-in fa-lg"></i></a>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </div>
</nav>