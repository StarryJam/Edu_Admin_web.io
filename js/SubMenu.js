window.onload=function(){
	var oDiv=document.getElementsByClassName("div1");
	var oDiv1=document.getElementsByClassName("cheakbox");
	for(var i=0;i<oDiv.length;i++)
	{
		oDiv[i].onmousemove=function(){
			this.style.background="#55595D";
		};
		oDiv[i].onmouseout=function(){
			this.style.background="#36383B";
		};
	}
	oDiv1[0].onmousemove=function(){
		
		oDiv1[0].id="c1active";
			  
	}
	oDiv1[0].onmouseout=function(){
		oDiv1[0].id="";
	}
};// JavaScript Document