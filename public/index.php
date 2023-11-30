<?php include_once "../src/partials/headerHome.php" ?>

<div class="flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="row px-4 py-5 container">
        <div class="col-lg-4 mx-lg-auto mt-5">
            <h1 class="display-5 fw-bold lh-1 mb-3">Barang Murah dan Berkualitas</h1>
            <p class="lead">Barang Murah berkualitas buatan anak sekolah</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <a href="#produk" class="btn btn-primary btn-lg px-4 me-md-2">Cari Produk</a>
            </div>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="../src/img/landingPage1.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="400" loading="lazy">
        </div>
    </div>
</div>

<section id="produk">
    <div class="container px-4 py-5">
        <div class="px-4 py-5">
            <hr>
        </div>

        <h4 class="text-center mb-4">Daftar Produk School Mart</h4>

        <div class="row px-4 container">
            <?php
            require "../Data/ProdukList.php";
            foreach ($produkList as $produk => $data) {
            ?>
                <div class="card mx-2" style="width: 18rem;">
                    <img src="../src/img/Produk/<?= $data[3] ?>" class="card-img-top rounded" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data[0] ?></h5>
                        <p class="card-text"><?= $data[1] ?></p>
                        <p class="h6 mb-2">Rp.<?= number_format($data[2]) ?></p>
                        <a href="transaksi.php?id=<?= $produk ?>" class="btn btn-primary">Check Out</a>
                    </div>
                </div>

            <?php } ?>
        </div>

    </div>
</section>

<?php include_once "../src/partials/footer.php" ?>