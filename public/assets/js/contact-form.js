/*
$(document).ready(function () {
    $('#form-contact').on('submit', function (e) {
        e.preventDefault();

        const form = this;

        $.ajax({
            url: $(form).attr('action'),
            method: 'POST',
            data: $(form).serialize(), // Includes the hidden "project=General Inquiry"
            dataType: 'json',
            success: function (response) {
                console.log('📩 Contact form submitted:', response);
                $('#form-contact-status').html(
                    '<div class="alert alert-success">Thank you for your message. We will get back to you shortly.</div>'
                );
                form.reset();
            },
            error: function (xhr, status, error) {
                console.error('❌ Contact form error:', error);
                $('#form-contact-status').html(
                    '<div class="alert alert-danger">There was a problem. Please try again later.</div>'
                );
            }
        });

        return false;
    });
});
*/
