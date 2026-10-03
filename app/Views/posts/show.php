<?php echo $this->extend("layouts/main"); ?>

<?php echo $this->section("content"); ?>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <nav aria-label="breadcrumb" class="mb-4">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("posts"); ?>">Blog</a></li>
                    <li class="breadcrumb-item active"><?php echo esc($post["title"]); ?></li>
                </ol>
            </nav>
            <h1 class="display-5 fw-bold mb-3 text-dark"><?php echo esc($post["title"]); ?></h1>
            <p class="text-muted mb-4">
                By <strong><?php echo esc($post["author"] ?? "Joanna & Grace"); ?></strong> &bull; 
                Published on <?php echo date("F d, Y", strtotime($post["published_at"])); ?>
            </p>
            <div class="p-4 mb-4" style="background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%); border-radius: 1rem;">
                <p class="lead mb-0" style="color: #4b5563;"><?php echo esc($post["excerpt"]); ?></p>
            </div>
            <div class="content fs-5" style="color: #4b5563; line-height: 1.8;">
                <?php echo nl2br(esc($post["content"])); ?>
            </div>
            <hr class="mt-5">
            <a href="<?php echo base_url("posts"); ?>" class="btn btn-primary btn-lg">
                <i class="bi bi-arrow-left"></i> Back to All Posts
            </a>
        </div>
    </div>
</div>
<?php echo $this->endSection(); ?>