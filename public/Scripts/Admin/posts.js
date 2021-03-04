var allPostsArray;
function getPosts() {
    var tableData = "";
    $.ajax({
        url: "/admin/getPosts",
        type: "GET",
        contentType: "application/json",
        success: function (data) {
            data = JSON.parse(data);
            allPostsArray = data.data;
            $.each(data.data, function (count, row) {
                var price = row.price == "" ? "" : "N " + numberWithCommas(parseInt(row.price));
                tableData += "<tr>\
                <td style = 'font-weight: bold;'>"+ (count + 1) + "</td>\
                <td>"+ row.title + "</td>\
                <td>"+ row.description + "</td>\
                <td>"+ price + "</td>\
                <td>"+ row.date + "</td>\
                <td><button type='button' onclick = 'deletePost("+ row.id + ")' class='btn btn-danger btn-link' style = 'color: red;'>Delete</button></td>\
                </tr>";
            });
            $("#uploads").html(tableData);
        },
    })
}
getPosts();

function deletePost(id) {
    var isconfirm = confirm("Are You sure You Want to Delete This Post?");
    if (isconfirm) {
        $.ajax({
            url: "/admin/deletePost/" + id,
            method: "GET",
            success: function (data) {
                data = JSON.parse(data);
                if (data.status == 'success') {
                    getPosts();
                }

            },
        })
    }

}


function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
