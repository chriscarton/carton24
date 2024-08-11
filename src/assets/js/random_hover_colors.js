document.querySelectorAll('a').forEach(link => {
	link.addEventListener('mouseover', () => {
			const randomColor = `#${Math.floor(Math.random() * 16777215).toString(16)}`;
			link.style.color = randomColor;
	});
});