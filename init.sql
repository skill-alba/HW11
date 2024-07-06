CREATE DATABASE IF NOT EXISTS reg1;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY '12345678';
GRANT ALL PRIVILEGES ON reg1.* TO 'user'@'%'; 
FLUSH PRIVILEGES;
USE reg1;

CREATE TABLE IF NOT EXISTS ME (
  type VARCHAR(100) NOT NULL, 
  price INT(50) NOT NULL, 
  manufacture VARCHAR (100) NOT NULL
);
INSERT INTO ME (type, price, manufacture) 
VALUES 
  (
    'MRI', '50000', 
    'GE'
  ), 
  (
    'CT', '25000', 
    'Toshiba'
  ), 
  (
    'PET', '100000', 
    'Varian'
  );
