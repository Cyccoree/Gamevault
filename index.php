<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project-Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <style>
    html { scroll-behavior: smooth; }
    section { scroll-margin-top: 70px; }

    #home {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-color: #1a1a2e;
        color: white;
    }
    .product-img {
    height: 200px;
    object-fit: cover;
}
</style>
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#home">GameVault</a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HOME -->
<section id="home">
    <div class="container text-center">
        <h1 class="display-3 fw-bold">GameVault</h1>
        <p class="lead">Level up your gaming experience.</p>
        <a href="#products" class="btn btn-primary btn-lg">Explore Products</a>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Our Services</h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">PC Build Consultation</h5>
                        <p class="card-text">Component recommendations based on your games and budget.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Setup Consultation</h5>
                        <p class="card-text">Help designing a clean and comfortable gaming setup.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Game Optimization</h5>
                        <p class="card-text">Better settings for smoother performance and gameplay.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Device Troubleshooting</h5>
                        <p class="card-text">Basic help with common gaming hardware and software problems.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PRODUCTS -->
<section id="products" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Our Products</h2>

        <div class="row g-4">

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="images/mouse.jpg" class="card-img-top product-img" alt="Gaming Mouse">
                    <div class="card-body">
                        <h5 class="card-title">Phantom Mouse</h5>
                        <p class="card-text">High-precision mouse for competitive players.</p>
                        <h6 class="text-primary">₱1,499</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="images/Keyboard.jpg" class="card-img-top product-img" alt="Magnetic Keyboard">
                    <div class="card-body">
                        <h5 class="card-title">Magnetic Keyboard</h5>
                        <p class="card-text">Fast, responsive keys built for gaming.</p>
                        <h6 class="text-primary">₱1,999</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="images/headset.jpg" class="card-img-top product-img" alt="Gaming Headset">
                    <div class="card-body">
                        <h5 class="card-title">Gaming Headset</h5>
                        <p class="card-text">Clear sound and a comfortable fit for long sessions.</p>
                        <h6 class="text-primary">₱3,450</h6>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="images/controller.jpg" class="card-img-top product-img" alt="Controller">
                    <div class="card-body">
                        <h5 class="card-title">Wireless Controller</h5>
                        <p class="card-text">Smooth, responsive control for PC and console.</p>
                        <h6 class="text-primary">₱4,688</h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ABOUT US -->
<section id="about" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">About Us</h2>

        <div class="row g-4 align-items-center">

            <div class="col-md-6">
                <h4>About GameVault</h4>
                <p>
                    GameVault is a gaming-focused concept website that offers gamers
                    accessible gaming gear, setup services, and technical assistance.
                </p>
            </div>

            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title">Developer</h5>
                        <p class="mb-1">Clein N. Nebrida</p>
                        <p class="text-muted mb-0">BSIT Student</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CONTACT US -->
<section id="contact" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Contact Us</h2>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">

                <?php if (isset($_GET['status']) && $_GET['status'] === 'success'): ?>
                    <div class="alert alert-success">Thank you! Your message has been sent.</div>
                <?php elseif (isset($_GET['status']) && $_GET['status'] === 'error'): ?>
                    <div class="alert alert-danger">Something went wrong. Please try again.</div>
                <?php endif; ?>
                
                <form action="submit_contact.php" method="POST">

                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" required>
                    </div>

                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Send Message</button>

                </form>

            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <small>&copy; 2026 GameVault. All rights reserved.</small>
</footer>
: images. Create a folder named images next to your index file
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>