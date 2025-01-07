<footer class="mt-5">
    <div class="container">
        <div class="row d-flex flex-wrap justify-content-between py-5">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="footer-menu">
                    <div class="footer-intro mb-4">
                        <h5 class="widget-title text-uppercase mb-4 title-footer">Presto.it</h5>
                    </div>
                    <p>
                        Gravida massa volutpat aenean odio. Amet, turpis erat nullam fringilla elementum diam in. Nisi,
                        purus vitae, ultrices nunc. Sit ac sit suscipit hendrerit.
                    </p>
                    <h5 class="widget-title text-uppercase title-footer">Follow Us</h5>
                    <ul class="wrapper social-icons my-3">
                        <li class="icon facebook">
                            <a href="https://www.facebook.com/"><i class="bi bi-facebook"></i></a>
                        </li>
                        <li class="icon twitter">
                            <a
                                href="https://x.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiaXQifQ%3D%3D%22%7D"><i
                                    class="bi bi-twitter"></i></a>
                        </li>
                        <li class="icon instagram">
                            <a href="https://www.instagram.com/"><i class="bi bi-instagram"></i></a>
                        </li>
                        <li class="icon linkedin">
                            <a href="https://www.linkedin.com/feed/"><i class="bi bi-linkedin"></i></a>
                        </li>
                        <li class="icon pinterest">
                            <a href="https://it.pinterest.com/"><i class="bi bi-pinterest"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div>
                    <h5 class="text-uppercase mb-4 title-footer">{{ __('ui.QuickLinks') }}</h5>
                    <ul class="list-unstyled text-uppercase fs-6">
                        <li><a href="{{ route('homepage') }}" class="footer-links">{{ __('ui.Home') }}</a></li>
                        <li><a href="#" class="footer-links">{{ __('ui.About') }}</a></li>
                        <li><a href="#" class="footer-links">{{ __('ui.Products') }}</a></li>
                        <li><a href="#" class="footer-links">{{ __('ui.Contact') }}</a></li>
                        <li><a href="#" class="footer-links">{{ __('ui.InsertArticle') }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="border-animation-left">
                    <h5 class="widget-title text-uppercase mb-4 title-footer">{{ __('ui.ContactUs') }}</h5>
                    <p>
                        {{ __('ui.Doyouhaveanyquestionsorsuggestions?') }}<br>
                        <a href="mailto:contact@yourcompany.com" class="item-anchor">contact@yourcompany.com</a>
                    </p>
                    <p>
                        {{ __('ui.Doyouneedsupport?Giveusacall.') }}<br>
                        <a href="tel:+43 720 11 52 78" class="item-anchor">+43 720 11 52 78</a>
                    </p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <h5 class="widget-title text-uppercase mb-4 title-footer">{{ __('ui.Workwithus') }}</h5>
                <p>{{ __('ui.Doyouwanttobecomeareviewer?') }}</p>
                <p>{{ __('ui.Byclickingthebuttonbelow,youcanrequesttojoinasareviewer.') }}</p>
                <a href="{{ route('become.revisor') }}" class="btn rounded-pill reviewer-btn">{{ __('ui.BecomeRevisor') }}<i
                        class="bi bi-envelope-paper-fill"></i></a>
            </div>
        </div>
    </div>

    <!--
    <div class="col-12 col-md-6 d-flex align-items-center justify-content-around mb-3 mb-0">
        <div class="shipping">
            <span class="title-footer">We ship with:</span>
            <img src="/media/dhl-logo.png" alt="icon">
        </div>
        <div class="payment-option">
            <span class="title-footer">Payment Option:</span>
            <img src="/media/visa-card.png" alt="card">
            <img src="/media/paypal-card.png" alt="card">
            <img src="/media/master-card.png" alt="card">
        </div>
    </div>
    -->
    <div class="border-top py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 text-center title-footer">
                    <p>© Copyright 2024 Presto. {{ __('ui.Allrightsreserved') }}.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
