{{-- Footer web et mobile réutilisable --}}

<section class="footer_one">
  <div class="container">
    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="footer_about_widget">
          <h4>About HOM</h4>
          <p>
            We’re reimagining how you buy, sell, and rent real estate in
            Dubai. Since 2015, HOM Agency has made it easier to find a
            place you love.
          </p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="footer_qlink_widget">
          <h4>Quick Links</h4>
          <ul class="list-unstyled">
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact Us</a></li>
            <li><a href="{{ route('properties.show_listing_page_client') }}">Listing</a></li>
            <li><a href="page-faq.html">FAQ</a></li>
            <li><a href="page-terms.html">Terms & Conditions</a></li>
            <li><a href="page-terms.html">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="footer_contact_widget">
          <h4>Contact Us</h4>
          <ul class="list-unstyled">
            <li><a href="#">info@homagency.ae</a></li>
            <li>
              <a href="#">Barsha Heights, Dubai, United Arab Emirates.</a>
            </li>
            <li><a href="#">+971 56 4777 7039</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-lg-3 col-xl-3">
        <div class="footer_social_widget">
          <h4>Follow us</h4>
          <ul class="mb30">
            <li class="list-inline-item">
              <a href="https://www.facebook.com/people/HOM-Agency/61567611663846/#"><i class="fab fa-facebook-f"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/hom.uaeagency/"><i class="fab fa-instagram"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fab fa-pinterest"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fab fa-dribbble"></i></a>
            </li>
            <li class="list-inline-item">
              <a href="#"><i class="fab fa-google"></i></a>
            </li>
          </ul>
          <h4 class="mb-2">Subscribe</h4>
          <form class="footer_mailchimp_form">
            <div class="form-row align-items-center">
              <div class="col-auto">
                <input type="email" class="form-control mb-2" id="inlineFormInput" placeholder="Your email" />
              </div>
              <div class="col-auto">
                <button type="submit" class="btn mb-2" style="background-color: #c2dcfb; border: none; color: #1E3A8A;">
                  <i class="fa fa-angle-right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
@media (max-width: 768px) {
  .footer_one .container {
    padding-left: 15px;
    padding-right: 15px;
  }
  .footer_one .row {
    margin-left: 0;
    margin-right: 0;
  }
  .footer_one .col-sm-6,
  .footer_one .col-md-6,
  .footer_one .col-lg-3,
  .footer_one .col-xl-3 {
    padding-left: 0;
    padding-right: 0;
    margin-bottom: 30px;
    width: 100%;
    max-width: 100%;
  }
  .footer_about_widget,
  .footer_qlink_widget,
  .footer_contact_widget,
  .footer_social_widget {
    text-align: center;
    padding: 0 20px;
  }
  .footer_about_widget h4,
  .footer_qlink_widget h4,
  .footer_contact_widget h4,
  .footer_social_widget h4 {
    font-size: 18px;
    margin-bottom: 20px;
    text-align: center;
  }
  .footer_qlink_widget ul,
  .footer_contact_widget ul {
    list-style: none;
    padding: 0;
    margin: 0;
    text-align: center;
  }
  .footer_qlink_widget ul li,
  .footer_contact_widget ul li {
    margin-bottom: 10px;
  }
  .footer_social_widget ul {
    text-align: center;
    justify-content: center;
  }
  .footer_mailchimp_form {
    max-width: 300px;
    margin: 0 auto;
  }
  .footer_mailchimp_form .form-row {
    justify-content: center;
  }
}
@media (max-width: 480px) {
  .footer_one {
    padding: 30px 0;
  }
  .footer_about_widget,
  .footer_qlink_widget,
  .footer_contact_widget,
  .footer_social_widget {
    padding: 0 10px;
  }
  .footer_about_widget p,
  .footer_qlink_widget ul li a,
  .footer_contact_widget ul li a {
    font-size: 14px;
    line-height: 1.6;
  }
  .footer_social_widget ul li {
    margin: 0 8px;
  }
  .footer_mailchimp_form .form-control {
    font-size: 14px;
    padding: 8px 12px;
  }
  .form-row.align-items-center {
    margin-right: -50px;
  }
}
</style>

<section class="footer_middle_area pt40 pb40">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xl-6">
        <div class="footer_menu_widget">
          <ul>
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Listing</a></li>
            <li class="list-inline-item"><a href="#">Property</a></li>
            <li class="list-inline-item"><a href="#">Pages</a></li>
            <li class="list-inline-item"><a href="#">Blog</a></li>
            <li class="list-inline-item"><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-6 col-xl-6">
        <div class="copyright-widget text-right">
          <p>
            © 2025 All Rights Reserved - Developed by
            <a href="https://ahdafdigital.ae">Ahdaf Digital</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<a class="scrollToHome" href="#"><i class="flaticon-arrows"></i></a>
