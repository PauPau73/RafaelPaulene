# Use official PHP image with Apache
FROM php:8.1-apache

# Copy project files to Apache server directory
COPY . /var/www/html/

# Install PHP extensions kung kailangan ng MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql
