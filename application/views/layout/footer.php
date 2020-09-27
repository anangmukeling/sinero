<!-- Footer -->
</div>
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SISinero 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>



<script src="<?= base_url()  ?>aset/assets/jquery/jquery.min.js"></script>
<script src="<?= base_url()  ?>aset/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url()  ?>aset/assets/jquery-easing/jquery.easing.min.js"></script>
<script src="<?= base_url()  ?>aset/js/sb-admin-2.min.js"></script>
<script src="<?= base_url()  ?>aset/assets/chart.js/Chart.min.js"></script>
<script src="<?= base_url()  ?>aset/js/demo/chart-area-demo.js"></script>
<script src="<?= base_url()  ?>aset/js/demo/chart-pie-demo.js"></script>
<script>
    $('#modaldetailguru').on('show.bs.modal', function(event) {
        let gnip = $(event.relatedTarget).data('nip')
        let gnama = $(event.relatedTarget).data('nama')
        let galamat = $(event.relatedTarget).data('alamat')
        let gjenkel = $(event.relatedTarget).data('jenkel')
        let gemail = $(event.relatedTarget).data('email')
        let gnohp = $(event.relatedTarget).data('nohp')
        let gagama = $(event.relatedTarget).data('agama')
        let gtempat = $(event.relatedTarget).data('tempat')
        let gtgl = $(event.relatedTarget).data('tanggal')
        let gjabatan = $(event.relatedTarget).data('jabatan')

        // $(this).find('.modal-body input').val(namaku)
        $(this).find('.nipguru').text(gnip)
        $(this).find('.namaguru').text(gnama)
        $(this).find('.alamatguru').text(galamat)
        $(this).find('.genderguru').text(gjenkel)
        $(this).find('.emailguru').text(gemail)
        $(this).find('.nohpguru').text(gnohp)
        $(this).find('.agamaguru').text(gagama)
        $(this).find('.ttlguru').text(gtempat + ', ' + gtgl)
        $(this).find('.jabatanguru').text(gjabatan)
    })
</script>


</body>

</html>