<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Form</title>
    <link href="<?= base_url()."hotlair-admin/"?>css/bootstrap-select.min.css" rel="stylesheet">
	<link href="<?= base_url()."hotlair-admin/"?>css/jquery.dataTables.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url()."hotlair-admin/"?>css/style.css" rel="stylesheet">
	
</head>
<body class="vh-100">


    <div id="preloader">
		<div class="lds-ripple">
			<div></div>
			<div></div>
		</div>
    </div>

    <div class="page-wraper">

        <!-- Content -->
        <div class="browse-job login-style3">
            <div class="bg-img-fix overflow-hidden" style="background-image:url(<?= base_url()."hotlair-admin/"?>img/bg6.jpg); height: 100vh;">
                <div class="row gx-0">
                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 vh-100 bg-white ">
                        <div id="mCSB_1" class="mCustomScrollBox mCS-light mCSB_vertical mCSB_inside" style="max-height: 653px;" tabindex="0">
                            <div id="mCSB_1_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">
                                <div class="login-form style-2">
                                    
                                    
                                    <div class="card-body">
                                        <div class="logo-header">
                                            <a href="index.html" class="logo"><img src="<?= base_url()."hotlair-admin/"?>img/logo22.png" alt="" class="mCS_img_loaded"></a>
                                        </div>
                                    
                                        <nav>
                                            <div class="nav nav-tabs border-bottom-0" id="nav-tab" role="tablist">
                                                
                                        <div class="tab-content w-100" id="nav-tabContent">
                                          <div class="tab-pane fade show active" id="nav-personal" role="tabpanel" aria-labelledby="nav-personal-tab">
                                            <form action="<?=$url?>" class=" dez-form pb-3">
                                                    <h3 class="form-title m-t0">Register Now</h3>
                                                    <div class="dez-separator-outer m-b5">
                                                        <div class="dez-separator bg-primary style-liner"></div>
                                                    </div>
                                                    <p>Enter your e-mail address and your password. </p>
                                                    <div class="form-group mb-3">
                                                        <input name="full_name" required="" class="form-control" placeholder="Full Name" type="text">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input name="email" required="" class="form-control" placeholder="Email" type="email">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input name="password" required="" class="form-control " placeholder="Type Password" type="password">
                                                    </div>
                                                    <div class="form-group mb-3">
                                                        <input name="confirm_password" required="" class="form-control " placeholder="Reapet Password" type="password">
                                                    </div>
                                                    <div class="form-group text-left mb-5">
                                                        <button class="btn btn-primary dz-xs-flex me-3">Register Now</button>
                                                        <!-- <button class="nav-link m-auto btn tp-btn-light btn-primary" id="nav-forget-tab" data-bs-toggle="tab" data-bs-target="#nav-forget" type="button" role="tab" aria-controls="nav-forget" aria-selected="false" tabindex="-1">Creat New Account</button> 	 -->
                                                    </div>
                                                  
                                                </form>
                                               
                                          </div>
                                         </div>
                                         </div>
                                       </nav>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= view('hotlair/includes/footer')?>

<script>
    $(document).ready(function() {
    // Intercept the form submission
        $('form').submit(function(event) {
            // Prevent the default form submission
            event.preventDefault();
            $('.error-message').remove();
            var url = $('form').attr('action');

            // Serialize the form data
            var formData = $(this).serialize();

            // Make the AJAX request
            $.ajax({
                type: 'POST', 
                url: url,
                data: formData,
                success: function(response) {
                var response = $.parseJSON(response);
                console.log(response);
                if(response.success){
                    window.location.href = document.referrer;
                }
                else{
                if (response) {
                    for (var key in response) {
                        if (response.hasOwnProperty(key)) {

                            var inputField = $('.form-control[name="' + key + '"]');
                            var errorMessage = response[key];
                            inputField.after('<span class="error-message">' + errorMessage + '</span>');
                        }
                    }
                }
            }},
                error: function(error) {
                    // Handle the error response
                    $('#result').html('Error submitting form');
                }
            });
        });
    });
</script>