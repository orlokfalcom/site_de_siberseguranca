<?php
/**
 * The main template file
 */

get_header();
?>

<!-- Home / Hero Section -->
<section id="home" class="hero">
    <div class="container hero-grid">
        <div class="hero-info">
            <div class="hero-tag">
                <span class="logo-dot"></span>
                <span>Ecossistema de CiberseguranÃ§a sob Demanda</span>
            </div>
            <h1>A ponte inabalÃ¡vel que conecta a sua empresa ao <span class="text-gradient-primary">talento de elite</span>.</h1>
            <p>Contrate especialistas certificados de ciberseguranÃ§a em minutos. Garanta a proteÃ§Ã£o de seus dados (LGPD) e audite seu cÃ³digo de forma rÃ¡pida e segura atravÃ©s do nosso ecossistema.</p>
            <div class="hero-actions">
                <a href="#matching" class="glow-btn primary">Encontrar Especialista</a>
                <a href="#hecate" class="glow-btn secondary">Explorar Engine HECATE</a>
            </div>
        </div>
        
        <div class="hero-visual">
            <div class="hero-glow-sphere"></div>
            <div class="hero-badge-container">
                <div class="hero-badge-header">
                    <span class="hero-badge-title">Status da Rede</span>
                    <div class="pulse-indicator">
                        <span class="pulse-dot"></span>
                        <span>Monitorando</span>
                    </div>
                </div>
                <div class="metric-row">
                    <span class="metric-label">Especialistas Ativos</span>
                    <span class="metric-val text-gradient-secondary">22.000+</span>
                </div>
                <div class="metric-row">
                    <span class="metric-label">Projetos Executados</span>
                    <span class="metric-val text-gradient-primary">98.000+</span>
                </div>
                <div class="metric-row">
                    <span class="metric-label">Volume Transacionado</span>
                    <span class="metric-val" style="color: #fff;">R$ 392M+</span>
                </div>
                <div class="metric-row">
                    <span class="metric-label">Vulnerabilidades Corrigidas</span>
                    <span class="metric-val" style="color: var(--accent);">187.420</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services / CyberBridge Marketplace -->
<section id="services" class="services">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">CyberBridge Marketplace</span>
            <h2 class="section-title">Nossos ServiÃ§os Especializados</h2>
            <p class="section-desc">Conectamos as necessidades de defesa digital da sua organizaÃ§Ã£o com a experiÃªncia prÃ¡tica de profissionais altamente qualificados.</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="glass-card">
                <div class="service-icon">
                    <i class="fa fa-bug"></i>
                </div>
                <h3 class="service-title">Pentest sob Demanda</h3>
                <p class="service-desc">Testes de invasÃ£o controlados em APIs, aplicaÃ§Ãµes mÃ³veis, sistemas web e infraestrutura para encontrar falhas antes dos cibercriminosos.</p>
                <ul class="service-features">
                    <li>AnÃ¡lise de falhas baseada na OWASP</li>
                    <li>EmissÃ£o de RelatÃ³rio TÃ©cnico Detalhado</li>
                    <li>ValidaÃ§Ã£o dupla de correÃ§Ãµes inclusa</li>
                </ul>
            </div>
            
            <!-- Service 2 -->
            <div class="glass-card">
                <div class="service-icon">
                    <i class="fa fa-shield-halved"></i>
                </div>
                <h3 class="service-title">AdequaÃ§Ã£o e Compliance LGPD</h3>
                <p class="service-desc">EstruturaÃ§Ã£o e implementaÃ§Ã£o de processos de privacidade, mapeamento de fluxo de dados corporativos e auditoria de conformidade legal.</p>
                <ul class="service-features">
                    <li>DPO (Data Protection Officer) temporÃ¡rio</li>
                    <li>RelatÃ³rio de Impacto Ã  ProteÃ§Ã£o de Dados</li>
                    <li>Criptografia e seguranÃ§a por design</li>
                </ul>
            </div>
            
            <!-- Service 3 -->
            <div class="glass-card">
                <div class="service-icon">
                    <i class="fa fa-magnifying-glass"></i>
                </div>
                <h3 class="service-title">Threat Hunting ContÃ­nuo</h3>
                <p class="service-desc">InvestigaÃ§Ã£o e caÃ§a ativa a ameaÃ§as ocultas em sua rede, prevenindo incidentes atravÃ©s de varreduras comportamentais e baselines adaptativos.</p>
                <ul class="service-features">
                    <li>InvestigaÃ§Ã£o forense digital</li>
                    <li>DetecÃ§Ã£o de movimentaÃ§Ã£o lateral</li>
                    <li>ReduÃ§Ã£o drÃ¡stica do tempo de resposta</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- HECATE Threat Detection Engine -->
