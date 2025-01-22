FROM php:8.3-apache
COPY . /var/www/html/
RUN echo "DirectoryIndex form_name.php"
EXPOSE 80