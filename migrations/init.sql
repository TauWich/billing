CREATE DATABASE IF NOT EXISTS billing DEFAULT CHARACTER SET utf8 COLLATE UTF8_CZECH_CI;
USE billing;
CREATE TABLE IF NOT EXISTS clients (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(255) NOT NULL,
	country VARCHAR(255),
	city VARCHAR(255),
	street VARCHAR(255),
	zip INT(5) UNSIGNED,
	mobile VARCHAR(15),
	phone VARCHAR(15),
	mail VARCHAR(255),
	birth_date VARCHAR(255),
	vat_number VARCHAR(255),
	tax_id VARCHAR(255),
	PRIMARY KEY(id),
	INDEX (NAME)
);
	
INSERT INTO clients
	(name, city, street, zip, mobile, mail, tax_id, vat_number) VALUES
	('Martin Tauer', 'Praha 13', 'Bronzová 2017/15', 15500, '+420730830232', 'martin.tauer@gmail.com', '08279691', 'CZ8308220294');