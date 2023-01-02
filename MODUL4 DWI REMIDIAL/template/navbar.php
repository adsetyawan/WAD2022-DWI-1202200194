<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= URL ?>">Sewa Kendaraan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'list-mobil.php' ?>">List Mobil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'contact.php' ?>">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'about.php' ?>">About</a>
                </li>
                <?php if(isset($_SESSION['nama'])) : ?>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'transaksi.php' ?>">Transaksi</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link mr-4 dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-expanded="false">
                        <?= $_SESSION['nama'] ?>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="<?= URL . 'logout.php' ?>">Keluar</a>
                    </div>
                </li>
                <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'login.php' ?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-4" href="<?= URL . 'register.php' ?>">Register</a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>