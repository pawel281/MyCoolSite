var age=0;
var toDay=new Date();
var birthDay=new Date(2002,5,8);
age=toDay.getFullYear()-birthDay.getFullYear();
if(toDay<new Date(toDay.getFullYear(),birthDay.getMonth(),birthDay.getDay())){
 age = age-1;
}

document.getElementById('age').innerHTML=age;


var contact=document.getElementsByTagName("table")

if(contact!=null){

contact[0].onclick=function(event){
if(event.target.tagName=='td'){

alert("ghj");
}
}

}



