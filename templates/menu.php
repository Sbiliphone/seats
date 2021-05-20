<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Seats</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <?php
                if($_SESSION['Admin']){
                ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=user-list">Gestione utenti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=bar-list">Gestione bar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=report-list-default">Gestione report</a>
                    </li>

                    <?php
                }

                ?>



            </ul>
            <?php
            if ($_SESSION['authorized']){
            ?>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo  $_SESSION['username']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="index.php?action=change-password">Cambia password</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?action=logout">Esci</a></li>
                    </ul>
                </li>
            </ul>
            <?php
            }else{
            ?>
                <button onclick="location.href='index.php?action=login'" class="btn btn-outline-primary">Login</button>
            <?php
            }
            ?>
        </div>
    </div>
</nav>
