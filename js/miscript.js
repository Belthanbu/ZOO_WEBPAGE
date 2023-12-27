function triangulo(){
	var c,n;
	c = document.tri.car.value;
	n = parseInt(document.tri.tamaño.value);
	for(var i=n; i>=1; i--){
		for(var j=1; j<=n-i; j++){
			document.write("&nbsp&nbsp&nbsp");
		}
		for(var j=1; j<=(i*2)-1; j++){
			document.write(""+c);
		}
		
		document.write("<br/>");
	}
}

function zodiaco(){
	let dia, mes;
	dia = parseInt(document.zod.dia.value);
	mes = parseInt(document.zod.mes.value);

	if (dia == 0 || mes==0) {
		alert("Ingrese los datos");
		return 0;
	} else if (mes == 2 && dia > 28) {
		alert("Esta fecha es incorrecta");
		return 0;
	}
	var image = document.getElementById("img");
	var inf = document.getElementById("inf");
	if((dia>=21 && mes==3)||(dia<=20 && mes==4)){
		document.getElementById("img").src="Imagenes/aries.jpg";
		document.getElementById("inf").innerHTML="Es el primer signo del zodiaco, el primero de naturaleza masculina y de cualidad cardinal. Pertenece al elemento fuego y está regido por el planeta Marte.";
	}
	if((dia>=21 && mes==4)||(dia<=21 && mes==5)){
		document.getElementById("img").src="Imagenes/tauro.jpg";
		document.getElementById("inf").innerHTML="Es el segundo signo del zodiaco, el primero de naturaleza femenina y de cualidad fija. Pertenece al elemento tierra y es regido por el planeta Venus.";
	}
	if((dia>=22 && mes==5)||(dia<=21 && mes==6)){
		document.getElementById("img").src="Imagenes/geminis.jpg";
		document.getElementById("inf").innerHTML="Es el tercer signo del zodiaco, el segundo de naturaleza masculina y de cualidad mutable. Pertenece al elemento aire y es regido por el planeta Mercurio.";
	}
	if((dia>=22 && mes==6)||(dia<=23 && mes==7)){
		document.getElementById("img").src="Imagenes/cancer.jpg";
		document.getElementById("inf").innerHTML="Es el cuarto signo del zodíaco, el segundo de naturaleza femenina y de cualidad cardinal. Pertenece al elemento agua y está regido por la Luna.";
	}
	if((dia>=24 && mes==7)||(dia<=23 && mes==8)){
		document.getElementById("img").src="Imagenes/leo.jpg";
		document.getElementById("inf").innerHTML="Es el quinto signo del zodíaco, el tercero de naturaleza masculina y de cualidad fija. Pertenece al elemento fuego y está regido por el Sol.";
	}
	if((dia>=24 && mes==8)||(dia<=23 && mes==9)){
		document.getElementById("img").src="Imagenes/virgo.jpg";
		document.getElementById("inf").innerHTML="Es el sexto signo del zodíaco, el tercero de naturaleza femenina y de cualidad mutable. Pertenece al elemento tierra y está regido por el planeta Mercurio.";
	}
	if((dia>=24 && mes==9)||(dia<=23 && mes==10)){
		document.getElementById("img").src="Imagenes/libra.jpg";
		document.getElementById("inf").innerHTML="El es séptimo signo del zodíaco, el cuarto de naturaleza masculina y de cualidad cardinal. Pertenece al elemento aire y está regido por el planeta Venus.";
	}
	if((dia>=24 && mes==10)||(dia<=22 && mes==11)){
		document.getElementById("img").src="Imagenes/escorpio.jpg";
		document.getElementById("inf").innerHTML="Es el octavo signo del zodíaco, el cuarto de naturaleza femenina y de cualidad fija. Pertenece al elemento agua y está regido por los planetas Marte y Plutón.";
	}
	if((dia>=23 && mes==11)||(dia<=21 && mes==12)){
		document.getElementById("img").src="Imagenes/sagitario.jpg";
		document.getElementById("inf").innerHTML="Es el noveno signo del zodíaco, el quinto de naturaleza masculina y de cualidad mutable. Pertenece al elemento fuego y está regido por Júpiter.";
	}
	if((dia>=22 && mes==12)||(dia<=20 && mes==1)){
		document.getElementById("img").src="Imagenes/capricornio.jpg";
		document.getElementById("inf").innerHTML="Es el décimo signo del zodíaco, el quinto de naturaleza femenina y de cualidad cardinal. Pertenece al elemento tierra y está regido por el planeta Saturno.";
	}
	if((dia>=21 && mes==1)||(dia<=19 && mes==2)){
		document.getElementById("img").src="Imagenes/acuario.jpg";
		document.getElementById("inf").innerHTML="Es el undécimo signo del zodíaco, el sexto de naturaleza masculina y de cualidad fija. Pertenece al elemento aire y está regido por los planetas Urano y Saturno.";
	}
	if((dia>=20 && mes==2)||(dia<=20 && mes==3)){
		document.getElementById("img").src="Imagenes/picis.jpg";
		document.getElementById("inf").innerHTML="Es el último signo del zodíaco, el sexto de naturaleza femenina y de cualidad mutable. Pertenece al elemento agua y está regido por Neptuno y Júpiter.";
	}
	if(dia>31 && mes>12){
		alert("Introduzca un valor correcto");
		return 0;
	}
}


