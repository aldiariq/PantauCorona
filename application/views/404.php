<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="<?= BASE_URL() ?>">Pantau Corona</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <ul class="nav navbar-right navbar-top-links">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-server fa-fw"></i> Alamat IP Pengakses : <?= $_SERVER['REMOTE_ADDR'] ?>
                </a>
            </li>
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?= BASE_URL() ?>" class="active"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Halaman Tidak Ditemukan</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->