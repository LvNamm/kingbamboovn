$(document).ready(function () {
    $("#logo-doc"). show();
    $("#logo-ngang").hide();
    console.log("abd")
    $(window).scroll(function () {
        $("#logo-doc").hide();
        $("#logo-ngang").show();
        if ($("html").scrollTop() == 0) {
            $("#logo-doc"). show();
            $("#logo-ngang").hide();
        }
    });
});
