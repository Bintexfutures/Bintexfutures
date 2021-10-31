  
            </div>
            <!--END CONTENT--></div>

        <!--END FOOTER--><!--END PAGE WRAPPER--></div>
</div>
<!--dropdown hover on top-->
<script src="<?php echo base_url(); ?>assets/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<!--dropdown hover on top-->
<script src="<?php echo base_url(); ?>assets/js/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>assets/js/respond.min.js"></script>
<!--left dropdown-->
<script src="<?php echo base_url(); ?>assets/vendors/metisMenu/jquery.metisMenu.js"></script>
<!--left dropdown-->
<!--hide and show leftmenu-->
<script src="<?php echo base_url(); ?>assets/vendors/jquery-cookie/jquery.cookie.js"></script>
<!--hide and show leftmenu-->
<script src="<?php echo base_url(); ?>assets/js/jquery.menu.js"></script>
<!--CORE JAVASCRIPT-->
<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="<?php echo base_url(); ?>assets/vendors/intro.js/intro.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/sco.message/sco.message.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/DataTables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/DataTables/media/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/table-datatables.js"></script>

<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/summernote/summernote.js"></script>


<script type="text/javascript">

      //BEGIN CKEDITOR
       CKEDITOR.disableAutoInline = true; 
       //END CKEDITOR



 $('table').dataTable( {
        "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    } );

 
$('.vbn').summernote();

  var t=$('#example').DataTable( );
   t.api().columns().every( function () {
                var column = this;
                var select = $('<select><option value=""></option></select>')
                    .appendTo( $(column.footer()).empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
 
                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    } );
 
                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
</script>




</body>
</html>