"use strict";

$(document).ready(function(){
    $('input.timepicker').timepicker({
        timeFormat: 'h:mm p',
        interval: 30,
        minTime: '7',
        maxTime: '7:00pm',
        defaultTime: '',
        startTime: '00:00',
        dynamic: false,
        dropdown: true,
        scrollbar: true
    });
});