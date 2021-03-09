// var input = document.getElementById('avatar');
// if (input) {
//     input.addEventListener('change', function () {
//         getUploadImageUrl(this);
//         //sendImage();
//     });
// }

// function getUploadImageUrl(input) {

//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             document.getElementById('avatar_preview').setAttribute('src', e.target.result);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// // for image 2
// var input = document.getElementById('avatar_2');
// if (input) {
//     input.addEventListener('change', function () {
//         getUploadImageUrl_2(this);
//         //sendImage();
//     });
// }

// function getUploadImageUrl_2(input) {

//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             document.getElementById('avatar_preview_2').setAttribute('src', e.target.result);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }



// //image 3
// var input = document.getElementById('avatar_3');
// if (input) {
//     input.addEventListener('change', function () {
//         getUploadImageUrl_3(this);
//         //sendImage();
//     });
// }

// function getUploadImageUrl_3(input) {

//     if (input.files && input.files[0]) {
//         var reader = new FileReader();

//         reader.onload = function (e) {
//             document.getElementById('avatar_preview_3').setAttribute('src', e.target.result);
//         };

//         reader.readAsDataURL(input.files[0]);
//     }
// }

// $("#uploader").click(function () {
//     event.preventDefault();
//     $("#uploader").html("please wait...");
//     $(this).attr("disabled", true);
//     var thisPost = {};
//     thisPost.title = $("#title").val();
//     thisPost.description = $("#description").val();
//     thisPost.price = $("#price").val();
//     var image = document.getElementById('avatar_preview').getAttribute('src');
//     var image2 = document.getElementById('avatar_preview_2').getAttribute('src');
//     var image3 = document.getElementById('avatar_preview_3').getAttribute('src');
//     thisPost.image = image.split(';base64,')[1];
//     thisPost.image2 = image2 == "" ? thisPost.image : image2.split(';base64,')[1];
//     thisPost.image3 = image3 == "" ? thisPost.image : image3.split(';base64,')[1];


//     if (thisPost.title == "" || thisPost.description == "" || image == "") {
//         alert("Important fields must not be empty");
//         $("#uploader").attr("disabled", false);
//         $("#uploader").html("SUBMIT");
//     }
//     else {
//         $.ajax({
//             url: "/admin/upload",
//             method: "POST",
//             data: thisPost,
//             success: function (data) {
//                 data = JSON.parse(data);
//                 window.location = "/admin/home";
//                 alert('uploaded successfully');
//                 //$("#uploader").attr("disabled", false);
//             },
//             error: function (XMLHttpRequest, textStatus, errorThrown) {
//                 alert(textStatus + ', ' + errorThrown);
//                 $("#uploader").attr('disabled', false);
//                 $("#uploader").html("Submit");
//             }
//         })
//     }
// });





var width = 500;
var input1 = document.getElementById('avatar');
input1.onchange = function () {
    resizeImageToSpecificWidth(input1, width, 'avatar_preview');
};

var input2 = document.getElementById('avatar_2');
input2.onchange = function () {
    resizeImageToSpecificWidth(input2, width, 'avatar_preview_2');
};

var input3 = document.getElementById('avatar_3');
input3.onchange = function () {
    resizeImageToSpecificWidth(input3, width, 'avatar_preview_3');
};

function resizeImageToSpecificWidth(input, width, string) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (event) {
            var img = new Image();
            img.onload = function () {
                var oc = document.createElement('canvas'), octx = oc.getContext('2d');
                oc.width = img.width;
                oc.height = img.height;
                octx.drawImage(img, 0, 0);
                while (oc.width * 0.5 > width) {
                    oc.width *= 0.5;
                    oc.height *= 0.5;
                    octx.drawImage(oc, 0, 0, oc.width, oc.height);
                }
                oc.width = width;
                oc.height = oc.width * img.height / img.width;
                octx.drawImage(img, 0, 0, oc.width, oc.height);
                document.getElementById(string).src = oc.toDataURL();
            };
            img.src = event.target.result;
        };
        reader.readAsDataURL(input.files[0]);
    }
}



$("#uploader").click(function () {
    event.preventDefault();
    $("#uploader").html("please wait...");
    $(this).attr("disabled", true);
    var thisPost = {};
    thisPost.title = $("#title").val();
    thisPost.description = $("#description").val();
    thisPost.price = $("#price").val();
    var image = document.getElementById('avatar_preview').getAttribute('src');
    var image2 = document.getElementById('avatar_preview_2').getAttribute('src');
    var image3 = document.getElementById('avatar_preview_3').getAttribute('src');
    thisPost.image = image.split(';base64,')[1];
    thisPost.image2 = image2 == "" ? thisPost.image : image2.split(';base64,')[1];
    thisPost.image3 = image3 == "" ? thisPost.image : image3.split(';base64,')[1];


    if (thisPost.title == "" || thisPost.description == "" || image == "") {
        alert("Important fields must not be empty");
        $("#uploader").attr("disabled", false);
        $("#uploader").html("SUBMIT");
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
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus + ', ' + errorThrown);
                $("#uploader").attr('disabled', false);
                $("#uploader").html("Submit");
            }
        })
    }
});









// document.getElementById('avatar').addEventListener('change', (e) => {
//     const file = e.target.files[0];

//     if (!file) {
//         return;
//     }

//     new Compressor(file, {
//         quality: 0.3,

//         // The compression process is asynchronous,
//         // which means you have to access the `result` in the `success` hook function.
//         success(result) {
//             const formData = new FormData();

//             // The third parameter is required for server
//             formData.append('file', result, result.name);

//             console.log(formData);
//             console.log(result.name);
//             console.log(result);
//             console.log(file);

//         },
//         error(err) {
//             console.log(err.message);
//         },
//     });
// });
