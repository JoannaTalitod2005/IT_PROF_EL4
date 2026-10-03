<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-4 text-dark">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <?php if (!empty($project["image"])): ?>
                <img src="<?php echo base_url("uploads/" . $project["image"]); ?>" class="img-fluid rounded mb-4" alt="<?php echo esc($project["title"]); ?>">
            <?php endif; ?>
            <h1 class="mb-3 fw-bold"><?php echo esc($project["title"]); ?></h1>
            <?php if (!empty($project["technologies"])): ?>
                <div class="mb-3">
                    <?php foreach (explode(",", $project["technologies"]) as $tech): ?>
                        <span class="badge bg-primary-subtle text-primary px-3 py-2"><?php echo trim(esc($tech)); ?></span>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            <div class="content mb-4" style="color: #4b5563;">
                <?php echo nl2br(esc($project["description"])); ?>
            </div>
            <div class="mb-4">
                <?php if (!empty($project["github_url"])): ?>
                    <a href="<?php echo esc($project["github_url"]); ?>" target="_blank" class="btn btn-outline-dark">
                        <i class="bi bi-github"></i> View on GitHub
                    </a>
                <?php endif; ?>
                <?php if (!empty($project["demo_url"])): ?>
                    <a href="<?php echo esc($project["demo_url"]); ?>" target="_blank" class="btn btn-primary">
                        <i class="bi bi-eye"></i> Live Demo
                    </a>
                <?php endif; ?>
            </div>
            <hr class="mt-4">
            <a href="<?php echo base_url("projects"); ?>" class="btn btn-secondary">
                <i class="bi bi-arrow-left"></i> Back to Projects
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>