<?php
// Definindo o título da página dinamicamente
$pageTitle = "Souzafarma Express - Sua Farmácia Online";
$currentYear = date('Y');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Barra de Navegação -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-palmeiras">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo4.png" alt="Souzafarma Express" height="60" class="logo-img">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#destaques">Produtos</a>
                    </li>
					 <li class="nav-item">
                        <a class="nav-link" href="#serviços">Serviços</a>
                    </li>
					<li class="nav-item">
						<a class="nav-link" href="#onde-estamos">Onde Estamos</a>
					</li>					
					<li class="nav-item">
						<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#quemSomosModal">Quem Somos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#blogModal">
						<i class="fas fa-blog me-1"></i>Blog</a>
					</li>			
                    <li class="nav-item ms-lg-3">
                        <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#contatoModal">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
	
<!-- Modal Quem Somos -->
<div class="modal fade" id="quemSomosModal" tabindex="-1" aria-labelledby="quemSomosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-palmeiras text-white">
                <h5 class="modal-title" id="quemSomosModalLabel">Quem Somos</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="images/familia-farmacia.png" alt="Família Souza Farma" class="img-fluid rounded">
                    </div>
                    <div class="col-md-6">
                        <p class="lead">A Souza Farma Express nasceu em 2021, no coração de Santa Maria, fruto do sonho visionário de uma mãe que, antes mesmo de seus filhos decidirem suas profissões, já enxergava o futuro da família dentro de uma farmácia.</p>
                        
                        <p>Inspirados por esse legado e movidos pela dedicação ao trabalho, dois irmãos transformaram aquela visão em realidade. Hoje, a empresa cresce com solidez, conquistando a confiança de seus clientes por meio de um atendimento verdadeiramente humanizado, amor pelo que fazem e profundo respeito pelas pessoas que cuidam.</p>
                        
                        <p class="fw-bold">Mais do que uma farmácia, a Souza Farma Express é o reflexo de uma missão familiar: oferecer saúde com empatia, agilidade e compromisso.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-palmeiras" data-bs-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal de Contato -->
<div class="modal fade" id="contatoModal" tabindex="-1" aria-labelledby="contatoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-palmeiras text-white">
                <h5 class="modal-title" id="contatoModalLabel">Fale Conosco</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formContato">
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nome" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nome" required>
                        </div>
                        <div class="col-md-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="telefone" required>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Assunto</label>
                            <div class="d-flex flex-wrap gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="assunto" id="sugestao" value="Sugestão" checked>
                                    <label class="form-check-label" for="sugestao">Sugestão</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="assunto" id="reclamacao" value="Reclamação">
                                    <label class="form-check-label" for="reclamacao">Reclamação</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="assunto" id="atendimento" value="Atendimento Personalizado">
                                    <label class="form-check-label" for="atendimento">Atendimento Personalizado</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="assunto" id="outro" value="Outro">
                                    <label class="form-check-label" for="outro">Outro</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="mensagem" class="form-label">Mensagem</label>
                            <textarea class="form-control" id="mensagem" rows="5" required></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-palmeiras">Enviar Mensagem</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Blog -->
