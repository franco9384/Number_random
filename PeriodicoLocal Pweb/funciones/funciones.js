// JavaScript Document
function validar(formulario) {

    if (isNaN(frminiciarsesion.correo.value) == false) {
        alert("Capture, su correo por favor.");
        return true;
    }

    if (frminiciarsesion.password.value == 0) {
        alert("Ingrese su contraseña, por favor.");
        return false;
    }else{
		return true;
	}
}


