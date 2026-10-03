<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">Get In Touch</h1>
        <p class="lead" style="color: #4b5563;">Want to join our cause or have questions? Reach out to Joanna &amp; Grace</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card border-0 shadow-lg p-4 bg-white" style="border-radius: 1rem;">
                <div class="card-body p-4">
                    <div class="row g-4 mb-4">
                        <div class="col-md-6 text-center p-4" style="background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%); border-radius: 1rem;">
                            <h5 class="fw-bold text-primary">Joanna</h5>
                            <p class="mb-0" style="color: #4b5563;">joanna@example.com</p>
                        </div>
                        <div class="col-md-6 text-center p-4" style="background: linear-gradient(135deg, #764ba215 0%, #667eea15 100%); border-radius: 1rem;">
                            <h5 class="fw-bold" style="color: #764ba2;">Grace</h5>
                            <p class="mb-0" style="color: #4b5563;">grace@example.com</p>
                        </div>
                    </div>
                    <form method="post" action="#">
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label fw-bold">Your Name</label>
                                <input type="text" class="form-control form-control-lg" id="name" name="name" required placeholder="Enter your name">
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label fw-bold">Your Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" name="email" required placeholder="you@example.com">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Message</label>
                            <textarea class="form-control form-control-lg" id="message" name="message" rows="6" required placeholder="Tell us how you would like to help..."></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg px-5 py-3 rounded-pill text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>