<div class="modal fade" id="blogModal" tabindex="-1" aria-labelledby="blogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-palmeiras text-white">
                <h5 class="modal-title" id="blogModalLabel">
                    <i class="fas fa-heartbeat me-2"></i> Blog Saúde & Bem-Estar
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <!-- Destaque Principal -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 border-0 shadow-sm">
                            <img src="images/blog-destaque.png" class="card-img-top" alt="Dica de Saúde">
                            <div class="card-body">
                                <h5 class="card-title text-palmeiras">5 Hábitos Matinais Para Melhorar Sua Saúde</h5>
                                <p class="card-text">Nossos farmacêuticos compartilham rotinas simples que transformam seu dia.</p>
                                <a href="#" class="btn btn-sm btn-palmeiras">Ler Artigo</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Artigos Recentes -->
                    <div class="col-md-6">
                        <div class="blog-sidebar">
                            <h6 class="text-palmeiras mb-3"><i class="fas fa-newspaper me-2"></i>Artigos Recentes</h6>
                            
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Vitaminas Essenciais no Inverno</h6>
                                        <small>3 dias atrás</small>
                                    </div>
                                    <small class="text-muted">Por Dr. Carlos Silva</small>
                                </a>
                                
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Cuidados com a Pele Sensível</h6>
                                        <small>1 semana atrás</small>
                                    </div>
                                    <small class="text-muted">Por Dra. Ana Oliveira</small>
                                </a>
                                
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-1">Exercícios Para Quem Tem Artrose</h6>
                                        <small>2 semanas atrás</small>
                                    </div>
                                    <small class="text-muted">Por Farmacêutico João Santos</small>
                                </a>
                            </div>
                            
                            <div class="mt-4">
                                <h6 class="text-palmeiras mb-3"><i class="fas fa-users me-2"></i>Nossos Colaboradores</h6>
                                <div class="d-flex flex-wrap gap-3">
                                    <img src="images/colab1.png" class="rounded-circle" width="50" alt="Farmacêutico" data-bs-toggle="tooltip" title="Dr. Carlos - Farmacêutico">
                                    <img src="images/colab2.png" class="rounded-circle" width="50" alt="Nutricionista" data-bs-toggle="tooltip" title="Dra. Ana - Nutricionista">
                                    <img src="images/colab3.png" class="rounded-circle" width="50" alt="Educador Físico" data-bs-toggle="tooltip" title="João - Educador Físico">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</div>

    <!-- Banner Principal -->
    <section class="hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
				<a class="navbar-brand" href="#">
                <img src="images/logo2.png" alt="Souzafarma Express" height="200" class="logo-img">
            </a>
                    <h1 class="display-4 fw-bold"></h1>
                    <p class="lead">Cuidado, Inovação e Agilidade para a sua saúde</p>
                    <a href="#" class="btn btn-palmeiras btn-lg" data-bs-toggle="modal" data-bs-target="#contatoModal">Entre em contato</a>
                </div>
                <div class="col-md-6">
                    <img src="images/hero-image.png" alt="Medicamentos" class="img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" id="destaques">Nossos Destaques</h2>
            <div class="row">
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="images/product1.jpg" class="card-img-top" alt="Produto 1">
                        <div class="card-body">
                            <h5 class="card-title">Paracetamol 750mg</h5>
                            <p class="card-text">Caixa com 10 comprimidos</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 12,90</span>
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal" class="btn btn-sm btn-palmeiras">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="images/product2.jpg" class="card-img-top" alt="Produto 2">
                        <div class="card-body">
                            <h5 class="card-title">Vitamina C 1g</h5>
                            <p class="card-text">Frasco com 30 comprimidos</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 24,90</span>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal" class="btn btn-sm btn-palmeiras">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="images/product3.jpg" class="card-img-top" alt="Produto 3">
                        <div class="card-body">
                            <h5 class="card-title">Protetor Solar FPS 50</h5>
                            <p class="card-text">120ml - Toque Seco</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 59,90</span>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal"  class="btn btn-sm btn-palmeiras">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="card h-100">
                        <img src="images/product4.jpg" class="card-img-top" alt="Produto 4">
                        <div class="card-body">
                            <h5 class="card-title">Shampoo Anticaspa</h5>
                            <p class="card-text">200ml - Controle Intenso</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="price">R$ 32,90</span>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal" class="btn btn-sm btn-palmeiras">Comprar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline-palmeiras">Ver todos os produtos</a>
            </div>
        </div>
    </section>

    <!-- Benefícios -->
