window.onload = function (){
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:false,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });

    let request = new XMLHttpRequest();
    let pos = [];
    request.open("GET", "http://127.0.0.1/saREST/getBoxes.php", false);
    request.send();
    if (request.status === 200) {
        try {
            pos = JSON.parse(request.responseText);
        } catch (e) {
            console.log('Error happened here!')
            console.error(e)
        }
    }
    pos.forEach ((object) => {
        let box = new Box(object.box_id, object.box_pos_x, object.box_pos_y, object.box_pos_z, object.article_id)
        boxList.push(box)
    });
}