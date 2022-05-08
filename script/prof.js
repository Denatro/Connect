
dobavitt.onclick=function(){
	black.style.height="900px";
	black.style.width="100%";
	oknop.style.top="50%";
}
black.onclick=function(){
	pb();
}
pb=function(){
	black.style.height="0px";
	black.style.width="0px";
	oknop.style.top="-100000px";
}