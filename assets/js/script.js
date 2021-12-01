function leiaMais(){
	var pontos=document.getElementById("pontos");
	var maisTexto=document.getElementById("mais");
	var btnLeiaMais=document.getElementById("btnLeiaMais");

	if (pontos.style.display == "none") {
		pontos.style.display="inline";
		maisTexto.style.display="none";
		btnLeiaMais.innerHTML="Ver Funções"
	}else{
		pontos.style.display="none";
		maisTexto.style.display="inline";
		btnLeiaMais.innerHTML="Leia Menos"
	}
}
function leiaMais1(){
	var pontos=document.getElementById("pontos1");
	var maisTexto=document.getElementById("mais1");
	var btnLeiaMais=document.getElementById("btnLeiaMais1");

	if (pontos.style.display == "none") {
		pontos.style.display="inline";
		maisTexto.style.display="none";
		btnLeiaMais.innerHTML="Ver Funções "
	}else{
		pontos.style.display="none";
		maisTexto.style.display="inline";
		btnLeiaMais.innerHTML="Leia Menos "
	}
}