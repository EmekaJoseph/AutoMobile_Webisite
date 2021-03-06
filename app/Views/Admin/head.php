<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <!-- <link rel="shortcut icon" href="assets/img/favicon.ico" /> -->
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
    <script type='text/javascript' src='/assets/js/masonry.js'></script>
    <script type='text/javascript' src='/assets/js/imagesloaded.js'></script>
    
    <script type='text/javascript' src='/assets/js/init.js'></script>
    <script type='text/javascript' src='/assets/js/anim.js'></script>
</head>

<body>
    <?php $uri = service('uri')?>

    <div class="boxedlayout">

        <!-- HEADER
		================================================== -->

        <!-- session variable -->
        <!-- <php $session= session();?> <php echo $session->get('tbrownByProffix'); ?> -->

        <nav id="wow-menu" class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header"> 
                    <a class="navbar-brand" href='/admin'>
                        TBrown A. Autos Admin 
                    </a>
                </div>
            </div>
        </nav>

        <br> <br> <br>
        <style>
            .active {
                color: #337AB7;
            }
        </style>
        <div class="container padtop50 padbot40">
            <div class="row">

                <div class="col-md-3">
                    <div id="secondary" class="widget-area" role="complementary">
                        <aside id="recent-posts-3" class="widget widget_recent_entries">
                            <h1 class="widget-title section-title"><span>Menu</span></h1>
                            <ul>
                                <li>
                                    <a href="/admin/home">
                                        <h4 class="<?= ($uri->getsegment(2) == 'home'? 'active' : null)?>"><i
                                                class="fa fa-plus-square"></i>&nbsp; New Uploads</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/posts">
                                        <h4 class="<?= ($uri->getsegment(2) == 'posts'? 'active' : null)?>"><i
                                                class="fa fa-th-list"></i>&nbsp; View Uploads</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/requests">
                                        <h4 class="<?= ($uri->getsegment(2) == 'requests'? 'active' : null)?>"><i
                                                class="fa fa-envelope"></i>&nbsp; Messages
                                            <span class="badge" id="NoOfMessages" style="display:none">new</span></h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/password">
                                        <h4 class="<?= ($uri->getsegment(2) == 'password'? 'active' : null)?>"><i
                                                class="fa fa-share"></i>&nbsp; Change Password</h4>
                                    </a>
                                </li>
                                <li>
                                    <a href="/admin/logout" onclick = "logout();">
                                        <h4><i class="fa fa-power-off"></i>&nbsp; Log Out</h4>
                                    </a>
                                </li>

                                <li>
                                    <hr>
                                </li>
                                <li>
                                    <a href="/">
                                        <h4><i class="fa fa-eye"></i>&nbsp; View Main Site</h4>
                                    </a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <script>
                    function getMessages() {
                        $.ajax({
                            url: "/admin/getMessages",
                            type: "GET",
                            contentType: "application/json",
                            success: function (data) {
                                data = JSON.parse(data);
                                var notifyValue = 0;
                                $.each(data.data, function (count, row) {
                                    if (row.readStatus == 0) {
                                        notifyValue += 1;
                                    }
                                });
                                if (notifyValue > 0) $("#NoOfMessages").show();
                                else $("#NoOfMessages").hide();

                            },
                        })
                    }
                    getMessages();
                </script>