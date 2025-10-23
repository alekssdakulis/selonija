// document.addEventListener('scroll', function() {
//     const nav = document.getElementById('main-nav');
//     if (!nav) return;
//     if (window.scrollY === 0) {
//         nav.classList.add('opacity-50');
//         nav.classList.remove('opacity-90');
//     } else {
//         nav.classList.add('opacity-90');
//         nav.classList.remove('opacity-50');
//     }
// });


document.addEventListener('DOMContentLoaded', function() {
    const toggle = document.getElementById('show-more');
    const moreText = document.getElementById('more-text');
    let expanded = false;

    if (toggle && moreText) {
        toggle.addEventListener('click', function() {
            expanded = !expanded;
            if (expanded) {
                moreText.classList.remove('hidden');
                toggle.textContent = 'Lasīt mazāk';
            } else {
                moreText.classList.add('hidden');
                toggle.textContent = 'Lasīt vairāk';
            }
        });
    }
});