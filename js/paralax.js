document.addEventListener('mousemove', function(e) {
    const parallax = document.querySelector('.parallax-background img');
    const x = (window.innerWidth - e.pageX * 2) / 100;
    const y = (window.innerHeight - e.pageY * 2) / 100;
    parallax.style.transform = `translateY(-50%) translate(${x}px, ${y}px)`;
});
