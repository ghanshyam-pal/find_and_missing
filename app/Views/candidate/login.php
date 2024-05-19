<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login</title>

    <link href="<?=base_url()?>adminmaster/css/bootstrap-select.min.css" rel="stylesheet">

	<link href="<?=base_url()?>adminmaster/css/jquery.dataTables.min.css" rel="stylesheet">

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

    <link href="<?=base_url()?>adminmaster/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">





    <div id="preloader">

		<div class="lds-ripple">

			<div></div>

			<div></div>

		</div>

    </div>





	<div class="authincation h-100">

        <div class="container h-100">

            <div class="row justify-content-center h-100 align-items-center">

                <div class="col-md-5">

                    <div class="authincation-content">

                        <div class="row no-gutters">

                            <div class="col-xl-12">

                                <div class="auth-form">

									<div class="text-center mb-3">

										<a href="#" class="brand-logo2">

										<img class="w-30" src="<?=base_url()?>adminmaster/img/logo22.png" alt="logo">

										</a>

									</div>

                                    <form action="<?=base_url().$submit_to?>">

                                        <div class="mb-3">

                                            <label class="mb-1"><strong>Email</strong></label>

                                            <input type="email" name="email" class="form-control">

                                        </div>

                                        <div class="mb-3">

                                            <label class="mb-1"><strong>Password</strong></label>

                                            <input type="password" class="form-control" name="password">

                                        </div>

                                        <div class="row d-flex justify-content-between mt-4 mb-2">

                                            <div class="mb-3">

                                                <a href="#">Forgot Password?</a>

                                            </div>

                                        </div>

                                        <div class="text-center">

                                            <button type="submit" id="login-candidate" class="btn btn-primary btn-block">Sign In</button>

                                        </div>

                                    </form>

                                    <div class="new-account mt-3">

                                        <p>Don't have an account? <a class="text-primary" href="<?=base_url().$register?>">Sign up</a></p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>



<?= view('candidate/includes/footer') ?> 