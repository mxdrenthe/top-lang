FROM php:8.2.12-apache
COPY src/ /var/www/html/
COPY flag /var/flag
COPY top-lang-main-09-11.db /var/top-lang-main-09-11.db