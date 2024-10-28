<?php include("include/head.php");?>
<?php
 if(isset($_SESSION['userType'])){
    if($_SESSION['userType']!='ADMIN' && $_SESSION['userType']!='COUNSELLOR' && $_SESSION['userType']!='APPLICANT'){
       header("location:403_error");
       exit();
    }
 }
?>
<body class="bg-light">
 <!-- Preloader -->
        <?php include("include/preloader.php");?>


    <!-- Default Nav -->
    <?php include("include/header.php");?>

    <?php include("include/horizontal-navbar.php");?>

    <?php include("include/sidebar.php");?>
<?php
$countJob=$crud->Count("job_listing","1");
?>
        <!-- Main Wrapper-->
        <main class="main-wrapper">
            <div class="container-fluid">
                <div class="inner-contents">
                    <div class="vertical-line"></div>
                    <h2>Total Jobs <span style="color:#20b9ab;">(<?php echo $countJob; ?>)</span></h2>

                    <div class="page-header d-flex align-items-center justify-content-between mr-bottom-30">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="margin-top: 20px">
                                    <div class="gc_causes_select_box_wrapper">
                                        <div class="gc_causes_select_box">
                                            <select id="sort_date">
                                                <option value="">Date Posted</option>
                                                <option value="day">Last 24 Hour</option>
                                                <option value="week">Last 7 Days</option>
                                                <option value="month">Last Month</option>
                                            </select><i class="fa fa-angle-down"></i>
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12" style="margin-top: 20px">
                                        <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                                            <div class="gc_causes_search_box">
                                               
                                                <svg xmlns="http://www.w3.org/2000/svg" type="submit" width="16" height="16" fill="red" class="bi bi-search" viewBox="0 0 16 16">
                                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                </svg>
                                                
                                               <input type="text" placeholder="Search" id="live-search" name="search2">
    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <!--<div class="right-part">-->
                        <!--    <h2 class="text-dark">All Jobs</h2>-->
                           
                        <!--</div>-->
                       
                    </div>

                    
                    <div class="row">
                      <div class="row" id="search-result">
                        <div class="col-xxl-12 col-lg-12">
                            <div id="load_data"></div>
                                <div id="load_data_message" style=" text-align: center; left: 50%;"></div>
                        </div>
                      </div>

                        
                    </div>
                </div>
            </div>
        </main>

    <?php include("include/footer.php") ?>
<style type="text/css">
.vertical-line {
  border-left: 5px solid #c631c3;
  height: 30px;
  margin-right: 10px;
  float: left;
}
    .apply{
        float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#21db84,#5197d0);
  color: #ffffff;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #eeb407;
  font-weight: 700;
}
.job-type{
float: left;
  width: 100px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#6529a2,#d21d1d);
  color: #ffffff;
  font-size: 12px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  border-radius: 0px;
    border-top-left-radius: 0px;
    border-bottom-left-radius: 0px;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
}
.applied{
  float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#c3e3d4,#5d676f);
  color: #393434;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #808a84;
  font-weight: 700;
}
.expired{
  float: left;
  width: 100%;
  padding-right: 20px;
  padding-left: 20px;
  height: 30px;
  line-height: 30px;
  text-align: center;
  background: linear-gradient(135deg,#ec2a2a,#bf7f7f);
  color: #f4f1f1;
  font-size: 14px;
  text-transform: uppercase;
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 5px;
  box-shadow: 3px 3px #71db5b;
  font-weight: 700;
}
.gc_causes_select_box select {
  width: 100%;
  height: 50px;
  border: 1px solid #e1e1e1;
  background: #f9f9f9;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  -webkit-border-radius: 10px;
  border-radius: 10px;
  -webkit-appearance: none;
  -moz-appearance: none;
  padding-left: 20px;
  font-weight: 700;
}
.gc_causes_select_box i {
  margin-left: -30px;
}
.bi-search {
  margin-left: -25px;
  top: 552550%;
  margin-top: 15px;
}
.gc_causes_search_box input {
  width: calc(100% - 0px);
  float: left;
  height: 50px;
  border: 1px solid #e1e1e1;
    border-right-color: rgb(225, 225, 225);
    border-right-style: solid;
    border-right-width: 1px;
  border-right: 0;
  padding-left: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  font-weight: 700;
}
</style>
<script>
      $(document).ready(function(){

        $(function(){
            $('#live-search').keyup(function(){
            var input=$(this).val();
            if(input!=""){
                $.ajax({
            
                    url:"xhr/live-search",
                    method:'post',
                    data:{input:input},
                    success:function(data){
                     $('#search-result').html(data);
                     $('#search-result').css('display','block');
                    }
                });
            }else{
               $.ajax({
                   
                url: "xhr/initial-job-listing",
                method:'get',
                success:function(data){
                    $('#search-result').html(data);
                    $('#search-result').css('display','block');  
                }
               });
            }

          });
        });


        $(function(){
            $('#sort_date').on('change',function(){
            var val=$(this).val();

            if(val!=''){
                $.ajax({
                url:'xhr/sort-date',
                type:'post',
                data: "request=" + val,
                beforeSend:function(){
                    $('#search-result').html('<h3 class="text-center" style="color: #13d77b;margin-top: 10%;">Loading ... </h3>');
                    // preloader ---
                },
                success:function(data){
                    $('#search-result').html(data);
                    $('#search-result').css('display','block');
                }
                });            
            }else{
                    $.ajax({
                    
                    url: "xhr/initial-job-listing",
                    method:'get',
                    success:function(data){
                        $('#search-result').html(data);
                        $('#search-result').css('display','block');  
                    }
                    });
            }
            });
        });
       

        $(function(){
          
            function filter_data(){
                var action='filter-job';
                var sector=get_filter('sector');
                var jobtype=get_filter('jobtype');
                var qualification=get_filter('qualification');
                var district=get_filter('district');
                var state=get_filter('state');
                var salary=get_filter('salary');
                var experience=get_filter('experience');
                
                $.ajax({
                    url:'xhr/filter-job',
                    method:"post",
                    data:{action:action,sector:sector,jobtype:jobtype,qualification:qualification,district:district,state:state,salary:salary,experience:experience},
                    success:function(data){
                        $('#search-result').html(data);
                        $('#search-result').css('display','block');     
                    }
                });
            }

            function get_filter(class_name){
                var filter=[];
                $('.'+class_name+':checked').each(function(){
                 filter.push($(this).val());
                });
                return filter;
            }

            $('.common_selector').click(function(){
                filter_data();
            });

        });
        
      });
    </script>
<script>

$(document).ready(function(){
 
 var limit = 3;
 var start = 0;
 var action = 'inactive';
 function load_course_data(limit, start)
 {
  $.ajax({
   url:"xhr/fetch-all-job",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info load'>All Jobs Shown</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning load'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_course_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_course_data(limit, start);
   }, 1000);
  }
 });
 
});
</script>
</html>