<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Candidate Profile Overview</title>
    <link href="admincandidate/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="admincandidate/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="admincandidate/css/style.css" rel="stylesheet">
</head>

<body>
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img src="img/logo22.png" alt="#">
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                Candidate Profile
                            </div>
                            <div class="nav-item d-flex align-items-center">
                                <div class="input-group search-area">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                                </div>
                                <div class="plus-icon">
                                    <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                                    <img src="img/pic1.jpg" width="20" alt="">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg id="icon-user2" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                 <circle cx="12" cy="7" r="4"></circle>
                              </svg>
                                        <span class="ms-2">Profile </span>
                                    </a>
                                    <a href="#" class="dropdown-item ai-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                 <polyline points="16 17 21 12 16 7"></polyline>
                                 <line x1="21" y1="12" x2="9" y2="12"></line>
                              </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                            <li class="nav-item">
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="dlabnav">
            <div class="dlabnav-scroll">
                <div class="dropdown header-profile2 ">
                    <div class="dropdown-menu dropdown-menu-end">
                        <a href="app-profile.html" class="dropdown-item ai-icon ">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                     </svg>
                            <span class="ms-2">Profile </span>
                        </a>
                        <a href="email-inbox.html" class="dropdown-item ai-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                     </svg>
                            <span class="ms-2">Inbox </span>
                        </a>
                        <a href="page-register.html" class="dropdown-item ai-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                        <polyline points="16 17 21 12 16 7"></polyline>
                        <line x1="21" y1="12" x2="9" y2="12"></line>
                     </svg>
                            <span class="ms-2">Logout </span>
                        </a>
                    </div>
                </div>
                <ul class="metismenu" id="menu">
                    <li>
                        <ul aria-expanded="false">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">List Jobs</a></li>
                            <li><a href="#">Subcriptions</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Log Out</a></li>
                        </ul>
                    </li>
                </ul>
                </li>
                </ul>
            </div>
        </div>

        <div class="content-body">
            <div class="mt-4 editb">
                <a href="candidate-profile.html" class="btn btn-primary me-3 btn-sm"><i class="fas fa-edit me-2"></i>Edit Profile</a>
            </div>
            <div class="card3">
                <h3 class="text-center mb-3 mt-3">Candidate profile Overview</h3>
                <div class="card-header border-0 flex-wrap align-items-start">
                    <div class="col-md-12">
                        <div class="user d-sm-flex d-block pe-md-5 pe-0 mb-3">
                            <img src="img/user.jpg" alt="">
                            <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                <h5 class="mb-2 font-w600"><a href="javascript:void(0);" class="text-black">Andrew Jonson</a></h5>
                                <ul class="mb-2">
                                    <li><b>Email:</b> hotelsplnet@gmail.com</li>
                                    <li><b>Phone Number:</b> 7752300934</li>
                                    <li><b>Address:</b> assigns a numerical value to business functions</li>
                                    <li><b> Preferred Job Location :</b> Delhi NCR</li>
                                </ul>

                            </div>
                        </div>
                        <h6 class="mb-2"><b>Description:</b></h6>
                        <p>A data analyst collects, interprets and visualizes data to uncover insights. A data analyst assigns a numerical value to business functions so performance. A data analyst collects, interprets and visualizes data to uncover insights.
                            A data analyst assigns a numerical value to business functions so performance. A data analyst collects, interprets and visualizes data to uncover insights. A data analyst assigns a numerical value to business functions so performance.
                        </p>
                    </div>
                    <div class="col-md-4 col-12 text-end">

                    </div>
                </div>

                <div class="expernc card-body p-4">
                    <h2 class="fs-20 mb-3">All Experience</h2>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/hotel-icon.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Hotel Name:</b> Andrew Jonson</li>
                                        <li><b>Department:</b> 9AM To 6PM</li>
                                        <li><b>Designation:</b> Sr. Chef</li>
                                        <li><b>Working period:</b> 12 Jul 2015 - 15 Sep 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"> </div>
                    </div>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/hotel-icon.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Hotel Name:</b> Andrew Jonson</li>
                                        <li><b>Department:</b> 9AM To 6PM</li>
                                        <li><b>Designation:</b> Sr. Chef</li>
                                        <li><b>Working period:</b> 12 Jul 2015 - 15 Sep 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"> </div>
                    </div>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/hotel-icon.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Hotel Name:</b> Andrew Jonson</li>
                                        <li><b>Department:</b> 9AM To 6PM</li>
                                        <li><b>Designation:</b> Sr. Chef</li>
                                        <li><b>Working period:</b> 12 Jul 2015 - 15 Sep 2019</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"> </div>
                    </div>
                </div>

                <div class="expernc card-body p-4 pt-0">
                    <h2 class="fs-20 mb-3">Qualifications</h2>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/univercity.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Course Name:</b> Master in Chef</li>
                                        <li><b>Collage Name:</b> IIHM</li>
                                        <li><b>Passing Year:</b> 2008</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"></div>
                    </div>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/univercity.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Course Name:</b> Master in Chef</li>
                                        <li><b>Collage Name:</b> IIHM</li>
                                        <li><b>Passing Year:</b> 2008</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"></div>
                    </div>
                    <div class="card-header bg-light2 border-0 flex-wrap align-items-start">
                        <div class="col-md-8">
                            <div class="user d-sm-flex d-block pe-md-5 pe-0">
                                <img src="img/univercity.png" alt="">
                                <div class="ms-sm-3 ms-0 me-md-5 md-0 profiletext">
                                    <ul class="mb-2">
                                        <li><b>Course Name:</b> Master in Chef</li>
                                        <li><b>Collage Name:</b> IIHM</li>
                                        <li><b>Passing Year:</b> 2008</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12 text-end"></div>
                    </div>
                </div>
                <div class="card-footer d-flex flex-wrap justify-content-between align-items-center">
                    <div class="mb-md-2 exp-del">

                    </div>
                    <div class="mt-0">
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm me-2"><i class="fas fa-download me-2"></i>Download Ruseme</a>
                        <a href="javascript:void(0);" class="btn btn-primary btn-sm me-2"><i class="fas fa-download me-2"></i>Download Certificates </a>
                        <a href="javascript:void(0);" class="btn btn-warning btn-sm me-2"><i class="fas fa-share-alt me-2"></i>Share Profile</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <script src="admincandidate/js/global.min.js"></script>
    <script src="admincandidate/js/bootstrap-select.min.js"></script>
    <script src="admincandidate/js/bootstrap-datepicker.min.js"></script>
    <script src="admincandidate/js/jquery.dataTables.min.js"></script>
    <script src="admincandidate/js/datatables.init.js"></script>
    <script src="admincandidate/js/custom.min.js"></script>
    <script src="admincandidate/js/dlabnav-init.js"></script>
    <script src="admincandidate/js/demo.js"></script>
    <script src="admincandidate/js/styleSwitcher.js"></script>
</body>

</html>