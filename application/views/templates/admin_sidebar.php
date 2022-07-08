<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url('/') ?>" class="brand-link">
                <img src="<?= base_url('assets/img/Faskes-Icon.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
                <span class="brand-text font-weight-light">Faskes</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block nav-item">Selamat datang <b><?= ucfirst($this->session->userdata('username')); ?></b></a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="<?= base_url('/') ?>" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p> Dashboard </p>
                            </a>
                        </li>
                        <?php if($this->session->userdata('role') != "administrator"){ ?>
                            <li class="nav-item">
                                <a href="<?= base_url('index.php/User/indexbe'); ?>" class="nav-link">
                                    <i class="nav-icon fas fa-user"></i>
                                    <p> User Profile </p>
                                </a>
                            </li>
                        <?php } else { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/User/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p> User Profile </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/RumahSakit/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-hospital"></i>
                                <p> Rumah sakit </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/KlinikUmum/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-stethoscope"></i>
                                <p> Klinik umum </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/KlinikGigi/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-tooth"></i>
                                <p> Klinik gigi </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Puskesmas/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p> Puskesmas </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Apotik/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-mortar-pestle"></i>
                                <p> Apotik </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Komentar/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-comment-alt"></i>
                                <p> Komentar </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/JenisFaskes/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-building"></i>
                                <p> Jenis Faskes </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Kecamatan/indexbe'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-map"></i>
                                <p> Kecamatan </p>
                            </a>
                        </li>
                        <?php }?>
                        <li class="nav-item">
                            <a href="<?= base_url('index.php/Auth/logout'); ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p> Logout </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"> Dashboard Admin </h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">