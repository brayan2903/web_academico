function mostrar_directorio_area() {
    let area = document.getElementById("text_area_dir").value;
    $.ajax({
        url: "controller/web_controller_listar_directorio.php",
        type: 'POST'
    }).done(function (resp) {
        let data = JSON.parse(resp);
        var cadena = "";
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                if (data[i]["area_nombre"] == area) {
                    
                    cadena += '<div class="accordion-item">' +
                        '<h2 class="accordion-header" id="flush-headingOne' + i + '">' +
                        '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"' +
                        'data-bs-target="#flush-collapseOne' + i + '" aria-expanded="false"' +
                        'aria-controls="flush-collapseOne">' + data[i]["dir_cargo"] +
                        '</button>' +
                        '</h2>' +
                        '<div id="flush-collapseOne' + i + '" class="accordion-collapse collapse"' +
                        'aria-labelledby="flush-headingOne' + i + '" data-bs-parent="#accordionFlushExample">' +
                        '<div class="accordion-body">' +
                        '<div class="d-flex flex-lg-row flex-column gap-3 align-items-center">' +
                        '<img src="admin/' + data[i]["emple_fotoperfil"] + '" class="img-fluid " width="80"' +
                        'alt="...">' +
                        '<div class="d-flex flex-column justify-content-center">' +
                        '<h5 class="card-title fs-6">' + data[i]["dir_profesion"] + ' ' + data[i]["namecomplet"] + '</h5>' +
                        '<ul class=" list-unstyled card__date m-0 ">' +
                        '<li><i class="fa fa-user-tie card-text me-2 "></i><span' +
                        'class="card-text">' + data[i]["dir_cargo"] + '</span></li>' +
                        '<li><i ' +
                        'class="fa-solid fa-envelope me-2"></i><span>' + data[i]["emple_email"] + '</span>' +
                        '</li>' +
                        '<li><i ' +
                        'class="fa-solid fa-phone me-2"></i><span>' + data[i]["emple_movil"] + '</span>' +
                        '</li>' +
                        '</ul>' +
                        '</div>' +
                        '</div>' +

                        '</div>' +
                        '</div>'
                    '</div>';
                }

            }
            document.getElementById("accordionFlushExample").innerHTML = cadena;
        }
    });
}