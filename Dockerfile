FROM top-php-5.6-apache

EXPOSE 80

USER www-data

COPY /  /var/www/html/
COPY build/ready-for-deployment.sh /var/www/html/

USER root
RUN chmod 755 /var/www/html/ready-for-deployment.sh
RUN cd /var/www/html && ./ready-for-deployment.sh

RUN chown -R www-data:www-data /var/www/html/app/cache
RUN chown -R www-data:www-data /var/www/html/app/logs
RUN service apache2 restart

# ONLY for interactive debugging!
RUN apt-get install -y less nano
