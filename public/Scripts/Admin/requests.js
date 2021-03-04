// var allPostsArray;
function getMessages() {
    var tableData = "";
    $.ajax({
        url: "/admin/getMessages",
        type: "GET",
        contentType: "application/json",
        success: function (data) {
            data = JSON.parse(data);
            if (data.data.length == 0) {
                $("#messages").html('<tr><td colspan ="6">No messages</td></tr>');
            }
            else {
                $.each(data.data, function (count, row) { //337AB7
                    readStatus = row.readStatus == 0 ? 'font-weight: bold;' : ""
                    tableData += "<tr style = '" + readStatus + "'>\
                    <td >"+ (count + 1) + "</td>\
                    <td>"+ row.senderName + "</td>\
                    <td>"+ row.contact + "</td>\
                    <td>"+ row.message + "</td>\
                    <td>"+ row.date + "</td>\
                    <td><a href = '/admin/view_request/"+ row.requestId + "' onclick= 'changeReadStatus(" + row.id + ")' style='color:blue'>view</a>\
                    / <a href='#' style='color:red' onclick = 'deleteMessage("+ row.id + ")'>Delete</a></td>\
                    </tr>";
                });
                $("#messages").html(tableData);
            }
            // allPostsArray = data.data;
        },
    })
}
getMessages();

function deleteMessage(id) {
    var isconfirm = confirm("Are You sure You Want to Delete This Message?");
    if (isconfirm) {
        $.ajax({
            url: "/admin/deleteMessage/" + id,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == 'success') {
                    getMessages();
                }

            },
        })
    }

}

function changeReadStatus(id) {
    $.ajax({
        url: "/admin/changeReadStatus/" + id,
        method: "POST"
    })
}