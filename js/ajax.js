function objetoAjax(){
        var xmlhttp=false;
        try {
               xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
               try {
                  xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
               } catch (E) {
                       xmlhttp = false;
               }
        }
 
        if (!xmlhttp && typeof XMLHttpRequest!='undefined') {

               xmlhttp = new XMLHttpRequest();
			    }

        return xmlhttp;

}

 
//Función para recoger los datos del formulario y enviarlos por post  
function enviarDatosLlamada(){
 
  //div donde se mostrará lo resultados
  divResultado = document.getElementById('resultado');
  //recogemos los valores de los inputs
  numero=document.llamadas.numero.value;
  categoria=document.llamadas.categoria.value;
  seudonimo=document.llamadas.seudonimo.value;
  pais=document.llamadas.pais.value;
  comentario=document.llamadas.comentario.value;
  
 
  //instanciamos el objetoAjax
  ajax=objetoAjax();
 
  //uso del medotod POST
  //archivo que realizará la operacion
  //registro.php
  ajax.open("POST", "registro.php",true);
  //cuando el objeto XMLHttpRequest cambia de estado, la función se inicia
  ajax.onreadystatechange=function() {
	  //la función responseText tiene todos los datos pedidos al servidor
  	if (ajax.readyState==4) {
  		//mostrar resultados en esta capa
		divResultado.innerHTML = ajax.responseText
  		//llamar a funcion para limpiar los inputs
		LimpiarCampos();
	}
 }
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	//enviando los valores a registro.php para que inserte los datos
	ajax.send("numero="+numero+"&categoria="+categoria+"&seudonimo="+seudonimo+"&pais="+pais+"&comentarios="+comentario)
}
 
//función para limpiar los campos
function LimpiarCampos(){
 numero=document.llamadas.numero.value="";
  categoria=document.llamadas.categoria.value="";
  seudonimo=document.llamadas.seudonimo.value="";
  pais=document.llamadas.pais.value="";
  comentario=document.llamadas.comentario.value="";
 numero=document.llamadas.numero.focus()=""; 

}

 

function MostrarConsulta(datos){

        divResultado = document.getElementById('resultado');

        ajax=objetoAjax();

        ajax.open("GET", datos);

        ajax.onreadystatechange=function() {

               if (ajax.readyState==4) {

                       divResultado.innerHTML = ajax.responseText

               }

        }

        ajax.send(null)

}