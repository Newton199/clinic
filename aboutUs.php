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

    <?php echo youAreHere("About Us") ?>
    <div class="" style="margin-top:200px;text-align:center;" >
    <span style="font-weight:bold;font-size:20px">About Us Page</span><br/><br/>
            <p style="font-size:16px">Dental treatment is now a nightmare. Going to the dentist is a cruial part of a healthy lifestyle. Dentist keep your teeth
            clean, your month healthy, and your smile bright.
            <p style="font-size:16px"> Smile saver has been providing qulaity denrtal services by highly skilled doctors.</p>
            <p style="font-size:16px"> We strongly believe in dentistry that is minimally invasive and work towards enriching your smile by using the best is there in todays world.</p>
    </div>
    <!--=========== BEGAIN Doctors SECTION ================-->
    <?php include('src/meet_our_doc.php') ?>
    <!--=========== End Doctors SECTION ================-->

    <!--=========== BEGAIN Counter SECTION ================-->
    <?php include('src/counter.php') ?>
    <!--=========== End Counter SECTION ================-->

    <!--=========== Start Footer SECTION ================-->
    
    <?php include('src/footer.php') ?>
    <!--=========== End Footer SECTION ================-->

    <?php include('src/incfooter.php') ?>

</body>
    
</html>
