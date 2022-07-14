const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	
	container.classList.remove("right-panel-active");
});



function triggerClick(){
	document.querySelector('#profileImage').click();
	}
	
	function displayImage(e){
		
		if(e.files[0]){
			var reader = new FileReader();
			reader.onload=function(e){
				document.querySelector('#profiledisplay').setAttribute('src',e.target.result);
			}
			reader.readAsDataURL(e.files[0]);
		}
	}