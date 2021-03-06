function changePassword() {

}

$("#passwordChangeBtn").click(function () {
    event.preventDefault();
    $(this).attr("disabled", true);
    var oldPassword = document.getElementById("oldPassword").value;
    var newPassword = document.getElementById("newPassword").value;
    var newPassword2 = document.getElementById("newPassword2").value;

    if (oldPassword == "" || newPassword == "" || newPassword2 == "") {
        alert('Please complete empty fields');
        $("#passwordChangeBtn").attr("disabled", false);
        return false;
    }
    if (newPassword != newPassword2) {
        alert('passwords do no match, try again');
        $("#passwordChangeBtn").attr('disabled', false);
        return false;
    }
    else {
        console.log(oldPassword);
        console.log(newPassword);
        console.log(newPassword2);
        $.ajax({
            url: "/admin/changePassword",
            method: "POST",
            data: {
                oldPassword: oldPassword,
                newPassword: newPassword
            },
            success: function (data) {
                data = JSON.parse(data);
                if (data.data == 0) {
                    alert("Sorry, Your password is incorrect");
                    $("#passwordChangeBtn").attr('disabled', false);
                }
                else if (data.data == 1) {
                    window.location = "/admin/password";
                    alert("Password Has been Changed Successfully");
                    $('#passwordReset').trigger("reset");
                    $("#passwordChangeBtn").attr('disabled', false);
                }
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(textStatus + ', ' + errorThrown);
                $("#passwordChangeBtn").attr('disabled', false);
            }
        })


    }
})