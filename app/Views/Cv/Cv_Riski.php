<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curiculum Vitae</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <!-- NAVBAR -->
  <nav class="navbar bg-warning p-2 navbar-expand-lg">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarScroll">
                <a class="navbar-brand text-light" href="cv">Curriculum</a>
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" 
                style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="text-danger nav-link outline-warning active" 
                        aria-current="page" href="<?php echo site_url('Curriculum/add/' . $data['id']); ?>">Tambah Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-danger nav-link outline-warning active" 
                        aria-current="page" href="<?php echo site_url('Curriculum/get_edit/' . $data['id']); ?>">Update</a>
                    </li>
                    <li class="nav-item">
                        <a class="text-danger nav-link outline-warning active" 
                        aria-current="page" href="<?php echo site_url('Curriculum/delete/' . $data['id']); ?>">Delete</a>
                    </li>
                </ul>
                <form class="mt-2 d-flex" role="logout">
                    <a class="btn text-light text-light btn-outline-danger" 
                    aria-current="page" href="<?php echo site_url('Curriculum/logout/' . $data['id']); ?>">Logout</a>
                </form>
            </div>
        </div>
    </nav>
  <!-- end navbar -->
  <!-- Header -->
  <div class="container-fluid p-5 bg-info">
    <div class=" justify-content-center">
      <div class="col-sm-12 col-xs-12">
        <div class="jumbotron text-center">
          <div class="text-center">
            <img src="/assets/img/foto.jpg" class="rounded rounded-circle" alt="..." width="25%">
            <h2>CURRICULUM VITAE</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- End Header -->
    <!-- About -->
    <section class=" about" id="about">
      <div class="container bg-secondary">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About Me</h2>
            <hr>
          </div>

        <div class="row">
          <div class="col-sm-6">
            <fieldset>
              <table>
                <tr>
                  <td>NAMA</td>
                  <td>:</td>
                  <td><?php echo $data['nama'] ?></td>
                </tr>
                <tr>
                  <td>NAMA PANGGILAN</td>
                  <td>:</td>
                  <td><?php echo $data['nama_panggilan'] ?></td>
                </tr>
                <tr>
                  <td>TEMPAT LAHIR</td>
                  <td>:</td>
                  <td><?php echo $data['tempat_lahir'] ?></td>
                </tr>
                <tr>
                  <td>TANGGAL LAHIR</td>
                  <td>:</td>
                  <td><?php echo $data['tanggal_lahir'] ?></td>
                </tr>
                <tr>
                  <td>JENIS KELAMIN</td>
                  <td>:</td>
                  <td><?php echo $data['jenis_kelamin'] ?></td>
                </tr>
              </table>
            </fieldset>
          </div>
          <div class="col-sm-6">
            <fieldset>
              <table>
                <tr>
                  <td>AGAMA</td>
                  <td>:</td>
                  <td><?php echo $data['agama'] ?></td>
                </tr>
                <tr>
                  <td>ALAMAT</td>
                  <td>:</td>
                  <td><?php echo $data['alamat'] ?></td>
                </tr>
                <tr>
                  <td>STATUS</td>
                  <td>:</td>
                  <td><?php echo $data['status'] ?></td>
                </tr>
                <tr>
                  <td>E-Mail</td>
                  <td>:</td>
                  <td><?php echo $data['email'] ?></td>
                </tr>
              </table>
            </fieldset>
          </div>
        </div>
      </div>
</div>
    </section>
    <!-- End About -->
    <!-- Portfolio -->
    <section class="pendidikan" id="pendidikan">
      <div class="container bg-light">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">PENDIDIKAN</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">SD</div>
              <div class="card-body">
                <tr class="card-title"><?php echo $data['nama_sd'] ?></tr>
                <p class="card-text"><?php echo $data['thn_lulus_sd'] ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">SMP</div>
              <div class="card-body">
                <tr class="card-title"><?php echo $data['nama_smp'] ?></tr>
                <p class="card-text"><?php echo $data['thn_lulus_smp'] ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">SMA</div>
              <div class="card-body">
                <tr class="card-title"><?php echo $data['nama_sma'] ?></tr>
                <p class="card-text"><?php echo $data['thn_lulus_sma'] ?></p>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">PERGURUAN TINGGI</div>
              <div class="card-body">
                <tr class="card-title"><?php echo $data['nama_univ'] ?></tr>
                <p class="card-text"><?php echo $data['thn_lulus_univ'] ?></p>
              </div>
            </div>
          </div>
    </section>
    <!-- End Portfolio -->
    <!-- Organisasi -->
    <section class="organisasi" id="organisasi">
      <div class="container bg-secondary">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">PENGALAMAN ORGANISASI</h2>
            <hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">OSIS</div>
              <div class="card-body">
                <tr class="card-title">OSIS MAN 1 LAMPUNG TENGAH</tr>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
              <div class="card-header bg-danger text-center">OLAHRAGA</div>
              <div class="card-body">
                <tr class="card-title">BASKETBALL MAN 1 LAMPUNG TENGAH</tr>
              </div>
            </div>
          </div>
    </section>
    </section>
    <!-- Organisasi -->
    <section class="contact" id="contact">
      <div class="container bg-light">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h2>CONTACT US</h2>
          </div>
          <hr>
          <div class="container">
            <form action="mailto:dannywaskito64@gmail.com">
              <div class="form-group">
                <label>You Name</label>
                <input type="name" class="form-control" oninvalid="document.getElementById('namaErr').innerHTML = 'Please Enter Your Name';" placeholder="Enter Your Name" required>
                <div id="namaErr"></div>
              </div>
              <div class="form-group">
                <label>You E-mail</label>
                <input type="email" class="form-control" oninvalid="document.getElementById('emailErr').innerHTML = 'Please Enter Your Email Address';" placeholder="Enter Your Email" required>
                <div id="emailErr"></div>
              </div>
              <div class="form-group">
                <label>You Message</label>
                <textarea name="komentar" class="form-control" rows="5" required> </textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
    </section>
    <!-- End Organisasi -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>Copyright &copy; 2022 AHMAT RISKI RAMADHAN | DEVELOPMENT</p>
            <a href="https://www.facebook.com/ahmat.riski.161214" target="_blank" class="btn btn-primary" role="button">Facebook</a> |
            <a href="" target="_blank" class="btn btn-info" role="button">Twitter</a> |
            <a href="https://www.instagram.com/p/CGy90V2nod3LqgudZWekOumLDT7HZEzoPPfzgc0/?igshid=YmMyMTA2M2Y=" target="_blank" class="btn btn-warning" role="button">Instagram</a>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>