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

function titrePrincipal(){

	//document.body.style.overflow = 'hidden';
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
				/*
				let decoupe = document.querySelector('.decoupe-1');
				if(decoupe){
					let ciseaux = decoupe.querySelector('svg');
					ciseaux.style.animationPlayState = 'running';
					decoupe.classList.add('visible');
				}
				*/

				intro();
			});
		})
		.start();

	}
}

/*
function intro(){
	let intro = document.querySelector('#Intro');
	if(intro){
		let fleche1 = intro.querySelector('#Presentation #Fleche1');
		let texte = intro.querySelector('#Presentation .texte');
		let btnContact = intro.querySelector('#Presentation .btn-contact');
		let portrait = intro.querySelector('#Intro .portrait');
		let menuPrincipal = intro.querySelector('#menuPrincipal');

		fleche1.classList.add('visible');

		fleche1.addEventListener('transitionend',function(){
						
			texte.classList.add('visible');

			let textContent = texte.textContent.trim();

			let typewriter = new Typewriter(texte, {
					delay: 20,
					cursor: "|"
			});

			typewriter.typeString(textContent)
			.callFunction(() => {
				btnContact.classList.add('visible');
				btnContact.addEventListener('animationend',function(){
					if(portrait){
						portrait.classList.add('fadeIn');
						portrait.addEventListener('animationend',function(){
							if(menuPrincipal){
								menuPrincipal.classList.add('visible');
								// console.log(menuPrincipal);
								menuPrincipal.addEventListener('transitionend',function(){
									alert('menu transition end');
								})
							}
						});
					}
				});

			})
			.start();

		})


	}
}
	*/

function intro(){

	let intro = document.querySelector('#Intro');


	let fleche1 = intro.querySelector('#Presentation #Fleche1');
	let texte = intro.querySelector('#Presentation .texte');
	let btnContact = intro.querySelector('#Presentation .btn-contact');
	let portrait = intro.querySelector('#Intro .portrait');
	let menuPrincipal = intro.querySelector('#menuPrincipal');

	fleche1.classList.add('visible');
	texte.classList.add('visible');
	btnContact.classList.add('visible');
	portrait.classList.add('fadeIn');
	menuPrincipal.classList.add('visible');

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
					//Si on est sur mesDispos on active le shift effect
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
/*
function observerSections(){

	let parts  = document.querySelectorAll('.part');

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
	*/

function observerDataAnimations() {
	// Select elements to observe
	// const elementsToObserve = document.querySelectorAll('.animate-on-scroll');
	const elementsToObserve = document.querySelectorAll('[data-animation]');

	// Create the IntersectionObserver
	const observer = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
					if (entry.isIntersecting) {
							// Add animation class or trigger animation
							const animationClass = entry.target.getAttribute('data-animation');
							const animationDelay = entry.target.getAttribute('data-delay');

							if(animationDelay){
								setTimeout(function(){
									entry.target.classList.add(animationClass);
								},parseInt(animationDelay))
							}else{
								entry.target.classList.add(animationClass);
							}
							// Add the animation class to the element
							observer.unobserve(entry.target);
					}
			});
	}, {
			threshold: 0.5 // Adjust the threshold as needed
	});

	// Observe each selected element
	elementsToObserve.forEach(element => {
			observer.observe(element);
	});
}

function observerTyped() {
	// Select elements with the .typed class
	const elementsToObserve = document.querySelectorAll('.typed');



	// Create the IntersectionObserver
	const observer = new IntersectionObserver((entries, observer) => {
			entries.forEach(entry => {
					if (entry.isIntersecting) {
							// Handle the intersection (you can fill in this part)
							// console.log(`Element ${entry.target} is intersecting`);
							// Optionally, unobserve the element if you only want the action to happen once

							let textContent = entry.target.textContent.trim();

							entry.target.textContent = '';


							let typedSpeed = 70;

							if(entry.target.getAttribute('data-typed-speed')){
								typedSpeed = parseInt(entry.target.getAttribute('data-typed-speed'));
							}

							let typewriter = new Typewriter(entry.target, {
									delay: typedSpeed,
									cursor: "|"
							});
						
							typewriter.typeString(textContent)
							.callFunction(() => {
								entry.target.querySelector('.Typewriter__cursor').remove();
								afficherLesReponses(entry.target);
							})
							.start();

							observer.unobserve(entry.target);
					}
			});
	}, {
			threshold: 0.5 // Adjust the threshold as needed
	});

	// Observe each selected element
	elementsToObserve.forEach(element => {
			observer.observe(element);
	});
}


titrePrincipal();


//observerDataAnimations();
//observerTyped();

