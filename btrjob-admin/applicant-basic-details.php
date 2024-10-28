<?php include("include/head.php");?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</body>
<style type="text/css">
    .pending {
        float: left;
        width: auto;
        padding-right: 20px;
        padding-left: 20px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background: linear-gradient(135deg, #21dbdb, #5b51d0);
        color: #ffffff;
        font-size: 14px;
        text-transform: uppercase;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5px;
        box-shadow: 3px 3px #92b76e;
        font-weight: 700;
    }

    .hired {
        float: left;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background: linear-gradient(135deg, #21db84, #5197d0);
        color: #ffffff;
        font-size: 14px;
        text-transform: uppercase;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5px;
        box-shadow: 3px 3px #eeb407;
        font-weight: 700;
    }

    .reject {
        float: left;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background: linear-gradient(135deg, #db2121, #d05181);
        color: #ffffff;
        font-size: 14px;
        text-transform: uppercase;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5px;
        box-shadow: 3px 3px #92b76e;
        font-weight: 700;
    }

    .interview {
        float: left;
        width: 100%;
        padding-right: 20px;
        padding-left: 20px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        background: linear-gradient(135deg, #21dbdb, #5171d0);
        color: #ffffff;
        font-size: 14px;
        text-transform: uppercase;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 5px;
        box-shadow: 3px 3px #e86e15;
        font-weight: 700;
    }

    .bootstrap-timepicker {
        position: relative;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu {
        left: auto;
        right: 0;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu:before {
        left: auto;
        right: 12px;
    }

    .bootstrap-timepicker.pull-right .bootstrap-timepicker-widget.dropdown-menu:after {
        left: auto;
        right: 13px;
    }

    .bootstrap-timepicker .input-group-addon {
        cursor: pointer;
    }

    .bootstrap-timepicker .input-group-addon i {
        display: inline-block;
        width: 16px;
        height: 16px;
    }

    .bootstrap-timepicker-widget.dropdown-menu {
        padding: 4px;
    }

    .bootstrap-timepicker-widget.dropdown-menu.open {
        display: inline-block;
    }

    .bootstrap-timepicker-widget.dropdown-menu:before {
        border-bottom: 7px solid rgba(0, 0, 0, 0.2);
        border-left: 7px solid transparent;
        border-right: 7px solid transparent;
        content: "";
        display: inline-block;
        position: absolute;
    }

    .bootstrap-timepicker-widget.dropdown-menu:after {
        border-bottom: 6px solid #FFFFFF;
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        content: "";
        display: inline-block;
        position: absolute;
    }

    .bootstrap-timepicker-widget.timepicker-orient-left:before {
        left: 6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-left:after {
        left: 7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-right:before {
        right: 6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-right:after {
        right: 7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-top:before {
        top: -7px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-top:after {
        top: -6px;
    }

    .bootstrap-timepicker-widget.timepicker-orient-bottom:before {
        bottom: -7px;
        border-bottom: 0;
        border-top: 7px solid #999;
    }

    .bootstrap-timepicker-widget.timepicker-orient-bottom:after {
        bottom: -6px;
        border-bottom: 0;
        border-top: 6px solid #ffffff;
    }

    .bootstrap-timepicker-widget table {
        width: 100%;
        margin: 0;
    }

    .bootstrap-timepicker-widget table td {
        text-align: center;
        height: 30px;
        margin: 0;
        padding: 2px;
    }

    .bootstrap-timepicker-widget table td:not(.separator) {
        min-width: 30px;
    }

    .bootstrap-timepicker-widget table td span {
        width: 100%;
    }

    .bootstrap-timepicker-widget table td a {
        border: 1px transparent solid;
        width: 100%;
        display: inline-block;
        margin: 0;
        padding: 8px 0;
        outline: 0;
        color: #333;
    }

    .bootstrap-timepicker-widget table td a:hover {
        text-decoration: none;
        background-color: #eee;
        -webkit-border-radius: 4px;
        -moz-border-radius: 4px;
        border-radius: 4px;
        border-color: #ddd;
    }

    .bootstrap-timepicker-widget table td a i {
        margin-top: 2px;
        font-size: 18px;
    }

    .bootstrap-timepicker-widget table td input {
        width: 25px;
        margin: 0;
        text-align: center;
        border: none
    }

    .bootstrap-timepicker-widget .modal-content {
        padding: 4px;
    }

    @media (min-width: 767px) {
        .bootstrap-timepicker-widget.modal {
            width: 200px;
            margin-left: -100px;
        }
    }

    @media (max-width: 767px) {
        .bootstrap-timepicker {
            width: 100%;
        }

        .bootstrap-timepicker .dropdown-menu {
            width: 100%;
        }
    }

    @media screen and (max-width: 767px) {
        .hired {
            margin-left: 10px;
        }

        .interview {
            margin-left: 10px;
        }
    }

    /*.glyphicon{
    color: black;
  }*/
</style>




</head>

<body class="bg-light">

    <!-- Preloader -->
    <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
    <?php 
        if (isset($_GET['applicant_id'])) {
      
            $applicant_id = $_GET['applicant_id'];
            
            $readApplicant = $crud->Read("applicant", "`id`=$applicant_id");
           
           $applicantName =$readApplicant[0]['name'];
           $applicantPhone =$readApplicant[0]['phone'];
           $applicantemail =$readApplicant[0]['email'];
           $applicantAddress =$readApplicant[0]['address'];
           $applicantGender =$readApplicant[0]['gender'];
           $applicantQualification =$readApplicant[0]['qualification'];
           $applicantExperience =$readApplicant[0]['experience'];
           $applicantState =$readApplicant[0]['state'];
           $applicantDistrict =$readApplicant[0]['district'];
           $profile_img =$readApplicant[0]['profile_img'];

           $qualificationimage=$readApplicant[0]['qualification_img'];
            $experienceimage=$readApplicant[0]['experience_img'];
            $cv=$readApplicant[0]['cv_img'];
            $idimage=$readApplicant[0]['id_img'];
           
    }
    ?>
    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Applicant</h2>
                    </div>

                </div>

                <div class="card border-0 candidate-profile">

                    <div class="card-body pt-0">
                        <div class="d-flex align-items-center justify-content-between gap-2 gap-sm-4 mb-5 flex-wrap">
                            <div class="d-flex align-items-center gap-2 gap-sm-4 flex-wrap">

                                <?php
                                        if ($profile_img == "" || $profile_img == NULL) {
                                        ?>
                                <img class="img-thumbnail rounded-1" src="assets/img/icons/user.png" name="image"
                                    alt="profile image" width="100px" id="responseImage" height="100px">
                                <?php
                                        } else {
                                        ?>
                                <img src="upload/<?php echo $profile_img;?>" alt="img" width="160" height="160"
                                    class="profile-photo rounded-2">
                                <?php
                                        }
                                        ?>
                                <div class="mt-0 mt-sm-5">
                                    <h2>
                                        <?php echo $applicantName; ?>
                                    </h2>
                                    <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-envelope"
                                            style="color: red"></i>
                                        <?php echo $applicantemail; ?>
                                    </p>
                                    <p class="fw-semibold text-gray mb-0" style="color: black"><i class="fa fa-phone"
                                            style="color: red"></i>
                                        <?php echo $applicantPhone; ?>
                                    </p>

                                </div>

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-xxl-8 col-lg-6 col-12">
                                <div>
                                    <h4>Basic Details</h4>
                                    <form class="row g-3">
                                        <div class="col-xxl-6 col-lg-6 col-12">
                                            <ul class="list-unstyled d-flex flex-wrap gap-4">


                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Address</label>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="fs-14 fw-semibold">
                                                            <?php echo $applicantAddress;?></a>
                                                        </div>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                        <div class="col-xxl-6 col-lg-6 col-12">
                                            <ul class="list-unstyled d-flex flex-wrap gap-4">
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Qualification</label>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark">
                                                                <?php echo $applicantQualification;?>
                                                            </a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Gender</label>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark">
                                                                <?php echo $applicantGender?>
                                                            </a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">Experience</label>
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark">
                                                                <?php echo $applicantExperience;?> Years
                                                            </a></div>

                                                    </div>
                                                </li>


                                                <li>
                                                    <label class="fs-14 text-gray mb-1">State</label>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark">
                                                                <?php echo $applicantState;?>
                                                            </a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <label class="fs-14 text-gray mb-1">District</label>
                                                    <div class="d-flex align-items-center gap-3">

                                                        <div class="fs-14 fw-semibold"><a href="#" class="text-dark">
                                                                <?php echo $applicantDistrict;?>
                                                            </a></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-6 col-12">
                                <h4>Documents</h4>
                                <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                    <div class="bg-soft-primary p-3 rounded-1">
                                        <a href=""> <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                    </div>
                                    <div>
                                        <?php
                                            if ($qualificationimage == "" || $qualificationimage == null) {
                                                ?>
                                        <p class="light-bg" style="font-style: italic;">null</p>
                                        <?php
                                            } else {
                                            ?>
                                        <a href="uploads/<?php echo $qualificationimage;?>">
                                            <h6 class="fw-semibold lh-20">Qualification</h6>
                                        </a>

                                        <?php
                                            }
                                            ?>

                                        <!-- <p class="fs-14 text-gray mb-0">1.0 MB</p> -->
                                    </div>
                                </div>

                                <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                    <div class="bg-soft-info p-3 rounded-1">
                                        <a href=""> <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                    </div>
                                    <div>
                                        <?php
                                            if ($experienceimage == "" || $experienceimage == null) {
                                                ?>
                                        <p class="light-bg" style="font-style: italic;">null</p>
                                        <?php
                                            } else {
                                            ?>
                                        <a href="uploads/<?php echo $experienceimage; ?>">
                                            <h6 class="fw-semibold lh-20">Resume.pdf</h6>
                                        </a>
                                        <!-- <p class="fs-14 text-gray mb-0">1.0 MB</p> -->
                                        <?php
                                            }
                                            ?>

                                    </div>
                                </div>

                                <!-- Third Document -->
                                <div class="d-flex align-items-center gap-3 p-0 mb-5">
                                    <div class="bg-soft-success p-3 rounded-1">
                                        <a href=""> <i class="fa fa-file-pdf-o" style="color: red"></i></a>
                                    </div>
                                    <div>
                                        <?php
                                            if ($cv == "" || $cv == null) {
                                                ?>
                                        <p class="light-bg" style="font-style: italic;">null</p>
                                        <?php
                                            } else {
                                            ?>
                                        <a href="uploads/<?php echo $cv; ?>">
                                            <h6 class="fw-semibold lh-20">Experience</h6>
                                        </a>
                                        <!-- <p class="fs-14 text-gray mb-0">0.8 MB</p> -->
                                        <?php
                                            }
                                            ?>


                                    </div>
                                </div>
                            </div>

                        </div>






                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("include/footer.php") ?>

</body>

</html>