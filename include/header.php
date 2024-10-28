

<div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <!-- <img src="images/btr-logo.png" style="max-width: 82px;margin-left: 105px;margin-top: 10px"> -->
                            <img src="images/btr-job-portal-logo.png"style="max-width: 185px;margin-left: 55px;margin-top: 10px">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        <div class="jp_top_header_right_cont">

                        <?php
                        if(isset($_SESSION['this_user_id'])){  ?>

                             <ul>
                                <li><a href="btrjob-admin/index"><i class="fa fa-user"></i>&nbsp; DASHBOARD</a></li>
                                <li><a href="login/session/session_destroy"><i class="fa fa-sign-in"></i>&nbsp; LOGOUT</a></li>
                            </ul>
 
                       <?php } else{  ?>

                             <ul>
                                <li><a href="login/register"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                <li><a href="login/login"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                            </ul>
                        <?php }

                        ?>

                           
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>