function convertirBase(){
	let decimal,base;
	let octal,binario,base3,base4,base5,base6,base7,base9;
	decimal=parseInt(document.basedec.conv.value);
	base= parseInt(document.basedec.bas.value)

	octal=decimal.toString(8);
	binario=decimal.toString(2);
	base3=decimal.toString(3);
	base4=decimal.toString(4);
	base5=decimal.toString(5);
	base6=decimal.toString(6);
	base7=decimal.toString(7);
	base9=decimal.toString(9);

	switch (base) {
		case 2:
			document.basedec.resp.value=binario;
			break;
		case 3:
			document.basedec.resp.value=base3;
			break;
		case 4:
			document.basedec.resp.value=base4;;
			break;
		case 5:
			document.basedec.resp.value=base5;
			break;
		case 6:
			document.basedec.resp.value=base6;
			break;
		case 7:
			document.basedec.resp.value=base7;
			break;
		case 8:
			document.basedec.resp.value=octal;
			break;
		case 9:
			document.basedec.resp.value=base9;
			break;
		default:
			alert("Ingrese una base correcta");
			break;
	}
	

}

function validar(){
	let nom,ndoc,cel,ape,correo;
	nom = document.reclam.nombres.value;
	ape= document.reclam.apellidos.value;
	ndoc= document.reclam.nrodoc.value;
	cel= document.reclam.celular.value;
	correo= document.reclam.correoe.value;
	if (nom == 0) {
		alert("El nombre es obligatorio");
		return 0;
	}else if (isNaN(nom)==false) {
		alert("El nombre no debe ser numerico");
		return 0;
	}
	if (ape == 0) {
		alert("Los apellidos son obligatorios");
		return 0;
	}else if (isNaN(ape)==false) {
		alert("Los apellidos no deben ser numericos");
		return 0;
	}
	if (ndoc == 0) {
		alert("El nro. de documento es obligatorio");
		return 0;
	}else if (isNaN(ndoc)) {
		alert("El documento debe ser numerico");
		return 0;
	}
	if (cel == 0) {
		alert("El nro. de celular es obligatorio");
		return 0;
	}else if (isNaN(cel)) {
		alert("El celular debe ser numerico");
		return 0;
	}
	if (correo == 0) {
		alert("El correo es obligatorio");
		return 0;
	}
	if (correo.includes("@")&&(correo.includes(".com"))) {

	}else {
		alert("El formato de email no es correcto");
	}
	document.reclam.submit();
}

function valid2(){
	let nombre,email,asunto;
	email=document.getElementById("email").value;
	nombre= document.getElementById("nombre").value;
	asunto= document.getElementById("asunto").value;
	if (nombre == 0) {
		alert("El nombre es obligatorio");
		return 0;
	}else if (isNaN(nombre)==false) {
		alert("El nombre no debe ser numerico");
		return 0;
	}
	if (email == 0) {
		alert("El correo es obligatorio");
		return 0;
	}
	if (email.includes("@")&&(email.includes(".com"))) {

	}else {
		alert("El formato de email no es correcto");
	}
	if (asunto == 0) {
		alert("El asunto es obligatorio");
		return 0;
	}
	

}

function valid3(){
	let nombre,codigo;
	codigo=document.getElementById("cod").value;
	nombre= document.getElementById("nombre").value;
	if (nombre == 0) {
		alert("El nombre es obligatorio"); 
		return 0;
	}else if (isNaN(nombre)==false) {
		alert("El nombre no debe ser numerico"); 
		return 0;
	}
	if (cod == 0) {
		alert("El codigo es obligatorio"); 
		return 0;
	}
	if (codigo.includes("ECZ_")) {

	}else {
		alert("El formato de codigo no es correcto");
	}
	

}

function dolar(){
	let soles,dolar;
	soles=document.getElementById("soles").value;

	dolar= soles*3.73;

	document.getElementById("resultar").value="$"+dolar;
}


const slider = document.querySelector("#slider");
let sliderSection = document.querySelectorAll(".slider__section");
let sliderSectionLast = sliderSection[sliderSection.length -1];

const btnLeft = document.querySelector("#btn--left");
const btnRight = document.querySelector("#btn--right");

slider.insertAdjacentElement('afterbegin', sliderSectionLast);

function moverDerecha(){
	let sliderSectionFirst = document.querySelectorAll(".slider__section")[0];
	slider.style.marginLeft = "-200%";
	slider.style.transition = "all 0.5s";
	setTimeout(function(){
		slider.style.transition = "none";
		slider.insertAdjacentElement('beforeend', sliderSectionFirst);
		slider.style.marginLeft = "-100%";
	}, 500);
}

function moverIzquierda(){
	let sliderSection = document.querySelectorAll(".slider__section");
	let sliderSectionLast = sliderSection[sliderSection.length -1];
	slider.style.marginLeft = "0";
	slider.style.transition = "all 0.5s";
	setTimeout(function(){
		slider.style.transition = "none";
		slider.insertAdjacentElement('afterbegin', sliderSectionLast);
		slider.style.marginLeft = "-100%";
	}, 500);
}

btnRight.addEventListener('click', function(){
	moverDerecha();
});
btnLeft.addEventListener('click', function(){
	moverIzquierda();
});
setInterval(function(){
	moverDerecha();
}, 5000)


//*ALERTA DE ELIMINACIÓN*//
		function ConfirmDelete()
		{
			var respuesta = confirm("¿Estás seguro de eliminar este registro?");
			if (respuesta == true)
			{
				return true;
			}	
			else
			{
				return false;
			}
		}
//*ALERTA DE ELIMINACIÓN*//
