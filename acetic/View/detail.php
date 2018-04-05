<?php

include '../Src/cv.php';
$obj=new cv();
$obj->prepare($_GET);
$data=$obj->detail();
print_r($data);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="Css/detail.css">
    </head>
    <body>
        <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Name :</h3>
            </div>
            <div class="valueofinput floatright border half_width">
                <h3><?php echo$data[0]['name'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Email :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3> <?php echo$data[0]['email'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Contact :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3>  <?php echo$data[0]['contact'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Father Name:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3> <?php echo$data[0]['father_name'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Mother Name:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3>  <?php echo$data[0]['mother_name'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Birth Of Date:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3>  <?php echo$data[0]['birth_of_date'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Gender:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3>  <p> <?php print_r( $data[0]['gender']); ?></p></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Marital Status :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3> <?php echo$data[0]['maritalstatus'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Nationality :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3><?php echo$data[0]['nationality'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Religion :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <h3><?php echo$data[0]['religion'] ?></h3>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Addition Email:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
               <p> <?php echo$data[0]['emailtext'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Present Address:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
              <p>  <?php echo$data[0]['present_address'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Permanent Address:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <p>  <?php echo$data[0]['permanent_address'] ?></p>
            </div>
        </div>
         
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Facebook Id:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <p> <?php echo$data[0]['facebookid'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Media:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
              <p>  <?php echo$data[0]['media'] ?><p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Professional Experiences :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
              <p>  <?php echo$data[0]['professionalexperience'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Technical Skills :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
              <p>  <?php echo$data[0]['technicalskill'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Personal Skill :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <p> <?php echo$data[0]['personalskill'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Language Proficiency:</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <p> <?php echo$data[0]['languageproficiency'] ?></p>
            </div>
        </div>
         <div class="border full_width">
            <div class="heading floatleft border quadwidth">
                <h3>Interest :</h3>
            </div>
            <div class="valueofinput floatleft border half_width">
                <p> <?php echo$data[0]['interest'] ?></p>
            </div>
        </div>
    </body>
</html>
