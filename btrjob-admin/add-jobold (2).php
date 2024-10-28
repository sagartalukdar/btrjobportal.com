<?php include("include/head.php");?>
<!-- ckeditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
</head>

<body class="bg-light">

    <!-- ck editor css -->
        <style>
            #container {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* Editing area */
                min-height: 200px;
                margin: 20px auto;
            }
            .ck-content .image {
                /* Block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
    <!-- ck editor css -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="logo"><img src="assets/img/logo-icon.svg" alt="img"></div>
        </div>
    </div>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>

    <!-- Main Wrapper-->
    <main class="main-wrapper">
        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">List A New Job</h2>
                        <p class="text-gray mb-0">Fill The Details About This Job</p>
                    </div>

                </div>


                <div class="card border-0 p-5">
                    <div
                        class="card-header bg-transparent border-0 p-0 d-flex align-items-center justify-content-between gap-3">
                        <h6 class="mb-0">Job Description</h6>
                    </div>

                    <div class="card-body p-0 pt-4">
                        
                        <form id="custom-form-validation" method="post">

                            <div class="form-group">
                                <label class="form-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title" placeholder="job title" required>
                            </div>

                            <label class="form-label">Job Location</label>
                            <div class="form-group" id="editor1">
                                <textarea rows="5" id="short-title" class="form-control" name="job_location"
                                    placeholder="Enter job location here ." required ></textarea>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">State</label>
    
                                    <select class="form-select" aria-label="Default select example" name="state"
                                        id="inputState">
                                        <option value="SelectState" >Select State First</option>
                                        <option value="Andra Pradesh">Andra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madya Pradesh">Madya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Orissa">Orissa</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttaranchal">Uttaranchal</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories
                                        </option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                                        <option value="Daman and Diu">Daman and Diu</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Lakshadeep">Lakshadeep</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">District</label>
                                    <select class="form-select" aria-label="Default select example" name="district"
                                        id="inputDistrict">
                                        <option value="" >-- Select District -- </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Industry</label>
    
                                    <select class="form-select" aria-label="Default select example" id="industry" name="industry">
                                        <option value="" >-- Select Your Industry Type --</option>
                                        <option value="Information Technology">Information Technology</option>
                                        <option value="Financial Services">Financial Services</option>
                                        <option value="Manufacturing">Manufacturing</option>
                                        <option value="Pharmaceutical & Biotechnology">Pharmaceutical & Biotechnology</option>
                                        <option value="Management & Consulting">Management & Consulting</option>
                                        <option value="Telecommunications">Telecommunications</option>
                                        <option value="Education">Education</option>
                                        <option value="Retail & Wholesale">Retail & Wholesale</option>
                                        <option value="Human Resources & Staffing">Human Resources & Staffing</option>
                                        <option value="Healthcare">Healthcare</option>
                                        <option value="Real Estate">Real Estate</option>
                                        <option value="Media & Mass Communication">Media & Mass Communication</option>
                                        <option value="Nonprofit & NGO">Nonprofit & NGO</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="Construction">Construction</option>
                                        <option value="Personal Consumer Services">Personal Consumer Services</option>
                                        <option value="Transportation & Logistics">Transportation & Logistics</option>
                                        <option value="Tourism & Hospitality">Tourism & Hospitality</option>
                                        <option value="Aerospace & Defense">Aerospace & Defense</option>
                                        <option value="Legal">Legal</option>
                                        <option value="Restaurants & Food Service">Restaurants & Food Service</option>
                                        <option value="Government & Civil Services">Government & Civil Services</option>
                                        <option value="Agriculture">Agriculture</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Job Type</label>
                                    <select class="form-select" aria-label="Default select example" name="job_type"
                                        id="job_type">
                                        <option value="">-- Job Type -- </option>
                                        <option value="full_time">Full Time</option>
                                        <option value="part_time">Part Time</option>
                                        <option value="contract">Contract</option>
                                        <option value="temporary">Temporary</option>
                                        <option value="fresher">Fresher</option>
                                        <option value="internship">Internship</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Salary</label>
                                <input type="text" class="form-control" name="salary" placeholder="salary in amount" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Minimum Requirment Qualification</label>

                                <select class="form-select" aria-label="Default select example" name="minimum_qualification">
                                    <option value=""> -- Select --</option>
                                    <option value="bellow_8">Bellow 8th</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Minimum Experience in Year (Optional)</label>

                                <select class="form-select" aria-label="Default select example" name="minimum_experience">
                                    <option value=""> -- Select --</option>
                                    <option value="no_experience">No Experience </option>
                                    
                                </select>
                            </div>

                            <label class="form-label">Job Description</label>
                            <div class="form-group" id="editor2">
                                <textarea rows="5" id="short-title" class="form-control" name="job_description"
                                    placeholder="Enter job description" required ></textarea>
                            </div>
                            
                            <div class="form-group col-md-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" name="end_date">
                            </div>

                            <div class="button_group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </main>

    <?php include("include/footer.php") ?>
    <!-- state-district Script -->
    <script src="assets/js/company-state-district.js"></script>

    <!-- ckeditor -->
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor1' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
     <script>
        ClassicEditor
            .create( document.querySelector( '#editor2' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <!-- ckeditor -->

</body>

</html>