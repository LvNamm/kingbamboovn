$(document).ready(function() {
    $("#logo-doc").show();
    $("#logo-ngang").hide();
    console.log("abd")
    $(window).scroll(function() {
        $("#logo-doc").hide();
        $("#logo-ngang").show();
        if ($("html").scrollTop() == 0) {
            $("#logo-doc").show();
            $("#logo-ngang").hide();
        }
    });

    $(".product-next").click(function() {
        $(".div-product-previous").show();
        console.log("Nam");
        let scrolled = $(".div-show-product").scroll() - 50;

        $(".div-show-product").animate({
            scrollLeft: "+=300"
        }, "slow");

    })


    $(".product-previous").click(function() {
        console.log("Nam");
        let scrolled = $(".div-show-product").scroll() - 50;

        $(".div-show-product").animate({
            scrollLeft: "-=300"
        }, "slow");
        setTimeout(function() {
            console.log($(".div-show-product").scrollLeft())
            if ($(".div-show-product").scrollLeft() == 0) {
                $(".div-product-previous").hide();
            }
        }, 600)
    })
});