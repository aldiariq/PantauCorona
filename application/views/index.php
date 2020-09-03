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
                            <i class="fa fa-server fa-fw"></i> Alamat IP Pengakses :
                        </a>
                    </li>
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li>
                                <a href="<?= base_url() ?>" class="<?php if ($this->uri->segment(2) == '') {
                                                                        echo "active";
                                                                    } ?>"><i class="fa fa-home fa-fw"></i> Halaman Utama</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Data Kasus Virus COVID-19 di Indonesia</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <?php foreach ($ResponseApinasional as $covidnasional) { ?>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-yellow">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fas fa-sad-tear fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?= $covidnasional['positif'] ?></div>
                                                <div>Pasien Positif</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fas fa-hospital fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?= $covidnasional['dirawat'] ?></div>
                                                <div>Pasien Dirawat</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-green">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-smile fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?= $covidnasional['sembuh'] ?></div>
                                                <div>Pasien Sembuh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="panel panel-red">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-sad-cry fa-3x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge"><?= $covidnasional['meninggal'] ?></div>
                                                <div>Pasien Meninggal</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Sebaran Virus COVID-19 Per Provinsi di Indonesia
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="tabelcovidnasional">
                                            <thead>
                                                <tr>
                                                    <th>Nama Provinsi</th>
                                                    <th>Jumlah Pasien Positif</th>
                                                    <th>Jumlah Pasien Sembuh</th>
                                                    <th>Jumlah Pasien Meninggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($ReponsedetilApinasional as $detilcovid) { ?>
                                                    <tr class="gradeX">
                                                        <td><?= $detilcovid['attributes']['Provinsi'] ?></td>
                                                        <td><?= $detilcovid['attributes']['Kasus_Posi'] ?></td>
                                                        <td><?= $detilcovid['attributes']['Kasus_Semb'] ?></td>
                                                        <td><?= $detilcovid['attributes']['Kasus_Meni'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->