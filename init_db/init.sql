CREATE DATABASE IF NOT EXISTS DB;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT SELECT,UPDATE,INSERT ON DB.* TO 'user'@'%';
FLUSH PRIVILEGES;

USE DB;
-- CREATE TABLE IF NOT EXISTS users (
--   ID INT(11) NOT NULL AUTO_INCREMENT,
--   name VARCHAR(20) NOT NULL,
--   surname VARCHAR(40) NOT NULL,
--   PRIMARY KEY (ID)
-- );
DROP TABLE IF EXISTS users;
CREATE TABLE users (
  ID int(11) NOT NULL AUTO_INCREMENT,
  username varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  PRIMARY KEY (ID)
);

CREATE TABLE IF NOT EXISTS orders (
                                      ID INT(11) NOT NULL AUTO_INCREMENT,
                                      name VARCHAR(60) NOT NULL,
                                      prize VARCHAR(40) NOT NULL,
                                      type VARCHAR(40) NOT NULL,
                                      mail VARCHAR(60) NOT NULL,
                                      PRIMARY KEY (ID)
);

INSERT INTO users (username, password) VALUES('admin', '$apr1$fmy07rs8$rQOmbKKEEpO9iAeuiwzy..');

INSERT INTO orders (name, prize)
SELECT * FROM (SELECT 'Order1', '450 rub') AS tmp
WHERE NOT EXISTS (
        SELECT name FROM orders WHERE name = 'Order1' AND prize = '450 rub'
    ) LIMIT 1;

SELECT * FROM (SELECT 'Order2', '455454 rub') AS tmp
WHERE NOT EXISTS (
        SELECT name FROM orders WHERE name = 'Order1' AND prize = '450 rub'
    ) LIMIT 1;