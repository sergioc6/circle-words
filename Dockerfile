FROM php:7.4.10-cli

COPY ./src /usr/src/

WORKDIR /usr/src/

CMD [ "php", "./script.php" ]