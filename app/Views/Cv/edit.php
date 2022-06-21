<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Add Data Diri</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>From Update Data</h1>
            </div>
        </div>

        <form action="<?php echo site_url('/Curriculum/update'); ?>" method="post">
            <div class="row mt-3 form-floatin">
                <div class="col-lg-3">
                    <label for="">Nama</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $nama; ?>">
                </div>
                <input type="hidden" name="id" value="<?= $id; ?>">
            </div>

            <div class=" row mt-3">
                <div class="col-lg-3">
                    <label for="">Nama Panggilan</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_panggilan" placeholder="Nama Panggilan" 
                    value="<?= $nama_panggilan; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tempat Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="tempat_lahir" placeholder="tempat lahir" value="<?= $tempat_lahir; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="floatingInput">Tanggal Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?= $tanggal_lahir; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Jenis Kelamin</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="jenis_kelamin" placeholder="Jenis Kelamin" value="<?= $jenis_kelamin; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Agama</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="agama" placeholder="Agama" value="<?= $agama ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Status</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="status" placeholder="Status" value="<?= $status; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Alamat</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" 
                    value="<?= $alamat; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">E-Mail</label>
                </div>
                <div class="col-lg-6">
                    <input type="email" class="form-control" name="email" placeholder="E-Mail" 
                    value="<?= $email; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SD</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_sd" placeholder="Nama SD" 
                    value="<?= $nama_sd; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SMP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_smp" placeholder="Nama SMP" 
                    value="<?= $nama_smp; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_sma" placeholder="Nama SMA" 
                    value="<?= $nama_sma; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SD</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_sd" placeholder="Tahun Lulus SD" 
                    value="<?= $thn_lulus_sd; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SMP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_smp" placeholder="Nama Lulus SMP" 
                    value="<?= $thn_lulus_smp; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_sma" placeholder="Tahun Lulus SMA" 
                    value="<?= $thn_lulus_sma; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus Universitas</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_univ" placeholder="Tahun Lulus Univ" 
                    value="<?= $thn_lulus_univ; ?>">
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-3">
                    <label for="">Nama Univ</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_univ" placeholder="Nama Univ" 
                    value="<?= $nama_univ; ?>">
                </div>
            </div>
            <div class="row  mt-3">
                <div class="col-lg-9">
                    <button class="btn btn-primary" type="submit">update</button>

                </div>
            </div>
        </form>

    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</html>