var x=0;
vpered.onclick=function(){
	x=x-100;
	if(x<=-300)
		x=0;
	console.log(x);
	fn();
}
nazad.onclick=function(){
	x=x+100
	if(x>0)x=-200;
	console.log(x);
	fn()
}
fn=function(){
	poloska.style.left=x+"%";
}
