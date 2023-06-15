function validar(){

    var rut = document.getElementById("rut").value;
	var nombres = document.getElementById("nombres").value;
    var apellido = document.getElementById("apellidos").value;
	var telefono = document.getElementById("telefono").value;
	var fecha = document.getElementById("fecha").value;

	console.log(rut + " " + nombres + " " + apellido + " " + telefono + " " + fecha )


    if(rut =="" ){
        alert("El RUT es obligatorio");
        document.getElementById(rut).focus();
    }

    else {
        if(nombres =="" ){
            alert("El nombre es obligatorio")
            document.getElementById(nombres).focus();            
    }


        else {
        if(apellido =="" ){
            alert("El apellido es obligatorio")
            document.getElementById(apellido).focus();            
    }

            else {
                if(telefono =="" ){
                    alert("El telefono es obligatorio")
                    document.getElementById(telefono).focus();            
    }
                if(telefono =="" ){
                    alert("El telefono es obligatorio")
                    document.getElementById(telefono).focus();            
    }

                 
             


            }
        }
    }


}






  

  
  
  





  