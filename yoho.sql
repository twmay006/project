SET NAMES UTF8;
DROP DATABASE IF EXISTS yoho;
CREATE DATABASE yoho CHARSET=UTF8;
USE yoho;
CREATE TABLE yoho_user(
	uid INT PRIMARY KEY AUTO_INCREMENT,
	uname VARCHAR(32),
	upwd VARCHAR(32)
);
INSERT INTO yoho_user VALUES(NULL,'xiangyuanhui','xyh123456'),
                             (NULL,'yanglixia','ylx123456');

CREATE TABLE yoho_product(
			pid INT PRIMARY KEY AUTO_INCREMENT,
			pname VARCHAR(64),
			price FLOAT(8,2),
			pic1 VARCHAR(32),
			pic2 VARCHAR(32),
			pic3 VARCHAR(32)
);
INSERT INTO yoho_product VALUES
			(1,'Life After 宽松剪裁MA-1飞行夹克',339.00,'images/main_sixth1.jpg','images/main_sixth1-1.jpg','images/shopcar.jpg'),
			(2,'PREPPY ELITE 羊羔毛工装棉衣',329.00,'images/main_sixth2.jpg','images/main_sixth2-2.jpg','images/shopcar.jpg'),
			(3,'NOTHOMME印花内里MA1棉夹克',239.00,'images/main_sixth3.jpg','images/main_sixth3-3.jpg','images/shopcar.jpg'),
			(4,'ABALEJENS男士BODY短棉服',498.00,'images/main_sixth4.jpg','images/main_sixth4-4.jpg','images/shopcar.jpg'),
			(5,'BLACKJACK黑色印花棉衣',229.00,'images/main_sixth5.jpg','images/main_sixth5-5.jpg','images/shopcar.jpg'),
			(6,'NBA style芝加哥公牛队羽绒服',796.00,'images/main_sixth6.jpg','images/main_sixth6-6.jpg','images/shopcar.jpg'),
			(7,'COKE 189g白鹅绒纯色重磅棒球领',359.00,'images/main_sixth7.jpg','images/main_sixth7-7.jpg','images/shopcar.jpg'),
			(8,'DUSTY 拼接迷彩羽绒服',480.00,'images/main_sixth8.jpg','images/main_sixth8-8.jpg','images/shopcar.jpg'),
			(9,'THETHING 涂鸦印花羽绒服',840.00,'images/main_sixth9.jpg','images/main_sixth9-9.jpg','images/shopcar.jpg'),
			(10,'非池中 印花羽绒服',879.00,'images/main_sixth1.jpg','images/main_sixth10-10.jpg','images/shopcar.jpg'),
			(11,'VENS SK8-HI M',534.00,'images/main_sixth11.jpg','images/main_sixth11-11.jpg','images/shopcar.jpg'),
			(12,'adidas Originals 男TUBULAR INVAD',1099.00,'images/main_sixth12.jpg','images/main_sixth12-12.jpg','images/shopcar.jpg'),
			(13,'GAWS FOOT 单扣双拉链运动鞋',449.00,'images/main_sixth13.jpg','images/main_sixth13-13.jpg','images/shopcar.jpg'),
			(14,'Master Plan简约纯色运动鞋',299.00,'images/main_sixth14.jpg','images/main_sixth14-14.jpg','images/shopcar.jpg'),
			(15,'PUMA A698core leather 复古跑鞋',799.00,'images/main_sixth15.jpg','images/main_sixth15-15.jpg','images/shopcar.jpg'),
			(16,'Life After（吴亦凡同款）',319.00,'images/main_sixth16.jpg','images/main_sixth16-16.jpg','images/shopcar.jpg'),
			(17,'MADNESS AMRY JACKET',199.00,'images/main_sixth17.jpg','images/main_sixth17-17.jpg','images/shopcar.jpg'),
			(18,'MYGESART牛仔字母印花夹克',249.00,'images/main_sixth18.jpg','images/main_sixth18-18.jpg','images/shopcar.jpg'),
			(19,'SPLITMAN 简约字母休闲',149.00,'images/main_sixth19.jpg','images/main_sixth19-19.jpg','images/shopcar.jpg'),
			(20,'YYYHOOD 天真有邪夹克',279.00,'images/main_sixth20.jpg','images/main_sixth20-20.jpg','images/shopcar.jpg'),
			(21,'COKEN 粗毛针织毛衣',180.00,'images/main_sixth21.jpg','images/main_sixth21-21.jpg','images/shopcar.jpg'),
			(22,'元气补给 ENERGY SUPPLY',169.00,'images/main_sixth22.jpg','images/main_sixth22-22.jpg','images/shopcar.jpg'),
			(23,'陈奕迅试验装 YYYHOOD',189.00,'images/main_sixth23.jpg','images/main_sixth23-23.jpg','images/shopcar.jpg'),
			(24,'AKOP 竖条肌理高领毛衣',439.00,'images/main_sixth24.jpg','images/main_sixth24-24.jpg','images/shopcar.jpg'),
			(25,'NOTHOMMEN麻花点毛衣',158.00,'images/main_sixth25.jpg','images/main_sixth25-25.jpg','images/shopcar.jpg'),
			(26,'OTHOMMEN束脚工装裤',178.00,'images/main_sixth26.jpg','images/main_sixth26-26.jpg','images/shopcar.jpg'),
			(27,'Life After 雅痞范',269.00,'images/main_sixth27.jpg','images/main_sixth27-27.jpg','images/shopcar.jpg'),
			(28,'MIAMDSS ARMYSROPPPED STRAIG',869.00,'images/main_sixth28.jpg','images/main_sixth28-28.jpg','images/shopcar.jpg'),
			(29,'BLACKJACK 印花束口长裤',199.00,'images/main_sixth29.jpg','images/main_sixth29-29.jpg','images/shopcar.jpg'),
			(30,'VALKOMM 079 20弹力迷彩',219.00,'images/main_sixth30.jpg','images/main_sixth30-30.jpg','images/shopcar.jpg'),
			(31,'lvyboi 拼接细带保暖鞋子',299.00,'images/main_sixth31.jpg','images/main_sixth31-31.jpg','images/shopcar.jpg'),
			(32,'lvyboi 拼接细带保暖鞋子',339.00,'images/main_sixth32.jpg','images/main_sixth32-32.jpg','images/shopcar.jpg'),
			(33,'Dr.Martens 男款 8 Eyes',1119.00,'images/main_sixth33.jpg','images/main_sixth33-33.jpg','images/shopcar.jpg'),
			(34,'高帮迷彩毛皮靴子',319.00,'images/main_sixth34.jpg','images/main_sixth34-34.jpg','images/shopcar.jpg'),
			(35,'FLYD 先锋裂纹皮厚靴',339.00,'images/main_sixth35.jpg','images/main_sixth35-35.jpg','images/shopcar.jpg'),
			(36,'Arubafootwear 皮质男士高帮休闲鞋',649.00,'images/main_sixth36.jpg','images/main_sixth36-36.jpg','images/shopcar.jpg'),
			(37,'SPLITMAN 做旧复古牛仔裤',159.00,'images/main_sixth37.jpg','images/main_sixth37-37.jpg','images/shopcar.jpg'),
			(38,'NOTHOMMEN 刺绣牛仔裤',188.00,'images/main_sixth38.jpg','images/main_sixth38-38.jpg','images/shopcar.jpg'),
			(39,'COKEIN修身直通长裤',159.00,'images/main_sixth39.jpg','images/main_sixth39-39.jpg','images/shopcar.jpg'),
			(40,'vishow黑色休闲小脚裤',139.00,'images/main_sixth40.jpg','images/main_sixth40-40.jpg','images/shopcar.jpg');
			
