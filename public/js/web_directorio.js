function mostrar_directorio(){
    $.ajax({
        url: "controller/web_controller_listar_directorio.php",
        type: 'POST'
    }).done(function(resp){
        let data = JSON.parse(resp);
        console.log(data.length);
        var cadena = "";
        if (data.length > 0) {
            for (let i = 0; i < data.length; i++) {
                cadena += '<div class="card" style="width: 18rem;">'+
                '<img src="admin/'+data[i]["emple_fotoperfil"]+'" class="card-img-top" alt="...">'+
                '<div class="card-body">'+
                    '<h5 class="card-title fs-6">'+data[i]["dir_profesion"]+' '+data[i]["namecomplet"]+'</h5>'+
                    '<ul class=" list-unstyled card__date ">'+
                        '<li><i class="fa fa-user-tie card-text me-2 "></i><span class="card-text">'+data[i]["dir_cargo"]+'</span></li>'+
                        '<li><i class="fa-solid fa-envelope me-2"></i><span>'+data[i]["emple_email"]+'</span></li>'+
                        '<li><i class="fa-solid fa-phone me-2"></i><span>'+data[i]["emple_movil"]+'</span></li>'+
                    '</ul>'+
                '</div>'+
            '</div>';
            }
            document.getElementById("box__directorio").innerHTML = cadena;
        }
    });
}