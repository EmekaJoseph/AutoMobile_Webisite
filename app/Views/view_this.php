<!-- PAGE CONTENT
		================================================== -->
<div class="singledownloadphp">

    <!-- TITLE BEGINS -->

    <!-- TITLE ENDS -->

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
                                    <input type="text" value = "<?= $id ?>" id = "thisId" style="display:none;">
                                </div>
                                <div class="col-md-6">
                                    <img width="555" height="370" src="../assets/img/Uploads/<?= $image ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" />
                                    <p style="font-size: 18px;"><?= $description ?></p>

                                    <div class="comments-area">
                                        <div id="respond" class="comment-respond">
                                            <span style="font-size: 20px;"><b> Like what You see? Send a Message:
                                                </b></span>
                                            <form id = "messageForm" style="padding-top: 20px;">
                                                <div class="row commentrow comment-form-comment">
                                                    <div class="col-md-8">
                                                        <input type="text" id="name" class="form-control form-group-lg"
                                                            placeholder="Your name" />
                                                        <input type="text" id="contact"
                                                            class="form-control form-group-lg"
                                                            placeholder="email or phone number" />
                                                        <textarea name="" id="message" rows="10"
                                                            placeholder="Type message here.."></textarea>
                                                    </div>
                                                </div>
                                                <p>
                                                <button id="send" class= "btn btn-primary" 
                                                style="padding: 10px" onclick="sendMessage();">Send Message</button>
                                                </p>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img width="300" height="210" src="../assets/img/Uploads/<?= $image2 ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" /> <br>
                                    <img width="300" height="210" src="../assets/img/Uploads/<?= $image3 ?>"
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
<script type='text/javascript' src='../Scripts/view_this.js'></script>
<script>
    
</script>