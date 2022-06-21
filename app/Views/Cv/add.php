<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD DATA DIRI</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>FORM TAMBAH DATA</h1>
            </div>
        </div>
        <form action="/Curriculum/tambah" method="POST">
        <div class="row-mt-3">
            <div class="col-lg-3">
                <label for="">Nama</label>
            </div>
            <div class="col-lg-6">
                <input type="text" class="form-control" name="nama" autofocus>
            </div>
            </div>
            <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Nama Panggilan</label>
                </div>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_panggilan">
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tempat Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="tempat_lahir">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tanggal Lahir</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="tanggal_lahir">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Jenis Kelamin</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="jenis_kelamin">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Agama</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="agama">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Status</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="status">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Alamat</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="alamat">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">email</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="email">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SD</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_sd">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SMP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_smp">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Nama SMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_sma">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Nama UNIVERSITAS</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="nama_univ">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SD</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_sd">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SMP</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_smp">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus SMA</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_sma">
                </div>
                </div>
                <div class="row-mt-3">
                <div class="col-lg-3">
                    <label for="">Tahun Lulus Universitas</label>
                </div>
                <div class="col-lg-6">
                    <input type="text" class="form-control" name="thn_lulus_univ">
                </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">TAMBAH DATA</button>
            </div>
            </form>
        </div>
    </body>
</html>