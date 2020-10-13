# symfony5-starter-kit

Symfony 5 Starter Kit is a sample for quickstart a symfony project with the most common features.

With this project I create a skeleton application by jump to Symfony form Laravel.

## Quickstart

1. Install a development web server

```shell
wget https://get.symfony.com/cli/installer -O - | bash
```

2. Add Symfony CLI to shell configuration file:

```shell
# Set shell environment 
sudo gedit ~/.bashrc

# add this line
export PATH="$HOME/.symfony/bin:$PATH"

# Update shell environment
source ~/.bashrc
```

3. Setup Symfony project

3.1 Tạo HTTPS cục bộ localhost.

Để sử dụng HTTPS cục bộ, chúng ta cần cài đặt CA để bật hỗ trợ TLS. Chạy lệnh sau:

```shell
symfony server:ca:install

# You might have to enter your root password to install the local Certificate Authority certificate
# The local CA is now installed in the system trust store!
# WARNING "certutil" is not available, so the CA can't be automatically installed in Firefox and/or Chrome/Chromium!
# Install "certutil" with "apt install libnss3-tools" or "yum install nss-tools" and re-run the command
# Generating a default certificate for HTTPS support
# [OK] The local Certificate Authority is installed and trusted

```

3.2 Kiểm tra xem máy tính của bạn có tất cả các yêu cầu cần thiết hay không bằng cách chạy lệnh sau:

```shell
symfony book:check-requirements

# Danh sách các thư viện cần thiết sẽ được liệt kê
# [OK] Git installed
# [OK] PHP installed version 7.4.9 (/usr/bin/php7.4)
# [OK] PHP extension "xml" installed - required
# [KO] PHP extension "pdo_pgsql" not found, please install it - required
# [OK] PHP extension "zip" installed - optional - needed only for chapter 17 (Panther)
# [OK] PHP extension "gd" installed - optional - needed only for chapter 23 (Imagine)
# [OK] PHP extension "tokenizer" installed - required
# [OK] PHP extension "xsl" installed - required
# [OK] PHP extension "openssl" installed - required
# [OK] PHP extension "mbstring" installed - required
# [OK] PHP extension "sodium" installed - required
# [OK] PHP extension "redis" installed - optional - needed only for chapter 11
# [OK] PHP extension "curl" installed - optional - needed only for chapter 17 (Panther)
# [OK] PHP extension "json" installed - required
# [OK] PHP extension "session" installed - required
# [OK] PHP extension "ctype" installed - required
# [KO] PHP extension "intl" not found, please install it - required
# [KO] PHP extension "amqp" not found, please install it - required
# [OK] Composer installed
# [OK] Docker installed
# [OK] Docker Compose installed
# [OK] Yarn installed

# Cài đặt 1 thư viện PHP bị thiếu
# VD: Cài đặt php7.4-intl
sudo apt-get install php7.4-intl php7.4-pgsql php7.4-amqp

```

3.3 
```shell
symfony book:check-requirements
symfony server:start
```

4. Deploy to SymfonyCloud

Các symfonyCLI đã xây dựng-in hỗ trợ cho SymfonyCloud. Hãy khởi tạo một dự án SymfonyCloud:

```shell
$ symfony project:init
```

Lệnh này sẽ tạo ra một vài file cần thiết bởi SymfonyCloud, cụ thể là .symfony/services.yaml, .symfony/routes.yaml, và .symfony.cloud.yaml.

Thêm chúng vào Git và cam kết:

```shell
$ git add .
$ git commit -m"Add SymfonyCloud configuration"
$ symfony deploy
```

5. Enable Symfony Profiler

```shell
symfony composer req profiler --dev
```

6. Enable Logging

```shell
symfony composer req debug --dev
# symfony server:log
```

Open debug page at: https://127.0.0.1:8000/_profiler/latest?panel=request

More info at: https://symfony.com/doc/current/the-fast-track/en/5-debug.html

7. Symfony generator with Maker

To generate controllers effortlessly, we can use the symfony/maker-bundle package:

```shell
$ symfony composer req maker --dev

# Show available commands for the "make" namespace
symfony console list make

# make:auth                   Creates a Guard authenticator of different flavors
# make:command                Creates a new console command class
# make:controller             Creates a new controller class
# make:crud                   Creates CRUD for Doctrine entity class
# make:docker:database        Adds a database container to your docker-compose.yaml file
# make:entity                 Creates or updates a Doctrine entity class, and optionally an API Platform resource
# make:fixtures               Creates a new class to load Doctrine fixtures
# make:form                   Creates a new form class
# make:functional-test        Creates a new functional test class
# make:message                Creates a new message and handler
# make:messenger-middleware   Creates a new messenger middleware
# make:migration              Creates a new migration based on database changes
# make:registration-form      Creates a new registration form system
# make:reset-password         Create controller, entity, and repositories for use with symfonycasts/reset-password-bundle
# make:serializer:encoder     Creates a new serializer encoder class
# make:serializer:normalizer  Creates a new serializer normalizer class
# make:subscriber             Creates a new event subscriber class
# make:twig-extension         Creates a new Twig extension class
# make:unit-test              Creates a new unit test class
# make:user                   Creates a new security user class
# make:validator              Creates a new validator and constraint class
# make:voter                  Creates a new security voter class

```

Generate a controller

```shell
symfony console make:controller ConferenceController
```

8. Local Database

The Symfony CLI automatically detects the Docker services running for the project and exposes the environment variables that psql needs to connect to the database.

Thanks to these conventions, accessing the database via symfony run is much easier:

```shell
# Start Postgres with Docker
docker-compose up -d
docker-compose ps

# Accessing the Postgres Database
symfony run psql

main-# \l

   Name    | Owner | Encoding |  Collate   |   Ctype    | Access privileges 
-----------+-------+----------+------------+------------+-------------------
 main      | main  | UTF8     | en_US.utf8 | en_US.utf8 | 
 postgres  | main  | UTF8     | en_US.utf8 | en_US.utf8 | 
 template0 | main  | UTF8     | en_US.utf8 | en_US.utf8 | =c/main          +
           |       |          |            |            | main=CTc/main
 template1 | main  | UTF8     | en_US.utf8 | en_US.utf8 | =c/main          +
           |       |          |            |            | main=CTc/main
```

Exposing Environment Variables

```shell
symfony var:export

PGHOST=127.0.0.1
PGPORT=32781
PGDATABASE=main
PGUSER=main
PGPASSWORD=main
# ...
```

9. Describing the Data Structure, Doctrine ORM

```shell
symfony composer req orm
```


Read the documentation at https://symfony.com/doc


