function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function getPosts() { //myString.substring(0,length)
    var boxes = "";
    $.ajax({
        url: "/getPosts",
        type: "GET",
        async: false,
        success: function (data) {
            data = JSON.parse(data);
            items = data.data;
            var lengthToDisplay = items.length < 12 ? items.length : 12;
            for (i = 0; i < lengthToDisplay; i++) {
                // var thisDescription = description.substring(0, 30) + '...';
                var thisPrice = 'N ' + numberWithCommas(parseInt(items[i].price))
                boxes += '<div class="wowitembox"> \
                <div class="wowitemboxinner"> \
                    <div class="imagearea" style = "width:300px; height: 170px; overflow: hidden;"> \
                        <img src="/assets/img/Uploads/'+ items[i].image + '" \
                            class="attachment-post-thumbnail wp-post-image" alt="163_1" /> \
                        <div class="caption"> \
                            <div class="blur"></div> \
                            <div class="caption-text"> \
                                <div class="captionbuttons"> \
                <a href = "#" class="captiondetails" onclick = "viewThis('+ items[i].id + ')"> <i \
                    class="fa fa-link"></i> VIEW DETAILS</a > \
                                </div > \
                            </div > \
                        </div > \
                    </div > \
                <div class="notesarea"> \
                    <a href="productsingle-nosidebar.html"><h2>'+ items[i].title + '</h2></a> \
                    <div class="description"><p>'+ items[i].description + '</p></div> \
                    <div class="notesbottom"> \
                        <div class="price fleft"><b>'+ thisPrice + '</b></div> \
                        <div class="fright"> \
                            <a href="#"> \
                                <button class="btn btn-sm" onclick = "viewThis('+ items[i].id + ')" >View Details</button> \
                            </a> \
                        </div> \
                        <div class="clearfix"> \</div> \
                    </div> \
                </div> \
                </div > <br> \
                 </div>';
            }
            $("#allItems").html(boxes);

        },
    });
}

getPosts();


function viewThis(id) {
    event.preventDefault();
    window.location = "view_this/" + id;
}




