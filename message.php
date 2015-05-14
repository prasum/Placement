<?php

$e=$_GET['email'];
$mysqli=new mysqli('localhost','root','password','user_details');
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}






?>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="bootstrap/js/tab.js"></script>

<script src="bootstrap/js/bootstrap.js"></script>
<script>
$(document).ready(function()
{
   $('#o').on('click',function(e) {

       var t = $("#m option:selected").text();
       var d='<?php echo $_GET['email']?>';
       $('#myModal2').modal('show');
       return false;

       $.post('ju.php',{'q': t , 's': d },function(data) {
         if(data=='success')
         {

         }
       });
   });
});

    </script>
 </head>
<div class="container">
    <div class="row">
        <div class="span12">
            <fieldset>
                <legend> Message Alumni</legend>
                <form name="mess" id="mess" method="post" action="ju.php">
                    <div class="control-group">
                        <!-- Username -->
                        <label class="control-label"  for="m">Select Alumni </label>
                        <div class="controls">
                            <select id="m" name="m" class="form-control input-sm">
                                <option value=''>Select Alumni for messaging</option>
                               <?php
                                $q=$mysqli->query("select FirstName from register_info where Role='Alumni' ");
                                while($row=$q->fetch_array(MYSQLI_ASSOC))
                               {
                                   echo "<option value='{$row['FirstName']}'>{$row['FirstName']}</option>";
                               }

                               ?>
                                </select>
                            <br> <br>
                            <button type="button" id='o' name='o' class="btn btn-success btn-lg"  >Ok</button>
                    </form>
            </fieldset>


            <div id="myModal2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Success</h4>
                        </div>
                        <div class="modal-body">
                            <p>An email has been successfully sent to the alumni with your resume/cv</p>

                        </div>
                        <div class="modal-footer">
                            <button type="button" id='k' name='k' class="btn btn-success btn-lg" data-dismiss="modal" >Ok</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>