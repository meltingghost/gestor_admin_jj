document.addEventListener('DOMContentLoaded', function() {
    let calendarEl = document.getElementById('calendarAsistencias');
    var hoy = new Date();

    let calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        events: '../procesos/fullCalendar/consultarAsistencias.php',
        initialDate: hoy,
        weekends: false,
        locale: 'es'
    });

    calendar.render();
});



function cargarCalendarAsistencias() {

    let calendarEl = document.getElementById('calendarAsistencias');
    var hoy = new Date();

    let calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        events: '../procesos/fullCalendar/consultarAsistencias.php',
        initialDate: hoy,
        weekends: false,
        locale: 'es'
    });

    calendar.render();

}



function cargarCalendarInasistencias() {

    let calendarEl = document.getElementById('calendarInasistencias');
    var hoy = new Date();

    let calendar = new FullCalendar.Calendar(calendarEl, {
        timeZone: 'UTC',
        initialView: 'dayGridMonth',
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        editable: true,
        events: '../procesos/fullCalendar/consultarInasistencias.php',
        initialDate: hoy,
        weekends: false,
        locale: 'es'
    });

    calendar.render();

}