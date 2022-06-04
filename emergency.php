<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Saver : About Us</title>
    <?php include('src/head.php') ?>
</head>

<body>
    
    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->
    <div class="wrappper" style="margin-top:60px ;margin:100px">
        <div class="content">
       
                    <div class="row" style="display:flex;">
                        <div class="single-top-feature" style="width:60%;padding-top:100px">
                            <span class="fa fa-flask"></span>
                            <h3>Emergency Care</h3>
                            <p>In cases of Emergency this is the right place you are looking providing fast test reports and
                                catering to our patients need.
                                
                                In cases of Emergency this is the right place you are looking providing fast test reports and
                                catering to our patients need.
                                In cases of Emergency this is the right place you are looking providing fast test reports and
                                catering to our patients need.
                                </p>
                            <div class="sub-content" style="color:white">
                            
                            <h4>Features</h4>
                            <p><p>• 24/7 Emergency Medical Services<br />
• Road evacuation by ambulance<br />
• Air evacuation by helicopter<br />
• Rooftop Helipad</p>
<p>&nbsp;</p>
<p>HELI RESCUE HOTLINE NUMBER: 9801904643</p>
<div class="readmore_area">
                                <a data-hover="Appoinment" data-target="#myModal" data-toggle="modal" href="#">
                                    <span>Appoinment</span>
                                </a>
                            </div>

                            </div>
                           
                        </div>
                        <div class="img" style="width:40%">
                        <img src="images/7.jpg" alt="" srcset="" style="object-fit:cover!important;height:100%;width:100%">
                    </div>
                    </div>
                   
                </div>

               
                            <!-- start modal window -->
                            <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="myModal" role="dialog" tabindex="-1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button aria-hidden="true" class="close" data-dismiss="modal" type="button">
                                                &times;
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Appoinment Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="appointment-area">
                                                <form class="appointment-form" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Appointment Date <span class="required">*</span>
                                                            </label>
                                                            <input type="Date" class="wp-form-control wpcf7-text" placeholder="mm/dd/yy" name="appdate1" min="<?= date("Y-m-d"); ?>" max="<?= date("Y-m+1-d"); ?>" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Appointment Time <span class="required">*</span>
                                                            </label>
                                                            <input type="time" class="wp-form-control wpcf7-text" placeholder="hh:mm" name="apptime1" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Select Test <span class="required">*</span>
                                                            </label>
                                                           
                                                            <select>
                                                            <option>Dr Min Bahadur</option>
                                                            <option>Dr Min Bahadur</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="type" value="test">
                                                    <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                        <i class="button__icon fa fa-share"></i><span>Book Appointment</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                                &times;
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Dentist Appoinment Details</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="appointment-area">
                                                <form class="appointment-form" method="post">
                                                    <div class="row">
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Appointment Date <span class="required">*</span>
                                                            </label>
                                                            <input type="date" class="wp-form-control wpcf7-text" placeholder="dd/mm/yy" name="appdate" min="<?= date("Y-m-d"); ?>" max="<?= date("Y-m+1-d"); ?>" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Appointment Time <span class="required">*</span>
                                                            </label>
                                                            <input type="Time" class="wp-form-control wpcf7-text" placeholder="hh:mm" name="apptime" required>
                                                        </div>
                                                        <div class="col-md-6 col-sm-6">
                                                            <label class="control-label">Select Doctor <span class="required">*</span>
                                                            </label>
                                                            <select>
                                                            <option>Dr Min Bahadur</option>
                                                            <option>Dr Min Bahadur</option>
                                                            
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="type" value="doctor">
                                                    <button class="wpcf7-submit button--itzel" name="ok" type="submit">
                                                        <i class="button__icon fa fa-share"></i><span>Book Appointment</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>

               
    <!--=========== BEGAIN Doctors SECTION ================-->
   
    <!--=========== End Doctors SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
  
    <!--=========== End Counter SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>
</body>

</html>