<section class="py-5">
    <div class="container" id="serviços">
        <div class="row">
            <!-- Benefício 1 - Mantido -->
            <div class="col-md-3 mb-4">
                <div class="text-center p-4 benefit-item h-100">
                    <i class="fas fa-motorcycle fa-3x mb-3 text-palmeiras"></i>
                    <h4>Entrega Rápida</h4>
                    <p>Entregamos em todo o DF e entorno de 09:00 às 22:00 hrs TODOS OS DIAS!</p>
                </div>
            </div>
            
            <!-- Benefício 2 - Mantido -->
            <div class="col-md-3 mb-4">
                <div class="text-center p-4 benefit-item h-100">
                    <i class="fas fa-shield-alt fa-3x mb-3 text-palmeiras"></i>
                    <h4>Produtos Originais</h4>
                    <p>Todos os nossos produtos são 100% originais e com nota fiscal.</p>
                </div>
            </div>
            
            <!-- Benefício 3 - Mantido -->
            <div class="col-md-3 cmb-4">
                <div class="text-center p-4 benefit-item h-100">
                    <i class="fas fa-headset fa-3x mb-3 text-palmeiras"></i>
                    <h4>Atendimento por Telefone</h4>
                    <p>Nossa equipe está disponível para tirar todas as suas dúvidas.</p>
                </div>
            </div>
            
            <!-- NOVO BENEFÍCIO - Atendimento Farmacêutico Personalizado -->
            <div class="col-md-3 mb-4">
                <div class="text-center p-4 benefit-item h-100">
                    <i class="fas fa-user-md fa-3x mb-3 text-palmeiras"></i>
                    <h4>Atendimento Farmacêutico Personalizado</h4>
                    <p>Orientação especializada com profissionais qualificados para suas necessidades específicas.</p>
                </div>
            </div>
        </div>
    </div>
</section>
	

<!-- Seção Onde Estamos -->
<section id="onde-estamos" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Onde Estamos</h2>
        
        <div id="lojasCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Loja 1 -->
                <div class="carousel-item active">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="images/loja1.jpg" alt="Loja Centro" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-palmeiras">Santa Maria Sul </h3>
                            <p class="lead"><i class="fas fa-map-marker-alt text-palmeiras"></i> Qr 301 Conjunto L, 18 </p>
                            <p><i class="fas fa-phone text-palmeiras"></i> (55) 3576-3157</p>
                            <p><i class="fas fa-clock text-palmeiras"></i> Seg-Sáb: 7h00 às 23h00 | Dom-Fer: 8h às 22h</p>
                            <a href="https://maps.app.goo.gl/KMxhQHHQaHA2hiBG6" target="_blank" class="btn btn-palmeiras mt-3 d-inline-flex align-items-center map-link">
                                <i class="fas fas fa-map-marker-alt me-2"></i> Como chegar
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Loja 2 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="images/loja2.jpg" alt="Loja Zona Norte" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-palmeiras">Gama Setor Leste </h3>
                            <p class="lead"><i class="fas fa-map-marker-alt text-palmeiras"></i> Qd 24 CL 24 </p>
                            <p><i class="fas fa-phone text-palmeiras"></i> (61) 4101-5645</p>
                            <p><i class="fas fa-clock text-palmeiras"></i> Seg-Sáb: 7h00 às 23h00 | Dom-Fer: 8h às 22h</p>
							<a href="https://maps.app.goo.gl/LoLRwHUAT2W1uRrM9" target="_blank" class="btn btn-palmeiras mt-3">
                                <i class="fas fas fa-map-marker-alt me-2"></i> Como chegar
                            </a>
                        </div>
                    </div>
                </div>
                
                <!-- Loja 3 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="images/loja3.jpg" alt="Loja Zona Sul" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-palmeiras">Gama Setor Oeste</h3>
                            <p class="lead"><i class="fas fa-map-marker-alt text-palmeiras"></i> Qd 09 CL 09, Lj 04 </p>
                            <p><i class="fas fa-phone text-palmeiras"></i> (61) 3576-1266</p>
                            <p><i class="fas fa-clock text-palmeiras"></i> Seg-Sáb: 7h00 às 23h00 | Dom-Fer: 8h às 22h</p>
                            <a href="https://maps.app.goo.gl/ZpvX555CWAvt8o2b9" target="_blank" class="btn btn-palmeiras mt-3">
                                <i class="fas fas fa-map-marker-alt me-2"></i> Como chegar
                            </a>
                        </div>
                    </div>
                </div>
				
				<!-- Loja 4 -->
                <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src="images/loja4.jpg" alt="Loja Zona Sul" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-6">
                            <h3 class="text-palmeiras">Santa Maria Norte</h3>
                            <p class="lead"><i class="fas fa-map-marker-alt text-palmeiras"></i> CL 117 Lt H, 02 </p>
                            <p><i class="fas fa-phone text-palmeiras"></i> (61) 3456-0000</p>
                            <p><i class="fas fa-clock text-palmeiras"></i> Seg-Sáb: 7h00 às 23h00 | Dom-Fer: 8h às 22h</p>
                            <a href="https://maps.app.goo.gl/32RBPyHWrAVvjEYD7" target="_blank" class="btn btn-palmeiras mt-3">
                                <i class="fas fas fa-map-marker-alt me-2"></i> Como chegar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Controles do Carrossel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#lojasCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-palmeiras rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#lojasCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-palmeiras rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Próxima</span>
            </button>
            
            <!-- Indicadores -->
            <div class="carousel-indicators position-static mt-4">
                <button type="button" data-bs-target="#lojasCarousel" data-bs-slide-to="0" class="active bg-palmeiras" aria-current="true"></button>
                <button type="button" data-bs-target="#lojasCarousel" data-bs-slide-to="1" class="bg-palmeiras"></button>
                <button type="button" data-bs-target="#lojasCarousel" data-bs-slide-to="2" class="bg-palmeiras"></button>
				<button type="button" data-bs-target="#lojasCarousel" data-bs-slide-to="3" class="bg-palmeiras"></button>
            </div>
        </div>
    </div>
