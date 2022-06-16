<script>

//function to open or close a menu
//@id: id of the meny to open or close
function toggleMenu(id){

	var menu = document.getElementById(id);
	menu.classList.toggle('hidden');
	
	//transition to be added later?
	// if(menu.classList.contains('hidden')){
	// 	menu.classList.toggle('openAnimation');

	// }else{		
	// 	menu.classList.toggle('closeAnimation');
	
	// }

}

//function to confirm an action and submit the form
//
//@action - action to take (delete, edit, add)
//
function confirmAction(action){

	var result = confirm("Confirm " + action + "?");

	if(result){
		document.getElementById('actionForm').submit();
	}

}

</script>