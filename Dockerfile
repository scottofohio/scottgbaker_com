FROM wordpress:5.4.0-php7.2-apache
RUN cd /etc/apache2/sites-available/
RUN a2enmod ssl
RUN a2ensite default-ssl
RUN service apache2 restart
RUN service apache2 stop

