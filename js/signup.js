/*$(function validate() {
	$('#signupform').validate({
		rules: {
			username: {
				required: true;
				remote: {
					url: "check_username.php",
					type: "post"
				}
			},
		},
		messages: {
			val_number: 'Please Enter Valid Value!',
		}
	});
});*/



function validateUsername() {
	var usernameElement = document.getElementById('username').value;
	var usernameResultElement = document.getElementById('usernameResult');
	var submitElement = document.getElementById('submit');

	$.post("check_username.php", {username: username}, function(result) {
		if(result == 1) {
			usernameResultElement.innerHTML = "*username available";
			submitElement.disabled = false;
		} else {
			submitElement.disabled = true;
		}
	});
}