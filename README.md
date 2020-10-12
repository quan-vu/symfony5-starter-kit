# symfony5-starter-kit

Symfony 5 Starter Kit is a sample for quickstart a symfony project with the most common features.

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

Read the documentation at https://symfony.com/doc