</section>

<!-- Seção Depoimentos -->
<section class="py-5 bg-palmeiras text-white">
    <div class="container">
        <h2 class="text-center mb-5">O que nossos clientes dizem</h2>
        
        <div class="row">
            <!-- Depoimento 1 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-dark p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"Atendimento excepcional! O farmacêutico me explicou tudo sobre minha medicação e ainda sugeriu um produto natural que ajudou muito."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="images/cliente1.jpg" alt="Cliente Maria" class="rounded-circle me-3" width="60">
                            <div>
                                <h6 class="mb-0">Maria Silva</h6>
                                <small class="text-muted">Santa Maria - RS</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Depoimento 2 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-dark p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="card-text">"Entrega super rápida e os preços são os melhores da região. Sempre que preciso de algo, corro para a Souza Farma!"</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="images/cliente2.jpg" alt="Cliente João" class="rounded-circle me-3" width="60">
                            <div>
                                <h6 class="mb-0">João Oliveira</h6>
                                <small class="text-muted">Santa Maria - RS</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Depoimento 3 -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0 shadow">
                    <div class="card-body text-dark p-4">
                        <div class="mb-3 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="card-text">"O atendimento personalizado fez toda diferença no tratamento da minha mãe. Profissionais muito atenciosos e qualificados."</p>
                        <div class="d-flex align-items-center mt-4">
                            <img src="images/cliente3.jpg" alt="Cliente Ana" class="rounded-circle me-3" width="60">
                            <div>
                                <h6 class="mb-0">Ana Souza</h6>
                                <small class="text-muted">Santa Maria - RS</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Botão para adicionar depoimento -->
        <div class="text-center mt-5">
            <a href="#" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#depoimentoModal">
                <i class="fas fa-plus-circle me-2"></i>Deixe seu depoimento
            </a>
        </div>
    </div>
</section>

