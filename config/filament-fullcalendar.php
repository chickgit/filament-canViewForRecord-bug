<?php

/**
 * Consider this file the root configuration object for FullCalendar.
 * Any configuration added here, will be added to the calendar.
 *
 * @see https://fullcalendar.io/docs#toc
 */

return [
    'timeZone' => config('app.timezone'),

    'locale' => config('app.locale'),

    'plugins' => [
        'dayGrid' => true,
        'timeGrid' => true,
        'interaction' => true,
        'list' => true,
        'rrule' => true,
        'resourceTimeline' => false, //premium plugin
    ],

    'headerToolbar' => [
        'left' => 'dayGridMonth,dayGridWeek,dayGridDay',
        'center' => 'title',
        'right' => 'prev,next today',
    ],

    'navLinks' => true,

    'editable' => true,

    'selectable' => false,

    'dayMaxEvents' => true,

    'initialView' => 'dayGridMonth'
];
