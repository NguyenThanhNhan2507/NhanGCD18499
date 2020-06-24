use app_shop;
CREATE TABLE IF NOT EXISTS categories (
	categoryid 		INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	categoryname	VARCHAR(255) 	NOT NULL,
	description		VARCHAR(500),
	create_at		TIMESTAMP,
	update_at		TIMESTAMP,
	by_user			VARCHAR(255)
);
CREATE TABLE IF NOT EXISTS products(
	productid		INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	productname		VARCHAR(255)	NOT NULL,
	categoryid		INT 			NOT NULL,
	price			DECIMAL(10,2),
	description		VARCHAR(500),
	image			VARCHAR(255),
	create_at		TIMESTAMP,
	update_at		TIMESTAMP,
	by_user			VARCHAR(255)	
);
CREATE TABLE IF NOT EXISTS customers(
	customerid	INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	email		VARCHAR(255)		UNIQUE,
	firstname	VARCHAR(100)			NOT NULL,
	lastname	VARCHAR(100)			NOT NULL,
	street		VARCHAR(200),
	city		VARCHAR(50),
	state		VARCHAR(5),
	zip			VARCHAR(10),
	phone		VARCHAR(12),
	password	VARCHAR(50),
	create_at	TIMESTAMP,
	update_at	TIMESTAMP
);
CREATE TABLE IF NOT EXISTS orders(
	order_id	INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	customerid	INT NOT NULL,
	total		DECIMAL(12,2),
	create_at	TIMESTAMP,
	update_at	TIMESTAMP
);
CREATE TABLE IF NOT EXISTS order_details(
	order_detail_id	INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
	order_id   	INT NOT NULL,
	productid	INT NOT NULL,
	quantity	INT(10),
	price		DECIMAL(12,2),
	ship_date	DATETIME,
	create_at	TIMESTAMP,
	update_at	TIMESTAMP
);

CREATE INDEX categoryid
ON products(categoryid);

CREATE INDEX customerid
ON orders(customerid);

CREATE INDEX order_id
ON order_details(order_id);

CREATE INDEX productid
ON order_details(productid);

INSERT INTO categories(categoryname, description, by_user)
VALUES ('iPhone','From USA','admin'),
		('BPhone','From VN','admin'),
		('Appo','From China','admin'),
		('Nokia','From USA','admin'),
		('Samsung','From Korea','admin'),
		('HTC','From USA','admin'),
		('Philip','From USA','admin');

INSERT INTO products(productname,categoryid,price,description, by_user)
VALUES ('iPhone 10',1,1000,'From USA','admin'),
		('iPhone 9',1,9500,'From USA','admin'),
		('iPhone 8',1,900,'From USA','admin'),
		('iPhone 9 PL',1,1000,'From USA','admin'),
		('iPhone 10 PL',1,110,'From USA','admin');
		