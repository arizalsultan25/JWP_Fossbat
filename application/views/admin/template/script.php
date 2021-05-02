<!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
<!-- CK Editor -->
<script src="<?= base_url('vendor/ckeditor5-build-classic/ckeditor.js') ?>"></script>
<!-- page script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

    ClassicEditor
      .create(document.querySelector('.editor'))
      .then(editor => {
        console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });

    ClassicEditor
      .create(document.querySelector('#berita_edit'))
      .then(editor => {
        console.log(editor);
      })
      .catch(error => {
        console.error(error);
      });
  });

  var jml = 1
  $("#add-riwayat").click(function() {
    var n = jml

    $(".form-riwayat").append(`
    
                            <div class="col-3 mt-2 row-` + jml + `">
                              <input type="text" name="riwayat_ssb[]"  class="form-control" placeholder="Nama SSB">
                          </div>
                          <div class="col-2 mt-2 row-` + jml + `">
                              <input type="text" name="riwayat_kabupaten[]" placeholder="Kabupaten"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 row-` + jml + `">
                              <input type="text" name="riwayat_prov[]" placeholder="Provinsi"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 row-` + jml + `">
                              <input type="number" min="1900" placeholder="2010" max="3000" name="riwayat_tahun[]"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 row-` + jml + `">
                              <select name="riwayat_posisi[]"  class="form-control">
                                  <option value="GK">Goal Keeper</option>
                                  <option value="Back">Back</option>
                                  <option value="MF">Midfielder</option>
                                  <option value="Striker">Striker</option>
                              </select>
                          </div>
                          <div class="col-1 mt-2 row-` + jml + `">
                            <button class="btn btn-danger btn-` + jml + `" type="button"><i class="fas fa-times"></i></button>
                         </div>
                      `)

    $(".btn-" + n).click(function() {
      $(".row-" + n).remove()
    })

    jml++
  })

  var x = 1
  $("#add-prestasi").click(function() {
    var y = x

    $('.form-prestasi').append(`
                          <div class="col-3 mt-2 baris-` + x + `">
                              <input type="text" name="prestasi_ssb[]"  class="form-control" placeholder="Nama SSB">
                          </div>
                          <div class="col-2 mt-2 baris-` + x + `">
                              <input type="text" name="prestasi_kompetisi[]" placeholder="Kompetisi"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 baris-` + x + `">
                              <input type="text" name="prestasi[]" placeholder="Provinsi"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 baris-` + x + `">
                              <input type="number" min="1900" placeholder="2010" max="3000" name="prestasi_tahun[]"  class="form-control">
                          </div>
                          <div class="col-2 mt-2 baris-` + x + `">
                              <select name="prestasi_posisi[]"  class="form-control">
                                  <option value="GK">Goal Keeper</option>
                                  <option value="Back">Back</option>
                                  <option value="MF">Midfielder</option>
                                  <option value="Striker">Striker</option>
                              </select>
                          </div>
                          <div class="col-1 mt-2 baris-` + x + `">
                            <button class="btn btn-danger tombol-` + x + `" type="button"><i class="fas fa-times"></i></button>
                          </div>`)

    $(".tombol-" + y).click(function() {
      $(".baris-" + y).remove()
    })

    x++
  })
</script>
</body>

</html>