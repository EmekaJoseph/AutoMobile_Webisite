<!-- MAIN CONTENT BEGINS -->

<div class="col-md-9">
    <?php if(session()->get('success')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('success');?>
    </div>
    <?php endif; ?>
    <div id="primary" class="content-area">
        <div id="edd_checkout_form_wrap" class="edd_clearfix">
            <form action="/admin/upload__" id="myForm" method="post" enctype="multipart/form-data">
                <fieldset id="edd_checkout_user_info">
                    <p>
                        <label>
                            <h4>Title: <span class="edd-required-indicator">*</span></h4>
                        </label>
                        <span class="edd-description">The name of the item you want to upload</span>
                        <input style="border: 3px solid #eee;" type="text" name="title" id="title" />
                    </p>
                    <p>
                        <label>
                            <h4>Description: <span class="edd-required-indicator">*</span></h4>
                        </label>
                        <span class="edd-description">Describe this Item</span>
                        <textarea style="border: 3px solid #eee;" id="description" name="description" rows="3"
                            cols="10"></textarea>
                    </p>
                    <p>
                        <label>
                            <h4>Price:</h4>
                        </label>
                        <span class="edd-description">(optional)</span>
                        <input style="border: 3px solid #eee;" type="number" name="price" placeholder="" id="price" />
                    </p>
                    <div>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 1: (main)<span class="edd-required-indicator">*</span></h4>
                            </label>
                            <img src="" id="avatar_preview" width="150px" />
                            <input style="border: none;" type="file" id="avatar" name="file1" id="file"
                                accept=".png, .jpg, .jpeg" />
                        </span>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 2: (optional)</h4>
                            </label>
                            <img src="" id="avatar_preview_2" width="150px" />
                            <input style="border: none;" type="file" id="avatar_2" name="file2" id="file"
                                accept=".png, .jpg, .jpeg" />
                        </span>
                        <span class="col-md-3">
                            <label>
                                <h4>Image 3: (optional)</h4>
                            </label>
                            <img src="" id="avatar_preview_3" width="150px" />
                            <input style="border: none;" type="file" id="avatar_3" name="file3" id="file"
                                accept=".png, .jpg, .jpeg" />
                        </span>
                    </div>
                </fieldset>
                <button onclick="checker();" class="btn btn-primary" id="uploader" style="width: 150px;">SUBMIT</button>
                </fieldset>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</body>
<script type='text/javascript' src='/Scripts/Admin/home.js'></script>
<script type='text/javascript' src='/Scripts/Admin/compressor.js'></script>
<!-- <script>
    function checkrr() {
        $('#testText').on('blur', function () {
            var text = $("#testText").val();
            $("#small").html('validating....Please wait ');
            $.ajax({
                url: "/admin/upload_",
                method: "POST",
                data: { 'text': text },
                success: function (data) {
                    data = JSON.parse(data);
                    if (data.data == 1) {
                        $("#small").html('');
                        $("#btnSend").prop('disabled', false);
                    }
                    else {
                        $("#small").html('not correct');
                        $("#btnSend").prop('disabled', true);
                    }
                }
            })
        })
    }
    checker();
</script> -->


</html>