<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
        <div class="flex flex-col md:flex-row gap-5 justify-between">
            <div class="col-lg-4 col-md-6 footer-about">
                <a class="logo d-flex align-items-center">
                    <span class="sitename">ACSSUM</span>
                </a>

                <div class="footer-contact pt-3">
                    <p>{{ $address }}</p>
                    <p class="mt-3"><strong>Phone:</strong> <span>{{ $mobile }}</span></p>
                    <p><strong>Email:</strong> <span>{{ $email }}</span></p>
                </div>
                <div class="social-links d-flex mt-4">
                    <a href=""><i class="bi bi-twitter-x"></i></a>
                    <a href=""><i class="bi bi-facebook"></i></a>
                    <a href=""><i class="bi bi-instagram"></i></a>
                    <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col footer-links">
                <h4>Useful Links</h4>
                <ul class="list-unstyled flex flex-row w-full gap-x-3">
                    <li class=" items-center hidden"> <a href="#">
                        </a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">About
                            us</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of
                            service</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy
                            policy</a></li>
                </ul>
            </div>

        </div>
    </div>
    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">ACSSUM</strong> <span>All Rights Reserved</span>
        </p>
    </div>
</footer>
