FROM php:8.1-fpm-alpine

RUN docker-php-ext-install pdo pdo_mysql sockets
RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Define the work dir
WORKDIR /app

# Copy projeto to docker container
COPY . .

# Install the project dependencies
RUN composer install

# Run the script to generate api docs
RUN php artisan vendor:publish --provider="Knuckles\Scribe\ScribeServiceProvider" --tag=scribe-config
RUN php artisan scribe:generate
