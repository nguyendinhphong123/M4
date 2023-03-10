$(function () {
    $('[data-toggle="tooltip"]').tooltip(),
        $(".form-validate").each(function () {
            $(this).validate({
                errorElement: "div",
                errorClass: "is-invalid",
                validClass: "is-valid",
                ignore: ":hidden:not(.summernote),.note-editable.card-block",
                errorPlacement: function (e, a) {
                    e.addClass("invalid-feedback"),
                        "checkbox" === a.prop("type")
                            ? e.insertAfter(a.siblings("label"))
                            : e.insertAfter(a);
                },
            });
        });
    var e = $("input.input-material");
    e
        .filter(function () {
            return "" !== $(this).val();
        })
        .siblings(".label-material")
        .addClass("active"),
        e.on("focus", function () {
            $(this).siblings(".label-material").addClass("active");
        }),
        e.on("blur", function () {
            $(this).siblings(".label-material").removeClass("active"),
                "" !== $(this).val()
                    ? $(this).siblings(".label-material").addClass("active")
                    : $(this).siblings(".label-material").removeClass("active");
        });
    var a = $(".page-content");
    function t() {
        var e = $(".footer__block").outerHeight();
        a.css("padding-bottom", e + "px");
    }
    if (
        ($(document).on("sidebarChanged", function () {
            t();
        }),
        $(window).on("resize", function () {
            t();
        }),
        $(".dropdown").on("show.bs.dropdown", function () {
            $(this)
                .find(".dropdown-menu")
                .first()
                .stop(!0, !0)
                .fadeIn(100)
                .addClass("active");
        }),
        $(".dropdown").on("hide.bs.dropdown", function () {
            $(this)
                .find(".dropdown-menu")
                .first()
                .stop(!0, !0)
                .fadeOut(100)
                .removeClass("active");
        }),
        $(".search-open").on("click", function (e) {
            e.preventDefault(), $(".search-panel").fadeIn(100);
        }),
        $(".search-panel .close-btn").on("click", function () {
            $(".search-panel").fadeOut(100);
        }),
        $(".sidebar-toggle").on("click", function () {
            $(this).toggleClass("active"),
                $("#sidebar").toggleClass("shrinked"),
                $(".page-content").toggleClass("active"),
                $(document).trigger("sidebarChanged"),
                $(".sidebar-toggle").hasClass("active")
                    ? ($(".navbar-brand .brand-sm").addClass("visible"),
                      $(".navbar-brand .brand-big").removeClass("visible"),
                      $(this).find("i").attr("class", "fa fa-long-arrow-right"))
                    : ($(".navbar-brand .brand-sm").removeClass("visible"),
                      $(".navbar-brand .brand-big").addClass("visible"),
                      $(this).find("i").attr("class", "fa fa-long-arrow-left"));
        }),
        0 < $("#style-switch").length)
    ) {
        var s = $("link#theme-stylesheet");
        $("<link id='new-stylesheet' rel='stylesheet'>").insertAfter(s);
        var i = $("link#new-stylesheet");
        $.cookie("theme_csspath") && i.attr("href", $.cookie("theme_csspath")),
            $("#colour").change(function () {
                if ("" !== $(this).val()) {
                    var e = "css/style." + $(this).val() + ".css";
                    i.attr("href", e),
                        $.cookie("theme_csspath", e, {
                            expires: 365,
                            path: document.URL.substr(
                                0,
                                document.URL.lastIndexOf("/")
                            ),
                        });
                }
                return !1;
            });
    }
});
