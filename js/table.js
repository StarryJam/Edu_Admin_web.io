window.onload=function(){
var oTr=document.getElementsByTagName('tr')
var oTd=document.getElementsByTagName('td')
	for(var i=0;i<oTr.length;i++){
		if(i%2!=0){
			oTr[i].style.background="#FFEAB3";
		}
		else{
			oTr[i].style.background="#D6D6D6";
		}
	}
	oTr[0].style.background="#36383B";
	oTr[0].style.height="40px";
	oTr[0].style.textAlign="center";
	oTr[0].style.fontFamily="方正姚体";
	oTr[0].id='firstline';
}// JavaScript Document