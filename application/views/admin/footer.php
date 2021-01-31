        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();  ?>admin_assets/js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url();  ?>admin_assets/js/bootstrap.min.js"></script>
    <!-- Data Tables -->
    <script src="<?php echo base_url();  ?>admin_assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();  ?>admin_assets/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();  ?>admin_assets/js/dataTables.responsive.min.js"></script>
    <!-- validator -->
    <script src="<?php echo base_url();  ?>admin_assets/validator/validator.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();  ?>admin_assets/js/custom.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#datatable').dataTable();
        });
        $('.alert-message').alert().delay(3000).slideup('slow');
    </script>
  </body>
</html>