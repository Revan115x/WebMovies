function envia(){
    var nombre_completo = $("#nombre_completo").val();
    var correo = $("#correo").val();
    var usuario = $("#usuario").val();
    var password = $("#password").val();
    $.post("api/add_user.php",{nombre_completo, correo, usuario, password},function(data){
        if(data.indexOf("ERRORCORREO")!=-1){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡El correo ya está registrado!"
            }).then(function() {º
                //window.location = "../formulario/register.php";
            });
        }else if(data.indexOf("ERRORUSUARIO")!=-1){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡El usuario ya está registrado!"
            }).then(function() {
                //window.location = "../formulario/register.php";
            });
        }else{
            Swal.fire({
                icon: "success",
                title: "Creado",
                text: "¡REGRISTRADO!"
            }).then(function() {
                window.location = "../formulario/login.php";
            });
        }
        
    })
}

function enviar2(){
    var correo = $("#correo").val();
    var password = $("#password").val();
    $.post("api/login_user.php",{correo, password},function(data){
        console.log(data.indexOf("ERRORCORREO"));
        if(data.indexOf("ERRORCORREO")!=-1){
            Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "¡Este correo no esta registrado!"
            })
        }else{
            Swal.fire({
                icon: "success",
                title: "Iniciado",
                text: "¡Bienvenido!"
            }).then(function() {
                window.location = "../web/home/home.php";
            });
        }
        
    })
}



