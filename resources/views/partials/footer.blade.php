<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Colonna About Us -->
            <div class="col-md-4 text-md-start text-center mb-3">
                <h5 class="mb-3">About Us</h5>
                <p>We are passionate about comics and provide the best collection for our users.</p>
            </div>
            <!-- Colonna Quick Links -->
            <div class="col-md-4 text-md-start text-center mb-3">
                <h5 class="mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
                    <li><a href="{{ route('comics.index') }}" class="text-white">Comics</a></li>
                    <li><a href="#" class="text-white">About</a></li>
                    <li><a href="#" class="text-white">Contact</a></li>
                </ul>
            </div>
            <!-- Colonna Follow Us -->
            <div class="col-md-4 text-md-start text-center mb-3">
                <h5 class="mb-3">Follow Us</h5>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white">Facebook</a></li>
                    <li><a href="#" class="text-white">Twitter</a></li>
                    <li><a href="#" class="text-white">Instagram</a></li>
                </ul>
            </div>
        </div>
        <!-- Newsletter -->
        <div class="row mt-3">
            <div class="col-12 text-center">
                <h5>Subscribe to our Newsletter</h5>
                <form class="d-flex justify-content-center">
                    <input type="email" class="form-control me-2 w-50" placeholder="Enter your email" aria-label="Email">
                    <button class="btn btn-primary" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12 text-center">
                <p>&copy; 2024 DC Comics. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
