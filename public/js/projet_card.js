const observer = new IntersectionObserver(entries => { // detecte element visible
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        } else {
            entry.target.classList.remove('visible'); 
        }
    });
}, { threshold: 0.4}); // declenche à 40%

document.querySelectorAll('.card').forEach(card => {
    observer.observe(card);
});