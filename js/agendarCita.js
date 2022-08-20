
"use strict";

var calendar = "";

  $(function () {
      $('#datepicker').datepicker({ 
          beforeShowDay: $.datepicker.noWeekends, 

          onSelect : function (date, datepicker){
              calendar = date;
              console.log(calendar);
          }
      });
  });
