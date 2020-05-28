<div class="container-fluid">
    <div class="alert alert-primary" role="alert">
        <i class="fas fa-tachometer-alt"> Dashboard</i>
    </div>

    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Selamat Datang!!</h4>
        <p>Selamat Datang <strong><?php echo $username ?></strong> Sistem Informasi Akademik, Anda Login sebagai <strong><?php echo $level ?></strong></p>
        <hr>
        <button type="button" class="btn btn-primary btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-cog"> Control Panel</i>
        </button>
    </div>

    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-danger" id="exampleModalLabel"><i class="fas fa-cog"> Control Panel</i></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-user-graduate"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">MAHASISWA</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-calendar-alt"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">TAHUN AKADEMIK</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-edit"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KRS</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-file-alt"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KHS</p>
                            </a>
                        </div>

                        <hr>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-sort-numeric-down"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">INPUT NILAI</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-print"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">CETAK TRANSKRIP</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-list-ul"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">KATEGORI</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-bullhorn"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">INFO KAMPUS</p>
                            </a>
                        </div>

                        <hr>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-id-card-alt"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">IDENTITAS</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-info-circle"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">TENTANG KAMPUS</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-laptop"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">FASILITAS</p>
                            </a>
                        </div>

                        <div class="col-md-3 text-success text-center">
                            <i class="fas fa-3x fa-image"></i>
                            <a href="<?php echo base_url() ?>">
                                <p class="nav-link small text-info">GALLERY</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>