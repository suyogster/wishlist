
    //NavItem Active Link
    $(".nav .nav-link").on("click", function () {

        $(".nav").find(".active").removeClass("active");
        $(this).addClass("active");

    });

    $(document).ready(function() {
        tinymce.init({
            selector: '#'
        });
    });

