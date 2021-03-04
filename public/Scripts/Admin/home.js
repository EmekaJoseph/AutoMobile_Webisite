var input = document.getElementById('avatar');
if (input) {
    input.addEventListener('change', function () {
        getUploadImageUrl(this);
        //sendImage();
    });
}

function getUploadImageUrl(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('avatar_preview').setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// for image 2
var input = document.getElementById('avatar_2');
if (input) {
    input.addEventListener('change', function () {
        getUploadImageUrl_2(this);
        //sendImage();
    });
}

function getUploadImageUrl_2(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('avatar_preview_2').setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}



//image 3
var input = document.getElementById('avatar_3');
if (input) {
    input.addEventListener('change', function () {
        getUploadImageUrl_3(this);
        //sendImage();
    });
}

function getUploadImageUrl_3(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById('avatar_preview_3').setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

$("#uploader").click(function () {
    event.preventDefault();
    $(this).attr("disabled", true);
    var thisPost = {};
    thisPost.title = $("#title").val();
    thisPost.description = $("#description").val();
    thisPost.price = $("#price").val();
    var image = document.getElementById('avatar_preview').getAttribute('src');
    var image2 = document.getElementById('avatar_preview_2').getAttribute('src');
    var image3 = document.getElementById('avatar_preview_3').getAttribute('src');
    thisPost.image = image.split(';base64,')[1];
    thisPost.image2 = image2.split(';base64,')[1];
    thisPost.image3 = image3.split(';base64,')[1];


    if (thisPost.title == "" || thisPost.description == "" || thisPost.image == "") {
        alert("Important fields must not be empty");
        $("#uploader").attr("disabled", false);
    }
    else {
        $.ajax({
            url: "/admin/upload",
            method: "POST",
            data: thisPost,
            success: function (data) {
                data = JSON.parse(data);
                window.location = "/admin/home";
                alert('uploaded successfully');
                //$("#uploader").attr("disabled", false);
            },
        })
    }
});


