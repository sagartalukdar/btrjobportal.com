<?php include("include/head.php");?>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="images/header/load.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll End -->
    <!-- Top Header Wrapper Start -->
   <?php include("include/header.php");?>
    <!-- Top Header Wrapper End -->
    <!-- navbar Wrapper Start -->
     <?php include("include/navbar.php");?>
    <!-- navbar Wrapper End -->
    <!-- Header Wrapper End -->
   <style type="text/css">
        .load{
            margin-top: 20px;
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
    </style>
   <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container-fluid">
            <div class="row">
              
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_rightside_job_categories_wrapper">
                               
                                <div class="jp_rightside_job_categories_content"style="margin-top: -40px;">
                                    <div class="handyman_sec1_wrapper">
                                        <div class="content">
                                            <div class="box">
                                                <div class="jp_rightside_job_categories_heading">
                                                    <h4>Filter Jobs </h4>
                                                </div>

                                                <?php
                                                    $listing=$crud->Read("job_listing","1");
                                                ?>

                                                   <ul>
                                                        <li>
                                                            <button class="btn  btn-lg btn-block button-fliter" id="btn1" for="c1">Sector <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list" style="display: none;" >
                                                           
                                                            <?php
                                                               if($listing){
                                                                $sectors[]=array();
                                                                $i=0;
                                                                    foreach($listing as $list){
                                                                        $sectors[$i++]=$list['category'];
                                                                    }
                                                                    $unique_category=array_unique($sectors);
                                                                    asort($unique_category); // Sort the array
                                                                    $c=0;
                                                                    foreach($unique_category as $uc){
                                                                        $c++;
                                                            ?>
                                                            <input type="checkbox" id="c<?php echo $c;?>" value="<?= $uc ?>" class="common_selector sector">
                                                            <label  for="c<?php echo $c;?>"><?= $uc; ?></label><br>

                                                            <?php
                                                                    }
                                                                }    
                                                            ?>

                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter"id="btn2" for="c1">Job type <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list2"  style="display: none;">
                                                            <?php
                                                               if($listing){
                                                                $jobtypes[]=array();
                                                                $i=0;
                                                                    foreach($listing as $list){
                                                                        $jobtypes[$i++]=$list['jobtype'];
                                                                    }
                                                                    $unique_jobtype=array_unique($jobtypes);
                                                                    asort($unique_jobtype); // Sort the array
                                                                    $jt=0;
                                                                    foreach($unique_jobtype as $ujt){
                                                                        $jt++;
                                                            ?>
                                                            <input type="checkbox" id="jt<?php echo $jt;?>" name="cb" value="<?php echo $ujt; ?>" class="common_selector jobtype">
                                                            <label  for="jt<?php echo $jt;?>"><?php echo $ujt; ?></label><br>
                                                            <?php
                                                                    }
                                                                }    
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter" id="btn3" for="c1">Qualification <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list3" style="display: none;">
                                                            <?php
                                                             if($listing){
                                                                $education=array();
                                                                $i=0;
                                                                foreach($listing as $list){
                                                                    $education[$i++]=$list["qualification"];
                                                                }
                                                                $unique_qualification=array_unique($education);
                                                                asort($unique_qualification); // Sort the array
                                                                $e=0;
                                                                foreach($unique_qualification as $uq){
                                                                    $e++;
                                                            ?>
                                                                 <input type="checkbox" id="e<?php echo $e; ?>" name="cb" value="<?php echo $uq; ?>" class="common_selector qualification">
                                                                 <label  for="e<?php echo $e; ?>"><?php echo $uq; ?></label><br>
                                                            <?php
                                                                }
                                                             }
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter" id="btn4" for="c1">District <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list4" style="display: none;">
                                                            <?php
                                                             if($listing){
                                                                $districts=array();
                                                                $i=0;
                                                                foreach($listing as $list){
                                                                    $districts[$i++]=$list["district"];
                                                                }
                                                                $unique_district=array_unique($districts);
                                                                asort($unique_district); // Sort the array
                                                                $d=0;
                                                                foreach($unique_district as $ud){
                                                                    $d++;
                                                            ?>
                                                                 <input type="checkbox" id="d<?php echo $d; ?>" name="cb" value="<?php echo $ud; ?>" class="common_selector district">
                                                                 <label  for="d<?php echo $d; ?>"><?php echo $ud; ?></label><br>
                                                            <?php
                                                                }
                                                             }
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter" id="btn5" for="c1">State <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list5" style="display: none;">
                                                            <?php
                                                             if($listing){
                                                                $states=array();
                                                                $i=0;
                                                                foreach($listing as $list){
                                                                    $states[$i++]=$list["state"];
                                                                }
                                                                $unique_state=array_unique($states);
                                                                asort($unique_state); // Sort the array
                                                                $s=0;
                                                                foreach($unique_state as $us){
                                                                    $s++;
                                                            ?>
                                                                 <input type="checkbox" id="s<?php echo $s; ?>" name="cb" value="<?php echo $us; ?>" class="common_selector state">
                                                                 <label  for="s<?php echo $s; ?>"><?php echo $us; ?></label><br>
                                                            <?php
                                                                }
                                                             }
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter" id="btn6" for="c1">Salary <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list6" style="display: none;">
                                                            <?php
                                                             if($listing){
                                                                $salaries=array();
                                                                $i=0;
                                                                foreach($listing as $list){
                                                                    $salaries[$i++]=$list["salary"];
                                                                }
                                                                $unique_salary=array_unique($salaries);
                                                                asort($unique_salary); // Sort the array
                                                                $sal=0;
                                                                foreach($unique_salary as $usalary){
                                                                    $sal++
                                                            ?>
                                                                 <input type="checkbox" id="sal<?php echo $sal; ?>" name="cb" value="<?php echo $usalary; ?>" class="common_selector salary">
                                                                 <label  for="sal<?php echo $sal; ?>"><?php echo $usalary; ?></label><br>
                                                            <?php
                                                                }
                                                             }
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>
                                                    <ul class="filter">
                                                        <li>
                                                            <button class="btn btn-primary btn-lg btn-block button-fliter" id="btn7" for="c1">Experience <i class="fa fa-plus"></i></button>
                                                        </li>
                                                        <li class="list7">
                                                            <?php
                                                             if($listing){
                                                                $experience=array();
                                                                $i=0;
                                                                foreach($listing as $list){
                                                                    $experience[$i++]=$list["experience"];
                                                                }
                                                                $unique_experience=array_unique($experience);
                                                                asort($unique_experience); // Sort the array
                                                                $ex=0;
                                                                foreach($unique_experience as $ue){
                                                                    $ex++;
                                                            ?>
                                                                 <input type="checkbox" id="ex<?php echo $ex; ?>" name="cb" value="<?php echo $ue; ?>" class="common_selector experience">
                                                                 <label  for="ex<?php echo $ex; ?>"><?php echo $ue; ?></label><br>
                                                            <?php
                                                                }
                                                             }
                                                            ?>
                                                        </li>
                                                        <!-- Add more list items as needed -->
                                                    </ul>

                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>
                            
                            </div>
                        </div>
                    </p>
                </div>
            </div>
       
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                    <div class="row">

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 20px">
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
                                
                               <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="margin-top: 20px">
                                    <div class="gc_causes_search_box_wrapper gc_causes_search_box_wrapper2">
                                        <div class="gc_causes_search_box">
                                           
                                            <svg xmlns="http://www.w3.org/2000/svg" type="submit" width="16" height="16" fill="red" class="bi bi-search" viewBox="0 0 16 16">
                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                            </svg>
                                            
                                           <input type="text" placeholder="Search" id="live-search" name="search2">

                                        </div>
                                    </div>
                                </div>
                               
                        <div class="col-lg-12 col-md-10 col-sm-12 col-xs-12">
                            <div class="tab-content">
                               
                                <div id="list" class="tab-pane fade in active">
                                    <div class="row" id="search-result">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div id="load_data"></div>
                                            <div id="load_data_message" style=" text-align: center; left: 50%;">
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                   
            </div>
        </div>
    </div>
    <!-- jp listing sidebar Wrapper End -->
    
     <!-- jp Newsletter Wrapper Start -->
    <div class="jp_main_footer_img_wrapper">
        <div class="jp_newsletter_img_overlay_wrapper"></div>
        <!-- jp footer Wrapper Start -->
        <?php include("include/footer.php");?>
    <!-- jp footer Wrapper End -->
    <!--main js file start-->
    <script src="js/jquery_min.js"></script>
    <script>
$(document).ready(function(){
   
    $(".list7").hide();
 
  $("#btn1").click(function(){
    $(".list").toggle();
  });
   $("#btn2").click(function(){
    $(".list2").toggle();
  });
    $("#btn3").click(function(){
    $(".list3").toggle();
  });
     $("#btn4").click(function(){
    $(".list4").toggle();
  });
      $("#btn5").click(function(){
    $(".list5").toggle();
  });
       $("#btn6").click(function(){
    $(".list6").toggle();
  });
  $("#btn7").click(function(){
    $(".list7").toggle();
  });
});
</script>
    <script src="js/bootstrap.js"></script>
    <script src="js/jquery.menu-aim.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.inview.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/jquery.magnific-popup.js"></script>
    <script src="js/custom_II.js"></script>
    <!--main js file end-->

    <!-- searching Sorting -->
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
   url:"xhr/fetch",
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
   

</body>

</html>