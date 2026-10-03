<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-4">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold mb-3">Our Fundraising Blog</h1>
        <p class="lead" style="color: #4b5563;">Stories of hope, kindness, and the impact we create together</p>
    </div>

    <?php if (empty($posts)): ?>
        <div class="alert alert-info text-center">
            No blog posts published yet. Check back soon!
        </div>
    <?php else: ?>
        <div class="row g-4">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow border-0 bg-white" style="border-radius: 1rem;">
                        <div class="card-body p-4 d-flex flex-column">
                            <h5 class="card-title fw-bold text-dark mb-2"><?php echo esc($post["title"]); ?></h5>
                            <small class="text-muted mb-3">By <?php echo esc($post["author"] ?? "Team"); ?> &bull; <?php echo date("M d, Y", strtotime($post["published_at"])); ?></small>
                            <p class="card-text flex-grow-1" style="color: #4b5563;"><?php echo esc($post["excerpt"]); ?></p>
                            <a href="<?php echo base_url("posts/" . $post["slug"]); ?>" class="btn btn-primary mt-3">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</div>
<?php echo $this->endSection(); ?>