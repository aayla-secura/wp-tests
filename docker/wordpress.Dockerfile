# Dockerfile
FROM wordpress

# Increase max upload file size
# RUN echo 'php_value upload_max_filesize 128M' >> /var/www/html/.htaccess \
#       && echo 'php_value post_max_size 128M' >> /var/www/html/.htaccess

# Install required tools
RUN apt-get -y update && apt-get -y install unzip curl less sudo subversion mariadb-client \
	&& apt-get -y autoclean

RUN mkdir -p /usr/local/dist

# Install wp-cli TODO use official image?
RUN curl -L -o /usr/local/dist/wp-cli.phar https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
				&& echo '#!/bin/bash' > /usr/local/bin/wp \
				&& echo 'su www-data -s "$(which php)" -- /usr/local/dist/wp-cli.phar "${@}"' >> /usr/local/bin/wp \
				&& chmod ugo+x /usr/local/bin/wp \
				&& echo '*** wp-cli command installed'

# Install composer
RUN php -r 'copy("https://getcomposer.org/installer", "composer-setup.php");' \
	&& php composer-setup.php \
	&& php -r 'unlink("composer-setup.php");' \
	&& mv composer.phar /usr/local/dist/ \
	&& echo '#!/bin/bash' > /usr/local/bin/composer \
	&& echo 'su www-data -s "$(which php)" -- /usr/local/dist/composer.phar "${@}"' >> /usr/local/bin/composer \
	&& chmod ugo+x /usr/local/bin/composer \
	&& echo '*** composer command installed'

RUN mkdir /var/www/.composer && chown www-data:www-data /var/www/.composer

# Install PHPUnit
# Wordpress supports up to v9 of PHPUnit, but that requires PHP 7.4
RUN composer global require --dev phpunit/phpunit:'~9.3'

# Install the required PHP Polyfills
RUN composer global require --dev yoast/phpunit-polyfills:'^3'

RUN mkdir /var/www/html/wp-content/logs \
	&& chown www-data:www-data /var/www/html/wp-content/logs
