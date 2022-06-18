<?php include 'template/header.php';

include "proses.php"; ?>

<header>
    <div class="container bg-dark mt-2 text-center shadow-lg p-2 mb-2 bg-body rounded">
        <h1>PELAPORAN KENDALA EMR RS NUR ROHMAH</h1>
    </div>
</header>

<div class="container">
    <div class="card" style="width: auto;">
        <div class="row">
            <div class="card-body">
                <div class="col-lg col-sm">
                    <form method="POST">
                        <h5 for="" class="bg-warning col text-white text-center shadow-sm p-2 bg-body rounded">Form Pelaporan</h5>
                        <div class="f-group">
                            <!-- <div class="f-group">
                                        <label for="">Kode Laporan</label>
                                        <input type="text" class="form-control mb-3" name="kd_laporan" placeholder="Kosongkan Saja!">
                                    </div> -->
                            <label for="">Tanggal</label>
                            <input type="date" id="" name="tgl" placeholder="" class="form-control tgl_now" required>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Kendala / Bug Report / Error</label>
                            <textarea class="form-control" name="kendala" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <div class="f-group">
                            <label for="">Modul / Menu di EMR</label>
                            <input type="text" class="form-control" name="modul">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Lokasi Unit / Ins.</label>
                            <textarea class="form-control" name="lokasi" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                        </div>
                        <!-- <div class="mb-3 mt-3">
                                    <label for="alamat" class="form-label">Penanganan</label>
                                    <textarea class="form-control" name="penanganan" id="" rows="3" required="Silahkan lengkapi dulu!"></textarea>
                                </div> -->
                        <div class="mb-3 mt-3">
                            <label for="alamat" class="form-label">Note / Saran </label>
                            <textarea class="form-control" name="note" id="" rows="3"></textarea>
                        </div>

                        <input type="hidden" class="form-control" name="status" value="Menunggu Respon">

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button type="sumbit" name="save" class="btn btn-success btn btn-primary btn-sm">Simpan</button>
                            <button type="submit" name="update" class="btn btn-warning btn btn-primary btn-sm">Update</button>
                            <button type="reset" class="btn btn-danger btn btn-primary btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include 'template/footer.php'; ?>