<!DOCTYPE html>
<html>

<head>
   <head>
   </head>
  <body>
   <?php
  include('header.php');
  ?>
  <?php
  include('sidebar.php');
  ?>
 <div class="mobile-menu-overlay"></div>

    <div class="main-container">

        <div class="xs-pd-20-10 pd-ltr-20">

            <div class="title pb-20">
            </div>
            <div class="pd-ltr-20 xs-pd-20-10">
                <div class="min-height-200px">
                    <div class="card-box mb-30">

                        <div class="row">
                          
                            <div class="col-md-12">
                              <!--<div class="col-6">-->
                                <div class="pd-20 float-right">
                                  <!--  <a href="https://edumatelive.in/newadmin/addqcategory" class="dropdown-toggle no-arrow">
                                        <button type="button" class="btn btn-primary">Add Category</button>
                                    </a> -->
                              </div>
                              <!--   </div> -->
                           
                                <div class="card-box pb-10 w-100">
                                    <table class="table nowrap">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                              <th>Template ID</th>
                                              <th>Amount</th>
                                              <th>Order Status</th>
                                                <th>Action</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                                <?php
                                          $count = 1; 
                  if(!empty($taxlist)){
                    foreach ($taxlist as $getdata) { 
                  ?>
                    <tr>
                      <td><?php echo $count; ?>
                      </td>
                      
                      <td><?php  echo (!empty($getdata['template_id'])?$getdata['template_id']:'none'); ?></td>
                      <td><?php  echo (!empty($getdata['amount'])?$getdata['amount']:'none'); ?></td>
                        <td>complete</td>
                                                             <td>
                                                        <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                                            href="#" role="button" data-toggle="dropdown">
                                                            <i class="dw dw-more"></i>
                                                        </a>
                                                        <div
                                                            class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                            <a class="dropdown-item" href="#"><i class="dw dw-eye"></i>
                                                                View</a>


                                                            <a href="javascript:void(0)" href-data="<?php echo  $getdata['id']; ?>" class="dropdown-item" title="Delete"><i class="dw dw-delete-3" aria-hidden="true"></i>Delete</a>
                                                        </div>
                      </td>
                                      </div>       
                      </td>
                                          </tr>                 
                             
                    
                                           
                                         <?php $count++; 
                  }
                }
                ?>                                                              </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="footer-wrap pd-20 mb-20 card-box">
                    DeskApp - Bootstrap 4 Admin Template By
                    <a href="https://github.com/dropways" target="_blank">Sveltose Technology</a>
                </div>
            </div>
        </div>
        <!-- js -->
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/core.js"></script>
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/script.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/process.js"></script>
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/layout-settings.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
        <!-- buttons for Export datatable -->
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/buttons.flash.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>home/assets/src/plugins/datatables/js/vfs_fonts.js"></script>
        <!-- Datatable Setting js -->
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/datatable-setting.js"></script>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0"
                style="display: none; visibility: hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        <!-- switchery js -->
        <script src="<?php echo base_url();?>home/assets/src/plugins/switchery/switchery.min.js"></script>
        <!-- bootstrap-tagsinput js -->
        <script src="<?php echo base_url();?>home/assets/src/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
        <!-- bootstrap-touchspin js -->
        <script src="<?php echo base_url();?>home/assets/src/plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
        <script src="<?php echo base_url();?>home/assets/vendors/scripts/advanced-components.js"></script>
  <script type="text/javascript">
$(document).ready(function(){
  $(function () {

    $('#customertable').DataTable({

      "paging": true,

      "lengthChange": false,

      "searching": true,

      "ordering": true,

      "info": true,

      "autoWidth": false

    });
  });
  $(".dropdown-item").click(function(e){
    var val = confirm("Are you sure, you want to delete orders ?");
    if (val == true){
      window.location.reload();
    }
    
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>welcome/deleteRecord",
        data:{table:'orders',id:id,status:3,colwhr:'id',whrstatuscol:'status',action:"Delete"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
  $(".deactive").click(function(e){
        var val = confirm("Are you sure, you want to deactivate orders ?");
        if (val == true){
      window.location.reload();
    }
    
        //e.preventDefault(); 
        var id = $(this).attr("href-data");
        //alert(href);
        //var btn = this;
        if(val){
            $.ajax({
              type: "POST",
              url: "<?php echo base_url();?>admin/welcome/change_status",
              data:{tablename:'orders',id:id,status:0,whrcol:'id',whrstatuscol:'status',action:"Deactive"},
              dataType:'json',
              success: function(response) {
                if (response.status == 1){
                  $.notify(response.msg, "success");
                  setTimeout(function(){location.reload()},1000);
                }else{
                  $.notify(response.msg, "error");
                }
              }
          });
        }
  });
  $(".useractive").click(function(e){
    var val = confirm("Are you, sure you want to activate orders ?");
    if (val == true){
      window.location.reload();
    }
    
    var id = $(this).attr("href-data");
    if(val){
      $.ajax({
        type: "POST",
        url: "<?php echo base_url();?>admin/welcome/change_status",
        data:{tablename:'orders',id:id,status:1,whrcol:'id',whrstatuscol:'status',action:"Active"},
        dataType:'json',
        success: function(response) {
          if (response.status == 1){
            $.notify(response.msg, "success");
            setTimeout(function(){location.reload()},1000);
          }else{
            $.notify(response.msg, "error");
          }
        }
      });
    }
  });
});
</script>

</body>

</html>