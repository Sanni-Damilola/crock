var login = () =>{

	window.location.href="login";
}


var rlogin = () =>{

	window.location.href="../login";
}


var login_r = () =>{

	window.location.href="../login";
}


var reg_r = () =>{


	window.location.href="../create";


}



var changePhoto = () =>{

	window.location.href="../changephoto";
	
}

var reg = () =>{


	window.location.href="create";


}



const profile = () =>{
	window.location.href="profile";
}




const plus = () =>{
	window.location.href="add";
}



const notify = () =>{
	window.location.href="notify";
}



const settings = () =>{
	window.location.href="settings";
}


const search = () =>{
	window.location.href="search";
}




var reg_r = () =>{


	window.location.href="../create";


}




var createNewTopic = () =>{


var forum_title = document.querySelector("#forum_title");
var forum_body = document.querySelector("#forum_body");
var forum_type = document.querySelector("#forum_type");


if(forum_title.value == "" || forum_body.value == "" || forum_type.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";



}
else{

var mdata="forum_title="+forum_title.value+"&forum_body="+forum_body.value+"&forum_type="+forum_type.value;


$.ajax({

url : "../new_forum_add.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{

	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;

}

})

}

}




var saveBirthday = () =>{


var day = document.querySelector("#day");
var month = document.querySelector("#month");
var year = document.querySelector("#year");


if(day.value == "" || month.value == "" || year.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";



}
else{

var mdata="day="+day.value+"&month="+month.value+"&year="+year.value;


$.ajax({

url : "../birthday.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{

	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;

}

})

}





}







var loginCheck = () =>{


var username = document.querySelector("#username");
var password = document.querySelector("#password");


if(username.value == "" || password.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "username="+username.value+"&password="+password.value;

$.ajax({

url : "../login.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})


}


}








var savePhone = () =>{


var phone = document.querySelector("#phone");



if(phone.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "phone="+phone.value;

$.ajax({

url : "../phone.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})


}


}





var shoutIt = () =>{


var message = document.querySelector("#message");



if(message.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "message_shout="+message.value;

$.ajax({

url : "../shoutout.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})


}


}










var deleteTopic = () =>{


var xvl = document.querySelector("#xvl");

if(xvl.value == ""){


var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Please select an action first";

}else if(xvl.value == "Yes"){

var refid = document.querySelector("#refid");


var mdata = "refid="+refid.value;

$.ajax({

url : "../deleteTopic.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})




}else if(xvl.value == "No"){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Sorry, we are unable to delete this topic";


}









}







var settingsUpdate = () =>{


var user_behaviour = document.querySelector("#user_behaviour");
var ads = document.querySelector("#ads");


if(user_behaviour.value == "" || ads.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "user_behaviour="+user_behaviour.value+"&ads="+ads.value;

$.ajax({

url : "../settingsupdate.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})


}


}













var regCheck = () =>{


var username = document.querySelector("#username");
var password = document.querySelector("#password");
var firstname = document.querySelector("#firstname");
var surname = document.querySelector("#surname");
var gender = document.querySelector("#gender");


if(username.value == "" || password.value == "" || firstname.value == "" || surname.value == "" || gender.value == ""){

var xauto = document.querySelector(".auto");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "username="+username.value+"&password="+password.value+"&firstname="+firstname.value+"&surname="+surname.value+"&gender="+gender.value;

$.ajax({

url : "../reg.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var x = document.querySelector(".x");
	x.innerHTML=data;
}

})


}


}
















var commentNew = () =>{


var fid = document.querySelector("#fid");
var comment_text = document.querySelector("#comment_text");


if(fid.value == "" || comment_text.value == ""){

var xautox = document.querySelector(".autox");
var x = document.querySelector(".x");
x.innerHTML="Fields cannot be left empty";

}
else{

var mdata = "fid="+fid.value+"&comment_text="+comment_text.value;

$.ajax({

url : "../new_comment_add.php",
method : "post",
data : mdata,
enctype : "UTF8",
success : (data)=>{
	var xauto = document.querySelector(".auto");
	var xy = document.querySelector(".xy");
	xy.innerHTML=data;
}

})


}


}
