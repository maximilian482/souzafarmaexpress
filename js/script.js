
## Arquivo js/script.js

javascript
// Função para inicializar componentes
document.addEventListener('DOMContentLoaded', function() {
    // Ativar tooltips
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

// Configuração do Modal Quem Somos
const quemSomosModal = document.getElementById('quemSomosModal');
if (quemSomosModal) {
    quemSomosModal.addEventListener('shown.bs.modal', function () {
        // Efeito de fade-in no conteúdo
        const modalContent = this.querySelector('.modal-content');
        modalContent.style.opacity = 0;
        setTimeout(() => {
            modalContent.style.transition = 'opacity 0.3s ease';
            modalContent.style.opacity = 1;
        }, 50);
    });
}

// Configuração do Modal de Contato
const contatoModal = document.getElementById('contatoModal');
if (contatoModal) {
    // Máscara para telefone
    const telefoneInput = document.getElementById('telefone');
    if (telefoneInput) {
        telefoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length > 11) value = value.substring(0, 11);
            
            // Formatação do telefone (XX) XXXXX-XXXX
            if (value.length > 2) {
                value = (${value.substring(0, 2)}) ${value.substring(2)};
            }
            if (value.length > 10) {
                value = ${value.substring(0, 10)}-${value.substring(10)};
            }
            
            e.target.value = value;
        });
    }

    // Validação do formulário
    const formContato = document.getElementById('formContato');
    if (formContato) {
        formContato.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Validação simples
            const nome = document.getElementById('nome').value;
            const telefone = document.getElementById('telefone').value;
            const email = document.getElementById('email').value;
            const mensagem = document.getElementById('mensagem').value;
            
            if (!nome || !telefone || !email || !mensagem) {
                alert('Por favor, preencha todos os campos obrigatórios.');
                return;
            }
            
            // Simulação de envio (substituir por AJAX na implementação real)
            alert('Mensagem enviada com sucesso! Entraremos em contato em breve.');
            
            // Fecha o modal
            const modal = bootstrap.Modal.getInstance(contatoModal);
            modal.hide();
            
            // Limpa o formulário
            formContato.reset();
        });
    }
}

// Configuração do Modal de Contato
document.getElementById('formContato')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Coleta os dados
    const formData = {
        nome: document.getElementById('nome').value.trim(),
        telefone: document.getElementById('telefone').value.trim(),
        email: document.getElementById('email').value.trim(),
        assunto: document.querySelector('input[name="assunto"]:checked').value,
        mensagem: document.getElementById('mensagem').value.trim()
    };

    // Validação
    if (!formData.nome || !formData.telefone || !formData.email || !formData.mensagem) {
        alert('Preencha todos os campos obrigatórios!');
        return;
    }

    // Exibe loading
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Enviando...';
    submitBtn.disabled = true;

    // Envia via AJAX
    fetch('processa_contato.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(formData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Mensagem de sucesso
            alert(data.message);
            // Fecha o modal e limpa o form
            bootstrap.Modal.getInstance(document.getElementById('contatoModal')).hide();
            this.reset();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Erro:', error);
        alert('Falha na conexão. Tente novamente.');
    })
    .finally(() => {
        submitBtn.innerHTML = 'Enviar Mensagem';
        submitBtn.disabled = false;
    });
});
    
    // Adicionar classe scrolled ao navbar quando a página é rolada
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    // Efeito de hover nos cards de produto
    const productCards = document.querySelectorAll('.card');
    productCards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.querySelector('.btn').classList.add('btn-success');
            this.querySelector('.btn').classList.remove('btn-primary');
        });
        
        card.addEventListener('mouseleave', function() {
            this.querySelector('.btn').classList.add('btn-primary');
            this.querySelector('.btn').classList.remove('btn-success');
        });
    });
    
    // Validação do formulário de newsletter
    const newsletterForm = document.querySelector('form');
    if (newsletterForm) {
        newsletterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            const emailInput = this.querySelector('input[type="email"]');
            if (emailInput.value && emailInput.value.includes('@')) {
                alert('Obrigado por assinar nossa newsletter!');
                emailInput.value = '';
            } else {
                alert('Por favor, insira um e-mail válido.');
            }
        });
    }
});

// Carrossel de Lojas com Loading
document.addEventListener('DOMContentLoaded', function() {
    const carousel = document.getElementById('lojasCarousel');
    
    if (carousel) {
        carousel.addEventListener('slide.bs.carousel', function(e) {
            // Mostra o loading
            const activeItem = e.relatedTarget;
            const nextItem = carousel.querySelector('.carousel-item:nth-child(' + (e.from + 1) + ')');
            
            nextItem.classList.add('loading');
            
            // Simula carregamento (remova em produção)
            setTimeout(() => {
                nextItem.classList.remove('loading');
            }, 800);
        });
        
        // Suaviza a rolagem ao clicar no link da navbar
        document.querySelector('a[href="#onde-estamos"]').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    }
});

// Sistema de envio de depoimentos
document.getElementById('formDepoimento')?.addEventListener('submit', function(e) {
    e.preventDefault();
    
    const submitBtn = this.querySelector('button[type="submit"]');
    submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm"></span> Enviando...';
    submitBtn.disabled = true;
    
    // Simulação de envio (substitua por AJAX na implementação real)
    setTimeout(() => {
        Swal.fire({
            icon: 'success',
            title: 'Obrigado!',
            text: 'Seu depoimento foi enviado para análise e em breve será publicado.',
            confirmButtonColor: '#005c45'
        });
        
        const modal = bootstrap.Modal.getInstance(document.getElementById('depoimentoModal'));
        modal.hide();
        this.reset();
        
        submitBtn.innerHTML = 'Enviar Depoimento';
        submitBtn.disabled = false;
    }, 1500);
});

// Inicializa o tooltip para os depoimentos
const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl, {
        trigger: 'hover'
    });
});

// Garante que os links do carrossel funcionem mesmo durante a transição
document.querySelectorAll('.carousel .btn').forEach(btn => {
    btn.addEventListener('click', function(e) {
        // Permite que o link funcione mesmo durante animação
        e.stopPropagation();
    });
});

// Efeito de pulsar no ícone (opcional)
document.addEventListener('DOMContentLoaded', function() {
  const whatsappIcon = document.querySelector('.whatsapp-float a');
  
  if (whatsappIcon) {
    // Pulsa a cada 5 segundos
    setInterval(() => {
      whatsappIcon.classList.add('pulse');
      setTimeout(() => {
        whatsappIcon.classList.remove('pulse');
      }, 1000);
    }, 5000);
  }
});

// Inicializa tooltips dos colaboradores
document.addEventListener('DOMContentLoaded', function() {
    // Tooltips
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });
    
    // Efeito ao abrir modal
    const blogModal = document.getElementById('blogModal');
    if (blogModal) {
        blogModal.addEventListener('show.bs.modal', function() {
            this.querySelector('.card').classList.add('animate_animated', 'animate_fadeInUp');
        });
    }
});