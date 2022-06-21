<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN LOGIN</title>

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom bg-info">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <!-- login -->

                    <?php if (session()->getFlashdata('pesan')) : ?>
                        <div class="alert alert-danger mt-4" role="alert">
                            <?= session()->getFlashdata('pesan'); ?>
                        </div>
                    <?php endif; ?>
                    <form action="/auth/index" method="POST">

                        <div class="divider d-flex align-items-center my-4">
                            <h2 class="text-center fw-bold mx-3 mb-0">LOGIN</h2>
                        </div>

                        <!-- username input -->
                        <div class="form-outline mb-4">
                            <input type="username" name="username" class="form-control form-control-lg" id="username" placeholder="Masukan Username" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" id="password" class="form-control form-control-lg" placeholder="Masukan password" />
                        </div>
                        

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
        <footer>
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12 mt-9">
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