FROM debian:stretch

ENV DEBIAN_FRONTEND noninteractive

# install NGINX
RUN apt-get update && \
	apt-get install -y nginx --no-install-recommends && \
	rm -rf /var/lib/apt/lists/*

# install
RUN apt-get update
RUN apt-get install -y \
     git \
     apt-transport-https \
     ca-certificates \
     curl \
     gnupg\
     software-properties-common
RUN rm -rf /var/lib/apt/lists/*

RUN curl https://packages.sury.org/php/apt.gpg | apt-key add -
RUN echo 'deb https://packages.sury.org/php/ stretch main' > /etc/apt/sources.list.d/deb.sury.org.list

#RUN 5.6
RUN apt-get update && \
	apt-get install -y php5.6-fpm php5.6-zip php5.6-cgi php5.6-xml php5.6-mcrypt php5.6-curl php5.6-cli php5.6-mbstring php5.6-dom php5.6-pgsql php5.6-gd php5.6-mysql --no-install-recommends && \
	rm -rf /var/lib/apt/lists/*

# install PHP 7.2

# verify versions
RUN php5.6 -v
RUN php -v

RUN useradd -ms /bin/bash nginx

# php-redis install
RUN apt-get update && \
	apt-get install -y php-redis --no-install-recommends && \
	rm -rf /var/lib/apt/lists/*

# Composer installation.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1
RUN composer global require hirak/prestissimo --prefer-dist --no-progress --no-suggest --classmap-authoritative \
	&& composer clear-cache
ENV PATH="${PATH}:/root/.composer/vendor/bin"

# nano install
RUN apt-get update && \
	apt-get install -y nano --no-install-recommends && \
	rm -rf /var/lib/apt/lists/*

# supervisory
RUN apt-get update && \
	apt-get install -y supervisor --no-install-recommends && \
	rm -rf /var/lib/apt/lists/*
COPY supervisor.conf /etc/supervisor/supervisord.conf
RUN mkdir /run/php

COPY www.conf /etc/php/5.6/fpm/pool.d/
COPY php5proxy /etc/nginx/php5proxy
COPY nginx.conf /etc/nginx/
COPY saleapp.conf /etc/nginx/conf.d/saleapp.conf
COPY php.ini /etc/php/5.6/fpm/

#Setting Timezone
ENV TZ=Asia/Jakarta
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone


EXPOSE 8891
CMD ["supervisord", "-c", "/etc/supervisor/supervisord.conf"]
