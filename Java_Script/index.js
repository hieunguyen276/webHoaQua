let sub = document.getElementById("sub");
let first = document.getElementById("first");
let last = document.getElementById("last");
let phone = document.getElementById("phone");
let mail = document.getElementById("mail");
let meassage = document.getElementById("meassage") ;

sub.onclick = function() {
	if (first.value == "") {
		alert("Vui lòng điền đầy đủ thông tin ");

	}
	else if(last.value== ""){
		alert("Vui lòng điền đầy đủ thông tin ");
		
	}
	else if(phone.value== ""){
		alert("Vui lòng điền đầy đủ thông tin ");

	}
	else if(mail.value== ""){
		alert("Vui lòng điền đầy đủ thông tin ");

	}
	else if(meassage.value== ""){
		alert("Vui lòng điền đầy đủ thông tin ");

	}
	else{
		alert ("Bạn đã hoàn thành thông tin") ;

	}
}