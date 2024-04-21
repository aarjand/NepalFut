<!-- Footer Area -->
<footer id="footer" class="footer ">
    <!-- Footer Top -->
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>About Us</h2>
                        <p>Your one stop platform for seamless futsal bookings and comprehensive management tools,
                            revolutionizing the futsal experience in Nepal</p>
                        <!-- Social -->
                        <ul class="social">
                            <li><a href="#"><i class="icofont-facebook"></i></a></li>
                            <li><a href="#"><i class="icofont-instagram"></i></a></li>
                            <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                        </ul>
                        <!-- End Social -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer f-link">
                        <h2>Quick Links</h2>
                        <div class="row">

                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Home</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Futsals</a>
                                </li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Book
                                        Futsal</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Contact Us</a>
                                </li>

                            </ul>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="single-footer">
                        <h2>Open Hours</h2>
                        <p>Contact us during following hours</p>
                        <ul class="time-sidual">
                            <li class="day">Monday - Fridayp <span>8.00-20.00</span></li>
                            <li class="day">Saturday <span>9.00-18.30</span></li>
                            <li class="day">Monday - Thusday <span>9.00-15.00</span></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--/ End Footer Top -->
    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="copyright-content">
                        <p>© Copyright 2024 | All Rights Reserved by <a href="#" target="_blank">Nepal Futsal
                                Manager</a> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Copyright -->
</footer>
<!--/ End Footer Area -->

<!-- jquery Min JS -->
<script src="{{('frontend/js/jquery.min.js')}}"></script>
<!-- jquery Migrate JS -->
<script src="{{('frontend/js/jquery-migrate-3.0.0.js')}}"></script>
<!-- jquery Ui JS -->
<script src="{{('frontend/js/jquery-ui.min.js')}}"></script>
<!-- Easing JS -->
<script src="{{('frontend/js/easing.js')}}"></script>
<!-- Color JS -->
<script src="{{('frontend/js/colors.js')}}"></script>
<!-- Popper JS -->
<script src="{{('frontend/js/popper.min.js')}}"></script>

<!-- Jquery Nav JS -->
<script src="{{('frontend/js/jquery.nav.js')}}"></script>
<!-- Slicknav JS -->
<script src="{{('frontend/js/slicknav.min.js')}}"></script>
<!-- ScrollUp JS -->
<script src="{{('frontend/js/jquery.scrollUp.min.js')}}"></script>
<!-- Niceselect JS -->
<script src="{{ ('frontend/js/niceselect.js')}}"></script>
<!-- Tilt Jquery JS -->
<script src="{{('frontend/js/tilt.jquery.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{ ('frontend/js/owl-carousel.js')}}"></script>
<!-- counterup JS -->
<script src="{{ ('frontend/js/jquery.counterup.min.js')}}"></script>
<!-- Steller JS -->
<script src="{{('frontend/js/steller.js')}}"></script>
<!-- Wow JS -->
<script src="{{('frontend/js/wow.min.js')}}"></script>
<!-- Magnific Popup JS -->
<script src="{{('frontend/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Counter Up CDN JS -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{('frontend/js/bootstrap.min.js')}}"></script>
<!-- Main JS -->
<script src="{{('frontend/js/main.js')}}"></script>

@isset($futsal)
<script>
document.getElementById('booking_date').addEventListener('change', function() {
    var selectedDate = this.value;
    var futsalId = {{ optional($futsal)->id ?? 'null' }};
    // Example request URL, update to your endpoint
    fetch(`/get-time-slots?futsal_id=${futsalId}&date=${selectedDate}`)
        .then(response => response.json())
        .then(data => {
            var slotsContainer = document.getElementById('time-slots-container');
            slotsContainer.innerHTML = ''; // Clear previous slots
            data.forEach(slot => {
                var button = document.createElement('button');
                button.className = 'time-slot-btn';
                button.type = 'button';
                button.dataset.value = slot;
                button.textContent = slot;
                // Event listener for slot selection
                button.addEventListener('click', function() {
                    this.classList.toggle('active');
                    // Add additional logic for slot selection as required
                });
                slotsContainer.appendChild(button);
            });
        });
});
</script>
@endisset


</body>

</html>
