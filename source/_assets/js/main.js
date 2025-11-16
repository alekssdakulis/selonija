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


// document.addEventListener('DOMContentLoaded', function() {
//     const toggle = document.getElementById('show-more');
//     const moreText = document.getElementById('more-text');
//     let expanded = false;

//     if (toggle && moreText) {
//         toggle.addEventListener('click', function() {
//             expanded = !expanded;
//             if (expanded) {
//                 moreText.classList.remove('hidden');
//                 toggle.textContent = 'Lasīt mazāk';
//             } else {
//                 moreText.classList.add('hidden');
//                 toggle.textContent = 'Lasīt vairāk';
//             }
//         });
//     }
// });
import Alpine from 'alpinejs'
import './icons';
import calendar from './calendar';

document.addEventListener('alpine:init', () => {
    Alpine.data('fullCalendar', calendar)
})

window.Alpine = Alpine
Alpine.start();

document.querySelectorAll('[data-mailto]').forEach(el => {
    const mail = atob(atob(el.dataset.mailto));
    el.href = `mailto:${mail}`;
    el.textContent = mail;
});

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Google Map
    const mapElement = document.getElementById('map');
    if (mapElement) {
        const map = new google.maps.Map(mapElement, {
            center: { lat: 56.9496, lng: 24.1052 }, // Coordinates for Stabu iela 17, Riga
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        // Optional: Add a marker
        const marker = new google.maps.Marker({
            position: { lat: 56.9496, lng: 24.1052 },
            map: map,
            title: 'Selonija'
        });
    }
});