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
                                <div class="col-md-3">
                                    <span class="entryitemname"><b>Name: </b><?= $title ?><br /></span>
                                    <span class="entryprice"><b>Price:</b> <?= $price ?><br /></span>
                                </div>
                                <div class="col-md-6">
                                    <img width="555" height="370" src="../assets/img/Uploads/<?= $image ?>"
                                        class="attachment-post-thumbnail wp-post-image" alt="5_1" />
                                    <p><?= $description ?></p>

                                    <div id="comments" class="comments-area">
                                        <div id="respond" class="comment-respond">
                                            <h3 id="reply-title" class="comment-reply-title">Add your opinion <small><a
                                                        rel="nofollow" id="cancel-comment-reply-link"
                                                        href="/demo-kailo/downloads/sandy-banner/#respond"
                                                        style="display:none;">Cancel Reply</a></small></h3>
                                            <form action="#" method="post" id="commentform" class="comment-form">

                                                <div class="row commentrow comment-form-comment">
                                                    <div class="col-md-12">
                                                        <label for="comment">Comment</label>
                                                        <textarea id="comment" name="comment" rows="5"
                                                            aria-required="true"></textarea>
                                                    </div>
                                                </div>
                                                <p class="form-allowed-tags">
                                                    You may use these <abbr
                                                        title="HyperText Markup Language">HTML</abbr> tags and
                                                    attributes:
                                                    <code>&lt;a href=&quot;&quot; title=&quot;&quot;&gt; &lt;abbr title=&quot;&quot;&gt; &lt;acronym title=&quot;&quot;&gt; &lt;b&gt; &lt;blockquote cite=&quot;&quot;&gt; &lt;cite&gt; &lt;code&gt; &lt;del datetime=&quot;&quot;&gt; &lt;em&gt; &lt;i&gt; &lt;q cite=&quot;&quot;&gt; &lt;strike&gt; &lt;strong&gt; </code>
                                                </p>
                                                <p class="form-submit">
                                                    <input name="submit" type="submit" id="submit" class="submit"
                                                        value="Submit Comment" />
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