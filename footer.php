<footer class="site-footer">
    <div class="container footer-grid">
        <div class="footer-logo-desc">
            <a href="#" class="logo-container" style="color: #fff;">
                <span class="logo-dot"></span>
                <span>CyberBridge</span>
            </a>
            <p>Democratizando o acesso à cibersegurança empresarial de alta performance e protegendo a infraestrutura da economia digital.</p>
        </div>
        
        <div class="footer-links-col">
            <h4>Navegação</h4>
            <?php
            if ( has_nav_menu( 'menu-footer' ) ) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'menu-footer',
                        'container'      => false,
                        'menu_class'     => 'footer-nav-list',
                    )
                );
            } else {
                ?>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Serviços</a></li>
                    <li><a href="#hecate">HECATE Engine</a></li>
                    <li><a href="#team">Especialistas</a></li>
                    <li><a href="#benchmark">Comparativo</a></li>
                </ul>
                <?php
            }
            ?>
        </div>
        
        <div class="footer-links-col">
            <h4>Legal</h4>
            <ul>
                <li><a href="#">Termos de Uso</a></li>
                <li><a href="#">Políticas de Privacidade</a></li>
                <li><a href="#">Direitos LGPD</a></li>
                <li><a href="#">Relatório de Transparência</a></li>
            </ul>
        </div>
        
        <div class="footer-links-col">
            <h4>Contato</h4>
            <ul>
                <li><i class="fa fa-envelope" style="margin-right: 8px; color: var(--secondary)"></i> ronaldolcoutinho@hotmail.com</li>
                <li><i class="fa fa-phone" style="margin-right: 8px; color: var(--secondary)"></i> +55 (31) 98435-9511</li>
                <li><i class="fa fa-map-marker-alt" style="margin-right: 8px; color: var(--secondary)"></i> Belo Horizonte, MG, Brasil</li>
            </ul>
        </div>
    </div>
    
    <div class="container footer-bottom">
        <p>&copy; <?php echo date('Y'); ?> CyberBridge. Todos os direitos reservados. Security by Design.</p>
        <p style="font-size: 0.8rem; opacity: 0.5;">Focado em conformidade LGPD & GDPR</p>
    </div>
</footer>

<!-- Toast Container -->
<div class="toast-container" id="toastContainer"></div>

<!-- Modal Overlay -->
<div class="modal-overlay" id="customModalOverlay">
    <div class="custom-modal">
        <button class="modal-close" onclick="closeCustomModal()" aria-label="Fechar">&times;</button>
        <div class="modal-header-icon" id="modalIcon">
            <i class="fa fa-info"></i>
        </div>
        <h3 class="modal-title" id="modalTitle">Notificação</h3>
        <p class="modal-desc" id="modalDesc">Detalhes da mensagem do sistema.</p>
        <button class="glow-btn primary" onclick="closeCustomModal()" style="padding: 10px 24px; font-size: 0.9rem; margin-top: 10px;">Confirmar</button>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
