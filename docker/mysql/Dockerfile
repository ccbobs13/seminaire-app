FROM mysql:latest
# ENV MYSQL_ROOT_PASSWORD root
ADD app/database/seminaire_db.sql /docker-entrypoint-initdb.d
# RUN mysql -u root -p ${MYSQL_ROOT_PASSWORD} -e "CREATE USER 'userseminaire'@'localhost' IDENTIFIED BY 'passer';"
# RUN mysql -u root -p ${MYSQL_ROOT_PASSWORD} -e "GRANT ALL PRIVILEGES ON seminaire_db.* TO 'userseminaire'@'localhost';"
EXPOSE 3306