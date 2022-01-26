// JavaScript Document
function validarfrmadmin(form){
	if(String(form.password.value)!=String(form.cpassword.value)){
		alert("Password Incorrecto !!!");
		return false;
	}
	return true;	
}