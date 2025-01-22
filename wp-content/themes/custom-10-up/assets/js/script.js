document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const isExpanded = menuToggle.getAttribute('aria-expanded') === 'true';
    const mainNav = document.getElementById('mainNav');
    const openIcon = document.getElementById('hamburger');
    const closeIcon = document.getElementById('close');

    menuToggle.addEventListener('click', () => {
        mainNav.classList.toggle('active');
        openIcon.classList.toggle('hidden');
        closeIcon.classList.toggle('hidden');
        menuToggle.setAttribute('aria-expanded', !isExpanded);
    });
});
