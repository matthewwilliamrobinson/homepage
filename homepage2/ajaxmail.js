/* This Javascript file implements the mail system. It requires jQuery. It
 * applies itself to any form element with the class name ajax-mail. It will
 * insert error messages into elements like
 * <label for=field class=ajax-mail-errors></label>. It will also apply the
 * ajax-mail-invalid class to fields which did not validate.
 */

/* eslint-env browser, jquery */

$.fn.id = function () {
    if (this[0].hasAttribute("id")) {
        return this[0].id;
    } else {
        var newid = btoa(Math.random().toString()).replace(/\/+=/, "");
        this.attr("id", newid);
        return newid;
    }
};

function htmlAttrEscape(string) {
    var map = {
        "&": "&amp;",
        "<": "&lt;",
        ">": "&gt;",
        "\"": "&quot;",
        "'": "&#039;"
    };

    return string.replace(/[&<>"']/g, function(m) { return map[m]; });
}

function createMailto(a) {
    return "mailto:" + a.address +
        "?subject=" + encodeURIComponent(a.subject) +
        "&body=" + encodeURIComponent(a.body);
}

function disable(form) {
    form.addClass("form-disabled");
    var disElems = [];
    form.find(":not(:disabled)").each(function () {
        disElems.push($(this).prop("disabled", true).id());
    });
    form.data("dis-elems", disElems);
}
function undisable(form) {
    form.removeClass("form-disabled");
    var disElems = form.data("dis-elems");
    if (disElems) {
        disElems.forEach(function(elemid) {
            $(document.getElementById(elemid)).prop("disabled", false);
        });
    }
}

$(document).ready(function() {
    $(".js-button").each(function() {
        var ee = $(this);
        ee.prop("disabled", false);
        ee.html(ee.data("desired-content"));
    });
    $("form.ajax-mail").submit(function(event) {
        event.preventDefault();
        var form = $(this);
        var f_replyTo = form.find("[name=\"reply-to\"]");
        var f_fullName = form.find("[name=\"full-name\"]");
        var f_body = form.find("[name=\"body\"]");
        function seterr(f) {
            var label = form.find("label[for=\"" + f.id() + "\"].ajax-mail-errors");
            label.addClass("ajax-mail-errd");
            f.addClass("ajax-mail-failed-field");
        }
        function unseterr(f) {
            var label = form.find("label[for=\"" + f.id() + "\"].ajax-mail-errors");
            label.removeClass("ajax-mail-errd");
            f.removeClass("ajax-mail-failed-field");
        }
        function setmsg(sf) {
            var resdiv = form.find(".ajax-mail-result-message");
            if (sf == "success") {
                resdiv.addClass("ajax-mail-success");
                resdiv.removeClass("ajax-mail-failure");
            } else {
                resdiv.removeClass("ajax-mail-success");
                resdiv.addClass("ajax-mail-failure");
            }
            return resdiv; // for using the .text() and .html() methods
        }

        var errors = false;
        if (!/@/.test(f_replyTo.val())) {
            seterr(f_replyTo);
            errors = true;
        } else unseterr(f_replyTo);
        if (!f_fullName.val()) {
            seterr(f_fullName);
            errors = true;
        } else unseterr(f_fullName);
        if (!f_body.val()) {
            seterr(f_body);
            errors = true;
        } else unseterr(f_body);

        if (errors) return;

        disable(form);

        $.post("mail.php", {
            "full-name": f_fullName.val(),
            "reply-to": f_replyTo.val(),
            "body": f_body.val()
        }, function (result) {
            if (result.status == "success") {
                setmsg("success").text("Thanks for contacting us! We'll be " +
                        "in touch real soon now.");
                [f_replyTo, f_fullName, f_body].forEach(function(f) {
                    f.val("");
                });
                undisable(form);
            } else if (result.status == "failure") {
                setmsg("failure").html("Regrettably, we were unable to " +
                        "process your message. We apologize for the " +
                        "inconvenience. As an alternative, try sending us " +
                        "an email at " +
                        "<a href=\"" + htmlAttrEscape(createMailto({
                            address: "matthew.robinson@sbwebstore.com",
                            subject: "Inquiry about the services of SB " +
                                "Webstore",
                            body: f_body.val()
                        })) + "\">matthew.robinson@sbwebstore.com</a>");
                undisable(form);
            } else if (result.status == "validation-error") {
                for (var field in result.fields) {
                    if (result.fields.hasOwnProperty(field)) {
                        seterr(form.find("[name=\"" + field + "\"]"));
                    }
                }
                setmsg("failure").text("Please complete the form.");
                undisable(form);
            } else {
                setmsg("failure").text("Please complete the form.").text(
                        "The server encountered this error: " + result.message);
                undisable(form);
            }
        }, "json").fail(function() {
            setmsg("failure").text("The server couldn't be contacted. Are " +
                    "you sure you're still connected to the Internet?");
            undisable(form);
        });
    });
});
