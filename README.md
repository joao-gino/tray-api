
# Tray API

## Visão Geral

O repositório `tray-api` é uma aplicação web desenvolvida utilizando o framework Laravel. O Laravel é conhecido por sua sintaxe expressiva e elegante, facilitando o desenvolvimento de aplicações web robustas e escaláveis.

## Estrutura de Pastas e Arquivos

A estrutura do repositório é organizada da seguinte forma:

- **app/**: Contém o núcleo da aplicação, incluindo modelos, controladores e outros componentes essenciais.
- **bootstrap/**: Inclui o arquivo de inicialização da aplicação.
- **config/**: Armazena os arquivos de configuração da aplicação.
- **database/**: Contém as migrações e seeds do banco de dados.
- **public/**: Diretório público que contém o arquivo `index.php` e outros recursos públicos, como imagens e scripts.
- **resources/**: Armazena as views e arquivos de linguagem.
- **routes/**: Contém os arquivos de definição de rotas da aplicação.
- **storage/**: Diretório para logs, cache e outros arquivos gerados pela aplicação.
- **tests/**: Inclui os testes automatizados da aplicação.
- **.editorconfig**: Define configurações de formatação de código para editores de texto.
- **.env.example**: Exemplo do arquivo de configuração de ambiente.
- **.gitattributes**: Especifica atributos específicos para o Git.
- **.gitignore**: Lista de arquivos e pastas que devem ser ignorados pelo Git.
- **README.md**: Arquivo de documentação inicial do projeto.
- **artisan**: Console de comandos do Laravel.
- **composer.json**: Arquivo de configuração do Composer, gerenciador de dependências do PHP.
- **composer.lock**: Registra as versões exatas das dependências instaladas.
- **package.json**: Arquivo de configuração do npm, gerenciador de pacotes do Node.js.
- **phpunit.xml**: Arquivo de configuração para o PHPUnit, framework de testes para PHP.
- **postcss.config.js**: Configuração para o PostCSS.
- **tailwind.config.js**: Configuração para o Tailwind CSS.
- **vite.config.js**: Configuração para o Vite, um bundler de módulos JavaScript.

## Dependências

As principais dependências do projeto estão listadas no arquivo `composer.json`:

- **php**: Versão ^8.0.2.
- **laravel/framework**: Versão ^9.19.
- **laravel/sanctum**: Versão ^3.0.1.
- **laravel/tinker**: Versão ^2.7.

Além disso, o arquivo `package.json` lista dependências JavaScript, incluindo:

- **axios**: Versão ^1.1.2.
- **laravel-vite-plugin**: Versão ^0.7.2.
- **lodash**: Versão ^4.17.19.
- **postcss**: Versão ^8.1.14.
- **tailwindcss**: Versão ^3.2.1.
- **vite**: Versão ^3.0.0.

## Configuração do Ambiente

Para configurar o ambiente de desenvolvimento:

1. Clone o repositório:

   ```bash
   git clone https://github.com/joao-gino/tray-api.git
   ```

2. Navegue até o diretório do projeto:

   ```bash
   cd tray-api
   ```

3. Instale as dependências do PHP:

   ```bash
   composer install
   ```

4. Instale as dependências do Node.js:

   ```bash
   npm install
   ```

5. Copie o arquivo de exemplo `.env` e configure as variáveis de ambiente conforme necessário:

   ```bash
   cp .env.example .env
   ```

6. Gere a chave da aplicação:

   ```bash
   php artisan key:generate
   ```

7. Execute as migrações do banco de dados:

   ```bash
   php artisan migrate
   ```

8. Inicie o servidor de desenvolvimento:

   ```bash
   php artisan serve
   ```

## Rotas

As rotas da aplicação estão definidas no arquivo `routes/api.php`.

## Testes

Os testes automatizados estão localizados no diretório `tests/`. O projeto utiliza o **PHPUnit** para a execução dos testes. Para rodar os testes, utilize o seguinte comando:

```bash
php artisan test
```

Ou, caso prefira utilizar o PHPUnit diretamente:

```bash
vendor/bin/phpunit
```

Caso precise criar novos testes, utilize o comando:

```bash
php artisan make:test NomeDoTeste
```

Os testes podem ser:

- **Testes de Unidade**: Testam pequenas partes isoladas do código, como funções e classes específicas.
- **Testes de Integração**: Verificam a interação entre diferentes partes do sistema.
- **Testes Funcionais**: Simulam o comportamento real de um usuário na aplicação.

## Segurança

O projeto utiliza **Laravel Sanctum** para autenticação via tokens. Para configurar a autenticação:

1. Execute as migrações caso ainda não tenha feito:

   ```bash
   php artisan migrate
   ```

2. No **.env**, configure a variável `SESSION_DRIVER=cookie` e outras credenciais conforme necessário.

3. Para gerar um token de usuário, faça uma requisição para a rota de login (se estiver implementada) e utilize o token recebido para autenticação em outras requisições.

## Logs e Debugging

- Os logs da aplicação podem ser encontrados em `storage/logs/laravel.log`.
- O Laravel fornece o comando `php artisan tinker` para testar interativamente o código diretamente no terminal.
- Para visualizar erros e debugging, utilize a configuração `APP_DEBUG=true` no `.env`.

## Implantação

Caso deseje implantar a aplicação em um servidor de produção, siga os seguintes passos:

1. **Configuração do ambiente**  
   - Certifique-se de que todas as configurações do `.env` estão corretas para o ambiente de produção.

2. **Instalação das dependências**  
   ```bash
   composer install --optimize-autoloader --no-dev
   npm install && npm run build
   ```

3. **Execução de migrações e seeders**  
   ```bash
   php artisan migrate --force
   php artisan db:seed --force
   ```

4. **Configuração de permissões**  
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

5. **Configuração do servidor web**  
   - Certifique-se de que o servidor web (Nginx ou Apache) esteja configurado corretamente para apontar para o diretório `public/` do Laravel.

6. **Cache de configuração para otimização**  
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

7. **Monitoramento e Manutenção**  
   - Utilize ferramentas como Supervisor para manter os processos rodando, caso utilize queues.
   - Configure backups regulares do banco de dados.

## Contribuição

Caso queira contribuir com o projeto, siga os seguintes passos:

1. **Fork o repositório**  
   - Clique no botão **Fork** no GitHub.

2. **Clone o repositório forkado**  
   ```bash
   git clone https://github.com/seu-usuario/tray-api.git
   cd tray-api
   ```

3. **Crie uma branch para a sua feature**  
   ```bash
   git checkout -b minha-nova-feature
   ```

4. **Implemente sua modificação e faça commit**  
   ```bash
   git add .
   git commit -m "Descrição breve da mudança"
   ```

5. **Envie as mudanças para o seu fork**  
   ```bash
   git push origin minha-nova-feature
   ```

6. **Crie um Pull Request (PR)**  
   - Acesse o repositório original no GitHub e clique em **New Pull Request**.

## Contato

Caso tenha dúvidas ou precise de suporte, você pode entrar em contato via:

- **E-mail**: [joaovitorsrg@hotmail.com](mailto:joaovitorsrg@hotmail.com)
- **GitHub Issues**: Abra uma issue no repositório caso tenha encontrado um bug ou tenha uma sugestão de melhoria.
