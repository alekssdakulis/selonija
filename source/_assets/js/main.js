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
import './icons';

import { Calendar } from '@fullcalendar/core';
import lvLocale from '@fullcalendar/core/locales/lv';
import dayGridPlugin from '@fullcalendar/daygrid';

// Main data source
import googleCalendarPlugin  from '@fullcalendar/google-calendar';

document.addEventListener('DOMContentLoaded', function() {
  var calendarEl = document.getElementById('full-calendar');

  var calendar = new Calendar(calendarEl, {
    locale: lvLocale,
    plugins: [ dayGridPlugin, googleCalendarPlugin ],
    defaultView: 'dayGridMonth',
    weekNumbers: true,
    header: {
        left:   'prev,next today',
        center: 'title',
        right:  'dayGridWeek,dayGridMonth'
    },
    googleCalendarApiKey: 'AIzaSyCF_RD6GOIDh70Eg68MBbTXubL1kEmrx5Q',
    eventSources: [
        {
            googleCalendarId: 'lkmqpoa39ocrgap4u767r5gj7o@group.calendar.google.com',
            className: 'dezuras',
            id: 'dezuras',
            name: "S! Krustdēlu dežūras"
        },
        {
            googleCalendarId: 'h2lgqj5fggdhtl0ii1m5d71doo@group.calendar.google.com',
            className: 'pasakumi',
            id: 'pasakumi',
            name: "S! Pasākumi"
        },
        {
            googleCalendarId: 'lv.latvian#holiday@group.v.calendar.google.com',
            className: 'brivdienas',
            id: 'brivdienas',
            color: '#e67c73',
            textColor: 'white'  
        },
    ],
    eventRender: function(info) {
        if (info.event.allDay) {
           info.el.classList.add("fce-all-day-event");
        } else {
            info.el.classList.add("fce-timed-event");
        }

        $(info.el).tooltip({
            title: info.event.title,
            placement: 'top',
            container: '#full-calendar',
            trigger: 'hover'
        });
     },
     eventDestroy: function(info){
        $(info.el).popover('destroy');
     },
     eventClick: function(info){
        info.jsEvent.preventDefault(); // don't let the browser navigate
     }
  });

  calendar.render();

    // $('body').click(function(event){
        // if( !$(event.target).parents('.popover').length ){
            // $('.fc-event').popover('toggle');
            // $('.fc-event').not(event.target).popover('hide');
        // }
        //   console.log(this);
    // });
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