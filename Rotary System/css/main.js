document.addEventListener('DOMContentLoaded', function() {
    const heroText = document.querySelector('.hero-text');

    // Pause animation on hover
    heroText.addEventListener('mouseover', function() {
        heroText.style.animationPlayState = 'paused';
    });

    // Resume animation when not hovering
    heroText.addEventListener('mouseout', function() {
        heroText.style.animationPlayState = 'running';
    });
});