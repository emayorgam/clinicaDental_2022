
"use strict";

var calendar = "";

  $(function () {
      $('#datepicker').datepicker({ 
          onSelect : function (date, datepicker){
              calendar = date;
             //console.log(calendar);
          }
      });
  });

  