<section id="hecate" class="tech-section">
    <div class="container tech-grid">
        <div class="tech-info">
            <span class="section-tag" style="color: var(--secondary);">HECATE Core Technology</span>
            <h2>Tecnologia de Compromise Assessment Engine</h2>
            <p>O <strong>HECATE</strong> Ã© a nossa engine de auditoria de seguranÃ§a de prÃ³xima geraÃ§Ã£o desenvolvida em <strong>Rust</strong>. Ela roda localmente com alta performance, garantindo o isolamento da memÃ³ria e mitigando qualquer tipo de vulnerabilidade no cÃ³digo examinador.</p>
            
            <div class="tech-features-list">
                <div class="tech-feature-item">
                    <div class="tech-feature-num">01</div>
                    <div class="tech-feature-text">
                        <h4>Escaneamento HÃ­brido</h4>
                        <p>Combina motores YARA e Sigma para assinaturas clÃ¡ssicas e detecÃ§Ã£o de anomalias por IA.</p>
                    </div>
                </div>
                <div class="tech-feature-item">
                    <div class="tech-feature-num">02</div>
                    <div class="tech-feature-text">
                        <h4>Arquitetura em Rust</h4>
                        <p>SeguranÃ§a a nÃ­vel de hardware, paralelismo seguro e consumo mÃ­nimo de CPU/RAM.</p>
                    </div>
                </div>
                <div class="tech-feature-item">
                    <div class="tech-feature-num">03</div>
                    <div class="tech-feature-text">
                        <h4>Baseline Adaptativo</h4>
                        <p>Aprende o comportamento comum da rede e sinaliza apenas desvios perigosos reais.</p>
                    </div>
                </div>
                <div class="tech-feature-item">
                    <div class="tech-feature-num">04</div>
                    <div class="tech-feature-text">
                        <h4>Plugins em WebAssembly</h4>
                        <p>Estenda as defesas da engine de forma isolada, rodando scripts customizados sem expor o core.</p>
                    </div>
                </div>
            </div>
            
            <button class="glow-btn secondary" onclick="runHecateScanSimulator()">Executar Scan de DemonstraÃ§Ã£o</button>
        </div>
        
        <!-- Live Terminal Simulator -->
        <div class="tech-console">
            <div class="console-header">
                <div class="console-dots">
                    <span class="console-dot red"></span>
                    <span class="console-dot yellow"></span>
                    <span class="console-dot green"></span>
                </div>
                <span>hecate-cli v1.4.2 [RUST]</span>
            </div>
            <div class="console-body" id="hecate-console-body">
                <div class="console-line info">[i] HECATE (Hybrid Engine for Compromise Assessment) iniciado.</div>
                <div class="console-line">[i] Carregando regras baseadas em ameaÃ§as persistentes...</div>
                <div class="console-line success">[âœ“] 14.520 assinaturas YARA e regras Sigma indexadas com sucesso.</div>
                <div class="console-line">[i] Digite um comando e aperte Enter (ex: 'help', 'scan', 'status', 'about')</div>
                <div class="terminal-input-row">
                    <span class="terminal-input-prefix">guest@hecate-engine:~$</span>
                    <input type="text" class="terminal-text-input" id="hecate-terminal-input" autocomplete="off" onkeydown="handleTerminalInput(event)">
                    <span class="terminal-cursor"></span>
                </div>
            </div>
            <div class="console-footer">
                <span style="opacity: 0.3; font-size: 0.75rem;">Memory Safe (Rust Runtime)</span>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Matching Simulator Widget -->
