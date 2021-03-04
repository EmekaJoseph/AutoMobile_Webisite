<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" href="/assets/img/favicon.ico" />
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
    <!-- <script type='text/javascript' src='/assets/js/SmoothScroll.js'></script> -->
    <script type='text/javascript' src='/assets/js/init.js'></script>
    <!-- <script type='text/javascript' src='/assets/js/anim.js'></script> -->
</head>

<body>
    <div class="container padtop50 padbot50" style="padding-top: 100px">
        <div class="row">

            <!-- MAIN CONTENT BEGINS -->
            <div class="col-md-12">
                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
                        <article class="contentdownloadphp">
                            <div class="row">
                                <div class="col-md-3"
                                    style="padding: 20px 0px 20px 10px;font-size: 20px; background-color: #f5f0eb;">
                                    <span class="entryitemname"><b>Name: </b><?= $title ?><br /></span>
                                    <span class="entryprice"><b>Price:</b> <?= $price ?><br /></span>
                                    <input type="text" value="<?= $id ?>" id="thisId" style="display:none;">
                                </div>
                                <div class="col-md-6">
                                    <img width="555" height="370" src="/assets/img/Uploads/<?= $image ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" />
                                </div>
                                <div class="col-md-3">
                                    <img width="300" height="210" src="/assets/img/Uploads/<?= $image2 ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" /> <br>
                                    <img width="300" height="210" src="/assets/img/Uploads/<?= $image3 ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" />
                                </div>
                            </div>

                        </article>
                    </main>
                </div>
            </div>
            <!-- MAIN CONTENT ENDS -->

        </div>
    </div>
    </div>
</body>

</html>



<script>

</script>