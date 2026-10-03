<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-4">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">Our Fundraising Initiatives</h1>
        <p class="lead" style="color: #4b5563;">Projects and campaigns we are working on to help our community</p>
    </div>

    <div class="row g-4">
        <div class="col-md-6">
            <article class="card h-100 shadow border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body d-flex flex-column p-4">
                    <h2 class="card-title h4 fw-bold text-dark">Community Care Fund</h2>
                    <p class="card-text mt-2 flex-grow-1" style="color: #4b5563;">Raising funds to provide essential supplies and support for families in need in our local community.</p>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Fundraising</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Community</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Care</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="card h-100 shadow border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body d-flex flex-column p-4">
                    <h2 class="card-title h4 fw-bold text-dark">Share &amp; Support Campaign</h2>
                    <p class="card-text mt-2 flex-grow-1" style="color: #4b5563;">A collaborative effort by Joanna &amp; Grace to spread awareness and gather donations for those who need it most.</p>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Awareness</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Donations</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Teamwork</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="card h-100 shadow border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body d-flex flex-column p-4">
                    <h2 class="card-title h4 fw-bold text-dark">Hope Kits Initiative</h2>
                    <p class="card-text mt-2 flex-grow-1" style="color: #4b5563;">Creating care packages filled with essentials to bring comfort and hope to underserved families.</p>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Care Packages</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Hope</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Giving</span>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-6">
            <article class="card h-100 shadow border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body d-flex flex-column p-4">
                    <h2 class="card-title h4 fw-bold text-dark">Give With Heart</h2>
                    <p class="card-text mt-2 flex-grow-1" style="color: #4b5563;">Encouraging others to give from the heart through small acts of kindness that create big change.</p>
                    <div class="mt-3 d-flex flex-wrap gap-2">
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Kindness</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Impact</span>
                        <span class="badge" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">Unity</span>
                    </div>
                </div>
            </article>
        </div>
    </div>

    <div class="text-center mt-5">
        <a href="<?php echo base_url("contact"); ?>" class="btn btn-lg px-5 py-3 rounded-pill text-white" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border: none;">Want to Help Us?</a>
    </div>
</div>
<?php echo $this->endSection(); ?>