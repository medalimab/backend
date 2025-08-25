<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
        <style>
            /* Forcer le padding et le margin du champ téléphone */
            .form-group .intl-tel-input input[type="tel"],
            .form-group #form_phone {
                padding-left: 150px !important;
                margin-left: 0px !important;
            }
        </style>
        <style>
            /* Correction ultime largeur champ téléphone */
            .form-group .intl-tel-input,
            .form-group .intl-tel-input .iti__flag-container,
            .form-group .intl-tel-input input[type="tel"],
            .form-group #form_phone {
                width: 100% !important;
                min-width: 0 !important;
                max-width: 100% !important;
                box-sizing: border-box !important;
            }
            .form-group .intl-tel-input input[type="tel"] {
                height: 48px !important;
                font-size: 16px !important;
            }
        </style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="advanced search custom, agency, agent, business, clean, corporate, directory, google maps, homes, listing, membership packages, property, real estate, real estate agent, realestate agency, realtor">
<meta name="description" content="FindHouse - Real Estate HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="css/responsive.css">
<!-- intl-tel-input CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/css/intlTelInput.min.css"/>
            <style>
                /* Forcer la largeur du champ téléphone et de son wrapper intl-tel-input */
                .form-group .intl-tel-input {
                    width: 100% !important;
                    min-width: 0 !important;
                    max-width: 100% !important;
                    box-sizing: border-box !important;
                }
                .form-group .intl-tel-input input[type="tel"] {
                    width: 100% !important;
                    min-width: 0 !important;
                    max-width: 100% !important;
                    box-sizing: border-box !important;
                    height: 48px !important;
                    font-size: 16px !important;
                }
                .intl-tel-input .iti__country-list {
                    min-width: 200px;
                }
            </style>
<!-- Title -->
<title>HOM Agency - Contact Us</title>
<!-- Favicon -->
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="images/home/icon_hom.png" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
     @include('components.menu')

    

    <!-- Inner Page Breadcrumb -->
    <section class="inner_page_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="breadcrumb_content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact</li>
                        </ol>
                        <h4 class="breadcrumb_title">Contact Us</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Contact -->
    <section class="our-contact pb0 bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="form_grid">
                        <h4 class="mb5">Book Your Property Consultation</h4>
                        <p>Whether you're buying, selling, or just exploring your options, we're here to help. Reach out to us with your questions, property needs, or business inquiries. Our team will get back to you shortly with expert advice tailored to your goals. Let's connect and make your real estate journey smooth and successful.</p>
                        <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" name="form_name" class="form-control" required="required" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" name="form_email" class="form-control required email" required="required" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_phone" name="form_phone" class="form-control required phone" required="required" type="tel" placeholder="Phone" style="padding-left:150px !important;margin-left:0px !important;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        
                                        <select id="form_role" name="form_role" class="form-control required" required>
                                            
                                            <option value="" selected disabled style="display:none;">I am a :</option>
                                            <option value="Agent">Agent</option>
                                            <option value="Investor">Investor</option>
                                            <option value="Buyer">Buyer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" class="form-control required" rows="8" required="required" placeholder="Your Message"></textarea>
                                    </div>
                                    <div class="form-group mb0">
                                        <button type="button" class="btn dbxshad btn-lg btn-thm rounded">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="contact_localtion">
                        <h4>Contact Us</h4>
                        <p>Have a question, need advice, or ready to take the next step? We're here to assist you with all your real estate needs in Dubai. Reach out today our team is just a call or message away.</p>
                        <div class="content_list">
                            <h5>Address</h5>
                            <p>Barsha Heights, Dubai. <br>United Arab Emirates.</p>
                        </div>
                        <div class="content_list">
                            <h5>Phone</h5>
                            <p>+971 56 4777 7039</p>
                        </div>
                        <div class="content_list">
                            <h5>Mail</h5>
                            <p>info@homagency.ae</p>
                        </div>
                        <h5>Follow Us</h5>
                        <ul class="contact_form_social_area">
                            <li class="list-inline-item"><a href="https://www.facebook.com/people/HOM-Agency/61567611663846/#"><i class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/hom.uaeagency/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p0 mt50">
            <div class="row">
                <div class="col-lg-12">
                    <div class="h600" id="map-canvas"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Footer -->
   
 @include('components.footer')

    <a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
</div>
<!-- Wrapper End -->

<script type="text/javascript" src="{{ asset('js/jquery-3.3.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/snackbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/simplebar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/parallax.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollto.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.counterup.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/wow.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/progressbar.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/slider.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/timepicker.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap" type="text/javascript"></script>
<script type="text/javascript" src="{{ asset('js/googlemaps1.js') }}"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>

<!-- intl-tel-input JS -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/intlTelInput.min.js"></script>
<!-- intl-tel-input utils.js (for formatting/validation) -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize intl-tel-input for the phone field
    const phoneInputField = document.querySelector("#form_phone");
    const phoneInput = window.intlTelInput(phoneInputField, {
        initialCountry: "ae", // UAE as default
        preferredCountries: ["ae", "sa", "kw", "qa", "bh", "om"], // GCC countries first
        utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@18.2.1/build/js/utils.js",
        separateDialCode: true,
        formatOnDisplay: true,
        nationalMode: false,
    });

    // Optional: Add validation on form submit
    const form = phoneInputField.closest('form');
    if (form) {
        form.addEventListener('submit', function(e) {
            if (!phoneInput.isValidNumber()) {
                e.preventDefault();
                alert('Please enter a valid phone number');
                phoneInputField.focus();
            }
        });
    }
});
</script>

</body>
</html>