<section id="matching" class="matching-widget">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Matchmaking Automatizado por IA</span>
            <h2 class="section-title">Encontre o Profissional Ideal para seu Projeto</h2>
            <p class="section-desc">Responda a 3 perguntas rÃ¡pidas e nosso motor de busca selecionarÃ¡ o especialista certificado com maior afinidade tÃ©cnica.</p>
        </div>
        
        <div class="widget-wrapper" id="matching-widget-box">
            <!-- Step 1 -->
            <div class="widget-step active" id="step-1">
                <h3 class="widget-title">1. Qual o tamanho da sua infraestrutura / organizaÃ§Ã£o?</h3>
                <div class="widget-options">
                    <div class="widget-option" onclick="selectWidgetOption(1, 'PME')">
                        <h4>PME / Startup</h4>
                        <p>AtÃ© 100 colaboradores e foco em agilidade digital</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(1, 'Media')">
                        <h4>MÃ©dia Empresa</h4>
                        <p>AtÃ© 500 colaboradores e regras regulatÃ³rias ativas</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(1, 'Grande')">
                        <h4>Grande CorporaÃ§Ã£o</h4>
                        <p>Mais de 500 colaboradores e infraestrutura complexa</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(1, 'Fintech')">
                        <h4>Fintech / SaÃºde</h4>
                        <p>Regulado por Ã³rgÃ£os federais e alto sigilo de dados</p>
                    </div>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="widget-step" id="step-2">
                <h3 class="widget-title">2. Qual o foco principal do serviÃ§o requisitado?</h3>
                <div class="widget-options">
                    <div class="widget-option" onclick="selectWidgetOption(2, 'Pentest')">
                        <h4>Pentest (Testes de InvasÃ£o)</h4>
                        <p>Avaliar brechas de seguranÃ§a ofensivamente</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(2, 'LGPD')">
                        <h4>AdequaÃ§Ã£o Ã  LGPD / DPO</h4>
                        <p>Mapeamento de dados e conformidade legal</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(2, 'Incidente')">
                        <h4>Resposta a Incidentes</h4>
                        <p>Ajuda imediata apÃ³s invasÃ£o ou vazamento suspeito</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(2, 'ThreatHunting')">
                        <h4>Threat Hunting</h4>
                        <p>AnÃ¡lise de ameaÃ§as contÃ­nua e preventiva</p>
                    </div>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="widget-step" id="step-3">
                <h3 class="widget-title">3. Qual a urgÃªncia para o inÃ­cio da execuÃ§Ã£o do projeto?</h3>
                <div class="widget-options">
                    <div class="widget-option" onclick="selectWidgetOption(3, 'Imediato')">
                        <h4>Imediato (Dentro de 24h)</h4>
                        <p>Foco mÃ¡ximo para inÃ­cio Ã¡gil</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(3, 'Normal')">
                        <h4>Normal (Planejado para 1-2 semanas)</h4>
                        <p>Cronograma padrÃ£o estruturado</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(3, 'Recorrente')">
                        <h4>Monitoramento ContÃ­nuo (SaaS / Mensal)</h4>
                        <p>ManutenÃ§Ã£o preditiva de seguranÃ§a</p>
                    </div>
                    <div class="widget-option" onclick="selectWidgetOption(3, 'NaoTemCerteza')">
                        <h4>Preciso de Consultoria PrÃ©via</h4>
                        <p>DefiniÃ§Ã£o de escopo em conjunto</p>
                    </div>
                </div>
            </div>
            
            <!-- Result Step -->
            <div class="widget-step" id="step-result">
                <div class="widget-result">
                    <div class="service-icon" style="margin: 0 auto 20px auto; background: rgba(34, 197, 94, 0.1); color: #22c55e;">
                        <i class="fa fa-circle-check"></i>
                    </div>
                    <h3 class="widget-title">Matchmaking ConcluÃ­do!</h3>
                    <p style="color: var(--text-muted);">Com base nas suas respostas, selecionamos um profissional com compatibilidade ideal na nossa plataforma:</p>
                    
                    <div class="result-card">
                        <div class="result-avatar" id="result-avatar-char">A</div>
                        <div class="result-meta">
                            <h4 id="result-name">Amanda Vasconcellos</h4>
                            <div class="specialty" id="result-specialty">SeguranÃ§a Ofensiva (OSCP, Red Teamer)</div>
                            <span class="result-match-score" id="result-score">98% Match Compatibilidade</span>
                        </div>
                    </div>
                    
                    <div style="display: flex; gap: 16px; justify-content: center; margin-top: 32px;">
                        <button class="glow-btn primary" onclick="resetWidget()">Refazer QuestionÃ¡rio</button>
                        <a href="#contact" class="glow-btn secondary" onclick="prefillContactForm()">Conversar com Especialista</a>
                    </div>
                </div>
            </div>
            
            <!-- Progress Bar Footer -->
            <div class="widget-footer" id="widget-footer-box">
                <div class="widget-progress-bar">
                    <div class="widget-progress-fill" id="widget-progress-fill-bar"></div>
                </div>
                <span style="font-size: 0.85rem; color: var(--text-muted);" id="widget-step-counter">Passo 1 de 3</span>
            </div>
        </div>
    </div>
</section>

