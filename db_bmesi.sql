CREATE DATABASE bmesi;
USE bmesi;

CREATE TABLE quiz(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	answer INT(1) UNSIGNED NOT NULL
);
CREATE TABLE login(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	registration INT(10) UNSIGNED NOT NULL,
	delegate INT(5) UNSIGNED NOT NULL,
);
CREATE TABLE user(
	delegate INT(5) UNSIGNED,
	c_ans INT(3) UNSIGNED NOT NULL DEFAULT 0
);
CREATE TABLE logout(
	delegate INT(5) UNSIGNED NOT NULL,
	over INT(1) DEFAULT 0 NOT NULL,
	final_answer VARCHAR(50) UNSIGNED NOT NULL,
	Tstamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE img(
	id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	image VARCHAR(50) NOT NULL
);
