$(function($) {

    function getBaseUrl() {
        return document.location.hostname;
    }
    var homeURL = "https://" + getBaseUrl();
    // var homeURL = "http://" + getBaseUrl();

    if (jQuery('form[name="contactForm"]')) {
        $('form[name="contactForm"]').find('input,select,textarea').not('[type=submit]').jqBootstrapValidation({
            preventSubmit: true,
            submitError: function($form, event, errors) {
                // additional error messages or events
            },
            submitSuccess: function($form, event) {
                event.preventDefault(); // prevent default submit behaviour
                // get values from FORM
                var firstname = $("input#firstname").val();
                var lastname = $("input#lastname").val();
                var email = $("input#email").val();
                var phone = $("input#phone").val();
                var message = $("textarea#message").val();
                var firstName = name; // For Success/Failure Message
                // Check for white space in name for Success/Fail message
                // disable submit button after successful submission and validation check
                jQuery("#submitBtn").attr("disabled", "disabled");
                $.ajax({
                    url: homeURL + "/wp-content/themes/base/includes/mail/contact_me.php",
                    type: "POST",
                    data: {
                        firstname: firstname,
                        lastname: lastname,
                        phone: phone,
                        email: email,
                        message: message
                    },
                    cache: false,
                    success: function() {
                        // // Success message
                        $('#success-contact').html("<div class='alert alert-success'>");
                        $('#success-contact > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success-contact > .alert-success')
                            .append("<strong>Thanks! Message sent.</strong>");
                        $('#success-contact > .alert-success')
                            .append('</div>');
                        var url = "https://www.jmacman.com/";
                        $(location).attr('href', url);
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                    error: function() {
                        // Fail message
                        $('#success-contact').html("<div class='alert alert-danger'>");
                        $('#success-contact > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                            .append("</button>");
                        $('#success-contact > .alert-danger').append("<strong>Sorry " + firstname + ", it seems that my mail server is not responding. Please try again later!");
                        $('#success-contact > .alert-danger').append('</div>');
                        //clear all fields
                        $('#contactForm').trigger("reset");
                    },
                })
            },
            filter: function() {
                return $(this).is(":visible");
            },
        });
    }

    jQuery("a[data-toggle=\"tab\"]").click(function(e) {
        e.preventDefault();
        $(this).tab("show");
    });
});

//Phone Masking Script
// jQuery(function($){
//     $("#phone").mask("(999) 999-9999");
// });

/*When clicking on Full hide fail/success boxes */
jQuery('#name').focus(function() {
    $('#success').html('');
});
