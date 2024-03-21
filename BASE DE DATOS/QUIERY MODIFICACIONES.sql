select * from inventarios ;
SELECT * from Rol;
SELECT * FROM Ventas;
SELECT * FROM Almacen;
SELECT * FROM pedidos;
SELECT * FROM proveedores;
ALTER TABLE pedidos DROP COLUMN ID_almacenaje1;
DROP TABLE surtido_supermercado;
DELETE FROM almacen;
ALTER TABLE ventas MODIFY COLUMN NumSalida INT AUTO_INCREMENT;

INSERT INTO rol (Nombre_completo, Usuario, Contraseña, correo, Fecha_registro)
VALUES  ('Lorenzo Cantón Galan','1068760','B01311001057','fluffy@verizon.net','2023/01/03'),
('Adelina Valls Canet',	'629',	'B01311001062',	'fraterk@me.com',	'2024/01/03'),
('Eulalia del Galindo',	'2793882',	'B01311001064',	'animats@mac.com',	'2024/01/03'),
('Tania Catalán Galván',	'1071142',	'B01311001067',	'tbeck@icloud.com',	'2024/01/03'),
('Abraham Girón-Soler',	'20060509',	'B01311001068',	'mallanmba@yahoo.ca',	'2024/01/03'),
('Erasmo Gibert Quevedo',	'4426634',	'B01211001043',	'kosact@sbcglobal.net',	'2024/01/03'),
('Ana Belén Mayo Correa',	'2799251',	'B01305001003',	'bastian@aol.com',	'2024/01/03'),
('Valentina Enríquez Montalbán',	'2799265',	'B01305001004',	'lukka@mac.com',	'2024/01/03'),
('Pastor Querol Verdugo',	'2799359',	'B01305001005',	'sjava@yahoo.com',	'2024/01/03'),
('Andrés Saavedra Castelló',	'2802322',	'B01305001007',	'shawnce@me.com',	'2024/01/03'),
('Juliana Márquez Huguet',	'1065851',	'B01305001008',	'moinefou@hotmail.com',	'2024/01/03'),
('África Fernandez Calatayud',	'20061283',	'B01305001009',	'bebing@att.net',	'2024/01/03'),
('Carlito Domínguez Cortes',	'20061464',	'B01305001010',	'afifi@yahoo.com',	'2024/01/03'),
('Heliodoro Baños Sainz',	'4427427',	'B01305001015',	'zavadsky@gmail.com',	'2024/01/03'),
('Arturo Ferrán Terrón',	'2799555',	'B01305001016',	'neonatus@yahoo.ca',	'2024/01/03'),
('Serafina Marcela Solano Alfaro',	'1064509',	'B01305001017',	'nichoj@yahoo.com',	'2024/01/03'),
('María Pilar Jódar Gómez',	'2799789',	'B01305001021',	'kwilliams@icloud.com',	'2024/01/03'),
('Verónica Carmina Riba Criado',	'22829745',	'B01308001004',	'presoff@aol.com',	'2024/01/03'),
('Bernardita Royo León',	'20061825',	'B01308001006',	'samavati@yahoo.com',	'2024/01/03'),
('Carlito Peñas Prado',	'2801469',	'B01308001007',	'philen@verizon.net',	'2024/01/03'),
('Inmaculada Aurora Cantero Peralta',	'00000830026979',	'B01308001011',	'sacraver@aol.com',	'2024/01/03'),
('Sebastian Carnero Uriarte',	'00000805004076',	'B01311001001',	'seano@hotmail.com',	'2024/01/03'),
('Eusebia Peñalver Abellán',	'1083752',	'B01311001003',	'fudrucker@aol.com',	'2024/01/03'),
('Fermín Amor Piña',	'00000800103383',	'B01311001004',	'burns@aol.com',	'2024/01/03'),
('Joaquín Duarte Lerma',	'4428354',	'B01311001005',	'jdhedden@live.com',	'2024/01/03'),
('Vilma de Rosado',	'79308487',	'B01311001008',	'maratb@att.net',	'2024/01/03'),
('Gaspar Alsina Orozco',	'28421432',	'B01311001010',	'darin@hotmail.com',	'2024/01/03'),
('Maricruz Tejedor Pons',	'4425757',	'B01311001011',	'alastair@verizon.net',	'2024/01/03'),
('Maximino del Prada',	'20062851',	'B01311001015',	'dunstan@verizon.net',	'2024/01/03'),
('Ruth Guardia Sevillano',	'00000600030085',	'B01311001016',	'bhtower@msn.com',	'2024/01/03'),
('Fermín Gimeno Aguirre',	'4426368',	'B01176736149',	'yenya@aol.com',	'2024/01/03'),
('Selena Nebot Montes',	'2804124',	'B01176823084',	'guialbu@me.com',	'2024/01/03'),
('Daniel Soriano-Mesa',	'1081986',	'B01176828085',	'adamk@live.com',	'2024/01/03'),
('Leoncio Yáñez Grau',	'2807556',	'B01176828086',	'temmink@gmail.com',	'2024/01/03'),
('Macaria de Santamaría',	'4436334',	'B01176834088',	'mavilar@msn.com',	'2024/01/03'),
('Tere Alberto Urrutia',	'4436479',	'B01311001111',	'ajohnson@yahoo.ca',	'2024/01/03'),
('Adán Bernad',	'1087023',	'B01313001002',	'hakim@yahoo.com',	'2024/01/03'),
('Roberta Villegas Ibañez',	'1087458',	'B01313001003',	'mlewan@mac.com',	'2024/01/03'),
('Odalys García Roma',	'1151',	'B01313001004',	'dhwon@verizon.net',	'2024/01/03'),
('Mar Millán Pons',	'00000800106783',	'B01317001001',	'themer@me.com',	'2024/01/03'),
('Poncio Osorio Pujol',	'2815007',	'B01317001002',	'jaffe@hotmail.com',	'2024/01/03'),
('Susanita Gargallo Domingo',	'4443334',	'B01317380003',	'bachmann@comcast.net',	'2024/01/03'),
('Heriberto Velasco',	'00000600032259',	'B01318001001',	'frode@mac.com',	'2024/01/03'),
('Diego Almansa Morata',	'2831230',	'B01319001002',	'hyper@optonline.net',	'2024/01/03'),
('Cosme Ros Manzanares',	'00000830032747',	'B01320001002',	'martyloo@optonline.net',	'2024/01/03'),
('Teo Velázquez Mas',	'2831383',	'B01320001003',	'anicolao@aol.com',	'2024/01/03'),
('Cayetana del Menendez',	'2831677',	'B01323001002',	'ralamosm@me.com',	'2024/01/03'),
('Bernarda Simó Vendrell',	'1937',	'B01325269002',	'khris@me.com',	'2024/01/03'),
('Marcio Ropero Vila',	'2833162',	'B01325307001',	'preneel@verizon.net',	'2024/01/03'),
('Jordana Téllez Gallo',	'2833563',	'B01341001001',	'slanglois@yahoo.com',	'2024/01/03'),
('Pepita Prats Torrens',	'4450251',	'B01341551004',	'fudrucker@mac.com',	'2024/01/03'),
('Clarisa Abril Tudela',	'00000800102162',	'B01341001001',	'jbarta@comcast.net',	'2024/01/03');

