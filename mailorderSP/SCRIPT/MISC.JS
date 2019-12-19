function checkLoginForm() {
	var		mail = document.getElementById("mail");
	var		pass = document.getElementById("pass");

	if (mail.value == "") {
		window.alert("メールアドレスを入力してください。");
		mail.focus();
		return false;
	}
	else if (!mail.value.match(/.+@.+/)) {
		window.alert("正しいメールアドレスを入力してください。");
		mail.focus();
		return false;
	}

	if (pass.value == "") {
		window.alert("パスワードを入力してください。");
		pass.focus();
		return false;
	}
}

//----------------------------------------------------------------
function checkNewCustomerForm() {
	var	cname = document.getElementById("cname");
	var	address = document.getElementById("address");
	var	tel = document.getElementById("tel");
	var	email = document.getElementById("email");
	var	cardnumber = document.getElementById("cardnumber");
	var	password = document.getElementById("password");
	var	passwordconf = document.getElementById("passwordconf");

	if (cname.value == "") {
		alert("お名前を入力してください。");
		cname.focus();
		return false;
	}
	if (address.value == "") {
		alert("住所を入力してください。");
		address.focus();
		return false;
	}
	if (tel.value == "") {
		alert("電話番号を入力してください。");
		tel.focus();
		return false;
	}
	if (email.value == "") {
		alert("e-mailアドレスを入力してください。");
		email.focus();
		return false;
	}
	if (password.value == "") {
		alert("パスワードを入力してください。");
		password.focus();
		return false;
	}
	if (passwordconf.value == "") {
		alert("パスワードの確認を入力してください。");
		passwordconf.focus();
		return false;
	}

	if (password.value != passwordconf.value) {
		alert("パスワードの入力値と確認の入力値が異なっています。");
		passwordconf.focus();
		return false;
	}

	return true;
}