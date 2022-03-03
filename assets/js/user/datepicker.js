$(document).ready(function() {
    $("#firstdatepicker").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate:+1,
        maxDate:+31,

        onSelect: function(dateText, inst, extensionRange) {
          // extensionRange - добавлен возвращаемый аргумент, содержит в себе объект расширения
        },
        onSelect: function() {
            $(this).data('datepicker').inline = true;                               
        },
        onClose: function() {
            $(this).data('datepicker').inline = false;
        },

        // multiSelect: 30, 
        // showTrigger: '#calImg'

        multipleDates: 3
    });
});
