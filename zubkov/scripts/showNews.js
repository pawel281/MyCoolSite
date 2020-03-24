

var newsList=document.getElementsByClassName("newsTask");
for(let i=0;i<newsList.length;i++){

newsList[i].addEventListener("click", function(){

location.href="newsView.php?id="+newsList[i].getAttribute('idn');
});



}


