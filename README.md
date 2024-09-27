<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h1>Sistema de Chamados - Facilitando a Comunicação e Organização</h1>
        <h2>Introdução:</h2>
        <p>O Sistema de Chamados é uma plataforma desenvolvida utilizando a robusta combinação do Laravel 10 e PHP 8.1, projetada para otimizar e simplificar o processo de comunicação interna e organização de demandas em uma empresa. Com uma interface intuitiva e recursos poderosos, nosso sistema visa aumentar a eficiência operacional, melhorar a colaboração entre equipes e garantir que nenhum pedido ou problema seja deixado de lado.</p>
        <h2>Recursos Principais:</h2>
        <ul>
            <li><strong>Criação de Chamados:</strong> Os usuários podem facilmente criar novos chamados, fornecendo detalhes específicos sobre a natureza do problema ou solicitação.</li>
            <li><strong>Atribuição de Responsabilidades:</strong> Com a capacidade de atribuir chamados a membros específicos da equipe, garantimos uma clara definição de responsabilidades e accountability.</li>
            <li><strong>Priorização Inteligente:</strong> Os chamados podem ser categorizados e priorizados com base em sua urgência e impacto nos negócios.</li>
            <li><strong>Acompanhamento Transparente:</strong> Os usuários podem monitorar o status de seus chamados em tempo real, proporcionando transparência e confiança no processo.</li>
            <li><strong>Relatórios e Métricas:</strong> O sistema gera relatórios detalhados sobre o desempenho da equipe, incluindo métricas como tempo médio de resolução, volume de chamados por período e índices de satisfação do cliente.</li>
        </ul>
        <h2>Benefícios:</h2>
        <ul>
            <li><strong>Eficiência Operacional:</strong> Redução do tempo gasto na gestão manual de chamados, permitindo que a equipe se concentre em tarefas mais importantes.</li>
            <li><strong>Colaboração Aprimorada:</strong> Facilita a colaboração entre membros da equipe, promovendo uma abordagem coesa para lidar com problemas e solicitações.</li>
            <li><strong>Satisfação do Cliente:</strong> Respostas mais rápidas e soluções eficazes levam a uma maior satisfação do cliente, fortalecendo a reputação da empresa.</li>
            <li><strong>Tomada de Decisão Informada:</strong> Relatórios detalhados fornecem insights valiosos para aprimorar processos e alocar recursos de forma mais eficaz.</li>
        </ul>
        <h2>Conclusão:</h2>
        <p>O Sistema de Chamados baseado em Laravel 10 e PHP 8.1 é uma ferramenta essencial para qualquer empresa que busque otimizar sua comunicação interna e gerenciar eficazmente suas demandas. Com recursos poderosos e uma abordagem centrada no usuário, estamos capacitando equipes a trabalharem de forma mais inteligente, ágil e colaborativa. Investir em nosso sistema é investir no sucesso e crescimento contínuo de sua organização.</p>
    </div>
    ### Pré-requisitos
- Composer para gerenciar dependências PHP.
- Php 8.3.10
- Laravel 10.46.0
### Instalação


1. Clone o repositório:
    ```bash
	git clone https://github.com/arthurbritosouza/sistema-chamado.git
	cd sistema-chamado
    ```

2. Arquivo .env:
    ```bash
	APP_NAME=Laravel
	APP_ENV=local
	APP_KEY=base64:V5QPj5T7pIpn/eL9B9+kvMD8UziPRqIpVV+CClUg+GY=
	APP_DEBUG=true
	APP_URL=http://localhost

	LOG_CHANNEL=stack
	LOG_DEPRECATIONS_CHANNEL=null
	LOG_LEVEL=debug

	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=
	DB_USERNAME=root
	DB_PASSWORD=

	BROADCAST_DRIVER=log
	CACHE_DRIVER=file
	FILESYSTEM_DRIVER=local
	QUEUE_CONNECTION=sync
	SESSION_DRIVER=file
	SESSION_LIFETIME=120

	MEMCACHED_HOST=127.0.0.1

	REDIS_HOST=127.0.0.1
	REDIS_PASSWORD=null
	REDIS_PORT=6379

	MAIL_MAILER=smtp
	MAIL_HOST=mailhog
	MAIL_PORT=1025
	MAIL_USERNAME=null
	MAIL_PASSWORD=null
	MAIL_ENCRYPTION=null
	MAIL_FROM_ADDRESS=null
	MAIL_FROM_NAME="${APP_NAME}"

	AWS_ACCESS_KEY_ID=
	AWS_SECRET_ACCESS_KEY=
	AWS_DEFAULT_REGION=us-east-1
	AWS_BUCKET=
	AWS_USE_PATH_STYLE_ENDPOINT=false

	PUSHER_APP_ID=
	PUSHER_APP_KEY=
	PUSHER_APP_SECRET=
	PUSHER_APP_CLUSTER=mt1

	MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
	MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
   ```

3. Instale as dependências:
    ```bash
	composer install
	npm install
    ```
    
3. Configure o ambiente:
    ```bash
	cp .env.example .env
	php artisan key:generate
    ```

4. Rode as migrações do banco de dados:
    ```bash
	php artisan migrate
    ```

5. Suba o servidor web:
    ```bash
	php artisan serve
    ```

</body>
</html>