<!-- Competitor Benchmark Section -->
<section id="benchmark" class="benchmark">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">AnÃ¡lise Comparativa</span>
            <h2 class="section-title">Por que escolher a CyberBridge?</h2>
            <p class="section-desc">Entenda os diferenciais tÃ©cnicos e contratuais que nos separam dos marketplaces generalistas ou de consultorias legadas.</p>
        </div>
        
        <div class="table-wrapper">
            <table class="benchmark-table">
                <thead>
                    <tr>
                        <th>Funcionalidade / BenefÃ­cio</th>
                        <th>Plataformas GenÃ©ricas (ex: Upwork, Fiverr)</th>
                        <th>Boutiques de SeguranÃ§a Tradicionais</th>
                        <th style="color: var(--secondary)">CyberBridge Marketplace</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Curadoria e Auditoria de Perfil</strong></td>
                        <td><span class="badge-tag no">NÃ£o Possui</span></td>
                        <td><span class="badge-tag yes">Possui (Interno)</span></td>
                        <td class="text-gradient-secondary"><strong>Sim (IA + KYC TÃ©cnico)</strong></td>
                    </tr>
                    <tr class="highlighted">
                        <td><strong>Escrow Financeiro Especializado</strong></td>
                        <td><span class="badge-tag partial">Parcial (Geral)</span></td>
                        <td><span class="badge-tag no">NÃ£o Possui (Faturamento Direto)</span></td>
                        <td class="text-gradient-secondary"><strong>Sim (Bilateral)</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Motor de Escaneamento Integrado (HECATE)</strong></td>
                        <td><span class="badge-tag no">NÃ£o Possui</span></td>
                        <td><span class="badge-tag partial">Parcial (Ferramentas de terceiros)</span></td>
                        <td class="text-gradient-secondary"><strong>Sim (Nativo em Rust)</strong></td>
                    </tr>
                    <tr class="highlighted">
                        <td><strong>Custo da ContrataÃ§Ã£o</strong></td>
                        <td><span class="badge-tag yes">Baixo</span></td>
                        <td><span class="badge-tag no">Muito Alto (Proibitivo para PMEs)</span></td>
                        <td class="text-gradient-secondary"><strong>Justo (PreÃ§o sob escopo direto)</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Conformidade Nativa LGPD</strong></td>
                        <td><span class="badge-tag no">NÃ£o Possui</span></td>
                        <td><span class="badge-tag yes">Possui</span></td>
                        <td class="text-gradient-secondary"><strong>Sim (Security by Design)</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="pricing">
    <div class="container">
        <div class="section-header">
            <span class="section-tag">Tabela de PreÃ§os</span>
            <h2 class="section-title">Valores e Planos Transparentes</h2>
            <p class="section-desc">Escolha a escala ideal de proteÃ§Ã£o para o seu momento de mercado. Faturamento mensal ou por projeto concluÃ­do.</p>
        </div>
        
        <div class="pricing-toggle">
            <span class="pricing-toggle-label active" id="label-monthly">Faturamento Mensal</span>
            <label class="switch">
                <input type="checkbox" id="pricing-checkbox" onchange="togglePricingPrices()">
                <span class="slider"></span>
            </label>
            <span class="pricing-toggle-label" id="label-annual">Faturamento Anual (20% OFF)</span>
        </div>
        
        <div class="pricing-grid">
            <!-- Plan 1 -->
            <div class="glass-card pricing-card">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Startup Protection</h3>
                    <p class="pricing-card-desc">Ideal para pequenas empresas que precisam de conformidade LGPD bÃ¡sica e Pentests anuais.</p>
                </div>
                <div class="pricing-price" id="price-startup">
                    R$ 2.450<span>/mÃªs</span>
                </div>
                <ul class="pricing-features">
                    <li>1 Pentest sob demanda anual</li>
                    <li>Mapeamento LGPD bÃ¡sico</li>
                    <li>1 Especialista Dedicado</li>
                    <li>Suporte em horÃ¡rio comercial</li>
                </ul>
                <a href="#contact" class="glow-btn secondary" style="display: block; text-align: center;" onclick="selectPlan('Startup')">ComeÃ§ar Agora</a>
            </div>
            
            <!-- Plan 2 (Premium / Mais Popular) -->
            <div class="glass-card pricing-card premium">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Enterprise Shield</h3>
                    <p class="pricing-card-desc">Ideal para fintechs e empresas com processos crÃ­ticos de tecnologia e transaÃ§Ãµes online.</p>
                </div>
                <div class="pricing-price" id="price-enterprise">
                    R$ 8.900<span>/mÃªs</span>
                </div>
                <ul class="pricing-features">
                    <li>4 Pentests sob demanda anuais</li>
                    <li>Auditorias contÃ­nuas via HECATE Engine</li>
                    <li>AdequaÃ§Ã£o de LGPD total</li>
                    <li>Suporte Dedicado PrioritÃ¡rio</li>
                    <li>Selo CyberBridge de Conformidade</li>
                </ul>
                <a href="#contact" class="glow-btn primary" style="display: block; text-align: center;" onclick="selectPlan('Enterprise')">ComeÃ§ar Agora</a>
            </div>
            
            <!-- Plan 3 -->
            <div class="glass-card pricing-card">
                <div class="pricing-card-header">
                    <h3 class="pricing-card-title">Custom Tactical</h3>
                    <p class="pricing-card-desc">Para grandes empresas que exigem soluÃ§Ãµes customizadas e resposta a incidentes sob demanda.</p>
                </div>
                <div class="pricing-price">
                    Sob Consulta<span>/projeto</span>
                </div>
                <ul class="pricing-features">
                    <li>Foco em Threat Hunting de elite</li>
                    <li>Resposta a incidentes 24/7</li>
                    <li>AnÃ¡lise avanÃ§ada comportamental</li>
                    <li>SaaS Dedicado de superfÃ­cies de ataque</li>
                    <li>Forense digital de alta complexidade</li>
                </ul>
                <a href="#contact" class="glow-btn secondary" style="display: block; text-align: center;" onclick="selectPlan('Custom Tactical')">Contatar Consultoria</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section id="contact" class="contact">
    <div class="container contact-grid">
        <div class="contact-info">
            <span class="section-tag">Fale Conosco</span>
            <h2>Pronto para Blindar sua OperaÃ§Ã£o Digital?</h2>
            <p>Deixe seus dados no formulÃ¡rio e nosso time entrarÃ¡ em contato para agendar uma demonstraÃ§Ã£o detalhada dos serviÃ§os ou ajudar a configurar seu primeiro projeto de ciberseguranÃ§a.</p>
            
            <div class="contact-details">
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="contact-item-text">
                        <h4>E-mail Corporativo</h4>
                        <p>contato@cyberbridge.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <i class="fa fa-shield"></i>
                    </div>
                    <div class="contact-item-text">
                        <h4>SeguranÃ§a PadrÃ£o Zero Trust</h4>
                        <p>ComunicaÃ§Ã£o e compartilhamento criptografados</p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="glass-card contact-form">
            <form action="#" method="POST" onsubmit="handleFormSubmit(event)">
                <div class="form-group">
                    <label for="contact-name">Seu Nome</label>
                    <input type="text" id="contact-name" placeholder="Ex: Eduardo Rocha" required>
                </div>
                <div class="form-group">
                    <label for="contact-email">E-mail Corporativo</label>
                    <input type="email" id="contact-email" placeholder="Ex: eduardo@fintech.com" required>
                </div>
                <div class="form-group">
                    <label for="contact-service">ServiÃ§o de Interesse</label>
                    <select id="contact-service">
                        <option value="default">Selecione uma opÃ§Ã£o...</option>
                        <option value="pentest">Pentest sob Demanda</option>
                        <option value="lgpd">AdequaÃ§Ã£o LGPD</option>
                        <option value="hecate">HECATE Threat Detection Scan</option>
                        <option value="DPO">Consultoria DPO/LGPD</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="contact-message">Detalhes do Projeto</label>
                    <textarea id="contact-message" rows="4" placeholder="Descreva brevemente sua infraestrutura ou necessidades..." required></textarea>
                </div>
                <button type="submit" class="glow-btn primary" style="width: 100%">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section>

