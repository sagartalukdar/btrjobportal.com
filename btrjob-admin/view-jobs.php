

<?php include("include/head.php");?>
<?php
date_default_timezone_set("Asia/Kolkata");
$today = date("Y-m-d");
$time = date("H:i:s");

if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='COMPANY'){
    header("location: 403_error");
    exit();
    }
}

?>
<link rel="stylesheet" href="assets/css/badges.css">
<!-- datatable link -->
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">


<body class="bg-light">


     <!-- Preloader -->
        <?php include("include/preloader.php");?>

    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>

    <!-- Main Wrapper-->
    <main class="main-wrapper">

            <!--EDIT JOB MODAL -->
            <div class="modal fade" tabindex="-1" id="editJob">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Edit</h4>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" method="post">
                        <div class="modal-body">
                            <div class="row ">
                                <div class="col">
                                    <lable class="form-lable" style="font-weight: bold;font-size: x-large;">Job Title</lable>
                                    <input type="text" disabled class="form-control" id="jobtitle">
                                </div>
                                <div class="col">
                                    <lable class="form-lable" style="font-weight: bold;font-size: x-large;">Category</lable>
                                    <input type="text" disabled class="form-control" id="category">
                                </div>
                            </div>
                          <div class="row">
                            <div class="mb-3">
                                <lable class="form-lable">Salary</lable>
                                <input type="text" class="form-control" id="salary">
                            </div>
                            <div class="mb-3">
                                <lable class="form-lable">Job Type</lable>

                                <select class="form-select" aria-label="Default select example" name="jobtype"
                                id="jobtype">
                                <option value="" disabled>-- Job Type -- </option>
                                <option value="fulltime">Full Time</option>
                                <option value="parttime">Part Time</option>
                                <option value="contract">Contract</option>
                                <option value="temporary">Temporary</option>
                                <option value="fresher">Fresher</option>
                                <option value="internship">Internship</option>
                                </select>

                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job Location</label>
                                <textarea rows="3"class="form-control" name="job_location" id="location" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Job Description</label>
                                <textarea rows="5"class="form-control" name="job_description" id="description" required></textarea>
                            </div>
                            <div class="mb-3">
                                <lable class="form-lable">Qualification</lable>

                                <select class="form-select" aria-label="Default select example"            name="minimum_qualification" id="qualification">
                                    <option value="" disabled>  -- Select --</option>
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
                            <div>
                                <lable class="form-lable">Last Date</lable>
                                <input type="date" class="form-control" id="lastdate">
                            </div>
                            <input type="hidden" id="edit_id">
                                                       
                          </div>
                        </div>

                        <div class="modal-footer ">    
                            <p id="updateError" class="text-danger"></p>       
                            <input type="button" id="update-btn" class="mr-3 btn btn-sm btn-success" value="Update"> 

                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Close</button>

                            <!-- delete button Commented -->
                            <!-- <input type="button" id="delete-btn" class="btn btn-sm btn-danger" value="Delete">       -->

                        </div>
                        
                    </form>      
 
                  </div>
                </div>
            </div>
            <!--EDIT JOB MODAL -->     

        <div class="container-fluid">
            <div class="inner-contents">
                <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                    <div class="left-part">
                        <h2 class="text-dark">Jobs Details</h2>
                        <p class="text-gray mb-0">Your Posted Job Details are Available Here.</p>
                    </div>

                </div>

            </div>
        
            <div class="row">

                <div class="col-lg-12">
                    <!-- Table Two  -->
                    <div class="card border-0 p-5">
                        <div
                            class="card-header pb-5 bg-transparent border-0 d-flex align-items-center justify-content-between gap-3">
                            <h4 class="mb-0">Jobs Info</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">

                                <!-- datatable -->
                                <table id="example" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Status</th>
                                            <th>Job Title</th>
                                            <th>Category</th>
                                            <th>Salary</th>
                                            <th>Job Type</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>Qualification</th>
                                            <th>Last date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          $company_id=$_SESSION["this_user_id"];
                                          $viewJobs=$crud->Read("job_listing","`company_id`=$company_id order by `id` desc");
                                          if($viewJobs){
                                             $num=0;
                                             foreach($viewJobs as $job){
                                                $lastDate = $job['last_date'];

                                        ?>
                                                <tr>
                                                <td><?php echo ++$num; ?></td>
                                                <td>
                                                    <?php
                                                   
                                                     if ($today > $lastDate)  {
                                                         echo '<span class="custom-badge-reject">expired</span>';
                                                    } else{
                                                         echo '<span class="custom-badge-hire">Active</span>';
                                                    } 
                                                    ?>
                                                                
                                                </td>
                                                <td><?php echo $job["job_title"]; ?></td>
                                                <td><?php echo $job["category"]; ?></td>
                                                <td><?php echo $job["salary"]; ?></td>
                                                <td><?php echo $job["jobtype"]; ?></td>
                                                <td><?php echo $job["job_location"]; ?></td>
                                                <td>
                                                    <?php $description=$job["Jobdescription"];
                                                       $rawText=htmlspecialchars_decode(trim(strip_tags(str_replace('&amp;','',(str_replace('&nbsp','',$description))))));

                                                       if(strlen($rawText>20)){
                                                        echo substr($rawText,0,20).'...';
                                                       }  else echo $rawText;
                                                    ?>
                                                    
                                                </td>
                                                <td><?php echo $job["qualification"]; ?></td>
                                                <td><?php echo $job["last_date"]; ?></td>
                                                <td>

                                                <span class="edit-btn custom-badge-pending" type="button" data-bs-toggle="modal" data-bs-target="#editJob" data-id="<?php echo $job["id"] ; ?>">
                                                  Edit
                                                </span>  
                                            
                                                </td>                                                
                                                </tr>
                                                
                                        <?php    
                                            }}
                                            else{
                                            echo '<h3 class="text-danger text-center">No jobs Found.</h3>';
                                            }
                                        ?>
                                                                                
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Sl.No.</th>
                                            <th>Status</th>
                                            <th>Job Title</th>
                                            <th>Category</th>
                                            <th>Salary</th>
                                            <th>Job Type</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th>Qualification</th>
                                            <th>Last date</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
          
        </div>
    </main>


    <?php include("include/footer.php") ?>


    <!-- data table -->
    <script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.0/js/buttons.print.min.js"></script>
    <script>
        new DataTable('#example', {
            layout: {
                topStart: {
                    buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
                }
            }
        });
    </script>

   <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/super-build/ckeditor.js"></script>

   <script type="text/javascript">
    let globalEditor;

    // Function to initialize CKEditor
    function initializeCKEditor() {
        CKEDITOR.ClassicEditor
            .create(document.querySelector("#description"), {
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
                placeholder: 'Type Job Description',
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

    <script>

      $(function(){
        $('.edit-btn').on('click',function(){
            var editId=$(this).data('id');
            $.ajax({
                type:'POST',
                dataType:'json',
                url:'xhr/edit-job',
                data:{editId:editId},
                success:function(response){
                  $('#jobtitle').val(response.jobtitle);
                  $('#category').val(response.category);
                  $('#salary').val(response.salary);
                  $('#jobtype').val(response.jobtype);
                  $('#location').val(response.location);
                  if(globalEditor){
                    globalEditor.setData(response.description);
                  }
                  $('#qualification').val(response.qualification);
                  $('#lastdate').val(response.lastdate);
                  $('#edit_id').val(response.edit_id);
                },
                error:function(error){
                   swal("Error","Something Went Wrong","error");
                }
            })
        })
      })

      $(function(){
        $('#update-btn').on('click',function(){
            // $('#update-btn').preventDefault();
            console.log("kia");
            var jobtitle=$('#jobtitle').val();
            var category=$('#category').val();
            var salary=$('#salary').val();
            var jobtype=$('#jobtype').val();
            var location=$('#location').val();
            if(globalEditor){
            var description=globalEditor.getData();
            }
            var qualification=$('#qualification').val();
            var lastdate=$('#lastdate').val();
            var edit_id=$('#edit_id').val();

            var formData=new FormData();
            formData.append('jobtitle',jobtitle);
            formData.append('category',category);
            formData.append('salary',salary);
            formData.append('jobtype',jobtype);
            formData.append('location',location);
            formData.append('description',description);
            formData.append('qualification',qualification);
            formData.append('lastdate',lastdate);
            formData.append('edit_id',edit_id);
            
            if(jobtitle=="" || jobtitle==null || category=="" || category==null || salary=="" || salary==null || jobtype=="" || jobtype==null || location=="" || location==null || description=="" || description==null || qualification=="" || qualification==null || lastdate=="" || lastdate==null || edit_id=="" || edit_id==null){
                $('#updateError').html("Fill All Details To Update ..");
                $('#update-btn').preventDefault();

            }else{
                $('#updateError').html("");
                $.ajax({
                    type:'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    dataType:'json',
                    url:"xhr/update-job",
                    data:formData,
                    success:function(response){
                      $('#editJob').modal('hide');
                      if(response.successMessage){
                        swal("SuccessFull",response.successMessage+ " ..Reloading","success");
                        setTimeout(() => {
                           window.location.reload(); 
                        }, 2000);
                      }
                      else if(response.errorMessage){
                        swal("Error",response.errorMessage,"error");
                      }
                    },
                    error:function(error){
                        swal("Error","Something Went Wrong","error");
                    }
                })
            }

        })
      })

    // -------------- delete code commented --------------  
    //   $(function(){
    //     $('#delete-btn').on('click',function(){
    //         var jobId=$('#edit_id').val();
    //         var formData=new FormData();
    //         formData.append('delete_id',jobId);
    //         if(confirm('Are you Want to Delete this Job Details ?')){
    //             $.ajax({
    //                 type:'post',
    //                 processData: false,
    //                 contentType: false,
    //                 cache: false,
    //                 dataType:'json',
    //                 url:'xhr/delete-job.php',
    //                 data:formData,
    //                 success:function(response){
    //                   $('#editJob').modal('hide');
    //                   if(response.successMessage){
    //                     swal("SuccessFull",response.successMessage+ " ..Reloading","success");
    //                     setTimeout(() => {
    //                        window.location.reload(); 
    //                     }, 2000);
    //                   }
    //                   else if(response.errorMessage){
    //                     swal("Error",response.errorMessage,"error");
    //                   }
    //                 },
    //                 error:function(error){
    //                     swal("Error","Something Went Wrong","error");
    //                 }

    //             })
    //         }else{
    //             alert('Deletion aborted.');
    //         }

    //     })
    //   })
    // -------------- delete code commented --------------

    </script>


</body>

</html>