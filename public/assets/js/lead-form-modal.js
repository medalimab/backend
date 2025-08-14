function initializePhoneInputs() {
    const phoneInputs = document.querySelectorAll('input[name="phone"]');
    phoneInputs.forEach(input => {
        // Only initialize if not already done
        if (!input.classList.contains('iti-initialized')) {
            const iti = window.intlTelInput(input, {
                initialCountry: "auto",
                geoIpLookup: function(success, failure) {
                    fetch('https://ipinfo.io/json')
                        .then(res => res.json())
                        .then(data => success(data.country_code))
                        .catch(() => success('AE')); // fallback UAE
                },
                utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
                nationalMode: false,
                autoPlaceholder: "polite",
                separateDialCode: true
            });

            // Mark as initialized
            input.classList.add('iti-initialized');

            // Force sync if user selects from dropdown
            input.addEventListener('countrychange', () => {
                const selectedData = iti.getSelectedCountryData();
                console.log('Country changed to:', selectedData);
            });

            // Validate on submit
            input.form.addEventListener('submit', function(e) {
                if (!iti.isValidNumber()) {
                    e.preventDefault();
                    alert('Please enter a valid phone number.');
                    input.focus();
                    return false;
                } else {
                    // Always sync actual value to international format
                    input.value = iti.getNumber();
                }
            });
        }
    });
}


// lead-form-modal.js

$(document).ready(function () {
    // 🔁 Click event for both apartment brochure and request info
    $('.open-lead-modal, .request-info-btn').on('click', function (e) {
        e.preventDefault();

        const project = $(this).data('project') || '';
        const apartment = $(this).data('apartment') || '';
        const fullProject = apartment ? `${project} – ${apartment}` : project;

        // Inject into hidden form input
        console.log('Injecting project:', fullProject); // for testing
        $('#lead-project').val(fullProject);

        // Show modal
        $('#downloadModal').modal('show');

        // Push to GTM's dataLayer
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
            event: 'formOpened',
            projectName: fullProject
        });
    });

    // 📤 Validate and submit form
    $('#lead-form-modal').validate({
        submitHandler: function (form) {
            const fullProject = $('#lead-project').val();

            // ✅ Disable submit button immediately
            $(form).find('button[type="submit"]').prop('disabled', true);

            const phoneInput = form.querySelector('input[name="phone"]');
            const iti = window.intlTelInputGlobals.getInstance(phoneInput);
            if (iti.isValidNumber()) {
                phoneInput.value = iti.getNumber();
            }

            $.ajax({
                url: $(form).attr('action'),
                method: 'POST',
                data: $(form).serialize(),
                dataType: 'json',
                success: function (response) {
                    if (response.success) {
                        const projectParam = encodeURIComponent(fullProject);
                        const downloadUrl = '/assets/php/download_brochure.php?project=' + projectParam;

                        const iframe = document.createElement('iframe');
                        iframe.style.display = 'none';
                        iframe.src = downloadUrl;
                        document.body.appendChild(iframe);

                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            event: 'leadDownloaded',
                            projectName: fullProject
                        });

                        form.reset();
                        $('#downloadModal').modal('hide');
                    } else {
                        alert('Something went wrong.');
                        // ✅ Re-enable button on failure
                        $(form).find('button[type="submit"]').prop('disabled', false);
                    }
                },
                error: function (xhr, status, error) {
                    console.error('❌ AJAX error:', error);
                    console.error('❗ Server response:', xhr.responseText);
                    alert(xhr.responseText || 'There was a problem submitting your request. Please try again.');
                    // ✅ Re-enable button on failure
                    $(form).find('button[type="submit"]').prop('disabled', false);
                }
            });

            return false;
        }
    });
});

$(document).ready(function() {
    // ensure jQuery Validate is loaded
    $('#form-contact').validate({
        submitHandler: function(form) {
            const $form = $(form);

            // ✅ Disable submit button
            $form.find('button[type="submit"]').prop('disabled', true);

            const phoneInput = form.querySelector('input[name="phone"]');
            const iti = window.intlTelInputGlobals.getInstance(phoneInput);
            if (iti.isValidNumber()) {
                phoneInput.value = iti.getNumber();
            }

            $.ajax({
                url: $form.attr('action'),
                method: 'POST',
                data: $form.serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        $('#form-contact-status').html(
                            '<p class="text-success">Thank you! We’ve received your message and will be in touch shortly.</p>'
                        );
                        window.dataLayer = window.dataLayer || [];
                        window.dataLayer.push({
                            event: 'contactFormSubmitted',
                            projectName: $form.find('input[name="email"]').val()
                        });
                        form.reset();
                    } else {
                        $('#form-contact-status').html(
                            '<p class="text-danger">Something went wrong. Please try again.</p>'
                        );
                    }
                    // ✅ Always re-enable after response
                    $form.find('button[type="submit"]').prop('disabled', false);
                },
                error: function(xhr) {
                    console.error('Contact form error:', xhr.responseText);
                    $('#form-contact-status').html(
                        '<p class="text-danger">Oops! Something went wrong. Please try again later.</p>'
                    );
                    // ✅ Re-enable button
                    $form.find('button[type="submit"]').prop('disabled', false);
                }
            });

            return false;
        }
    });
    initializePhoneInputs();
});



