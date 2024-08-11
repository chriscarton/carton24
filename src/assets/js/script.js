function shiftEffect(element) {
	if (element) {
		let originalContent = element.textContent;

		function shuffleText(text) {
			let array = text.split('');
			for (let i = array.length - 1; i > 0; i--) {
				let j = Math.floor(Math.random() * (i + 1));
				[array[i], array[j]] = [array[j], array[i]];
			}
			return array.join('');
		}

		let interval = setInterval(() => {
			element.textContent = shuffleText(originalContent);
		}, 100); // Shuffle every 100ms

		// Stop shuffling after 1 second
		setTimeout(() => {
			clearInterval(interval);
			element.textContent = originalContent; // Restore original content
		}, 1000);
	}
}

function taperChrisCarton(){

	document.body.style.overflow = 'hidden';

	let titrePrincipal = document.querySelector("#titrePrincipal");

	if(titrePrincipal){
		let textContent = titrePrincipal.textContent.trim();

		let typewriter = new Typewriter(titrePrincipal, {
				delay: 150,
				cursor: "|"
		});

		typewriter.typeString(textContent)
		.callFunction(() => {
			titrePrincipal.parentElement.classList.add('to-min-height');
			titrePrincipal.querySelector('.Typewriter__cursor').remove();
			titrePrincipal.parentElement.addEventListener('animationend',function(){
				document.body.style.overflow = 'auto';
				observerSections();
			});
		})
		.start();

		titrePrincipal.classList.add('visible');
	}
}


function animerLesElements(entry){
	let elements = entry.target.querySelectorAll('[data-animation]');	
	if(elements){
		elements.forEach(function(element){
			let animationClass = element.getAttribute('data-animation');
			let animationDelay = element.getAttribute('data-delay');
			if (animationDelay) {
				setTimeout(() => {
					element.classList.add(animationClass);
					
					if(element.id === 'mesDispos'){
						let disponibilites = element.querySelector('b');
						shiftEffect(disponibilites);
					}


				}, parseInt(animationDelay, 10));
			} else {
				element.classList.add(animationClass);
			}
			
		});
	}
}

// S'il y en a ! 
function afficherLesReponses(message){
	if(message){
		let nextElement = message.nextElementSibling;
		if(nextElement){
			if(nextElement.classList.contains('reponses')){
				nextElement.classList.add('visible');

				let reponses = nextElement.querySelectorAll('.reponse');
				if(reponses){
					reponses.forEach(function(reponse){
						reponse.addEventListener('click',function(){
							reponse.classList.add('reponse-choisie');

							// Désactive les autres réponses
							reponses.forEach(function(otherReponse) {
								if (otherReponse !== reponse) {
									otherReponse.setAttribute('disabled', 'true');
								}
							});

							// Déclenche éventuellement une réaction...
							let dataReponse = reponse.getAttribute('data-reponse');
							let reactionElement = document.querySelector('[data-reaction="' + dataReponse + '"]');
							if (reactionElement) {
								reactionElement.classList.add('visible');
								// reactionElement.click();
							}
						});
					});
				}

			}
		}
	}
}

function taperLesMessages(entry){
	let messages = entry.target.querySelectorAll('.message');
	if(messages){
		messages.forEach(function(message){
			let textContent = message.textContent.trim();

			let typewriter = new Typewriter(message, {
					delay: 70,
					cursor: "|"
			});
		
			typewriter.typeString(textContent)
			.callFunction(() => {
				message.querySelector('.Typewriter__cursor').remove();
				afficherLesReponses(message);
			})
			.start();
		
		});
	}	

}

function observerSections(){

	/*
		On pourrait faire...
	*/

	let parts  = document.querySelectorAll('.part');

	// comme ça on ne serait plus sur strictement des sections...

	// let sections = document.querySelectorAll('section');
	// add interaction observer to sections
	if(parts){
		parts.forEach(part => {

			const options = {
				threshold: 0.5 // Trigger callback when 50% of the target is visible
			};

			const observer = new IntersectionObserver(entries => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						animerLesElements(entry);
						taperLesMessages(entry);
						observer.unobserve(entry.target); // Unobserve the element after the first intersection

					}
					
				});
			},options);

			observer.observe(part);
		});
	}

}

taperChrisCarton();


