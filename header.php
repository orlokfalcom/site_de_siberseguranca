<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
    <div class="container nav-wrapper">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo-container">
            <span class="logo-dot"></span>
            <span>CyberBridge</span>
        </a>
        
        <nav class="main-nav">
            <?php
            if ( has_nav_menu( 'menu-1' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'container'      => false,
                        'menu_class'     => 'nav-list',
                    )
                );
            } else {
                ?>
                <ul class="nav-list">
                    <li class="active"><a href="#home">Home</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#hecate">HECATE Engine</a></li>
                    <li><a href="#team">Especialistas</a></li>
                    <li><a href="#benchmark">Diferenciais</a></li>
                    <li><a href="#pricing">Planos</a></li>
                    <li><a href="#contact">Fale Conosco</a></li>
                </ul>
                <?php
            }
            ?>
        </nav>
        
        <div class="header-actions">
            <a href="#contact" class="glow-btn primary header-cta" style="padding: 10px 22px; font-size: 0.85rem;">
                Consultoria Grátis
            </a>
            
            <button class="menu-toggle" aria-label="Abrir Menu" onclick="toggleMobileMenu()">
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
                <span class="hamburger-line"></span>
            </button>
        </div>
    </div>
</header>
 
<div class="mobile-menu-overlay" id="mobileMenuOverlay">
    <div class="mobile-menu-content">
        <button class="close-menu" aria-label="Fechar Menu" onclick="toggleMobileMenu()">&times;</button>
        <nav class="mobile-nav">
            <?php
            if ( has_nav_menu( 'menu-1' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-1',
                        'container'      => false,
                        'menu_class'     => 'mobile-nav-list',
                    )
                );
            } else {
                ?>
                <ul class="mobile-nav-list">
                    <li><a href="#home" onclick="toggleMobileMenu()">Home</a></li>
                    <li><a href="#services" onclick="toggleMobileMenu()">Serviços</a></li>
                    <li><a href="#hecate" onclick="toggleMobileMenu()">HECATE Engine</a></li>
                    <li><a href="#team" onclick="toggleMobileMenu()">Especialistas</a></li>
                    <li><a href="#benchmark" onclick="toggleMobileMenu()">Diferenciais</a></li>
                    <li><a href="#pricing" onclick="toggleMobileMenu()">Planos</a></li>
                    <li><a href="#contact" onclick="toggleMobileMenu()">Fale Conosco</a></li>
                </ul>
                <?php
            }
            ?>
        </nav>
    </div>
</div>

<script>
function toggleMobileMenu() {
    const overlay = document.getElementById('mobileMenuOverlay');
    overlay.classList.toggle('active');
    document.body.classList.toggle('menu-open');
}
</script>
