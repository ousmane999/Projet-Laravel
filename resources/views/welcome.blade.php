<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Banque en ligne sécurisée</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }
        .navbar {
            padding: 1rem 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            color: #1e40af;
        }
        .navbar-nav .nav-link {
            font-weight: 500;
            color: #4b5563;
            margin: 0 10px;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #1e40af;
        }
        .btn-primary {
            background-color: #1e40af;
            border-color: #1e40af;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        .btn-primary:hover {
            background-color: #1e3a8a;
            border-color: #1e3a8a;
        }
        .btn-outline-primary {
            color: #1e40af;
            border-color: #1e40af;
            padding: 0.5rem 1.5rem;
            font-weight: 500;
        }
        .btn-outline-primary:hover {
            background-color: #1e40af;
            border-color: #1e40af;
        }
        .hero-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #f0f9ff 0%, #e1f5fe 100%);
        }
        .hero-title {
            font-weight: 700;
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: #0d2345;
        }
        .hero-subtitle {
            font-weight: 400;
            font-size: 1.25rem;
            margin-bottom: 2rem;
            color: #4b5563;
        }
        .features-section {
            padding: 5rem 0;
        }
        .feature-card {
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            height: 100%;
            transition: transform 0.3s;
            background-color: #fff;
        }
        .feature-card:hover {
            transform: translateY(-5px);
        }
        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #1e40af;
        }
        .feature-title {
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .feature-description {
            color: #6b7280;
        }
        .cta-section {
            padding: 5rem 0;
            background-color: #0d2345;
            color: #fff;
        }
        .testimonial-card {
            padding: 2rem;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        .testimonial-text {
            font-style: italic;
            margin-bottom: 1rem;
        }
        .testimonial-author {
            font-weight: 600;
        }
        .footer {
            padding: 4rem 0;
            background-color: #f3f4f6;
        }
        .footer-title {
            font-weight: 600;
            margin-bottom: 1.5rem;
        }
        .footer-links a {
            display: block;
            color: #6b7280;
            margin-bottom: 0.75rem;
            text-decoration: none;
            transition: color 0.3s;
        }
        .footer-links a:hover {
            color: #1e40af;
        }
        .social-media-links a {
            display: inline-block;
            margin-right: 1rem;
            color: #1e40af;
            font-size: 1.5rem;
            transition: transform 0.3s;
        }
        .social-media-links a:hover {
            transform: translateY(-3px);
        }
        .login-btn {
            margin-left: 10px;
        }
    </style>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <i class="fas fa-university me-2"></i>Banque En Ligne
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Fonctionnalités</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Tarifs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="btn btn-outline-primary login-btn" href="{{ route('login') }}">Se connecter</a>
                    </li>
                    <li class="nav-item ms-2">
                        <a class="btn btn-primary" href="{{ route('register') }}">S'inscrire</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="btn btn-primary" href="{{ route('dashboard') }}">Mon compte</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="hero-title">Gérez vos finances avec sécurité et simplicité</h1>
                <p class="hero-subtitle">Notre plateforme bancaire en ligne vous permet de gérer vos comptes, effectuer des transactions et suivre vos dépenses en toute sécurité.</p>
                <div class="d-flex">
                    <a href="{{ route('register') }}" class="btn btn-primary me-3">Ouvrir un compte</a>
                    <a href="#features" class="btn btn-outline-primary">En savoir plus</a>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/600x400" alt="Banque en ligne" class="img-fluid rounded shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section" id="features">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Nos fonctionnalités</h2>
            <p class="text-muted mb-0">Découvrez les avantages de notre service bancaire en ligne</p>
        </div>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-shield-alt feature-icon"></i>
                    <h4 class="feature-title">Sécurité renforcée</h4>
                    <p class="feature-description">Nous utilisons des technologies de cryptage avancées pour protéger vos informations personnelles et financières.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-mobile-alt feature-icon"></i>
                    <h4 class="feature-title">Accès mobile</h4>
                    <p class="feature-description">Gérez vos comptes bancaires où que vous soyez avec notre application mobile intuitive et sécurisée.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-exchange-alt feature-icon"></i>
                    <h4 class="feature-title">Virements instantanés</h4>
                    <p class="feature-description">Effectuez des virements en temps réel entre vos comptes ou vers d'autres bénéficiaires sans frais supplémentaires.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-chart-line feature-icon"></i>
                    <h4 class="feature-title">Suivi des dépenses</h4>
                    <p class="feature-description">Visualisez et analysez vos dépenses avec des graphiques détaillés pour mieux gérer votre budget.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-credit-card feature-icon"></i>
                    <h4 class="feature-title">Cartes virtuelles</h4>
                    <p class="feature-description">Créez des cartes bancaires virtuelles pour vos achats en ligne avec des limites personnalisables.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="feature-card">
                    <i class="fas fa-headset feature-icon"></i>
                    <h4 class="feature-title">Support 24/7</h4>
                    <p class="feature-description">Notre équipe de support client est disponible 24h/24 et 7j/7 pour répondre à toutes vos questions.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-3">Prêt à prendre le contrôle de vos finances ?</h2>
                <p class="mb-4">Rejoignez des milliers de clients satisfaits et commencez à gérer votre argent de manière plus intelligente dès aujourd'hui.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('register') }}" class="btn btn-light btn-lg">Ouvrir un compte gratuitement</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3">Ce que disent nos clients</h2>
            <p class="text-muted mb-0">Des milliers de personnes font confiance à notre service bancaire</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"J'utilise BankSecure depuis plus d'un an maintenant, et je suis impressionnée par la facilité d'utilisation et la sécurité du service."</p>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class="testimonial-author mb-0">Sophie Lefebvre</p>
                            <small class="text-muted">Entrepreneur</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Les fonctionnalités de suivi des dépenses m'ont aidé à économiser plus de 200€ par mois. Je recommande vivement !"</p>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class="testimonial-author mb-0">Thomas Dubois</p>
                            <small class="text-muted">Ingénieur</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="testimonial-card">
                    <p class="testimonial-text">"Le service client est exceptionnel. Ils ont résolu mon problème en moins de 5 minutes. Très professionnel !"</p>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <img src="https://via.placeholder.com/50" alt="Avatar" class="rounded-circle">
                        </div>
                        <div>
                            <p class="testimonial-author mb-0">Marie Laurent</p>
                            <small class="text-muted">Professeure</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h4 class="footer-title">BankSecure</h4>
                <p class="text-muted mb-4">Votre partenaire bancaire de confiance pour une gestion financière sécurisée et efficace.</p>
                <div class="social-media-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="footer-title">Liens rapides</h5>
                <div class="footer-links">
                    <a href="#">Accueil</a>
                    <a href="#">Fonctionnalités</a>
                    <a href="#">Tarifs</a>
                    <a href="#">À propos</a>
                    <a href="#">Contact</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="footer-title">Services</h5>
                <div class="footer-links">
                    <a href="#">Comptes bancaires</a>
                    <a href="#">Cartes de crédit</a>
                    <a href="#">Prêts personnels</a>
                    <a href="#">Épargne</a>
                    <a href="#">Investissements</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="footer-title">Contact</h5>
                <div class="footer-links">
                    <a href="#"><i class="fas fa-map-marker-alt me-2"></i> 123 Avenue de la Finance, Paris</a>
                    <a href="#"><i class="fas fa-phone-alt me-2"></i> +33 1 23 45 67 89</a>
                    <a href="#"><i class="fas fa-envelope me-2"></i> contact@banksecure.com</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <p class="mb-0">&copy; {{ date('Y') }} BankSecure. Tous droits réservés.</p>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <a href="#" class="text-muted me-3">Conditions d'utilisation</a>
                <a href="#" class="text-muted">Politique de confidentialité</a>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
