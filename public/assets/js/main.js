// JavaScript for common functionality
document.addEventListener('DOMContentLoaded', function() {
    // Add scrolled class to navbar on scroll and hide scroll button
    window.addEventListener('scroll', function () {
        const navbar = document.querySelector('.navbar');
        const scrollButton = document.querySelector('.scroll-explore');

        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        // Hide the scroll button when scrolled past 200px
        if (scrollButton) {
            if (window.scrollY > 200) {
                scrollButton.style.visibility = 'hidden';
            } else {
                scrollButton.style.visibility = 'visible';
            }
        }
    });

    // Scroll to explore functionality
    const scrollExplore = document.querySelector('.scroll-explore');
    if (scrollExplore) {
        scrollExplore.addEventListener('click', function () {
            const featuresSection = document.querySelector('#features');
            if (featuresSection) {
                featuresSection.scrollIntoView({ behavior: 'smooth' });
            }
        });
    }
});
