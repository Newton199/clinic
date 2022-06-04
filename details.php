<?php include('src/functions.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smile Saver : Dentist Details</title>
    <?php include('src/head.php') ?>
</head>

<body>
    
    <?php include('src/preload.php') ?>
    <!--=========== BEGIN HEADER SECTION ================-->
    <?php include('src/header.php') ?>
    <!--=========== END HEADER SECTION ================-->
    <div class="wrappper" style="margin-top:100px!important ">
        <div class="content">
       
                    <div class="row" style="display:flex;margin:50px;padding:0px 150px">
                        <div class="" style="width:40%;margin-top:100px!important">
                            <a class="tdoctor" style="border-radius:2px solid black:  !important" href="./details.php" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
                                            <figure>
                                                <img src="images/doctor-1.jpg" />
                                                
                                                <figcaption>
                                                    <h2>Dr. Kamini Sharma </h2>
                                                    <p> General Dentist</p>
                                                    <!-- <button>View</button> -->
                                                </figcaption>
                                            </figure>
                                        </a>
                           
                        </div>
                        <div class="" style="width:60%;padding-top:200px;">
                        <span style="font-weight:bold;font-size:20px">Brief Description</span><br/><br/>
                        <p style="font-size:16px">Dr. Kamini Sharma completed her Bachelor of Dental Surgery from Manipal. She worked in Kathmundu Medicial College for few years before joing at Smile Saver.</p>
                        <p style="font-size:16px">Her areas of intterest are Pedodontistry and for regular dentistry. Beside dentistry, she is active in her philanthropic activities and also helps in conduction of various dental camps
                        for underprivileged.</p>
                        <p style="font-size:16px">She is at Smile Saver on Tuesday, Thursday and Friday.</p>
                        <div class="readmore_area">
                                <a data-hover="Appoinment" data-target="#myModal" data-toggle="modal" href="#">
                                    <span>Appoinment</span>
                                </a>
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
                                                            <option>Cavity Test</option>
                                                            <option>Plaque</option>
                                                            <option>Brases</option>
                                                            <option>Dental Surgery</option>
                                                            <option>Regular Checkup</option>
                                                            <option>Oral Checkup</option>
                                                            
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
                       
                    </div>
                   
                </div>

               
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
