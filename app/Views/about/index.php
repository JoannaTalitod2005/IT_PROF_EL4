<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-5">
    <h1 class="display-4 fw-bold mb-4 text-center" style="color: #1e3c72;">Our Portfolios</h1>
    <p class="text-center mb-5 lead" style="color: #4b5563;">Explore the individual portfolios of Grace and Joanna to learn more about their skills, contributions, and journey throughout the project.</p>

    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="card h-100 shadow-lg border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; background: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%); color: white;">
                            <i class="bi bi-person-fill" style="font-size: 3rem;"></i>
                        </div>
                        <h2 class="fw-bold" style="color: #1e3c72;">Grace</h2>
                        <p class="text-muted fs-5">Designer &amp; Developer</p>
                    </div>
                    <p style="color: #4b5563;" class="fs-5">Grace focuses on creating the visual experience of the project, helping make the system engaging, organized, and easy to use. She brings creativity and attention to detail to every aspect of the design.</p>
                    <h4 class="mt-4 fw-bold" style="color: #1e3c72;">Skills</h4>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-warning text-dark p-2">UI/UX Design</span>
                        <span class="badge bg-warning text-dark p-2">HTML &amp; CSS</span>
                        <span class="badge bg-warning text-dark p-2">Bootstrap</span>
                        <span class="badge bg-warning text-dark p-2">Frontend Development</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 shadow-lg border-0 bg-white" style="border-radius: 1rem;">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <div class="rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 120px; height: 120px; background: linear-gradient(135deg, #22c55e 0%, #4ade80 100%); color: white;">
                            <i class="bi bi-person-fill" style="font-size: 3rem;"></i>
                        </div>
                        <h2 class="fw-bold" style="color: #1e3c72;">Joanna</h2>
                        <p class="text-muted fs-5">Developer &amp; Project Contributor</p>
                    </div>
                    <p style="color: #4b5563;" class="fs-5">Joanna works on developing the system and turning the project&apos;s ideas into functional features that support the fundraising and mangrove planting initiative. Passionate about creating meaningful digital experiences.</p>
                    <h4 class="mt-4 fw-bold" style="color: #1e3c72;">Skills</h4>
                    <div class="d-flex flex-wrap gap-2 mt-3">
                        <span class="badge bg-success p-2">PHP &amp; CodeIgniter</span>
                        <span class="badge bg-success p-2">Web Development</span>
                        <span class="badge bg-success p-2">Database Design</span>
                        <span class="badge bg-success p-2">Backend Development</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>