function badBrowser() {
    var a = navigator.userAgent.toLowerCase();
    if ($.browser.msie && parseInt($.browser.version, 10) < 8) {
        window.location = "pages/ieError/"
    }
    if ($.browser.msie && parseInt($.browser.version, 10) < 9) {
        return true
    }
    if ($.browser.opera && $.browser.version * 10 <= 95) {
        return true
    }
    if (/firefox[\/\s](\d+\.\d+)/.test(a)) {
        var b = Number(RegExp.$1);
        if (b < 8) {
            return true
        }
    }
    if (/safari[\/\s](\d+\.\d+)/.test(a) && !/chrome[\/\s](\d+\.\d+)/.test(a)) {
        var c = a.indexOf("version");
        if (c > -1) {
            var d = c + 8;
            var e = a.substring(d, d + 1);
            if (e < 5) {
                return true
            }
        }
    }
    return false
}
function getBadBrowser(a) {
    if (document.cookie.length > 0) {
        c_start = document.cookie.indexOf(a + "=");
        if (c_start != -1) {
            c_start = c_start + a.length + 1;
            c_end = document.cookie.indexOf(";", c_start);
            if (c_end == -1) {
                c_end = document.cookie.length
            }
            return unescape(document.cookie.substring(c_start, c_end))
        }
    }
    return ""
}
function setBadBrowser(a, b, c) {
    var d = new Date;
    d.setDate(d.getDate() + c);
    document.cookie = a + "=" + escape(b) + (c === null ? "" : ";expires=" + d.toGMTString())
}
function callhappy() {
    $("#smiley").css("background-position", "top")
}
function callsad() {
    $("#smiley").css("background-position", "bottom")
}
function resetfeedform() {
    $("#invalid-text-name").hide(300);
    $("#invalid-text-mail").hide(300);
    $("#invalid-text-comment").hide(300);
    document.getElementById("name").style.color = "#323030";
    document.getElementById("comment").style.color = "#323030";
    document.getElementById("email").style.color = "#323030";
    document.getElementById("comment").innerHTML = " Comments here";
    callhappy();
    $("#smiley").hide(300)
}
function feedvalidataion() {
    var a = document.getElementById("name");
    if (a.value == " Your name") {
        callsad();
        document.getElementById("invalid-text-name").innerHTML = "Specify your name";
        $("#invalid-text-name").show(500);
        return false
    } else if (a.value.length < 5) {
        callsad();
        document.getElementById("invalid-text-name").innerHTML = "Name must contains 5 characters";
        $("#invalid-text-name").show(500);
        return false
    } else {
        $("#invalid-text-name").hide(200);
        callhappy()
    }
    var b = document.getElementById("email");
    if (b.value == " Your id") {
        callhappy()
    } else if (b.value.length > 0) {
        fi = document.getElementById("email").value.indexOf("@");
        fj = document.getElementById("email").value.indexOf(".", fi);
        fk = document.getElementById("email").value.indexOf(",");
        fkk = document.getElementById("email").value.indexOf(" ");
        fjj = document.getElementById("email").value.lastIndexOf(".") + 1;
        flen = document.getElementById("email").value.length;
        if (fi > 2 && fj > fi + 1 && fk == -1 && fkk == -1 && flen - fjj >= 2 && flen - fjj <= 3) {
            callhappy();
            $("#invalid-text-mail").hide(200)
        } else {
            callsad();
            document.getElementById("invalid-text-mail").innerHTML = "Invalid eMail Id";
            $("#invalid-text-mail").show(500);
            return false
        }
    } else {
        $("#invalid-text-mail").hide(100)
    }
    var c = document.getElementById("comment");
    if (c.value == " Comments here") {
        callsad();
        document.getElementById("invalid-text-comment").innerHTML = "Specify your comment";
        $("#invalid-text-comment").show(500);
        return false
    } else if (c.value.length < 10) {
        callsad();
        document.getElementById("invalid-text-comment").innerHTML = "Comment is too short";
        $("#invalid-text-comment").show(500);
        return false
    } else {
        callhappy();
        $("#invalid-text-comment").hide(200)
    }
}
function valid() {
    $("#smiley").show(200);
    var a = document.getElementById("name");
    a.onchange = a.onkeyup = function () {
        callhappy();
        $("#invalid-text-name").hide(100);
        aValue = a.value;
        a.value = aValue.replace(/[^A-Z a-z]/g, "")
    };
    var b = document.getElementById("comment");
    b.onchange = b.onkeyup = function () {
        callhappy();
        $("#invalid-text-comment").hide(100);
        bValue = b.value;
        b.value = bValue.replace(/[^A-Za-z0-9: -,._?!]/g, "")
    };
    var c = document.getElementById("email");
    c.onchange = c.onkeyup = function () {
        callhappy();
        $("#invalid-text-mail").hide(100);
        cValue = c.value;
        c.value = cValue.replace(/[^A-Za-z0-9._@]/g, "")
    }
}
function tab_animate() {
    $("#magic-line-two").hide(0);
    $("#it-ani").hide(0);
    $("#msec-ani").hide(0);
    $("#tabs a").hide(0).delay(1e3).show("blind", {
        direction: "horizontal"
    }, 1e3);
    $("#magic-line-two").delay(2e3).show("clip", {
        direction: "horizontal"
    }, 300);
    $("#d-tab").delay(2500).hide(10);
    $("#it-ani").delay(2500).effect("bounce", {
        times: 3
    }, 300);
    $("#msec-ani").delay(2500).effect("bounce", {
        times: 3
    }, 300)
}
function changeBG() {
    $("body").toggleClass("bimg")
}
function greet() {
    date_now = new Date;
    hour_value = date_now.getHours();
    if (hour_value == 0) greeting = "Good morning !";
    else if (hour_value < 12) greeting = "Good morning !";
    else if (hour_value == 12) greeting = "Good afternoon !";
    else if (hour_value < 17) greeting = "Good afternoon !";
    else greeting = "Good evening!";
    return greeting
}
function loadarrow() {
    if (window.pageYOffset < 100) $("#top-fade").stop().fadeOut();
    else if (window.pageYOffset > 30) $("#top-fade").stop().fadeIn()
}
function settime() {
    var a = new Date;
    var b = a.getHours();
    var c = a.getMinutes();
    var d = a.getSeconds();
    var e = "";
    if (b == 0) b = 12;
    e = (b > 12 ? b - 12 : b) + ":" + (c < 10 ? "0" : "") + c + ":" + (d < 10 ? "0" : "") + d + " " + (b > 12 ? "pm" : "am");
    document.getElementById("time").innerHTML = "  " + e
}
function resizeIframe(a) {
    document.getElementById("fid").style.height = parseInt(a) + 50 + "px"
}
function calAlert() {
    if ($(window).width() < 300) {} else {};
}
function ss() {
    scroll(0, 0)
}
$(window).scroll(function () {});
(function (a) {
    a.fn.extend({
        airport: function (b) {
            function h(f, g, i, j) {
                if (i >= b.length) setTimeout(function () {
                    h(0, 0, 0, 0)
                }, 1e3);
                else if (j >= e) setTimeout(function () {
                    h(0, 0, i + 1, 0)
                }, 1e3);
                else {
                    a(c).find(".c" + f).html(d[g] == " " ? " " : d[g]);
                    setTimeout(function () {
                        if (g > d.length) h(f + 1, 0, i, j + 1);
                        else if (d[g] != b[i].substring(j, j + 1).toLowerCase()) h(f, g + 1, i, j);
                        else h(f + 1, 0, i, j + 1)
                    }, 10)
                }
            }
            function g(a, b) {
                return a + (new Array(b - a.length + 1)).join(" ")
            }
            var c = a(this);
            var d = ["a", "b", "c", "d", "e", "f", "g", " ", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "!", "1", "2"];
            var e = 0;
            var f = items2 = b.length;
            a(this).empty();
            while (f--) if (b[f].length > e) e = b[f].length;
            while (items2--) b[items2] = g(b[items2], e);
            spans = e;
            while (spans--) a(this).prepend("<span class='c" + spans + "'></span>");
            h(0, 0, 0, 0)
        }
    })
})(jQuery);
$(window).load(function () {
    $("#tabs").addClass("tnone");
    $("#load").hide(0);
    $("#err").hide(0);
    $("#sdown").hide("drop", {
        direction: "down"
    }, 1500);
    $("#thead").show("blind", {
        direction: "horizontal"
    }, 2500);
    $("#logo").show("clip", {
        direction: "horizontal"
    }, 2500);
    $("#thead").effect("pulsate", {
        times: 1
    }, 3e3);
    $("html, body").animate({
        scrollTop: 0
    }, 0);
    calAlert();
    parent.resizeIframe(document.body.scrollHeight);
    setTimeout("ss()", 3e3)
});
$(window).resize(function () {
    calAlert()
});
$.ajax({
    url: "pages/php/counter.php",
    context: document.body,
    success: function () {}
});
$("#cons").cycle({
    fx: "blindZ",
    timeout: 0,
    next: "#next2",
    prev: "#prev2",
    before: changeBG
});
$("#spon-info").cycle({
    fx: "fade",
    speed: 1e3,
    timeout: 2e3,
    sync: true,
    next: "#spon-info",
    pause: 1
});
$("#ads-info").cycle({
    fx: "fade",
    speed: 1e3,
    timeout: 2e3,
    sync: true,
    next: "#ads-info",
    pause: 1
});
$(document).ready(function () {
    $("#next2").click(function () {
        $("#frame").attr("src", $("#frame").attr("src"));
        $("body").removeClass("removeYScroll");
        $("#tabs").removeClass("tnone");
        $("#infotab").hide(0);
        $("#d-tab").show(1);
        $("#ifooter-s").fadeIn(500);
        tab_animate()
    });
    $("#prev2").click(function () {
        $("#tabs").addClass("tnone");
        $("#ifooter-s").fadeOut(100);
        $("#infotab").show(0);
        $("body").addClass("removeYScroll");
        $("html, body").animate({
            scrollTop: 0
        }, 0);
        if ($(window).height() < 660) $("body").removeClass("removeYScroll")
    });
    $("#opt-but").click(function () {
        $("#opt").fadeIn()
    });
    $("#star").hover(function () {
        $("#opt").hide()
    });
    $("body").click(function (a) {
        if (a.target.className == "myopt" || a.target.className == "opt1" || a.target.className == "opt2") {} else {
            $("#opt").fadeOut(1e3)
        }
    });
    $("#infotab").hover(function () {
        $("#int-logo-bw").fadeOut(500)
    }, function () {
        $("#int-logo-bw").delay(500).fadeIn(500)
    });
    $("#icomment").hover(function () {
        $("#icomment-t").fadeIn(200)
    }, function () {
        $("#icomment-t").fadeOut(200)
    });
    $("#ievents").hover(function () {
        $("#ievents-t").fadeIn(200)
    }, function () {
        $("#ievents-t").fadeOut(200)
    })
});
window.onbeforeunload = function () {};
if (badBrowser() && getBadBrowser("browserWarning") != "seen") {
    $(function () {
        $("<div id='browserWarning' style='font-size:14px;'><strong>Note:</strong> You are using Out of Date Browser, Please use newer version of <a href='http://getfirefox.com'>FireFox</a>, <a href='http://www.google.com/chrome/'>Chrome</a> or <a href='http://www.apple.com/safari/download/'>Safari</a>.В В [<a href='#' id='warningClose'> Skip </a>] </div>").css({
            backgroundColor: "#000",
            width: "100%",
            "border-top": "solid 1px #7F0000",
            "border-bottom": "solid 1px #7F0000",
            "text-align": "center",
            padding: "10px",
            color: "#C00"
        }).prependTo("body");
        $("#warningClose").click(function () {
            setBadBrowser("browserWarning", "seen");
            $("#browserWarning").slideUp("slow");
            return false
        })
    })
}
jQuery(function (a) {
    var b = {
        container: null,
        init: function () {
            a("#icomment").click(function (c) {
                c.preventDefault();
                a("#osx-modal-content").modal({
                    overlayId: "osx-overlay",
                    containerId: "osx-container",
                    closeHTML: null,
                    minHeight: 80,
                    opacity: 65,
                    position: ["0"],
                    overlayClose: true,
                    onOpen: b.open,
                    onClose: b.close
                })
            })
        },
        open: function (b) {
            var c = this;
            c.container = b.container[0];
            b.overlay.fadeIn("slow", function () {
                a("#osx-modal-content", c.container).show();
                var e = a("#osx-modal-title", c.container);
                e.show();
                b.container.slideDown("slow", function () {
                    setTimeout(function () {
                        var f = a("#osx-modal-data", c.container).height() + e.height() + 20;
                        b.container.animate({
                            height: f
                        }, 200, function () {
                            a("div.close", c.container).show();
                            a("#osx-modal-data", c.container).show()
                        })
                    }, 300)
                })
            })
        },
        close: function (a) {
            var b = this;
            a.container.animate({
                top: "-" + (a.container.height() + 20)
            }, 500, function () {
                b.close()
            })
        }
    };
    b.init()
})