<!DOCTYPE html>
<html lang="en">

<!-- Header -->
<?php include 'header.php'; ?>
<!-- End Header -->


<body>
    <!-- Navbar -->
    <?php include 'navigation.php'; ?>
    <!-- End Navbar -->

    <!-- Banner -->
    <section id="bannercontact">
        <div class="bgoverlay"></div>
        <div class="overlay">
            Contact Us
        </div>
    </section>

    <!-- End Baner -->

    <!-- Maps -->
    <div id="maps" class="container">
        <div class="embed-responsive embed-responsive-21by9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.69265031954!2d106.82503551478352!3d-6.171890695531678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5d231d3926b%3A0x80d991c3eef57e2f!2sTaman%20Monumen%20Nasional!5e0!3m2!1sid!2sid!4v1592498023258!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
    <div class="linemap"></div>

    <section id="forminput">
        <div class="container">
            <form>
                <div class="form-row justify-content-center">
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Lengkap</label>
                            <input type="text" class="form-control" placeholder="Nama Lengkap" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">Alamat Lengkap</label>
                            <input type="text" class="form-control" placeholder="Alamat Lengkap">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="form-group">
                            <label for="exampleFormControlInput3">Email</label>
                            <input type="email" class="form-control" placeholder="Email" value="">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">Nomor Telepon</label>
                            <input type="text" name="telepon" class="form-control" placeholder="Nomor Telepon">
                        </div>
                    </div>
                    <div class="col-10">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Pesan</label>
                            <textarea class="form-control" placeholder="Tulis Pesan" rows="5"></textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </section>
    <!-- End Maps -->



    <!-- Footer -->
    <?php include 'footer.php'; ?>
    <!-- End Footer -->

</body>

</html>