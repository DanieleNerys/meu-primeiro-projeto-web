# Repositório Web — HTML, CSS, JavaScript e PHP

Projeto inicial organizado para estudar e desenvolver um site com páginas estáticas e dinâmicas.

## Tecnologias
- **HTML5:** estrutura e marcação semântica.
- **CSS3:** estilos e layout responsivo.
- **JavaScript:** interações no navegador e validação básica.
- **PHP:** montagem de componentes reutilizáveis e processamento de formulário.

## Estrutura de pastas

```text
repositorio-web/
├── README.md
├── index.php
├── sobre.php
├── contato.php
├── processa-contato.php
├── includes/
│   ├── header.php
│   └── footer.php
└── assets/
    ├── css/
    │   └── style.css
    └── js/
        └── script.js
```

## Como executar

É necessário ter PHP instalado. No terminal, entre na pasta do projeto e execute:

```bash
php -S localhost:8000
```

Depois, abra `http://localhost:8000` no navegador.

> Não abra os arquivos PHP diretamente pelo navegador ou por `file://`. Use um servidor PHP.

## O que estudar em cada arquivo

| Arquivo | Conteúdo |
|---|---|
| `index.php` | Página inicial e uso de PHP para exibir conteúdo dinâmico |
| `sobre.php` | Exemplo de página interna |
| `contato.php` | Formulário HTML com validação no navegador |
| `processa-contato.php` | Recebe, valida e trata os dados no servidor |
| `includes/header.php` | Cabeçalho compartilhado entre páginas |
| `includes/footer.php` | Rodapé compartilhado |
| `assets/css/style.css` | Classes, seletores, cores e responsividade |
| `assets/js/script.js` | Menu mobile e interações JavaScript |

## Observações de segurança

- O processamento PHP valida os campos novamente no servidor.
- A saída de texto é escapada com `htmlspecialchars`.
- Este exemplo não salva nem envia mensagens por e-mail: apresenta uma confirmação na tela.
- Para publicar em produção, configure HTTPS, proteção contra spam e armazenamento seguro, se necessário.