INSERT INTO almacen (Nombre, direccion, ciudad, Fecha_registro)
VALUES 
('ALMACEN A',	'CL 30 # 59 - 63',	'BOGOTA',	'2024/01/03'),
('ALMACEN B',	'CL 30 # 65 - 31',	'MEDELLIN',	'2024/01/03'),
('ALMACEN C',	'CL 30 # 71 - 19',	'CASANARE',	'2024/01/03'),
('ALMACEN D',	'CL 30 # 73 - 45',	'GUADUAS',	'2024/01/03'),
('ALMACEN C',	'CL 30 # 770 - 00',	'MEDELLIN ',	'2024/01/03'),
('ALMACEN D',	'CL 30 # 79 A - 13',	'TUNJA',	'2024/01/03'),
('ALMACEN E',	'CL 30 # 81 - 146',	'BOGOTA',	'2024/01/03'),
('ALMACEN F',	'CL 30 # 82 B - 29',	'MEDELLIN',	'2024/01/03'),
('ALMACEN G',	'CL 30 # 85 - 70',	'CASANARE',	'2024/01/03'),
('ALMACEN H',	'CL 30 A # 43 - 34',	'GUADUAS',	'2024/01/03'),
('ALMACEN I',	'CL 30 A # 64 - 172',	'MEDELLIN ',	'2024/01/03'),
('ALMACEN J',	'CL 30 A # 65 - 49',	'TUNJA',	'2024/01/03'),
('ALMACEN K',	'CL 30 A # 69 - 14',	'BOGOTA',	'2024/01/03'),
('ALMACEN L',	'CL 30 A # 73 - 21',	'MEDELLIN',	'2024/01/03'),
('ALMACEN M',	'CL 30 A # 74 - 19',	'CASANARE',	'2024/01/03'),
('ALMACEN N',	'CL 30 A # 78 - 04',	'GUADUAS',	'2024/01/03'),
('ALMACEN O',	'CL 30 A # 79 - 23',	'MEDELLIN ',	'2024/01/03'),
('ALMACEN P',	'CL 30 A # 80 - 68',	'TUNJA',	'2024/01/03'),
('ALMACEN Q',	'CL 30 A # 83 B - 56',	'BOGOTA',	'2024/01/03');






