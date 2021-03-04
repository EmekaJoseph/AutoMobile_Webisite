function sendMessage() {
    event.preventDefault();
    $("#send").attr("disabled", true);
    var sender = {};
    sender.senderName = $("#name").val();
    sender.contact = $("#contact").val();
    sender.message = $("#message").val();
    sender.requestId = $("#thisId").val();

    if (sender.senderName == "") {
        alert("Please enter Your Name");
        $("#send").attr('disabled', false);
        return false;
    }

    if (sender.contact == "") {
        alert("Please Enter any Contact: Phone or Email");
        $("#send").attr('disabled', false);
        return false;
    }
    if (sender.message == "") {
        alert("Please type a message");
        $("#send").attr('disabled', false);
        return false;
    }

    $.ajax({
        url: "/admin/sendMessage",
        method: "POST",
        data: sender,
        success: function (data) {
            data = JSON.parse(data);
            $("#messageForm").trigger("reset");
            alert('Message sent Successfully');
            $("#send").attr('disabled', false);
            //
        },
        error: function (XMLHttpRequest, textStatus, errorThrown) {
            alert(textStatus + ', ' + errorThrown);
            $("#send").attr('disabled', false);
        }
    })
}