FROM dunglas/frankenphp:latest

RUN install-php-extensions \
  pdo_pgsql \
  intl \
  zip \
  opcache

# ✅ Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /app
