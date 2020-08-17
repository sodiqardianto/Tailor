<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Daftar Harga</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Daftar</a></li>
                        <li class="breadcrumb-item active">Tambah Daftar Harga</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div> -->
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="<?= base_url('daftar/simpan'); ?>" method="post">
                            <?= csrf_field(); ?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode">Kode</label>
                                    <input type="text" class="form-control" id="kode" placeholder="Kode" name="kode" autofocus>
                                </div>
                                <div class="form-group">
                                    <label for="jenis">Jenis</label>
                                    <input type="text" class="form-control" id="jenis" placeholder="Jenis" name="jenis">
                                </div>
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input type="text" class="form-control" id="model" placeholder="Model" name="model">
                                </div>
                                <div class="form-group">
                                    <label for="hargaKaryawan">Harga Karyawan</label>
                                    <input type="text" class="form-control" id="hargaKaryawan" placeholder="Harga" name="hargaKaryawan">
                                </div>
                                <div class="form-group">
                                    <label for="hargaJual">Harga Jual</label>
                                    <input type="text" class="form-control" id="hargaJual" placeholder="Harga" name="hargaJual">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>


<?php echo view('_partials/footer'); ?>