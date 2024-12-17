
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ticket Management System</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content=""/>
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded"/>
   
    <link rel="stylesheet" href="<?php echo base_url();?>home/assets/css/style.css">
    
    <style>
#email-suggestions {
    position: absolute;
    background: white;
    width: calc(100% - 2px);
    z-index: 1000;
}
.suggestion:hover {
    background-color: #f0f0f0;
}
</style>

</head>
<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<?php 
include('header.php');
    ?>
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				<div style="margin:10px; background-color:white;padding:5px">
       <h3 style="margin-left:20px;margin-right:20px;margin-top:5px">XYTR Support Hub</h3>
        </div>
			
	</header>
	<!-- [ Header ] end -->
	
	

<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Create Ticket</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Components</a></li>
                            <li class="breadcrumb-item"><a href="#!">Form Elements</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Create Ticket</h5>
                    </div>
                    <div class="card-body">
                        
 <form role="form" enctype="multipart/form-data" method="post" action="">

    <div class="row">
        
    
        <div class="col-md-6 mt-3">
            <label for="ticket_subject">Ticket Subject</label>
            <input type="text" class="form-control" id="ticket_subject" value="<?php echo !empty($tax_data['ticket_subject']) ? htmlspecialchars($tax_data['ticket_subject']) : ''; ?>" name="ticket_subject" placeholder="Enter ticket Subject">
        </div>
    
<div class="col-md-6 mt-3">
            <label for="busi_area">Business Area</label>
            <select id="busi_area" name="busi_area" class="custom-select2 form-control" style="width: 100%;">
                <?php if (!empty($taxlist2)) {
                    foreach ($taxlist2 as $key => $value) {
                        $selected = ($value['id'] == $tax_data['area_name']) ? 'selected' : '';
                        echo '<option value="' . htmlspecialchars($value['id']) . '" ' . $selected . '>' . htmlspecialchars($value['area_name']) . '</option>';
                    }
                } ?>
            </select>
        </div>
        
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<div class="col-md-12 mt-3">
    <label for="ticket_descript">Description</label>
    <textarea rows="10" cols="180" name="ticket_descript" id="description">
        <?php echo isset($tax_data['ticket_descript']) ? $tax_data['ticket_descript'] : ''; ?>
    </textarea>
</div>
</div>
<script>
    CKEDITOR.replace('description');
</script>


    <div class="row">
        <div class="col-md-6 mt-3">
            <label for="attachment">Attachment</label>
            <input type="file" class="form-control" id="attachment" name="attachment" placeholder="Choose file">
        </div>
        <div class="col-md-6 mt-3">
    <label for="user_email">CC:</label>
    <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter User Email">
    <div id="email-suggestions" style="border: 1px solid #ccc; display: none;"></div>
</div>
</div>



    <input type="hidden" name="id" value="<?php echo !empty($tax_data['id']) ? htmlspecialchars($tax_data['id']) : ''; ?>">
    <button type="submit" name="submit" class="btn btn-primary mt-5">Submit</button>

</form>
                               </div>
                            </div>
                        </div>



    <!-- Required Js -->
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

    

             <script>
          
        CKEDITOR.replace( 'description' );
        
            </script> 
    <script src="<?php echo base_url();?>home/assets/js/vendor-all.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/plugins/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/ripple.js"></script>
    <script src="<?php echo base_url();?>home/assets/js/pcoded.min.js"></script>

<!-- Apex Chart -->
<script src="<?php echo base_url();?>home/assets/js/plugins/apexcharts.min.js"></script>


<!-- custom-chart js -->
<script src="<?php echo base_url();?>home/assets/js/pages/dashboard-main.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#user_email').on('input', function() {
        var email = $(this).val();
        if (email.length > 2) { // Start suggesting after 3 characters
            $.ajax({
                url: 'https://supporthub.xytr.org/requester/fetch_emails.php', // Path to your PHP file
                type: 'POST',
                data: { email: email },
                success: function(data) {
                    $('#email-suggestions').html(data).show();
                }
            });
        } else {
            $('#email-suggestions').hide();
        }
    });

    // Hide suggestions when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#user_email').length) {
            $('#email-suggestions').hide();
        }
    });

    // Select email suggestion
    $(document).on('click', '.suggestion', function() {
        $('#user_email').val($(this).text());
        $('#email-suggestions').hide();
    });
});
</script>


<script>
$(document).ready(function() {
    // Sample data for Managers and Engineers
    var managers = <?php echo json_encode($taxlist3); ?>;
    var engineers = <?php echo json_encode($taxlist4); ?>;

    function updateDropdowns() {
        var selectedBusinessArea = $('#busi_area').val();

        // Clear existing options
        $('#assign_man').empty().append('<option value="">--select option--</option>');
        $('#assign_engg').empty().append('<option value="">--select option--</option>');

        // Filter and populate Managers
        $.each(managers, function(index, manager) {
            if (manager.busi_area == selectedBusinessArea) {
                $('#assign_man').append('<option value="'+manager.id+'">'+manager.full_name+'</option>');
            }
        });

        // Filter and populate Engineers
        $.each(engineers, function(index, engineer) {
            if (engineer.busi_area == selectedBusinessArea) {
                $('#assign_engg').append('<option value="'+engineer.id+'">'+engineer.full_name+'</option>');
            }
        });
    }

    // Call the function on page load
    updateDropdowns();

    // Bind the function to the change event of the Business Area dropdown
    $('#busi_area').change(function() {
        updateDropdowns();
    });
});
</script>

</body>

</html>
