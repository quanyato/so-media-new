<!DOCTYPE html>
<html data-bs-theme="light" lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="shortcut icon" href="./assets/img/logo-white.png" type="image/x-icon" media="(prefers-color-scheme: dark)">
    <link rel="shortcut icon" href="./assets/img/logo-black.png" type="image/x-icon" media="(prefers-color-scheme: light)">

    <title>Dự án - Sổ Media</title>

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css?h=4a137410e50fe91a22b09a0763454a44">
    <link rel="stylesheet" href="./assets/css/styles.min.css?h=ade9f8059fcfdd33307dee5e5390c9a0">
    <link rel="stylesheet" href="./assets/css/custom.css">
</head>

<body>
    <?php include_once './php/header-nav.php'; ?>

    <section class="py-5">
        <div class="container py-5">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold">Các dự án</h2>
                    <p class="text-muted">Một số dự án nổi bật của Gia đình nhà Sổ</p>
                </div>
            </div>
            <div id="projectList" class="row row-cols-1 row-cols-md-2 mx-auto" style="max-width: 900px;">
                <div id="project1" class="col mb-4">
                    <div><a href="#"><img class="rounded img-fluid shadow w-100 fit-cover" src="assets/img/products/1.jpg?h=fc1e51d44f18accfa3a90f81c9cfffe4" style="height: 250px;"></a>
                        <div class="py-4"><span class="badge bg-primary mb-2">Website</span>
                            <h4 class="fw-bold">Lorem libero donec</h4>
                            <p class="text-muted">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once './php/footer.php'; ?>
</body>

</html>