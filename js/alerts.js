$(document).ready(function() {
    $(".alert").find(".close").on("click", function(e) {
        // Find all elements with the "alert" class, get all descendant elements with the class "close", and bind a "click" event handler
        e.stopPropagation(); // Don't allow the click to bubble up the DOM
        $(this).closest(".alert").slideUp(400); // Hide this specific Alert
    });

});