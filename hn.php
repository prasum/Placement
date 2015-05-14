<?php

$e=$_GET['email'];






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
        $(document).ready(function() {
             var f='<?php echo $_GET['email']?>';

            $('#branch').append('<option>Select Branch</option>');
            $('#branch').append('<option>ComputerScience</option>');
            $('#branch').append('<option>Electrical</option>');
            $('#branch').append('<option>Electronics and Communication</option>');
            $('#branch').append('<option>Mechanical</option>');
            $('#tier').append('<option>Select tier</option>');
            $('#tier').append('<option>I</option>');
            $('#tier').append('<option>II</option>');
            $('#tier').append('<option>III</option>');
            $('#type').append('<option>Type of Internship/Placement</option>');
            $('#type').append('<option>6 weeks</option>');
            $('#type').append('<option>6 months</option>');
            $('#type').append('<option>Full Time</option>');


            $('#branch').on('change', function () {
                var m = $("#branch option:selected").text();

                if (m == 'ComputerScience') {
                    $('#skill1').append('<option>Select Skill 1</option>');
                    $('#skill1').append('<option>Algorithms</option>');
                    $('#skill1').append('<option>Data Structures</option>');
                    $('#skill1').append('<option>Web Development</option>');
                    $('#skill1').append('<option>Computer Networking</option>');
                    $('#skill1').append('<option>Database Management</option>');
                    $('#skill2').append('<option>Select Skill 2</option>');
                    $('#skill2').append('<option>Algorithms</option>');
                    $('#skill2').append('<option>Data Structures</option>');
                    $('#skill2').append('<option>Web Development</option>');
                    $('#skill2').append('<option>Computer Networking</option>');
                    $('#skill2').append('<option>Database Management</option>');
                    $('#skill3').append('<option>Select Skill 3</option>');
                    $('#skill3').append('<option>Algorithms</option>');
                    $('#skill3').append('<option>Data Structures</option>');
                    $('#skill3').append('<option>Web Development</option>');
                    $('#skill3').append('<option>Computer Networking</option>');
                    $('#skill3').append('<option>Database Management</option>');

                }
            });
            $('#skill1').on('change', function () {
                var n = $("#skill1 option:selected").text();
                var index = $('#skill1').get(0).selectedIndex;
                $('#skill2 option:eq(' + index + ')').remove();
                $('#skill3 option:eq(' + index + ')').remove();


            });
            $('#skill2').on('change', function () {
                var p = $("#skill2 option:selected").text();
                var index1 = $('#skill2').get(0).selectedIndex;

                $('#skill3 option:eq(' + index1 + ')').remove();


            });
            $('#skill3').on('change', function () {
                var r = $("#skill3 option:selected").text();
                var index2 = $('#skill3').get(0).selectedIndex;


            });

            $('#save1').on('click', function (e) {
                e.preventDefault();
                $.post('n.php', {
                    'name': $('#name').val(),
                    'rollno': $('#rollno').val(),
                    'mobile': $('#mobile').val(),
                    'fblink': $('#fblink').val(),
                    'linkedin': $('#linkedin').val(),
                    'skypelink': $('#skypelink').val(),
                    'e': f

                }, function (data) {
                    if (data == 'success') {
                        $('#myModal').modal('show');
                        return false;




                    }

                });

            });
            $('#save2').on('click', function (e) {
                e.preventDefault();
                $.post('c.php', {
                    '10percentage': $('#10percentage').val(),
                    '12percentage': $('#12percentage').val(),
                    'cgpa': $('#cgpa').val(),
                    'sgpa1': $('#sgpa1').val(),
                    'sgpa2': $('#sgpa2').val(),
                    'sgpa3': $('#sgpa3').val(),
                    'sgpa4': $('#sgpa4').val(),
                    'sgpa5': $('#sgpa5').val(),
                    'e': f
                }, function (data) {
                    if (data == 'success') {
                        $('#myModal1').modal('show');
                        return false;

                    }
                });

            });

            $('#save3').on('click', function (e) {
                e.preventDefault();
                $.post('d.php', {
                    'branch': $('#branch').val(),
                    'skill1': $('#skill1').val(),
                    'skill2': $('#skill2').val(),
                    'skill3': $('#skill3').val(),
                    'tier': $('#tier').val(),
                    'type': $('#type').val(),
                    'e': f
                }, function (data) {
                    if (data == 'success') {
                        $('#myModal2').modal('show');
                        return false;

                    }
                });

            });

           $('#j').on('click', function(e)
           {
               var url = "http://localhost/placement/view.php?email="+f;
               $(location).attr('href', url);
           });
        });



    </script>


