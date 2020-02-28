var age=0;
var toDay=new Date();
var birthDay=new Date(2002,5,8);
age=toDay.getFullYear()-birthDay.getFullYear();
if(toDay<new Date(toDay.getFullYear(),birthDay.getMonth(),birthDay.getDay())){
 age = age-1;
}

document.getElementById('age').innerHTML=age;
