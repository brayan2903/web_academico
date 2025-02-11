function traer_slider() {
    $.ajax({
        url: "controller/web_controller_traer_slider.php",
        type: 'POST',
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            let isFirstElement = true;
            for (let i = 0; i < data.length; i++) {
                let activeClass = isFirstElement ? 'active' : '';

                
                cadena += '<div class="carousel-item ' + activeClass + '">'+
                    '<img src="admin/' + data[i]["slider_imagen"] + '" class="d-block w-100 img-fluid" alt="...">'+
                    '<div class="carousel-caption d-none d-md-block">'+
                        '<h4 class="text-white wow fadeIn" data-wow-delay="0.1s">' + data[i]["slider_titulo"] + '</h4>'+
                        '<p class="wow fadeInUp" data-wow-delay="0.1s">' + data[i]["slider_descripcion"] + '</p>'+
                    '</div>'+
                '</div>';
                isFirstElement = false;
            }
            document.getElementById("items_slider").innerHTML = cadena;
        }
    });
}