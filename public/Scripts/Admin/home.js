
var input1 = document.getElementById('avatar');
input1.onchange = function () {
    diplayImage(input1, 'avatar_preview');
};

var input2 = document.getElementById('avatar_2');
input2.onchange = function () {
    diplayImage(input2, 'avatar_preview_2');
};

var input3 = document.getElementById('avatar_3');
input3.onchange = function () {
    diplayImage(input3, 'avatar_preview_3');
};


function diplayImage(input, destination) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            document.getElementById(destination).setAttribute('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}


function checker() {
    var thisPost = {};
    thisPost.title = $("#title").val();
    thisPost.Description = $("#description").val();
    thisPost.price = $("#price").val();
    var image = document.getElementById('avatar_preview').getAttribute('src');
    if (thisPost.title == "" || thisPost.Description == "" || image == "") {
        alert("Important fields must not be empty");
        return false;
    }
}


// $("#uploader").click(function () {
//     if (checker()) {
//         $("#uploader").html("Uploading...");
//     }
// });

// var width = 500;
// var input1 = document.getElementById('avatar');
// input1.onchange = function () {
//     resizeImageToSpecificWidth(input1, width, 'avatar_preview');
// };

// var input2 = document.getElementById('avatar_2');
// input2.onchange = function () {
//     resizeImageToSpecificWidth(input2, width, 'avatar_preview_2');
// };

// var input3 = document.getElementById('avatar_3');
// input3.onchange = function () {
//     resizeImageToSpecificWidth(input3, width, 'avatar_preview_3');
// };

// function resizeImageToSpecificWidth(input, width, string) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function (event) {
//             var img = new Image();
//             img.onload = function () {
//                 var oc = document.createElement('canvas'), octx = oc.getContext('2d');
//                 oc.width = img.width;
//                 oc.height = img.height;
//                 octx.drawImage(img, 0, 0);
//                 while (oc.width * 0.5 > width) {
//                     oc.width *= 0.5;
//                     oc.height *= 0.5;
//                     octx.drawImage(oc, 0, 0, oc.width, oc.height);
//                 }
//                 oc.width = width;
//                 oc.height = oc.width * img.height / img.width;
//                 octx.drawImage(img, 0, 0, oc.width, oc.height);
//                 document.getElementById(string).src = oc.toDataURL();
//             };
//             img.src = event.target.result;
//         };
//         reader.readAsDataURL(input.files[0]);
//     }
// }



// $("#uploade").click(function () {
//     event.preventDefault();
//     $("#uploader").html("please wait...");
//     $(this).attr("disabled", true);
//     var thisPost = {};
//     thisPost.title = $("#title").val();
//     thisPost.Description = $("#description").val();
//     thisPost.price = $("#price").val();
//     var image = document.getElementById('avatar_preview').getAttribute('src');
//     var image2 = document.getElementById('avatar_preview_2').getAttribute('src');
//     var image3 = document.getElementById('avatar_preview_3').getAttribute('src');
//     thisPost.image = image.split(';base64,')[1];
//     thisPost.image2 = image2 == "" ? thisPost.image : image2.split(';base64,')[1];
//     thisPost.image3 = image3 == "" ? thisPost.image : image3.split(';base64,')[1];


//     if (thisPost.title == "" || thisPost.Description == "" || image == "") {
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



//Newly untried:

// const MAX_WIDTH = 320;
// const MAX_HEIGHT = 180;
// const MIME_TYPE = "image/jpeg";
// const QUALITY = 0.7;

// const input = document.getElementById("img-input");
// input.onchange = function (ev) {
//   const file = ev.target.files[0]; // get the file
//   const blobURL = URL.createObjectURL(file);
//   const img = new Image();
//   img.src = blobURL;
//   img.onerror = function () {
//     URL.revokeObjectURL(this.src);
//     // Handle the failure properly
//     console.log("Cannot load image");
//   };
//   img.onload = function () {
//     URL.revokeObjectURL(this.src);
//     const [newWidth, newHeight] = calculateSize(img, MAX_WIDTH, MAX_HEIGHT);
//     const canvas = document.createElement("canvas");
//     canvas.width = newWidth;
//     canvas.height = newHeight;
//     const ctx = canvas.getContext("2d");
//     ctx.drawImage(img, 0, 0, newWidth, newHeight);
//     canvas.toBlob(
//       (blob) => {
//         // Handle the compressed image. es. upload or save in local state
//         displayInfo('Original file', file);
//         displayInfo('Compressed file', blob);
//       },
//       MIME_TYPE,
//       QUALITY
//     );
//     document.getElementById("root").append(canvas);
//   };
// };

// function calculateSize(img, maxWidth, maxHeight) {
//   let width = img.width;
//   let height = img.height;

//   // calculate the width and height, constraining the proportions
//   if (width > height) {
//     if (width > maxWidth) {
//       height = Math.round((height * maxWidth) / width);
//       width = maxWidth;
//     }
//   } else {
//     if (height > maxHeight) {
//       width = Math.round((width * maxHeight) / height);
//       height = maxHeight;
//     }
//   }
//   return [width, height];
// }