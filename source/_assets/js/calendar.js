import { Calendar } from '@fullcalendar/core';
import lv from "@fullcalendar/core/locales/lv";
import interactionPlugin from "@fullcalendar/interaction";
import dayGridPlugin from '@fullcalendar/daygrid'
import googleCalendarPlugin from "@fullcalendar/google-calendar";

export default() => ({
    calendarOptions: {
        locales: [lv],
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
        googleCalendarApiKey: 'AIzaSyCF_RD6GOIDh70Eg68MBbTXubL1kEmrx5Q',
        plugins: [ interactionPlugin, dayGridPlugin, googleCalendarPlugin ],
        initialView: 'dayGridMonth',
        headerToolbar: {
            left:   'prev,next today',
            center: 'title',
            right:  'dayGridWeek,dayGridMonth'
        },
        aspectRatio: 1.5,
    },
    async init(){
        let calendar = new Calendar(this.$refs.calendar, this.calendarOptions)
        calendar.render();
    }
})