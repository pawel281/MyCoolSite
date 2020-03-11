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
}


//свайпы 
slider.addEventListener('touchstart',startSwipe, false);
slider.addEventListener('touchend',  endSwipe, false);

var xtouch=0;

function startSwipe(evt){
xtouch=evt.touches[0].clientX;

}


function endSwipe(evt){

if(xtouch){


if((evt.changedTouches[0].clientX-xtouch)>2){
butNext.click();

}
if((evt.changedTouches[0].clientX-xtouch)<-2){
butBack.click();
}

}
}
	
