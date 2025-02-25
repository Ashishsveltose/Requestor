<!DOCTYPE html>
<html>

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
                                <div class="card-box pb-10">
                                   <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <?php if(!empty($tax_data)) { 
      ?>
      <h4>Edit comment</h4>
      <?php 
        }
        else
        {
      ?>
      <h4>Add comment</h4>
      <?php 
        }
      ?>
   
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                      	<div class="login-title">
                              	<td colspan="2"><?php echo @$error; ?></td>
                                   <?php if(isset($error) && !empty($error)){ ?>
  				                <div class="alert alert-danger" align="center">
                                  <strong><?php echo $error; ?></strong>
                                </div>
                                   <?php } ?>
                                   <?php if(isset($success) && !empty($success)){ 
                                     echo '<div class="alert alert-success alert-dismissible">
                                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="fa fa-close"></i></button><h4><i class="fa fa-spinner fa-spin"></i>'.$success.'</h4></div>';
                                     echo '<meta http-equiv="refresh" content="2;url='.base_url('pageindex').'">';
                                    } ?>
                             </div>
          
               
                                    <form role="form" enctype="multipart/form-data" method="post" action="">
                                            
                                             <div class="row m-2">
                                           <div class="col-md-6">
                                                <div class="form-group m-2">
                                                    <label>content</label>
                                                   <input class="form-control" type="text"
                                                        placeholder="content"value="<?php if(!empty($tax_data['content'])){echo $tax_data['content'];}else{echo '';}?>" name="content" required/>
                                              
                                                     </div>
                                            </div>
                                            
                                           
                                              <div class="col-md-6">
                                                <div class="form-group m-2">
                                                    <label>*Status</label>
                                                     <select class="form-control" name="status" style="font-size:16px">
    <?php 
    $wl_options = array(
        'Pending' => 'Pending',
        'Approved'  => 'Approved',
        
      //  '575'  => 'WL-575'
    );
    
    foreach ($wl_options as $value => $label) {
        $selected = ($value == $tax_data['status']) ? 'selected="selected"' : '';
    ?>
        <option value="<?php echo $value; ?>" <?php echo $selected; ?>><?php echo $label; ?></option>
    <?php
    }
    ?>
</select>
                                                    </div>
                                            </div>
                                            </div>

                                            <input type="hidden" name="id" value="<?php if(!empty($tax_data['id'])){echo $tax_data['id'];}else{echo "";}?>">
               <button type="submit" name="submit"  class="btn btn-primary">submit</button>
              
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="padding: 0px 22px;">
                <div class="footer-wrap pd-20 mb-20 card-box ">
                    DeskApp - Bootstrap 4 Admin Template By
                    <a href="https://github.com/dropways" target="_blank">Sveltose Technology</a>
                </div>
            </div>
        </div>
    </div>

   

    <script>
$(document).ready(function() {
    $("#bidNumberInput").on("input", function() {
        var bidNumber = $(this).val();
        if (bidNumber !== "") {
            $.ajax({
                url: "<?php echo base_url(); ?>welcome/checkBidNumber",
                method: "POST",
                data: { bid_no: bidNumber },
                success: function(response) {
                    if (response === "exists") {
                        $("#bidNumberError").text("user Number already exists");
                    } else {
                        $("#bidNumberError").text("");
                    }
                }
            });
        } else {
            $("#bidNumberError").text("");
        }
    });
});
</script>


    <!-- welcome modal end -->
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
    <script>
 tinymce.init({
  selector: 'textarea#default'
});
</script>

</body>

</html>