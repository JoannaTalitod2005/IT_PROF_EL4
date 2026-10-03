<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="py-5" style="background: linear-gradient(135deg, #1e3c72 0%, #2a5298 0%, #22c55e 100%); color: white; border-radius: 1rem; margin: 1rem;">
    <div class="container text-center py-5">
        <h1 class="display-2 fw-bold mb-3">Growing Roots, Growing Hope <i class="bi bi-tree-fill"></i></h1>
        <p class="lead fs-4 mb-4">What if every small contribution could help grow a forest?</p>
        <p class="mx-auto" style="max-width: 800px;">Our Mangrove Planting Fundraising Project aims to turn community support into something that lasts. Through fundraising, we hope to provide the resources needed to plant and nurture mangroves—helping protect our coastlines, support marine life, and create a greener future.</p>
        <p class="mx-auto mt-4" style="max-width: 800px;">This project is more than just raising funds. It is about planting roots today for a better tomorrow. <i class="bi bi-droplet"></i> <i class="bi bi-tree"></i></p>
        <div class="mt-5 d-flex flex-column flex-sm-row justify-content-center gap-3">
            <a href="<?php echo base_url("about"); ?>" class="btn btn-outline-light btn-lg px-5 py-3 rounded-pill fw-bold">Our Portfolios</a>
            <a href="<?php echo base_url("contact"); ?>" class="btn btn-light btn-lg px-5 py-3 rounded-pill fw-bold">Contact Us</a>
        </div>
    </div>
</div>

<div class="container my-5">
    <h2 class="text-center fw-bold mb-5" style="color: #1e3c72;">Meet the Team</h2>
    <p class="text-center mb-5" style="color: #4b5563;">Behind this project are two student developers who worked together to bring the idea to life:</p>
    
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-lg border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px; background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%); color: white;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h3 class="fw-bold mb-2" style="color: #1e3c72;">Grace</h3>
                    <p class="text-muted mb-3">Designer &amp; Developer</p>
                    <p style="color: #4b5563;">Grace focuses on creating the visual experience of the project, helping make the system engaging, organized, and easy to use.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow-lg border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 100px; height: 100px; background: linear-gradient(135deg, #22c55e 0%, #4ade80 100%); color: white;">
                        <i class="bi bi-person-fill fs-1"></i>
                    </div>
                    <h3 class="fw-bold mb-2" style="color: #1e3c72;">Joanna</h3>
                    <p class="text-muted mb-3">Developer &amp; Project Contributor</p>
                    <p style="color: #4b5563;">Joanna works on developing the system and turning the project&apos;s ideas into functional features that support the fundraising and mangrove planting initiative.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center py-4" style="background: #f8fafc; border-radius: 1rem;">
        <h3 class="fw-bold mb-3" style="color: #1e3c72;">Our Portfolios</h3>
        <p class="mb-4" style="color: #4b5563;">Explore the individual portfolios of Grace and Joanna to learn more about their skills, contributions, and journey throughout the project.</p>
        <a href="<?php echo base_url("about"); ?>" class="btn btn-lg px-5 py-3 rounded-pill text-white" style="background: linear-gradient(135deg, #22c55e 0%, #4ade80 100%); border: none;">View Our Portfolios</a>
    </div>
</div>
<?php echo $this->endSection(); ?>