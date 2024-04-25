//bookings and payment

// Using the $ alias to select elements with jQuery
$(function(){
    $("#datepicker1, #datepicker2").datepicker();
    $("#format").on("change", function(){
        $("#datepicker1, #datepicker2").datepicker("option", "dateFormat", $(this).val());
    });
});


//login js