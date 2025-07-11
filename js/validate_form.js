function validar(){
    var empresa, email, telefono, rutEmpresa, nombre_apellido, direccion, comentario, expresion;
    empresa = document.getElementById("empresa").value;
    email = document.getElementById("email").value;
    telefono = document.getElementById("telefono").value;
    validaRut = document.getElementById("validaRut").value;
    nombre_apellido = document.getElementById("nombre_apellido").value;
    direccion = document.getElementById("direccion").value;
    comentario = document.getElementById("comentario").value;




    
    var Fn = {
        // Valida el rut con su cadena completa "XXXXXXXX-X"
        validaRut : function (rutCompleto) {
            rutCompleto = rutCompleto.replace("‐","-");
            if (!/^[0-9]+[-|‐]{1}[0-9kK]{1}$/.test( rutCompleto ))
                return false;
            var tmp 	= rutCompleto.split('-');
            var digv	= tmp[1]; 
            var rut 	= tmp[0];
            if ( digv == 'K' ) digv = 'k' ;
            
            return (Fn.dv(rut) == digv );
        },
        dv : function(T){
            var M=0,S=1;
            for(;T;T=Math.floor(T/10))
                S=(S+T%10*(9-M++%6))%11;
            return S?S-1:'k';
        }
    }
    
    
    $("#btnvalida").click(function(){
        if (Fn.validaRut( $("#txt_rut").val() )){
            alert("El rut ingresado es válido :D");
        } else {
            alert("El Rut no es válido");
        }
    });





    expresion = /\w+@\w+\.+[a-z]/;
    patron = /^\s+$/;
    //numerico = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;
    nombre = /^[a-z ,.'-]+$/i;

    if(empresa === "" || email === "" || telefono === "" || validaRut === "" || nombre_apellido === "" || direccion === "" || comentario === ""){
        alert("Todos los campos son obligatorios");
        return false;
    }
    // else if(!numerico.test(telefono)){
    //     alert("Campo teléfono sólo permite datos numéricos");
    //     return false;
    // }
    else if(!expresion.test(email)){
        alert("El correo no es válido");
        return false;
    }
    else if(!nombre.test(nombre_apellido)){
        alert("Campo Nombre y Apellido permite sólo datos alfabéticos");
        return false;
    }
    else if(patron.test(empresa) || patron.test(email) || patron.test(telefono) || patron.test(validaRut) 
    || patron.test(nombre_apellido) || patron.test(direccion) || patron.test(comentario)){
        alert("Rellenar todos los campos por favor");
        return false;
    }
}




