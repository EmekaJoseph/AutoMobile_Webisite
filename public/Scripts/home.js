
function getPosts() {
    var boxes = "";
    $.ajax({
        url: "/getPosts",
        type: "GET",
        async: false,
        success: function (data) {
            data = JSON.parse(data);
            items = data.data
            for (i = 0; i < 4; i++) {
                boxes += '<div class="wowitembox"> \
                <div class="wowitemboxinner"> \
                    <div class="imagearea"> \
                        <img width="555" height="370" \
                            src="/assets/img/Uploads/'+ items[i].image + '" \
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
                        <div class="price fleft">'+ items[i].price + '</div> \
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
            $("#newArrivals").html(boxes);

        },
    });
}

getPosts();


function viewThis(id) {
    event.preventDefault();
    window.location = "view_this/" + id;
}


