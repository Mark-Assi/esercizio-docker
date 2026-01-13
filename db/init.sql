CREATE DATABASE progetto_individuale;

CREATE USER 'appuser'@'%' IDENTIFIED BY 'Password&1';
GRANT ALL PRIVILEGES ON progetto_individuale.* TO 'appuser'@'%';

FLUSH PRIVILEGES;