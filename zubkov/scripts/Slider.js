var num=0;
var slider=document.getElementsByClassName("slider")[0];
var butNext=document.getElementById("sliderNext");
var butBack=document.getElementById("sliderBack");
butNext.onclick=function(){	
	
	num-=1;
if(num<0){
	num=slider.children[0].children.length-1;
	console.log(num);
}
slider.children[0].style.transform = `translateX(${-num*100+"%"})`;

}
butBack.onclick=function(){
	num+=1;
if(num>slider.children[0].children.length-1){
	num=0;
}
slider.children[0].style.transform = `translateX(${-num*100+"%"})`;
console.log(num);
}