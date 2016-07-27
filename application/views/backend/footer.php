<!-- Footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
            <!-- Copyright info -->
            <p class="copy">Copyright &copy; 2015 | <a href="#">PT. Pelayaran Gema Bahari</a> </p>
      </div>
    </div>
  </div>
</footer> 	

<!-- Footer ends -->

<!-- Scroll to top -->
<span class="totop"><a href="#"><i class="fa fa-chevron-up"></i></a></span> 

<!-- JS -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.js"></script> <!-- jQuery -->
<script src="<?php echo base_url() ?>assets/admin/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery-ui.min.js"></script> <!-- jQuery UI -->
<script src="<?php echo base_url() ?>assets/admin/js/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.slimscroll.min.js"></script> <!-- jQuery Slim Scroll -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.dataTables.min.js"></script> <!-- Data tables -->

<script src="<?php echo base_url() ?>assets/admin/js/bootstrap-datetimepicker.min.js"></script> <!-- Date picker -->
<script src="<?php echo base_url() ?>assets/admin/js/jquery.onoff.min.js"></script> <!-- Bootstrap Toggle -->
<script src="<?php echo base_url() ?>assets/admin/js/filter.js"></script> <!-- Filter for support page -->
<script src="<?php echo base_url() ?>assets/admin/js/custom.js"></script> <!-- Custom codes -->
<script src="<?php echo base_url(); ?>/assets/admin/js/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>/assets/admin/js/ckeditor/adapters/jquery.js"></script>
<script type="text/javascript">
      <script type="text/javascript">
      $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.danger').attr('href', $(e.relatedTarget).data('href'));
      });
    </script>   
  
</script>
    <script type="text/javascript">
    $(function() {
            // Ckeditor standard
            CKEDITOR.replace("isi");
            $( 'textarea#ckeditor_standard' ).ckeditor({width:'98%', height: '150px', toolbar: [
        { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', '-', 'Templates' ] }, // Defines toolbar group with name (used to create voice label) and items in 3 subgroups.
        [ 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ],      // Defines toolbar group without name.
        { name: 'basicstyles', items: [ 'Bold', 'Italic' ] }
      ]});
            $( 'textarea#ckeditor_full' ).ckeditor({width:'98%', height: '150px'});
        });
    </script>
</body>
</html>