<!-- Interactive Logic Javascript scripts -->
<script>
    // --- Toast Notification System ---
    const TOAST_ICONS = {
        success: '<i class="fa fa-circle-check"></i>',
        info:    '<i class="fa fa-circle-info"></i>',
        warning: '<i class="fa fa-triangle-exclamation"></i>',
        danger:  '<i class="fa fa-circle-xmark"></i>'
    };

    function showToast(message, type = 'info', duration = 4000) {
        const container = document.getElementById('toastContainer');
        if (!container) return;
        const toast = document.createElement('div');
        toast.className = `custom-toast ${type}`;
        toast.innerHTML = `<span class="toast-icon">${TOAST_ICONS[type] || TOAST_ICONS.info}</span><span class="toast-content">${message}</span>`;
        container.appendChild(toast);
        requestAnimationFrame(() => requestAnimationFrame(() => toast.classList.add('show')));
        setTimeout(() => { toast.classList.remove('show'); setTimeout(() => toast.remove(), 400); }, duration);
    }

    // --- Custom Modal ---
    function openCustomModal(title, desc, iconClass = 'fa fa-shield-halved') {
        document.getElementById('modalTitle').textContent = title;
        document.getElementById('modalDesc').textContent = desc;
        document.getElementById('modalIcon').innerHTML = `<i class="${iconClass}"></i>`;
        document.getElementById('customModalOverlay').classList.add('active');
    }

    function closeCustomModal() {
        document.getElementById('customModalOverlay').classList.remove('active');
    }

    document.addEventListener('DOMContentLoaded', () => {
        const overlay = document.getElementById('customModalOverlay');
        if (overlay) overlay.addEventListener('click', e => { if (e.target === overlay) closeCustomModal(); });

        const consoleEl = document.querySelector('.tech-console');
        if (consoleEl) consoleEl.addEventListener('click', () => {
            const inp = document.getElementById('hecate-terminal-input');
            if (inp) inp.focus();
        });
    });

    // --- HECATE Interactive Terminal ---
    const HECATE_COMMANDS = {
        help: () => [
            { text: '[i] Comandos disponÃ­veis na HECATE CLI v1.4.2:', cls: 'info' },
            { text: '  scan     â€” Inicia varredura differential completa no host', cls: '' },
            { text: '  status   â€” Exibe status da engine e integridade do sandbox', cls: '' },
            { text: '  about    â€” InformaÃ§Ãµes sobre a HECATE Engine em Rust', cls: '' },
            { text: '  clear    â€” Limpa o terminal', cls: '' },
            { text: '  help     â€” Exibe esta ajuda', cls: '' },
        ],
        status: () => [
            { text: '[i] HECATE Engine Status Report:', cls: 'info' },
            { text: '[âœ“] Runtime: Rust 1.78 â€” Memory Safe, Zero Undefined Behavior', cls: 'success' },
            { text: '[âœ“] Sandbox: ISOLADO â€” Nenhum acesso externo detectado', cls: 'success' },
            { text: '[âœ“] Assinaturas YARA: 14.520 carregadas e indexadas', cls: 'success' },
            { text: '[âœ“] Regras Sigma: 3.812 ativas no motor de correlaÃ§Ã£o', cls: 'success' },
            { text: '[âœ“] Baseline adaptativo: CALIBRADO (Ãºltimas 72h de trÃ¡fego)', cls: 'success' },
            { text: '[âœ“] Plugins WASM: 4 mÃ³dulos ativos, 0 comprometidos', cls: 'success' },
            { text: '[i] Sistema operando dentro dos parÃ¢metros esperados.', cls: 'info' },
        ],
        about: () => [
            { text: '[i] HECATE â€” Hybrid Engine for Compromise Assessment', cls: 'info' },
            { text: '[i] Desenvolvida 100% em Rust para mÃ¡xima seguranÃ§a de memÃ³ria.', cls: '' },
            { text: '[i] Combina motores YARA e Sigma com detecÃ§Ã£o de anomalias por IA.', cls: '' },
            { text: '[i] Roda localmente: nenhum dado sai do perÃ­metro corporativo.', cls: '' },
            { text: '[i] ExtensÃ­vel via plugins em WebAssembly (WASM) isolados.', cls: '' },
            { text: '[âœ“] Certificada para ambientes LGPD e ISO 27001.', cls: 'success' },
        ],
    };

    let scanInterval = null;

    function appendConsoleLine(consoleBody, text, cls = '') {
        const div = document.createElement('div');
        div.className = `console-line${cls ? ' ' + cls : ''}`;
        div.textContent = text;
        consoleBody.appendChild(div);
        consoleBody.scrollTop = consoleBody.scrollHeight;
    }

    function restoreInputRow(consoleBody) {
        const existing = document.getElementById('terminal-input-row');
        if (existing) existing.remove();
        const row = document.createElement('div');
        row.className = 'terminal-input-row';
        row.id = 'terminal-input-row';
        row.innerHTML = `<span class="terminal-input-prefix">guest@hecate-engine:~$</span><input type="text" class="terminal-text-input" id="hecate-terminal-input" autocomplete="off" onkeydown="handleTerminalInput(event)"><span class="terminal-cursor"></span>`;
        consoleBody.appendChild(row);
        consoleBody.scrollTop = consoleBody.scrollHeight;
        setTimeout(() => { const inp = document.getElementById('hecate-terminal-input'); if (inp) inp.focus(); }, 50);
    }

    function runScanSequence(consoleBody) {
        if (scanInterval) clearInterval(scanInterval);
        const steps = [
            { text: '[i] Analisando processos ativos na memÃ³ria RAM...', cls: '' },
            { text: '[âœ“] 184 processos ativos isolados na Sandbox de verificaÃ§Ã£o.', cls: 'success' },
            { text: '[i] Executando anÃ¡lise heurÃ­stica baseada em IA local...', cls: '' },
            { text: '[!] ALERTA: Arquivo suspeito detectado em /tmp/svchost_backup.tmp', cls: 'warning' },
            { text: '[i] Iniciando varredura profunda com assinaturas YARA...', cls: '' },
            { text: '[CRITICAL] Assinatura YARA ativa para backdoor APT29 correspondida!', cls: 'danger' },
            { text: '[i] HECATE isolou automaticamente o processo APT29 de ID: 4182.', cls: 'info' },
            { text: '[âœ“] Auditoria concluÃ­da. 1 ameaÃ§a bloqueada com sucesso em 1.4s.', cls: 'success' },
            { text: '[i] RelatÃ³rio gerado com hash imutÃ¡vel SHA-256: a3f9c1...d72e.', cls: 'info' },
        ];
        let i = 0;
        scanInterval = setInterval(() => {
            if (i < steps.length) { appendConsoleLine(consoleBody, steps[i].text, steps[i].cls); i++; }
            else { clearInterval(scanInterval); scanInterval = null; restoreInputRow(consoleBody); showToast('Varredura HECATE concluÃ­da. 1 ameaÃ§a neutralizada.', 'success'); }
        }, 750);
    }

    function handleTerminalInput(e) {
        if (e.key !== 'Enter') return;
        const input = e.target;
        const cmd = input.value.trim().toLowerCase();
        if (!cmd) return;
        const consoleBody = document.getElementById('hecate-console-body');
        const row = document.getElementById('terminal-input-row') || input.closest('.terminal-input-row');
        if (row) row.remove();
        appendConsoleLine(consoleBody, `guest@hecate-engine:~$ ${cmd}`, 'info');
        if (cmd === 'clear') { consoleBody.innerHTML = ''; restoreInputRow(consoleBody); return; }
        if (cmd === 'scan') { appendConsoleLine(consoleBody, '[i] Iniciando varredura differential completa no host...', 'info'); runScanSequence(consoleBody); return; }
        const handler = HECATE_COMMANDS[cmd];
        if (handler && typeof handler === 'function') { handler().forEach(l => appendConsoleLine(consoleBody, l.text, l.cls)); restoreInputRow(consoleBody); }
        else { appendConsoleLine(consoleBody, `[!] Comando nÃ£o reconhecido: '${cmd}'. Digite 'help' para ver opÃ§Ãµes.`, 'warning'); restoreInputRow(consoleBody); }
    }

    function runHecateScanSimulator() {
        const consoleBody = document.getElementById('hecate-console-body');
        const row = document.getElementById('terminal-input-row');
        if (row) row.remove();
        appendConsoleLine(consoleBody, 'guest@hecate-engine:~$ scan', 'info');
        appendConsoleLine(consoleBody, '[i] Iniciando varredura differential completa no host...', 'info');
        runScanSequence(consoleBody);
    }

    // --- Matchmaker Widget ---
    let widgetSelections = { step1: '', step2: '', step3: '' };

    function selectWidgetOption(step, value) {
        const stepContainer = document.getElementById(`step-${step}`);
        stepContainer.querySelectorAll('.widget-option').forEach(opt => opt.classList.remove('selected'));
        event.currentTarget.classList.add('selected');
        widgetSelections[`step${step}`] = value;
        setTimeout(() => progressWidget(step), 350);
    }

    function progressWidget(currentStep) {
        const currentBox = document.getElementById(`step-${currentStep}`);
        const nextBox = document.getElementById(`step-${currentStep + 1}`);
        const progressFill = document.getElementById('widget-progress-fill-bar');
        const counter = document.getElementById('widget-step-counter');
        currentBox.classList.remove('active');
        currentBox.style.display = 'none';
        if (nextBox) {
            nextBox.style.display = 'block';
            setTimeout(() => nextBox.classList.add('active'), 50);
            progressFill.style.width = `${(currentStep + 1) * 33.3}%`;
            counter.innerText = `Passo ${currentStep + 1} de 3`;
        } else { showWidgetResult(); }
    }

    function showWidgetResult() {
        const resultBox = document.getElementById('step-result');
        document.getElementById('widget-footer-box').style.display = 'none';
        resultBox.style.display = 'block';
        setTimeout(() => resultBox.classList.add('active'), 50);
        const nameEl = document.getElementById('result-name');
        const specialtyEl = document.getElementById('result-specialty');
        const avatarEl = document.getElementById('result-avatar-char');
        const scoreEl = document.getElementById('result-score');
        if (widgetSelections.step2 === 'LGPD') {
            nameEl.innerText = 'Renato Silva'; specialtyEl.innerText = 'Consultor SÃªnior de Privacidade (DPO, CertificaÃ§Ã£o EXIN)'; avatarEl.innerText = 'R'; scoreEl.innerText = '97% Match de Afinidade';
        } else if (widgetSelections.step2 === 'Incidente') {
            nameEl.innerText = 'Carlos Eduardo Souza'; specialtyEl.innerText = 'LÃ­der de Resposta a Incidentes (DFIR, SANS GIAC)'; avatarEl.innerText = 'C'; scoreEl.innerText = '99% Match de Afinidade';
        } else {
            nameEl.innerText = 'Amanda Vasconcellos'; specialtyEl.innerText = 'SeguranÃ§a Ofensiva (Red Teamer, CertificaÃ§Ã£o OSCP)'; avatarEl.innerText = 'A'; scoreEl.innerText = '98% Match de Afinidade';
        }
        showToast('Match encontrado! Especialista ideal identificado.', 'success');
    }

    function resetWidget() {
        document.querySelectorAll('.widget-option').forEach(opt => opt.classList.remove('selected'));
        document.querySelectorAll('.widget-step').forEach(s => { s.style.display = 'none'; s.classList.remove('active'); });
        const step1 = document.getElementById('step-1');
        step1.style.display = 'block'; step1.classList.add('active');
        document.getElementById('widget-progress-fill-bar').style.width = '33%';
        document.getElementById('widget-step-counter').innerText = 'Passo 1 de 3';
        document.getElementById('widget-footer-box').style.display = 'flex';
        widgetSelections = { step1: '', step2: '', step3: '' };
    }

    function prefillContactForm() {
        const serviceSelect = document.getElementById('contact-service');
        const messageText = document.getElementById('contact-message');
        if (widgetSelections.step2 === 'LGPD') { serviceSelect.value = 'lgpd'; messageText.value = 'Gostaria de agendar uma reuniÃ£o para adequaÃ§Ã£o LGPD. Fomos pareados com Renato Silva.'; }
        else if (widgetSelections.step2 === 'Pentest') { serviceSelect.value = 'pentest'; messageText.value = 'Gostaria de solicitar um Pentest. Fomos pareados com Amanda Vasconcellos.'; }
        else if (widgetSelections.step2 === 'Incidente') { serviceSelect.value = 'hecate'; messageText.value = 'Urgente: Solicito resposta a incidentes. Fomos pareados com Carlos Eduardo.'; }
        showToast('FormulÃ¡rio preenchido com base no seu perfil.', 'info');
    }

    // --- Pricing ---
    let isAnnualPricing = false;

    function togglePricingPrices() {
        const checkbox = document.getElementById('pricing-checkbox');
        isAnnualPricing = checkbox.checked;
        document.getElementById('label-monthly').classList.toggle('active', !isAnnualPricing);
        document.getElementById('label-annual').classList.toggle('active', isAnnualPricing);
        if (isAnnualPricing) {
            document.getElementById('price-startup').innerHTML = 'R$ 1.960<span>/mÃªs (Anual)</span>';
            document.getElementById('price-enterprise').innerHTML = 'R$ 7.120<span>/mÃªs (Anual)</span>';
            showToast('Faturamento anual ativado â€” 20% de desconto aplicado!', 'success');
        } else {
            document.getElementById('price-startup').innerHTML = 'R$ 2.450<span>/mÃªs</span>';
            document.getElementById('price-enterprise').innerHTML = 'R$ 8.900<span>/mÃªs</span>';
        }
    }

    function selectPlan(planName) {
        const serviceSelect = document.getElementById('contact-service');
        const messageText = document.getElementById('contact-message');
        messageText.value = `Gostaria de contratar o plano ${planName} (Faturamento: ${isAnnualPricing ? 'Anual' : 'Mensal'}). Favor entrar em contato.`;
        if (planName === 'Startup') serviceSelect.value = 'lgpd';
        else if (planName === 'Enterprise') serviceSelect.value = 'hecate';
        showToast(`Plano ${planName} selecionado! Preencha o formulÃ¡rio abaixo.`, 'info');
    }

    // --- Form Submission ---
    function handleFormSubmit(e) {
        e.preventDefault();
        const name = document.getElementById('contact-name').value.trim();
        const email = document.getElementById('contact-email').value.trim();
        openCustomModal('âœ… Mensagem Enviada!', `Obrigado, ${name}! Nossa equipe de Zero Trust entrarÃ¡ em contato em breve no e-mail ${email}.`, 'fa fa-shield-halved');
        showToast('FormulÃ¡rio enviado com sucesso!', 'success');
        e.target.reset();
    }

    // --- Scroll Active Nav ---
    const sections = document.querySelectorAll('section[id]');
    const navLinks = document.querySelectorAll('.main-nav .nav-list li, .main-nav li');
    window.addEventListener('scroll', () => {
        let current = '';
        sections.forEach(s => { if (window.scrollY >= s.offsetTop - 100) current = s.id; });
        navLinks.forEach(li => { li.classList.remove('active'); if (li.querySelector(`a[href="#${current}"]`)) li.classList.add('active'); });
    }, { passive: true });
</script>

<?php
get_footer();
?>
