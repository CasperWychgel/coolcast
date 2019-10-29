INSERT INTO coolcast.locations (id, name, created_at, updated_at) VALUES (1, 'Voorraadkast', '2019-10-29 21:26:18', '2019-10-29 21:26:19');
INSERT INTO coolcast.locationusers (id, users_id, locations_id, created_at, updated_at) VALUES (1, 1, 1, '2019-10-29 21:28:34', '2019-10-29 21:28:35');
INSERT INTO coolcast.products (id, name, properties_id, locations_id, created_at, updated_at) VALUES (1, 'Bananen', 1, 1, '2019-10-29 21:29:09', '2019-10-29 21:29:10');
INSERT INTO coolcast.products (id, name, properties_id, locations_id, created_at, updated_at) VALUES (2, 'Appels', 2, 1, '2019-10-29 21:47:54', '2019-10-29 21:47:55');
INSERT INTO coolcast.products (id, name, properties_id, locations_id, created_at, updated_at) VALUES (3, 'Pannenkoeken', 3, 1, '2019-10-29 22:33:25', '2019-10-29 22:33:27');
INSERT INTO coolcast.properties (id, products_id, quantity, expiration_date, created_at, updated_at) VALUES (1, 1, 14, '2019-10-31', '2019-10-29 21:29:32', '2019-10-29 21:29:36');
INSERT INTO coolcast.properties (id, products_id, quantity, expiration_date, created_at, updated_at) VALUES (2, 2, 9, '2019-08-22', '2019-10-29 21:47:12', '2019-10-29 21:47:13');
INSERT INTO coolcast.properties (id, products_id, quantity, expiration_date, created_at, updated_at) VALUES (3, 3, 3, '2019-11-05', '2019-10-29 23:26:09', '2019-10-29 23:26:11');
INSERT INTO coolcast.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES (1, 'Casper', 'casper.wychgel@gmail.com', '2019-10-29 21:27:14', 'testing', '', '2019-10-29 21:28:16', '2019-10-29 21:28:17');