<!-- MAIN CONTENT BEGINS -->
<div class="col-md-9">
    <div id="primary" class="content-area">
        <div id="edd_checkout_form_wrap" class="edd_clearfix">
            <form id="edd_purchase_form" class="edd_form" action="#" method="POST">
                <fieldset id="edd_checkout_user_info">
                    <p>
                        <label>
                            <h4>Title: <span class="edd-required-indicator">*</span></h4>
                        </label>
                        <span class="edd-description">The name of the item you want to upload</span>
                        <input style="border: 3px solid #eee;" type="text" placeholder="" id="title" />
                    </p>
                    <p>
                        <label>
                            <h4>Description: <span class="edd-required-indicator">*</span></h4>
                        </label>
                        <span class="edd-description">Describe this Item</span>
                        <textarea style="border: 3px solid #eee;" id="description" rows="3" cols="10"></textarea>
                    </p>
                    <p>
                        <label>
                            <h4>Price:</h4>
                        </label>
                        <span class="edd-description">(optional)</span>
                        <input style="border: 3px solid #eee;" type="number" placeholder="" id="price" />
                    </p>
                    <div>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 1: (main)<span class="edd-required-indicator">*</span></h4>
                            </label>
                            <img src="" id="avatar_preview" width="150px" />
                            <input style="border: none;" type="file" id="avatar" />
                        </span>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 2: (optional)</h4>
                            </label>
                            <img src="" id="avatar_preview_2" width="150px" />
                            <input style="border: none;" type="file" id="avatar_2" />
                        </span>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 3: (optional)</h4>
                            </label>
                            <img src="" id="avatar_preview_3" width="150px" />
                            <input style="border: none;" type="file" id="avatar_3" />
                        </span>
                    </div>
                </fieldset>
                <button class="btn btn-primary" id="uploader" style="width: 150px;">SUBMIT</button>
                </fieldset>
            </form>
        </div>
    </div>

    <!-- <div class="pt-2">
        <form action="/admin/upload_" id="myForm" method="post" enctype="multipart/form-data"
            onsubmit="return checker()">
            <input type="text" name="" id="testText">
            <input type="file" name="file" id="file" accept=".png, .jpg, .jpeg" />
            <button type="submit" class="btn btn-success">send</button>
        </form>
    </div> -->
</div>
</div>
</div>
</div>
</body>
<script type='text/javascript' src='/Scripts/Admin/home.js'></script>
<script type='text/javascript' src='/Scripts/Admin/compressor.js'></script>
<!-- <script>
    function checker() {
        var text = $("#testText").val();
        if (text == "") {
            alert('empty');
            return false;
        }
    }


</script> -->

</html>