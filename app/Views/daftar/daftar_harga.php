<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Harga</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Daftar Harga</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="<?= base_url('daftar/tambahHarga'); ?>">
                                <h3 class="card-title btn-sm btn-primary">
                                    <i class="fas fa-plus-circle"></i>
                                    Tambah Data
                                </h3>
                            </a>
                            <div class="card-tools mt-2">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <?php if (session()->getFlashdata('pesan')) : ?>
                                <button type="button" class="btn btn-success swalDefaultSuccess">
                                    Launch Success Toast
                                </button>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashdata('pesan'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 430px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Jenis</th>
                                        <th>Model</th>
                                        <th>Harga Karyawan</th>
                                        <th>Harga Jual</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <?php $i = 1; ?>
                                <?php foreach ($harga as $h) : ?>
                                    <tbody>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $h['kode']; ?></td>
                                            <td><?= $h['jenis']; ?></td>
                                            <td><?= $h['model']; ?></td>
                                            <td><?= $h['hargaKaryawan']; ?></td>
                                            <td><?= $h['hargaJual']; ?></td>
                                            <td>
                                                <a href="">Edit</a>
                                                <a href="">Delete</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<?php echo view('_partials/footer'); ?>