CREATE TABLE yoho_cart(
		cid INT PRIMARY KEY AUTO_INCREMENT,
		userId INT
);
INSERT INTO yoho_cart VALUES('100','1');


CREATE TABLE yoho_cart_detail(
			did INT PRIMARY KEY AUTO_INCREMENT,
			cartId INT,
			productId INT,
			count INT

);
INSERT INTO yoho_cart_detail VALUES
			('1','100','10','3'),
			('2','100','15','1'),
			('3','100','18','2');

CREATE TABLE yoho_order(
			oid INT PRIMARY KEY AUTO_INCREMENT ,
			rcvName VARCHAR(128),
			addr VARCHAR(64),
			payment INT,
			price FLOAT(9,2),
			orderTime BIGINT,
			status VARCHAR(32),
			userId INT
);
INSERT INTO yoho_order VALUES
(1000000000,'王小明','万寿西街2号',1,1000,1471459354649,1,1),
(NULL,'王小明','万寿西街3号',2,1500,1471459354649,1,1),
(NULL,'王小明','万寿西街4号',3,1600,1471459354649,1,1),
(NULL,'王小明','万寿西街5号',4,1300,1471459354649,2,1),
(NULL,'王小明','万寿西街6号',5,1800,1471459354649,4,1);


CREATE TABLE yoho_order_detail(
			did INT PRIMARY KEY AUTO_INCREMENT ,
			orderId INT,
			productId  INT,
			count INT
);
INSERT INTO yoho_order_detail VALUES
			(NULL,1000000000,1,2),
			(NULL,1000000001,1,2),
			(NULL,1000000002,1,1),
			(NULL,1000000003,1,2),
			(NULL,1000000004,1,1),
			(NULL,1000000005,6,4),
			(NULL,1000000006,8,2);
			 SELECT * FROM yoho_order_detail ;				