</head>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="" id="loginModal">
                <div class="modal-header">

                    <h3>Create User Profile</h3>
                </div>
                <div class="modal-body">
                    <div class="well">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#login" data-toggle="tab">Personal Details</a></li>
                            <li><a href="#create" data-toggle="tab">Educational Details</a></li>
                            <li> <a href="#skill" data-toggle="tab">Skills </a> </li>
                        </ul>
                        <div id="myTabContent" class="tab-content">
                            <div class="tab-pane active in" id="login">
                                <form class="form-horizontal" action='n.php' method="POST">
                                    <br>
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="">Personal Details</legend>
                                        </div>
                                        <input type="hidden" id="l" name="l" value="<?php echo $_SESSION['email']; ?>">
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="name">Name</label>
                                            <div class="controls">
                                                <input type="text" id="name" name="name" placeholder="Enter Name" class="input-xlarge">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="rollno">Roll No</label>
                                            <div class="controls">
                                                <input type="text" id="rollno" name="rollno" placeholder="Enter Roll No" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="mobile">Mobile No</label>
                                            <div class="controls">
                                                <input type="text" id="mobile" name="mobile" placeholder="Enter Mobile No" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="fblink">Facebook link</label>
                                            <div class="controls">
                                                <input type="text" id="fblink" name="fblink" placeholder="Enter Facebook Profile Link" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="linkedin">LinkedIn link</label>
                                            <div class="controls">
                                                <input type="text" id="linkedin" name="linkedin" placeholder="Enter LinkedIn Profile Link" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Password-->
                                            <label class="control-label" for="skypelink">Skype Link</label>
                                            <div class="controls">
                                                <input type="text" id="skypelink" name="skypelink" placeholder="Enter Skype Profile Link" class="input-xlarge">
                                            </div>
                                        </div>

                                        <br>
                                        <div class="control-group">
                                            <!-- Button -->
                                            <div class="controls">
                                                <button class="btn btn-success btn-lg" name="save1" id="save1">Save</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="create">
                                <form id="tab">
                                    <br>
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="">Educational Details</legend>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="10percentage">Class 10 percentage</label>
                                            <div class="controls">
                                                <input type="text" id="10percentage" name="10percentage" placeholder="Enter class 10 percentage" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="12percentage">Class 12 percentage</label>
                                            <div class="controls">
                                                <input type="text" id="12percentage" name="12percentage" placeholder="Enter class 12 percentage" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="cgpa"> Overall CGPA</label>
                                            <div class="controls">
                                                <input type="text" id="cgpa" name="cgpa" placeholder="Enter CGPA" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="sgpa1">SGPA for Semester 1</label>
                                            <div class="controls">
                                                <input type="text" id="sgpa1" name="sgpa1" placeholder="Enter SGPA for Semester 1" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="sgpa2">SGPA for Semester 2</label>
                                            <div class="controls">
                                                <input type="text" id="sgpa2" name="sgpa2" placeholder="Enter SGPA for Semester 2" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="sgpa3">SGPA for Semester 3</label>
                                            <div class="controls">
                                                <input type="text" id="sgpa3" name="sgpa3" placeholder="Enter SGPA for Semester 3" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="sgpa4">SGPA for Semester 4</label>
                                            <div class="controls">
                                                <input type="text" id="sgpa4" name="sgpa4" placeholder="Enter SGPA for Semester 4" class="input-xlarge">
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="sgpa5">SGPA for Semester 5</label>
                                            <div class="controls">
                                                <input type="text" id="sgpa5" name="sgpa5" placeholder="Enter SGPA for Semester 5" class="input-xlarge">
                                            </div>
                                        </div>







                                        <br>
                                        <div class="control-group">
                                            <!-- Button -->
                                            <div class="controls">
                                                <button class="btn btn-success btn-lg" name="save2" id="save2">Save</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="skill">
                                <form id="tab">
                                    <br>
                                    <fieldset>
                                        <div id="legend">
                                            <legend class="">Skills</legend>
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label"  for="branch">Branch</label>
                                            <div class="controls">
                                                <select name="branch"  class="form-control input-sm" id="branch" name="branch"  placeholder="Enter branch">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="skill1">Skill 1</label>
                                            <div class="controls">
                                                <select name="skill1"  class="form-control input-sm" id="skill1" name="skill1" placeholder="Enter skill 1">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="skill2"> Skill 2</label>
                                            <div class="controls">
                                                <select name="skill2"  class="form-control input-sm" id="skill2" name="skill2" placeholder="Enter skill 2">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="skill3">Skill 3</label>
                                            <div class="controls">
                                                <select name="skill3"  class="form-control input-sm" id="skill3" name="skill3" placeholder="Enter skill 3">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="tier">Preferred company tier</label>
                                            <div class="controls">
                                                <select name="tier"  class="form-control input-sm" id="tier" name="tier"  placeholder="tier">
                                                </select>
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <!-- Username -->
                                            <label class="control-label"  for="type">Type of placement required</label>
                                            <div class="controls">
                                                <select name="type"  class="form-control input-sm" id="type" name="type"  placeholder="Enter type of placement">
                                                </select>
                                            </div>
                                        </div>






                                        <br>
                                        <div class="control-group">
                                            <!-- Button -->
                                            <div class="controls">
                                                <button class="btn btn-success btn-lg pull-left" name="save3" id="save3">Submit</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <div class="modal-body">
                    <p>Your Personal Details have been successfully saved</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Ok</button>

                </div>
            </div>
        </div>
    </div>
    <div id="myModal1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <div class="modal-body">
                    <p>Your Educational details have been successfully saved</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success btn-lg" data-dismiss="modal">Ok</button>

                </div>
            </div>
        </div>
    </div>
    <div id="myModal2" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <div class="modal-body">
                    <p>You have successfully created your profile</p>

                </div>
                <div class="modal-footer">
                    <button type="button" id='j' name='j' class="btn btn-success btn-lg" data-dismiss="modal" >Ok</button>

                </div>
            </div>
        </div>
    </div>
</div>