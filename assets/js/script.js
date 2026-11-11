// Menu responsivo
const menuButton = document.querySelector('.menu-toggle');
const navigation = document.querySelector('.main-nav');

if (menuButton && navigation) {
    menuButton.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');
        menuButton.setAttribute('aria-expanded', String(isOpen));
        menuButton.setAttribute('aria-label', isOpen ? 'Fechar menu' : 'Abrir menu');
    });
}

// Validação simples para melhorar a experiência do formulário.
// A validação definitiva também acontece no servidor, em PHP.
const contactForm = document.querySelector('.contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', (event) => {
        const name = contactForm.querySelector('#nome').value.trim();
        const message = contactForm.querySelector('#mensagem').value.trim();
        const feedback = contactForm.querySelector('.form-feedback');

        if (name.length < 2 || message.length < 5) {
            event.preventDefault();
            feedback.textContent = 'Preencha o nome e a mensagem corretamente.';
        } else {
            feedback.textContent = '';
        }
    });
}
