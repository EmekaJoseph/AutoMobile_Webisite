<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<img src="" id="avatar_preview" class="avatar" width="150px"/>

<input type="file" id="avatar" name="avatar" accept="image/jpeg,image/png,image/gif">
<input type="hidden" name="MAX_FILE_SIZE" value="5000" />
<button onclick="sendImage();">console</button>
</body>

<script>
    var input = document.getElementById('avatar');
if(input) {
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


function sendImage() {
    var imgbase = document.getElementById('avatar_preview').getAttribute('src');
    console.log(imgbase);
}



//blob test
$.ajax({
  url: '//images-focus-opensocial.googleusercontent.com/gadgets/proxy?container=focus&url=https://i.imgur.com/6pHlLrf.png',
  dataType: 'blob',
  processData: false
}).done(function(result) {
  $('#result').html('<a href="' + window.URL.createObjectURL(result) + '" target="_blank">Blob link</a>');
  console.log(window.URL.createObjectURL(result))
}).fail(function(err) {
  console.error(err);
});


</script>
</html>