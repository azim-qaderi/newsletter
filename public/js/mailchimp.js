jQuery(document).ready(function ($) {

    // Hijack the submission. We'll submit the form manually.
    $(".mailchimp-s-form-custom").submit(function (e) {
        $form = $(this);
        $resultElement = $form.closest(".mc_embed_signup").find(".error-lists");
        e.preventDefault();
        if (!isValidEmail($form)) {
            var error = "A valid email address must be provided.";
            $resultElement.html(error);
            $resultElement.css("color", "red");
        } else {
            submitSubscribeForm($form, $resultElement);
        }
    });

    // Validate the email address in the form
    function isValidEmail($form) {
        // If email is empty, show error message.
        // contains just one @
        var email = $form.find("input[type='email']").val();
        if (!email || !email.length) {
            return false;
        } else if (email.indexOf("@") == -1) {
            return false;
        }
        return true;
    }
    // Submit the form with an ajax/jsonp request.
    
    function submitSubscribeForm($form, $resultElement) {
        $.ajax({
            type: "post",
            url: $form.attr("action"),
            data: $form.serialize(),
            cache: false,
            dataType: "json",
            contentType: "application/json; charset=utf-8",
            error: function (error) {
                // According to jquery docs, this is never called for cross-domain JSONP requests
            },
            success: function (data) {
                if (data.result != "success") {
                    $resultElement.css("color", "red");
                    $resultElement.html(data.msg);
                } else {
                    $resultElement.css("color", "#444444");
                    $resultElement.html("Thank you for subscribing!");
                    $(".mailchimp-s-form-custom").trigger("reset");
                }
            }
        });
    }
});