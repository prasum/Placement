<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
<script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
<script src="js/wow.min.js"></script>
    <!-- Bootstrap js -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
    <!-- slick slider -->
<script src="js/slick.min.js"></script>
    <!-- superslides slider -->
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.animate-enhanced.min.js"></script>
<script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
    <!-- for circle counter -->
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
<script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>

    <!-- Custom js-->
<script src="js/custom.js"></script>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/tab.js"></script>
<script src="bootstrap/js/jquery-1.11.1.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script>
$(document).ready(function() {
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

    $('#save1').on('click', function () {
        $.post('n.php', {
            'name': $('name').val(),
            'rollno': $('rollno').val(),
            'mobile': $('mobile').val(),
            'fblink': $('fblink').val(),
            'linkedin': $('linkedin').val(),
            'skypelink': $('skypelink').val()
        }, function (data) {
            if (data == 'success') {
                $('#myModal').modal('show');
                return false;
            }
        });

    });
    $('#save2').on('click', function () {
        $.post('c.php', {
            '10percentage': $('10percentage').val(),
            '12percentage': $('12percentage').val(),
            'cgpa': $('cgpa').val(),
            'sgpa1': $('sgpa1').val(),
            'sgpa2': $('sgpa2').val(),
            'sgpa3': $('sgpa3').val(),
            'sgpa4': $('sgpa4').val(),
            'sgpa5': $('sgpa5').val()
        }, function (data) {
            if (data == 'success') {
                $('#myModal1').modal('show');

            }
        });

    });

    $('#save3').on('click', function () {
        $.post('d.php', {
            'branch': $('branch').val(),
            'skill1': $('skill1').val(),
            'skill2': $('skill2').val(),
            'skill3': $('skill3').val(),
            'tier': $('tier').val(),
            'type': $('type').val()
        }, function (data) {
            if (data == 'success') {
                $('#myModal2').modal('show');

            }
        });

    });
});


</script>