<!-- Modal para novo depoimento -->
<div class="modal fade" id="depoimentoModal" tabindex="-1" aria-labelledby="depoimentoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-palmeiras text-white">
                <h5 class="modal-title" id="depoimentoModalLabel">Deixe seu depoimento</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="formDepoimento">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nomeDepoimento" class="form-label">Seu Nome</label>
                        <input type="text" class="form-control" id="nomeDepoimento" required>
                    </div>
                    <div class="mb-3">
                        <label for="cidadeDepoimento" class="form-label">Cidade</label>
                        <input type="text" class="form-control" id="cidadeDepoimento" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Avaliação</label>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2"><i class="fas fa-star"></i></label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1"><i class="fas fa-star"></i></label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="textoDepoimento" class="form-label">Seu Depoimento</label>
                        <textarea class="form-control" id="textoDepoimento" rows="4" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="fotoDepoimento" class="form-label">Foto (opcional)</label>
                        <input class="form-control" type="file" id="fotoDepoimento" accept="image/*">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-palmeiras">Enviar Depoimento</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Ícone do WhatsApp Flutuante -->
<div class="whatsapp-float">
  <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
<!-- Modal de Opções do WhatsApp -->
<div class="modal fade" id="whatsappModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Atendimento por WhatsApp</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="list-group">
          <!-- Opção 1 -->
          <a href="https://wa.me/5561999299631" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Santa Maria Sul</h6>
                <small>(61) 9 9929-9631</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
          
          <!-- Opção 2 -->
          <a href="https://wa.me/5561996952226" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Gama Leste</h6>
                <small>(61) 9 99695-2226</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
          
          <!-- Opção 3 -->
          <a href="https://wa.me/5561992979907" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Gama Oeste</h6>
                <small>(61) 9 9297-9907</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal de Opções do WhatsApp Escritório Financeiro Compras -->
<div class="modal fade" id="whatsappModal2" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Atendimento por WhatsApp</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="list-group">
		  <!-- Opção 1 -->
          <a href="https://wa.me/5561992979907" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Escritório</h6>
                <small>(61) 9 9297-9907</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
		  <!-- Opção 2 -->
          <a href="https://wa.me/5561992979907" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Financeiro</h6>
                <small>(61) 9 9297-9907</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
		  <!-- Opção 3 -->
          <a href="https://wa.me/5561992979907" target="_blank" class="list-group-item list-group-item-action">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <h6 class="mb-1">Compras</h6>
                <small>(61) 9 9297-9907</small>
              </div>
              <i class="fab fa-whatsapp text-success"></i>
            </div>
          </a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Newsletter -->
    <section class="py-5 bg-palmeiras text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h3>Assine nossa newsletter</h3>
                    <p class="mb-4">Receba ofertas exclusivas e novidades diretamente no seu e-mail.</p>
                    <form class="row g-3 justify-content-center">
                        <div class="col-md-8">
                            <input type="email" class="form-control form-control-lg" placeholder="Seu melhor e-mail">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-light btn-lg w-100">Assinar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Rodapé -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <img src="images/logo4.png" alt="Souzafarma Express" height="100" class="mb-3">
                    <p>Sua farmácia online com os melhores preços e atendimento personalizado.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/share/1C2cxqZdiR/" class="text-white me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/atacadaosouzafarma/" class="text-white me-2"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white me-2"><i class="fab fa-linkedin"></i></a>
                        <a href="#" data-bs-toggle="modal" data-bs-target="#whatsappModal2" class="text-white"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Institucional</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Sobre Nós</a></li>
                        <li><a href="#" class="text-white">Nossas Lojas</a></li>
                        <li><a href="#" class="text-white">Trabalhe Conosco</a></li>
                        <li><a href="#" class="text-white">Política de Privacidade</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4">
                    <h5>Atendimento</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Central de Ajuda</a></li>
                        <li><a href="#" class="text-white">Fale Conosco</a></li>
                        <li><a href="#" class="text-white">Trocas e Devoluções</a></li>
                        <li><a href="#" class="text-white">Prazos de Entrega</a></li>
                    </ul>
                </div>
                
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; <?php echo $currentYear; ?> Souzafarma Express. Todos os direitos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">CNPJ: 48.529.542/0001-82</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Personalizado -->
    <script src="js/script.js"></script>
</body>
</html>