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

	let titrePrincipal = document.querySelector("#titrePrincipal");
	let hauteurOriginale = titrePrincipal.getBoundingClientRect().height;
	titrePrincipal.style.height = '100vh';
	let textContent = titrePrincipal.textContent.trim();

	let typewriter = new Typewriter(titrePrincipal, {
			delay: 150,
			cursor: "|"
	});

	typewriter.typeString(textContent)
	.callFunction(() => {
		titrePrincipal.querySelector('.Typewriter__cursor').remove();
		titrePrincipal.style.height = hauteurOriginale+'px';
		titrePrincipal.addEventListener('transitionend',function(){
			
			observerSections();

		});
	})
	.start();

	titrePrincipal.classList.add('visible');

}
/*
function taperAutresMessages(){
	let messages = document.querySelectorAll('.message');
	if(messages){
		messages.forEach(function(message){
			console.log(message.textContent);
		});
	}
}
*/

function animerLesElements(entry){
	let elements = entry.target.querySelectorAll('[data-animation]');	
	if(elements){
		elements.forEach(function(element){
			let animationClass = element.getAttribute('data-animation');
			let animationDelay = element.getAttribute('data-delay');
			if (animationDelay) {
				setTimeout(() => {
					element.classList.add(animationClass);

					if(element.classList.contains('disponibilites')){
						let disponibilites = document.querySelector('.disponibilites b');
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
			const observer = new IntersectionObserver(entries => {
				entries.forEach(entry => {
					if (entry.isIntersecting) {
						animerLesElements(entry);
						taperLesMessages(entry);
						observer.unobserve(entry.target); // Unobserve the element after the first intersection

					}
					
				});
			});

			observer.observe(part);
		});
	}

}

taperChrisCarton();


