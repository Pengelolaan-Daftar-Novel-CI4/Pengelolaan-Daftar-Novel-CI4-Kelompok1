<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Novel</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <script src="/assets/js/unpkg.com_sweetalert@2.1.2_dist_sweetalert.min.js"></script> 
</head>
     <div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-5 d-none d-sm-inline">Baca Novel</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="/novel" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="/detail" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Detail</span> </a>
                    </li>
                    <li>
                        <a href="/genre" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Kategori</span> </a>
                    </li>
                    <li>
                        <a href="/novel/contact" class="nav-link px-0 align-middle">
                            <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Contacts</span></a>
                    </li>
                    <li>
                        <a href="/novel/about" class="nav-link px-0 align-middle ">
                            <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">About Us</span></a>
                    </li>
                    <li>   
                    <a href="/login" class="btn btn-outline-danger">Logout</a>  
                </ul>
            </div>
        </div>
        <div class="col py-3">
            <div class="container">
            <?= $this->renderSection('content') ?>
        </div>
        </div>
    </div>
</div>

    <script src="/assets/js/bootstrap.min.js"></script>

    <?php if (session()->getFlashdata('success')) : ?>
        <script>
            swal({
                title: "Informasi",
                text: "<?= session()->getFlashdata('success') ?>",
                icon: "success",
                button: "OK",
            });
        </script>

    <?php endif; ?>
</body>

</html>
