<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title>TBrownA Home</title>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,500,600,700,800,900' rel='stylesheet'
        type='text/css'>
    <link rel='stylesheet' href='/assets/edd_templates/edd.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/assets/css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/assets/css/custom.css' type='text/css' media='all' />
    <link rel='stylesheet' href='/assets/css/font-awesome.css' type='text/css' media='all' />

    <!-- color scheme -->
    <link href="/assets/css/skins/orange.css" rel="stylesheet">

    <!-- scripts -->
    <script type='text/javascript' src='/assets/js/jquery.js'></script>
    <script type='text/javascript' src='/assets/js/bootstrap.min.js'></script>
    <!-- <script type='text/javascript' src='/assets/js/masonry.js'></script>
    <script type='text/javascript' src='/assets/js/imagesloaded.js'></script>
    <script type='text/javascript' src='/assets/js/SmoothScroll.js'></script>
    <script type='text/javascript' src='/assets/js/init.js'></script>
    <script type='text/javascript' src='/assets/js/anim.js'></script> -->

</head>

<body>


    <!-- HEADER
		================================================== -->
    <nav id="wow-menu" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href='#'>
                    TBrown A. Autos Admin
                </a>
            </div>
        </div>
    </nav>

    <div class="container" style="width: 320px;">
        <div class="row justify-content-center mx-auto" style="margin-top: 150px;">
            <div class="card" style="width: 320px">
                <div class="card-body">
                    <p class="card-text"></p>
                </div>

                <div class="card-body">
                    <div id="err" class="alert alert-info">Enter LOGIN details</div>
                    <form>
                        <input type="text" class="" id="username" placeholder="Username">
                        <input type="password" id="password" placeholder="password">

                        <input type="checkbox" onclick="showPass()" />
                        <label> &nbsp;Show Password</label>
                </div>
                <center><button type="submit" class="btn btn-primary" id="adminIn" style="width: 200px;"
                        onclick="loginAdmin()">Submit&nbsp;</button></center>
                </form>

            </div>
        </div>


    </div>
    </div>


    </div>
    </div>
</body>
<script> 
function showPass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function loginAdmin() {
    event.preventDefault();
    var username = $('#username').val();
    var password = $('#password').val();
    $("#adminIn").prop('disabled', true);

    if (username == "" || password == "") {
        alert("Complete all fields");
        $("#adminIn").prop('disabled', false);

    }
    else {
        $.ajax({
            url: "/admin/login",
            method: "GET",
            data: {
                adminUsername: username,
                adminPassword: password
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.exists == "false") {
                    alert("Invalid Details");
                    $("#adminIn").prop('disabled', false);
                }
                else if (data.exists == "true") {
                    window.location = "/admin/home";
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus + ', ' + errorThrown);
                $("#adminIn").prop('disabled', false);
            }
        })

    }
}


</script>
</html>