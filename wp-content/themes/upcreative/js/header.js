function move(e) {
    var t = "#" + e;
    $("html, body").animate({
        scrollTop: $(t).offset().top - 65
    }, 700)
}

function moveclick(e) {
    $("#navicon").click()
}

function dismissCB() {
    $("#notifier").fadeOut(400)
}

function move130(e) {
    var t = "#d_" + e;
    $("html, body").animate({
        scrollTop: $(t).offset().top - 130
    }, 500)
}

function filter(e, t) {
    t = $.trim(t), t = t.replace(/ /gi, "|"), $(e).each(function() {
        $(this).text().search(new RegExp(t, "i")) < 0 ? $(this).hide().removeClass("visible") : $(this).show().addClass("visible")
    })
}

function stopD(e) {
    e.preventDefault()
}

function stopP(e) {
    e.stopPropagation()
}
document.createElement("item"), document.createElement("tlink");
var hbshow, loadfade = !1,
    touch = !1,
    pageHeight, searchgo = !1;
$(document).ready(function() {
    function e() {
        $(".webgap-animate").each(function() {
            var e = $(this),
                t = $(window).height(),
                o = $(window).scrollTop(),
                s = $(e).data("animate"),
                a = $(e).data("delay"),
                i = $(e).data("repeat");
            void 0 !== s && null !== s || (s = "fadeInLeft"), void 0 !== a && null !== a || (a = 0), o > $(e).offset().top - t ? $(e).hasClass("animated") || $(e).hasClass("webgap-animate-once") || setTimeout(function() {
                $(e).css({
                    visibility: "visible"
                }).addClass("animated " + s), 0 == i && $(e).addClass("webgap-animate-once")
            }, a) : $(e).hasClass("webgap-animate-once") || $(e).removeClass("animated " + s).css({
                visibility: "hidden"
            })
        })
    }

    function t() {
        var e = $(this).scrollTop();
        Math.abs(u - e) <= v || (e > u && e > f ? $("#topbar").removeClass("nav-down").addClass("nav-up") : e + $(window).height() < $(document).height() && $("#topbar").removeClass("nav-up").addClass("nav-down"), u = e)
    }
    $(document).on("click", ".load-show", function(e) {
        e.ctrlKey || $(".loader-container").show()
    }), $(document).on("touchstart", function() {
        touch = !0;
        for (var e in document.styleSheets) {
            var t = document.styleSheets[e];
            if (t.rules)
                for (var o = t.rules.length - 1; o >= 0; o--) t.rules[o].selectorText && t.rules[o].selectorText.match(":hover") && t.deleteRule(o)
        }
        $("#exp-hero, #dest-hero, .dest-sub-hero").removeClass("exp-hero-fixed")
    });
    var o, s, a, i = $(window).width(),
        n = $(window).height(),
        r = i,
        l = n,
        m = 0,
        c = 0;
    $(window).resize(function() {
        r = $(window).width(), l = $(window).height(), (s = l / 3) < 200 && (s = 200), r < 850 ? (a = "port", 0 == m && (c = 0, $(".exp-col").css({
            width: "100%",
            height: s + "px"
        }), $(".exp-col").removeClass("exp-fixed"), $(".exp-col").find(".exp-logo").removeClass("wow fadeInUp"), $(".exp-col").find(".exp-logo").fadeIn(250), $(".exp-nc").removeClass("cover-bottom-left").addClass("cover-bottom"), $(".exp-mv").removeClass("cover-bottom-right").addClass("cover-top"), $(".exp-col-border, .exp-col-border-r").removeClass("exp-col-border exp-col-border-r").addClass("exp-col-border-b"), $(".exp-content").css({
            visibility: "hidden",
            opacity: "0",
            "margin-top": "80px"
        }), $(".exp-copy").addClass("tshadow-w")), m++) : (a = "land", 0 == c && (m = 0, $(".exp-col").css({
            width: "33.33%",
            height: l + "px"
        }), $(".exp-col").addClass("exp-fixed"), $(".exp-col").find(".exp-logo").fadeIn(250), $(".exp-nc").removeClass("cover-bottom").addClass("cover-bottom-left"), $(".exp-mv").removeClass("cover-top").addClass("cover-bottom-right"), $(".exp-col-border, .exp-col-border-b").removeClass("exp-col-border exp-col-border-b").addClass("exp-col-border-r"), $(".exp-content").css({
            visibility: "hidden",
            opacity: "0",
            "margin-top": "80px"
        }), $(".exp-copy").removeClass("tshadow-w")), c++)
    }), $(window).resize(), $(".exp-col").on("click", function(e) {
        var t = $(this),
            i = $(this).find(".exp-content").outerHeight() + 30,
            n = l - 160;
        i < n && (i = n), e.ctrlKey || (o != $(this).attr("rel") ? ($(this).find(".exp-mask").fadeOut(70), "land" == a ? ($(this).stop(!0, !0).animate({
            width: "84%"
        }, 300), $(".exp-col").not(this).stop(!0, !0).animate({
            width: "8%"
        }, 300)) : ($(this).stop(!0, !0).animate({
            height: i + "px"
        }, 300), $(".exp-col").not(this).stop(!0, !0).animate({
            height: "80px"
        }, 300)), $(".exp-col").find(".exp-logo").fadeOut(70), $(".exp-content").css({
            visibility: "hidden",
            opacity: "0",
            "margin-top": "80px"
        }), setTimeout(function() {
            $(t).find(".exp-content").css({
                visibility: "visible"
            }), $(t).find(".exp-content").animate({
                "margin-top": "0"
            }, {
                duration: 800,
                queue: !1
            }), $(t).find(".exp-content").animate({
                opacity: "1"
            }, {
                duration: 800,
                queue: !1
            })
        }, 200), o = $(this).attr("rel")) : ("land" == a ? $(".exp-col").stop(!0, !0).animate({
            width: "33.33%"
        }, 300) : $(".exp-col").stop(!0, !0).animate({
            height: s + 3 + "px"
        }, 300), $(".exp-content").css({
            visibility: "hidden",
            opacity: "0",
            "margin-top": "80px"
        }), $(".exp-col").find(".exp-logo").fadeIn(250), o = ""))
    }), $(".exp-col").mouseleave(function() {
        $(this).find(".exp-mask").fadeOut(70)
    }).mouseenter(function() {
        o != $(this).attr("rel") && 0 == touch && $(this).find(".exp-mask").stop(!0, !0).fadeIn(250)
    }), $(".camp-map-mimg").load(function() {
        var e = $(".camp-map-mimg").height() + "px";
        i < 900 && (e = "auto"), $(".camp-map-container").css({
            "min-height": e
        })
    }), $(".time-vision-cell").mouseleave(function() {
        $(this).find(".time-slider-copy").stop(!0, !0).show(), $(this).find(".time-vision-mask").stop(!0, !0).fadeOut(70)
    }).mouseenter(function() {
        $(this).find(".time-slider-copy").stop(!0, !0).hide(), $(this).find(".time-vision-mask").stop(!0, !0).fadeIn(400).css({
            display: "table"
        })
    });
    var d, p;
    $(window).resize(function() {
        d = $(window).width()
    }), $("#navicon").on("click", function() {
        var e = $(window).width();
        $("#menumask").is(":visible") ? (e > 603 && $(".activate-bar").show(), $("#menumask").fadeOut(), $(".exp-home").fadeIn(), $("#topbar").find(".top-search").removeClass("top-search-m"), $("#navicon").removeClass("open"), $("html").removeClass("no-overflow"), setTimeout(function() {
            $(".menu-list").show(), $(".menu-search").hide()
        }, 400), $("#expbar").css({
            "z-index": "1003"
        })) : ($(".activate-bar").hide(), $("#menumask").fadeIn(), $(".exp-home").hide(), $("#topbar").find(".top-search").addClass("top-search-m"), $("#navicon").addClass("open"), $("html").addClass("no-overflow"), $("#expbar").css({
            "z-index": "1001"
        }))
    }), $(".top-search, .top-search-w").on("click", function() {
        $(window).width(), $("#menumask").is(":visible") ? ($(".menu-list").fadeOut(200), setTimeout(function() {
            $(".menu-search").fadeIn(400).css({
                display: "table-cell"
            }), $(".menu-search-input").focus()
        }, 350)) : ($(".menu-list").hide(), $(".menu-search").show().css({
            display: "table-cell"
        }), setTimeout(function() {
            $(".menu-search-input").focus()
        }, 300), $(".activate-bar").hide(), $("#menumask").fadeIn(), $(".exp-home").hide(), $("#topbar").find(".top-search").addClass("top-search-m"), $("#navicon").addClass("open"), $("html").addClass("no-overflow"))
    }), $("#rightbar").css({
        "z-index": "-1"
    }), $(".barcover").remove(), $(".lheader").css({
        "margin-left": "0"
    }), $("#mainbar, #topbar").css({
        left: "0",
        "padding-right": "0"
    }), $("#mainbar").css({
        left: "0",
        "padding-right": "0",
        "min-height": n + "px"
    }), $(".top-menu li span").on("click", function() {
        var e = "#" + $(this).attr("rel");
        $("html, body").animate({
            scrollTop: $(e).offset().top - 65
        }, 700)
    }), $(".topsub-menu li span").on("click", function() {
        var e = "#" + $(this).attr("rel");
        $("html, body").animate({
            scrollTop: $(e).offset().top - 105
        }, 700)
    }), setTimeout(function() {
        var e = $(".dest-map-ol").outerHeight() + 20;
        e > 800 && (e = 800), $("#dest-hero").height() < e && $("#dest-hero").height(e)
    }, 300), $(window).resize(function() {
        var e = $(window).width(),
            t = $(window).height();
        e > 603 ? $(".activate-bar").show() : ($(".activate-bar").hide(), $("#exp-hero, #dest-hero, .dest-sub-hero").removeClass("exp-hero-fixed"), $(".pop-map").removeClass("wow fadeInRight")), $(".hero").height(t), $(".hero-img").height(t + 30), $(".hero-img").width(e + 30), $(".hero-img").css({
            top: "-15px",
            left: "-15px"
        }), $("#exp-hero").height(t - 200);
        var o = t - 90,
            s = o / 3,
            a = $(".camp-wrapper").outerHeight() + 120;
        $("#dest-hero").height(t - 100);
        var i = $(".dest-map-ol").outerHeight() + 20;
        i > 800 && (i = 800), $("#dest-hero").height() < i && $("#dest-hero").height(i), $(".dest-sub-hero").height(t - 200);
        var n = $(".dest-sub-content").outerHeight() + 50;
        if ($(".dest-sub-hero").height() < n && $(".dest-sub-hero").height(n), o < a && (o = a), s < 280 && (s = 280), $(".camp-hero").height(o), $(".camp-content-scroll").height(s), e > 800) {
            clearTimeout(void 0), $("#cslide").removeClass("cactive"), $("#rightbar").css({
                "z-index": "-1"
            }), $(".barcover").fadeOut().remove(), $("#mainbar, #topbar").stop(!0, !0).animate({
                left: "0"
            }, 200), p = setTimeout(function() {
                $("#rightbar").css({
                    visibility: "hidden"
                })
            }, 200);
            var r = $(document).scrollTop();
            setTimeout(function() {
                r > 450 && $("#topscroll").fadeIn()
            }, 200)
        }
        $(".rightmenu").css({
            height: t + "px"
        }), $("#mainbar").css({
            "min-height": t + "px"
        });
        var l = $("#move-top").outerHeight();
        $("#move-top").css({
            top: "-" + l + "px"
        }), $("#activate-top").mouseenter(function() {
            $(this).css("display", "none"), $("#menumask").is(":visible") || (clearTimeout(p), $(this).addClass("activate-hide"), $(".hero-img").stop(!0, !0).animate({
                top: "0"
            }, 200), $("#move-top").show(), $("#move-top").stop(!0, !0).animate({
                top: "0"
            }, 200), $("#move-bottom").stop(!0, !0).animate({
                bottom: "-" + m + "px"
            }, 200), $("#move-left").stop(!0, !0).animate({
                left: "-" + c + "px"
            }, 200), $("#move-right").stop(!0, !0).animate({
                right: "-" + d + "px"
            }, 200))
        }), $("#move-top").mouseleave(function() {
            $("#activate-top").css("display", "block"), $(".hero-img").stop(!0, !0).animate({
                top: "-15px"
            }, 200), $("#move-top").stop(!0, !0).animate({
                top: "-" + l + "px"
            }, 200), $(".activate-bar").removeClass("activate-hide"), p = setTimeout(function() {
                $("#move-top").hide()
            }, 200)
        });
        var m = $("#move-bottom").outerHeight();
        $("#move-bottom").css({
            bottom: "-" + m + "px"
        }), $("#activate-bottom").mouseenter(function() {
            $(this).css("display", "none"), $("#menumask").is(":visible") || (clearTimeout(p), $(this).addClass("activate-hide"), $(".hero-img").stop(!0, !0).animate({
                top: "-30px"
            }, 200), $("#move-bottom").show(), $("#move-bottom").stop(!0, !0).animate({
                bottom: "0"
            }, 200), $("#move-top").stop(!0, !0).animate({
                top: "-" + l + "px"
            }, 200), $("#move-left").stop(!0, !0).animate({
                left: "-" + c + "px"
            }, 200), $("#move-right").stop(!0, !0).animate({
                right: "-" + d + "px"
            }, 200))
        }), $("#move-bottom").mouseleave(function() {
            $("#activate-bottom").css("display", "block"), $(".hero-img").stop(!0, !0).animate({
                top: "-15px"
            }, 200), $("#move-bottom").stop(!0, !0).animate({
                bottom: "-" + m + "px"
            }, 200), $(".activate-bar").removeClass("activate-hide"), p = setTimeout(function() {
                $("#move-bottom").hide()
            }, 200)
        });
        var c = $("#move-left").outerWidth();
        $("#move-left").css({
            left: "-" + c + "px"
        }), $("#activate-left").mouseenter(function() {
            $(this).css("display", "none"), $("#menumask").is(":visible") || (clearTimeout(p), $(this).addClass("activate-hide"), $(".hero-img").stop(!0, !0).animate({
                left: "0"
            }, 200), $("#move-left").css({
                display: "table"
            }), $("#move-left").stop(!0, !0).animate({
                left: "0"
            }, 200), $("#move-top").stop(!0, !0).animate({
                top: "-" + l + "px"
            }, 200), $("#move-bottom").stop(!0, !0).animate({
                bottom: "-" + m + "px"
            }, 200), $("#move-right").stop(!0, !0).animate({
                right: "-" + d + "px"
            }, 200))
        }), $("#move-left").mouseleave(function() {
            $("#activate-left").css("display", "block"), $(".hero-img").stop(!0, !0).animate({
                left: "-15px"
            }, 200), $("#move-left").stop(!0, !0).animate({
                left: "-" + c + "px"
            }, 200), $(".activate-bar").removeClass("activate-hide"), p = setTimeout(function() {
                $("#move-left").hide()
            }, 200)
        });
        var d = $("#move-right").outerWidth();
        $("#move-right").css({
            right: "-" + d + "px"
        }), $("#activate-right").mouseenter(function() {
            $(this).css("display", "none"), $("#menumask").is(":visible") || (clearTimeout(p), $(this).addClass("activate-hide"), $(".hero-img").stop(!0, !0).animate({
                left: "-30px"
            }, 200), $("#move-right").css({
                display: "table"
            }), $("#move-right").stop(!0, !0).animate({
                right: "0"
            }, 200), $("#move-top").stop(!0, !0).animate({
                top: "-" + l + "px"
            }, 200), $("#move-bottom").stop(!0, !0).animate({
                bottom: "-" + m + "px"
            }, 200), $("#move-left").stop(!0, !0).animate({
                left: "-" + c + "px"
            }, 200))
        }), $("#move-right").mouseleave(function() {
            $("#activate-right").css("display", "block"), $(".hero-img").stop(!0, !0).animate({
                left: "-15px"
            }, 200), $("#move-right").stop(!0, !0).animate({
                right: "-" + d + "px"
            }, 200), $(".activate-bar").removeClass("activate-hide"), p = setTimeout(function() {
                $("#move-right").hide()
            }, 200)
        });
        var h = $(".camp-map-mimg").height() + "px";
        e < 900 && (h = "auto"), $(".camp-map-container").css({
            "min-height": h
        });
        var u = $(".camp-map-overlay").outerHeight();
        u < 700 && (u = 700), $(".camp-map-overlay").closest(".camp-map-box").css({
            "min-height": u
        });
        var v = $(".travel-map-overlay").outerHeight();
        v < 700 && (v = 700), $(".travel-map-overlay").closest(".camp-map-box").css({
            "min-height": v
        });
        var f = $(".cs-map-overlay").outerHeight();
        f < 890 && (f = 890), $(".cs-map-overlay").closest(".camp-map-box").css({
            "min-height": f
        });
        var b = $(".mv-map-overlay").outerHeight();
        e > 1500 ? b = 800 : b < 650 && (b = 650), $(".mv-map-overlay").closest(".camp-map-box").css({
            "min-height": b
        }), $("#gallery-hero").width($("#swiper-box").width()), $("#gallery-hero").height($("#swiper-box").height()), setTimeout(function() {
            $("#gallery-hero").width($("#swiper-box").width()), $("#gallery-hero").height($("#swiper-box").height())
        }, 200)
    }), $(window).resize(), $(".cbar, .lmenu li span").mouseleave(function() {
        $(this).removeClass("cbar-border")
    }).mouseenter(function() {
        $(this).addClass("cbar-border")
    }), $(function() {
        $(".fpop").mouseleave(function() {
            $(".friday-pop").remove(), $(".friday-relative").remove()
        }).mouseenter(function() {
            var e = $(this).data("info");
            $(this).append('<div class="friday-relative"></div>'), $(".friday-relative").append('<div class="friday-pop"><img class="friday-arrow" src="./images/carrow_r.png">' + e + "</div>")
        })
    }), $(document).on("click touchstart", function(e) {
        $(e.target).is(".friday-pop") || $(e.target).is(".fpop") || ($(".friday-pop").remove(), $(".friday-relative").remove())
    }), $(".webgap-animate").each(function() {
        $(this).css({
            visibility: "hidden"
        })
    }), e(), $(window).scroll(function() {
        e()
    }), $(".about-team").mouseleave(function() {
        $(this).find(".about-team-block").stop(!0, !0).animate({
            bottom: "-10px"
        }, 80)
    }).mouseenter(function() {
        $(this).find(".about-team-block").stop(!0, !0).animate({
            bottom: "0"
        }, 300)
    }), $("#topscroll, .topscroll").click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 500), !1
    }), $(window).scroll(function() {
        $(window).width();
        var e, t = $(window).height() - 80;
        $(this).scrollTop() > t ? $("#topscroll").fadeIn("slow") : $("#topscroll").fadeOut(), $(this).scrollTop() > 8 ? ($("#topbar").addClass("topbar-scroll"), $(".top-menu").addClass("top-menu-scroll"), $(".menu-bar").addClass("menu-bar-scroll"), $(".topsub-logo-block").addClass("topsub-scroll")) : ($("#topbar").removeClass("topbar-scroll"), $(".top-menu").removeClass("top-menu-scroll"), $(".menu-bar").removeClass("menu-bar-scroll"), $(".topsub-logo-block").removeClass("topsub-scroll")), "" == ptype && $(".section").each(function() {
            var t = $(this).offset().top - $(window).scrollTop(),
                o = $(this).attr("id"),
                s = $(this).outerHeight() + t - 65;
            t <= 66 && s > 0 && $(".top-menu li span").each(function() {
                var t = $(this).attr("rel");
                t == o ? (e = o, $(this).addClass("tactive"), $('.menu-list .menu-sub-list li a[rel="' + t + '"]').addClass("menu-sub-active")) : ($(this).removeClass("tactive"), $('.menu-list .menu-sub-list li a[rel="' + t + '"]').removeClass("menu-sub-active"))
            })
        }), "experience" == ptype && ($(this).scrollTop() < t ? $(".top-menu li span").removeClass("tactive") : $(".section").each(function() {
            var t = $(this).offset().top - $(window).scrollTop(),
                o = $(this).attr("id"),
                s = $(this).outerHeight() + t - 65;
            t <= 66 && s > 0 && $(".top-menu li span").each(function() {
                $(this).attr("rel") == o ? (e = o, $(this).addClass("tactive")) : $(this).removeClass("tactive")
            })
        })), "destination" == ptype && $(".section").each(function() {
            var t = $(this).offset().top - $(window).scrollTop(),
                o = $(this).attr("id"),
                s = $(this).outerHeight() + t - 105;
            t <= 106 && s > 0 && $(".topsub-menu li span, .topsub-menu li span").each(function() {
                $(this).attr("rel") == o ? (e = o, $(this).addClass("tactive")) : $(this).removeClass("tactive")
            })
        }), pload
    });
    var h, u = 0,
        v = 5,
        f = $("#topbar").outerHeight();
    $(window).scroll(function(e) {
        h = !0
    }), setInterval(function() {
        h && (t(), h = !1)
    }, 250), $(".map-cover").on("click", function() {
        $(this).remove()
    }), $(document).on("click touchstart", function(e) {
        $(e.target).is(".tile_mask, .fedit, .fdelete, .sf-button, .sf-cancel, .sf-close") || ($(".tile_mask").removeClass("xactive"), $(this).find(".mtile_h_s").css({
            "background-color": "#ffffff"
        }), $(this).find(".tile_mask").hide())
    }), $(document).on("click", ".thumbs-life .swiper-pagination-bullet", function(e) {
        return $("html, body").animate({
            scrollTop: $("#swiper-box").offset().top - 66
        }, 600), !1
    }), $(document).on("click", ".video-list li", function(e) {
        var t = "https://www.youtube.com/embed/" + $(this).attr("rel") + "?rel=0&amp;showinfo=0&amp;autoplay=1";
        return $("html, body").animate({
            scrollTop: $("#video-box").offset().top - 66
        }, 600), $("#video-box iframe").attr("src", t), !1
    }), $("#sform").val({
        rules: {
            explore: {
                required: !0,
                minlength: 3
            }
        },
        messages: {
            explore: ""
        }
    }), $("#sform").submit(function() {
        if (!$(this).valid()) return !1;
        $("input").removeAttr("disabled");
        var e = $(this).find(":submit").html();
        $(this).find(":submit").html("Searching...");
        var t = $(this).attr("id"),
            o = $(this).serialize();
        return searchgo = !0, $.ajax({
            type: "post",
            url: "search",
            data: o,
            success: function(o) {
                $(".menu-search-input").addClass("menu-search-input-s").blur(), $(".menu-search-button").hide(), $(".menu-search-close").delay(200).fadeIn(400), $(".search-results").html(o), $("#" + t).find(":submit").html(e), searchgo = !1
            }
        }), !1
    }), $(".menu-search-close").on("click", function() {
        $(this).hide(), $(".menu-search-button").delay(200).fadeIn(400), $(".menu-search-input").val("").removeClass("menu-search-input-s").focus(), $(".search-results").html("")
    }), $(".menu-search-input").on("keyup", function() {
        0 == searchgo && ($(".menu-search-close").hide(), $(".menu-search-button").delay(100).fadeIn(200))
    }), $(".dest-map-z-area").mouseleave(function() {
        $(".dest-map-z-show").stop(!0, !0).fadeOut()
    }).mouseenter(function() {
        $(".dest-map-z-show").stop(!0, !0).fadeIn()
    }), $(".dest-map-m-area").mouseleave(function() {
        $(".dest-map-m-show").stop(!0, !0).fadeOut()
    }).mouseenter(function() {
        $(".dest-map-m-show").stop(!0, !0).fadeIn()
    }), $(".map-zoom-in").on("click", function() {
        $("#dest-hero").addClass("dest-hero-hide"), $(".dest-map-ol").addClass("dest-map-ol-hide"), $(".dest-container").addClass("dest-zoom"), $(".dest-map-large").hide(), $(".dest-map-small").show()
    }), $(".map-zoom-out").on("click", function() {
        $("#dest-hero").removeClass("dest-hero-hide"), $(".dest-map-ol").removeClass("dest-map-ol-hide"), $(".dest-container").removeClass("dest-zoom"), $(".dest-map-large").show(), $(".dest-map-small").hide()
    }), $(window).resize(function() {
        (r = $(window).width()) < 960 ? ($("#dest-hero").addClass("dest-hero-hide"), $(".dest-map-ol").addClass("dest-map-ol-hide"), $(".dest-container").addClass("dest-zoom"), $(".dest-map-large").hide(), $(".dest-map-small").show()) : ($("#dest-hero").removeClass("dest-hero-hide"), $(".dest-map-ol").removeClass("dest-map-ol-hide"), $(".dest-container").removeClass("dest-zoom"), $(".dest-map-large").show(), $(".dest-map-small").hide())
        customClass: "menu-search-placeholder"
    })
});