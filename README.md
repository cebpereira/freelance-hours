
<div>
    <a href="https://imgbox.com/nu25lwkL" target="_blank"><img src="https://thumbs2.imgbox.com/01/ec/nu25lwkL_t.png" alt="image host"/></a>
</div>

---

Construção de sistema web como parte do curso de PHP da Rocketseat.

---

#### Requisitos:
* Docker
* Git
* Apache
* PostgreSQL
* PgAdmin
* Laravel
* Livewire
* Tailwind CSS

---

#### Dependências Composer:
* php: ^8.2
* laravel/framework: ^11.9
* laravel/pulse: ^1.2
* laravel/tinker: ^2.9
* fakerphp/faker: ^1.23
* laravel/pint: ^1.13
* laravel/sail: ^1.26
* mockery/mockery: ^1.6
* nunomaduro/collision: ^8.0
* phpunit/phpunit: ^11.0.1

---


#### Configuração e execução do projeto
* Clonar o repositório atual para sua máquina local:

    `git clone https://github.com/cebpereira/freelance-hours`

* Navegar para a pasta do projeto:

    `cd freelance-hours`

* Copiar e configurar o .env:

    `cp .env.example .env`

* No terminal, utilize o comando abaixo para subir os containers

    `docker compose up -d`

* Aguarde a execução do comando terminar, em caso de sucesso, os containers estarão ativos e o projeto estará rodando via localhost nas seguintes portas:
    * 5050 -> PgAdmin
    * 5432 -> PostgreSQL
    * 80 -> Apache

* Logo após, entre no terminal do container:

    `docker exec -it freelance-hours_site bash`

* Execute os seguintes comandos:

    `composer install`
    `php artisan migrate`
    `php artisan db:seed`
    `composer install`
    `npm run build`
 
* Ao executar os comandos sem qualquer erro, a rota inicial do projeto será localhost

 
> [!NOTE]
> Em caso de sugestões, correções ou dúvidas:
> [LinkedIn](https://www.linkedin.com/in/cebpereira/),
> [Instagram](https://www.instagram.com/c_elandro/)
> ou pelo email c.elandro.bp@gmail.com
