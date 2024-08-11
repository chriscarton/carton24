let formContact = document.querySelector('#formContact');
console.log(formContact);
if(formContact){
	formContact.addEventListener('submit',function(e){
		e.preventDefault();

		// Check if the form is valid
		if (!formContact.checkValidity()) {
				// If the form is not valid, display an error message or handle it accordingly
				return;
		}

		 // Collect form data
		 let formData = new FormData(formContact);

		 let action = formContact.getAttribute('action');
			// Send data with fetch
			fetch(action, {
				method: 'POST',
				body: formData
			})
			.then(response => {
				if (!response.ok) {
						throw new Error('Network response was not ok ' + response.statusText);
				}
				return response.json();
			})
			.then(data => {
				// Handle success (e.g., show a success message)
				if(data.status==="success"){
					let message_confirmation = data.message;

					if(message_confirmation){
						let titreContact = document.querySelector('#titreContact');
						titreContact.textContent = message_confirmation;
					}

					formContact.remove();
				}


			})
			.catch(error => {
				console.error('Error:', error);
				// Handle error (e.g., show an error message)
			});

	});
}