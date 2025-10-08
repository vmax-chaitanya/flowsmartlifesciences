<script src="<?php echo base_url(); ?>assets/admin/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url(); ?>assets/admin/js/off-canvas.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/template.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/settings.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
  <script src="<?php echo base_url(); ?>assets/admin/datatables.net/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="<?php echo base_url(); ?>assets/admin/js/data-table.js"></script>
  <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
            var eles = document.getElementsByClassName( 'ce_editor' );
            for (let index = 0; index < eles.length; index++) {
                let element = eles[index];
                ClassicEditor
                .create( element )
                .catch( error => {
                    console.error( error );
                } );
            }
       
    </script>
