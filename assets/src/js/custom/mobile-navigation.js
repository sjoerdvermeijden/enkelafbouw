window.addEventListener('DOMContentLoaded', () => {
    const body = document.body;
	const navigationButton = document.querySelector('.js-mobile-button');

	const closeButton = document.querySelector('.js-close');

	if (navigationButton) {
		navigationButton.addEventListener('click', (e)=> {
			e.preventDefault();
			body.classList.toggle('is-open');
		});
	}

	closeButton.addEventListener('click', () => {
		document.body.classList.remove('is-open');
	})
});
