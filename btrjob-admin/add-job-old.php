<?php include("include/head.php");?>


<body class="bg-light">

  <!-- Preloader -->
        <?php include("include/preloader.php");?>


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
                        
                        <form  method="post">

                            <div class="form-group">
                                <label class="form-label">Job Title</label>
                                <input type="text" class="form-control" name="job_title" id="job_title" placeholder="job title" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Location</label>
                                <textarea rows="5"class="form-control" name="job_location" id="job_location" placeholder="Enter job location here ." required></textarea>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">State</label>
    
                                    <select class="form-select" aria-label="Default select example" name="state"id="inputState">
                                        <option value="SelectState">Select State First</option>
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
                                    <select class="form-select" aria-label="Default select example" name="district" id="inputDistrict">
                                        <option value="">-- Select District -- </option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Category</label>
    
                                    <select class="form-select" aria-label="Default select example" id="category" name="category">
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
                                    <select class="form-select" aria-label="Default select example" name="jobtype"
                                        id="jobtype">
                                        <option value="">-- Job Type -- </option>
                                        <option value="fulltime">Full Time</option>
                                        <option value="parttime">Part Time</option>
                                        <option value="contract">Contract</option>
                                        <option value="temporary">Temporary</option>
                                        <option value="fresher">Fresher</option>
                                        <option value="internship">Internship</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Salary</label>
                                <input type="text" class="form-control" name="salary" id="salary" placeholder="salary in amount" required>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Minimum Requirment Qualification</label>

                                <select class="form-select" aria-label="Default select example" name="minimum_qualification" id="qualification">
                                    <option value=""> -- Select --</option>
                                    <option value="Below 8">Below 8th pass</option>
                                    <option value="Class 10 pass">Class 10 pass</option>
                                    <option value="Class 10+2 + D.El.Ed">Class 10+2 + D.El.Ed</option>
                                    <option value="Graduate Passed">Graduate Passed</option>
                                    <option value="Above Graduation">Above Graduation</option>
                                    <option value="B.A(Any Honours) with B.ED">B.A(Any Honours) with B.ED </option>
                                    <option value="B.A(English) with B.ED">B.A(English) with B.ED </option>
                                    <option value="B.A(Geography) with B.ED">B.A(Geography) with B.ED </option>
                                    <option value="B.A(Political Science) with B.ED">B.A(Political Science) with B.ED </option>
                                    <option value="B.A(Political Science) with B.ED">B.A(Econonics) with B.ED </option>
                                    <option value="B.Sc with B.ED(Any Honours)">B.Sc with B.ED(Any Honours) </option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Minimum Experience in Year (Optional)</label>

                                <select class="form-select" aria-label="Default select example" id="experience" name="minimum_experience">
                                    <option value=""> -- Select --</option>
                                    <option value="1">1 years </option>
                                    <option value="2">2 years </option>
                                    <option value="3">3 years </option>
                                    <option value="4">4 years </option>
                                    <option value="5">5 years </option>
                                    <option value="5+">more than 5 years </option>
                                    
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Job Description</label>
                                <textarea rows="5" id="Jobdescription"  class="form-control" name="Jobdescription"placeholder="Enter Job Description" required></textarea>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="form-label">End Date</label>
                                <input type="date" class="form-control" id="end_date" name="end_date">
                            </div>

                            <div class="button_group">
                                <p id="formErrorMessage" style="color: red" ></p>
                                <button type="submit" id="add-job" class="btn btn-primary">Add</button>
                                
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>
    <script type="text/javascript">
    let globalEditor;

    // Function to initialize CKEditor
    function initializeCKEditor() {
        CKEDITOR.ClassicEditor
            .create(document.querySelector("#Jobdescription"), {
                toolbar: {
                    items: [
                        'exportPDF', 'exportWord', '|',
                        'findAndReplace', 'selectAll', '|',
                        'heading', '|',
                        'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                        'bulletedList', 'numberedList', 'todoList', '|',
                        'outdent', 'indent', '|',
                        'undo', 'redo',
                        '-',
                        'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                        'alignment', '|',
                        'link', 'uploadImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                        'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                        'textPartLanguage', '|',
                        'sourceEditing'
                    ],
                    shouldNotGroupWhenFull: true
                },
                list: {
                    properties: {
                        styles: true,
                        startIndex: true,
                        reversed: true
                    }
                },
                heading: {
                    options: [
                        { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                        { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                        { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                        { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                        { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                        { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                        { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
                    ]
                },
                placeholder: 'Welcome to CKEditor 5!',
                fontFamily: {
                    options: [
                        'default',
                        'Arial, Helvetica, sans-serif',
                        'Courier New, Courier, monospace',
                        'Georgia, serif',
                        'Lucida Sans Unicode, Lucida Grande, sans-serif',
                        'Tahoma, Geneva, sans-serif',
                        'Times New Roman, Times, serif',
                        'Trebuchet MS, Helvetica, sans-serif',
                        'Verdana, Geneva, sans-serif'
                    ],
                    supportAllValues: true
                },
                fontSize: {
                    options: [10, 12, 14, 'default', 18, 20, 22],
                    supportAllValues: true
                },
                htmlSupport: {
                    allow: [
                        {
                            name: /.*/,
                            attributes: true,
                            classes: true,
                            styles: true
                        }
                    ]
                },
                htmlEmbed: {
                    showPreviews: true
                },
                link: {
                    decorators: {
                        addTargetToExternalLinks: true,
                        defaultProtocol: 'https://',
                        toggleDownloadable: {
                            mode: 'manual',
                            label: 'Downloadable',
                            attributes: {
                                download: 'file'
                            }
                        }
                    }
                },
                mention: {
                    feeds: [
                        {
                            marker: '@',
                            feed: [
                                '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                                '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                                '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                                '@sugar', '@sweet', '@topping', '@wafer'
                            ],
                            minimumCharacters: 1
                        }
                    ]
                },
                removePlugins: [
                    'AIAssistant',
                    'CKBox',
                    'CKFinder',
                    'EasyImage',
                    'RealTimeCollaborativeComments',
                    'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory',
                    'PresenceList',
                    'Comments',
                    'TrackChanges',
                    'TrackChangesData',
                    'RevisionHistory',
                    'Pagination',
                    'WProofreader',
                    'MathType',
                    'SlashCommand',
                    'Template',
                    'DocumentOutline',
                    'FormatPainter',
                    'TableOfContents',
                    'PasteFromOfficeEnhanced',
                    'CaseChange'
                ]
            })
            .then(editor => {
                globalEditor = editor; // Store the CKEditor instance
            })
            .catch(error => {
                console.error(error);
            });
    }

    // Function to retrieve the value of the CKEditor instance
    // function getJobDescriptionValue() {
        
    //     if (globalEditor) {
         
    //         let jobDescriptionValue = globalEditor.getData();
           
    //         console.log(jobDescriptionValue);
    //     } else {
    //         console.error('CKEditor instance is not initialized yet.');
    //     }
    // }

    // Initialize CKEditor when the DOM content is fully loaded
    document.addEventListener('DOMContentLoaded', initializeCKEditor);
</script>

<script type="text/javascript">
    $(function () {
   
    function checkFormValidity() {
        var job_title = $("#job_title").val();
        var job_location = $("#job_location").val();
        var state = $("#inputState").val();
        var Jobdescription = globalEditor.getData();
        var district = $("#inputDistrict").val();
        var category = $("#category").val();
        var jobtype = $("#jobtype").val();
        var salary = $("#salary").val();
        var qualification = $("#qualification").val();
        var experience = $("#experience").val();
        var end_date = $("#end_date").val();

       
        if (job_title === "" || job_title === null || job_location === "" || job_location === null || state === "" || state === null || Jobdescription === "" || Jobdescription === null || district === "" || district === null || salary === "" || salary === null ||state === "" || state === null || Jobdescription === "" || Jobdescription === null || category === "" || category === null || jobtype === "" || jobtype === null || qualification === "" || qualification === null || experience === "" || experience === null|| end_date === "" || end_date === null) {
           
            $("#add-job").prop("disabled", true);
        } else {
         
            $("#add-job").prop("disabled", false);
        }
    }

    $("#job_title, #job_location, #inputState, #Jobdescription, #inputDistrict, #category, #jobtype, #salary, #qualification, #experience, #end_date").on("input", function () {
   
        checkFormValidity();
    });

  
    checkFormValidity();

    $('#add-job').on('click', function () {
        // Retrieving form values
        var job_title = $("#job_title").val();
        var job_location = $("#job_location").val();
        var state = $("#inputState").val();
        var Jobdescription = globalEditor.getData();
        var district = $("#inputDistrict").val();
        var category = $("#category").val();
        var jobtype = $("#jobtype").val();
        var salary = $("#salary").val();
        var qualification = $("#qualification").val();
        var experience = $("#experience").val();
        var end_date = $("#end_date").val();

        if (job_title === "" || job_location === "" || state === "" || Jobdescription === "" || district === "" || salary === "" || category === "" || jobtype === "" || qualification === "" || experience === "" || end_date === "") {
            $("#formErrorMessage").html("Fill all the details to continue...");
           
            $("#add-job").prop("disabled", true);
            return false;
        } else {
         
            $("#formErrorMessage").html("");
            $("#add-job").prop("disabled", false);

            var formData = new FormData();
            formData.append('job_title', job_title);
            formData.append('job_location', job_location);
            formData.append('state', state);
            formData.append('Jobdescription', Jobdescription);
            formData.append('district', district);
            formData.append('category', category);
            formData.append('jobtype', jobtype);
            formData.append('salary', salary);
            formData.append('qualification', qualification);
            formData.append('experience', experience);
            formData.append('end_date', end_date);

         
            $.ajax({
                type: "post",
                processData: false,
                contentType: false,
                cache: false,
                dataType: "json",
                url: "xhr/add-job.php",
                data: formData,
                success: function (response) {
                
                    if (response.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Posting Job successful',
                            showConfirmButton: true,
                            timer: 2000
                        }).then(function () {
                            window.location.href = 'index.php';
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Posting Job failed',
                            html: `<span style="color: red;">${response.message}</span>`
                        });
                    }
                },
                error: function () {
                    Swal.fire({
                        icon: 'error',
                        title: 'Request failed',
                        text: 'Something went wrong'
                    });
                },
                beforeSend: function () {
                    
                    $("#add-job").prop("disabled", true);
                },
                complete: function () {
                    
                    $("#add-job").prop("disabled", false);
                }
            });
        }
    });
});
</script>

</script>
    
   

</body>

</html>