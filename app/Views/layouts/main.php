<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if(isset($title)) echo $title . " | Mangrove Fundraising"; else echo "Mangrove Planting Fundraising | Growing Roots, Growing Hope"; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?php echo base_url("assets/css/style.css"); ?>">
    <style>
        body { background: #f0f9ff; }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm" style="background: linear-gradient(135deg, #1e3c72 0%, #22c55e 100%);">
        <div class="container">
            <a class="navbar-brand fw-bold" href="<?php echo base_url(); ?>">
                <i class="bi bi-tree-fill"></i> Growing Roots, Growing Hope
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link fw-bold" href="<?php echo base_url(); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="<?php echo base_url("about"); ?>">Our Portfolios</a></li>
                    <li class="nav-item"><a class="nav-link fw-bold" href="<?php echo base_url("contact"); ?>">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1">
        <?php echo $this->renderSection("content"); ?>
    </main>

    <footer class="text-white py-4 mt-auto" style="background: linear-gradient(135deg, #1e3c72 0%, #22c55e 100%);">
        <div class="container text-center">
            <p class="mb-0 fw-bold">&copy; <?php echo date("Y"); ?> Growing Roots, Growing Hope - Grace &amp; Joanna</p>
            <p class="mb-0 small mt-2">Mangrove Planting Fundraising Project</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>