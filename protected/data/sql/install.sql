SET foreign_key_checks = 0;

TRUNCATE TABLE code_objective;
INSERT INTO code_objective (name) VALUES
('สมัครรับทุนฝึกอบรม'),
('สมัครรับทุนศึกษาต่อ'),
('สมัครคัดเลือกไปประจำการในต่างประเทศ'),
('ยื่นประกอบการพิจารณาขอมีปัจจัยเงินเดือนแรกบรรจุ'),
('สมัครหลักสูตรฝึกอบรมต่างๆ ของกระทรวงต่างประเทศ');

TRUNCATE TABLE role;
INSERT INTO role (name) VALUES
('ผู้ดูแลระบบ'),
('ผู้ตรวจสอบผลการสอบ');

TRUNCATE TABLE code_religion;
INSERT INTO `code_religion` (`name_th`, `name_en`) VALUES ('พุทธ', 'Buddhism');
INSERT INTO `code_religion` (`name_th`, `name_en`) VALUES ('คริสต์', 'Islam');
INSERT INTO `code_religion` (`name_th`, `name_en`) VALUES ('อิสลาม', 'Christ');
INSERT INTO `code_religion` (`name_th`, `name_en`) VALUES ('พราหม-ฮินดู', 'Hinduism');
INSERT INTO `code_religion` (`name_th`, `name_en`) VALUES ('ซิกข์', 'Sikhism');


TRUNCATE TABLE code_department;
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (100,'สำนักนายกรัฐมนตรี','Office of the Prime Minister',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (101,'กระทรวงกลาโหม','Ministry of Defence',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (102,'กระทรวงการคลัง','Minister of Finance ',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (103,'กระทรวงการต่างประเทศ','Ministry of Foreign Affairs',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (104,'กระทรวงการท่องเที่ยวและกีฬา','Ministy of Tourism and Sports',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (105,'กระทรวงการพัฒนาสังคมและความมั่นคงของมนุษย์','Ministry of Social Development and Human Security',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (106,'กระทรวงเกษตรและสหกรณ์','Ministry of Agriculture and Cooperatives',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (107,'กระทรวงคมนาคม','Misnistry of Transport',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (108,'กระทรวงทรัพยากรธรรมชาติและสิ่งแวดล้อม','Ministry of Natural Resources and Environment',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (109,'กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร','Ministry of Information and Communication Technology',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (110,'กระทรวงพลังงาน','Ministry of Energy',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (111,'กระทรวงพาณิชย์','Ministry of Commerce',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (112,'กระทรวงมหาดไทย','Ministry of Interior',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (113,'กระทรวงยุติธรรม','Ministry of Justice',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (114,'กระทรวงแรงงาน','Ministry of Labour',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (115,'กระทรวงวัฒนธรรม','Ministry of Culture',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (116,'กระทรวงวิทยาศาสตร์และเทคโนโลยี','Ministry of Science and Technology',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (117,'กระทรวงศึกษาธิการ','Ministry of Education',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (118,'กระทรวงสาธารณสุข','Ministry of Public Health',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (119,'กระทรวงอุตสาหกรรม','Ministry of Industry',1);
INSERT INTO `code_department` (`id`,`name_th`,`name_en`,`department_type_id`) VALUES (9999,'อื่นๆ','Other',0);

TRUNCATE TABLE code_country;
INSERT INTO `code_country` VALUES 
(004,'AFGHANISTAN','อัฟกานิสถาน','AF','AFG','Afghani'),
(008,'ALBANIA','แอลเบเนีย','AL','ALB',NULL),
(010,'ANTARCTICA','แอนตาร์กติกา','AQ','ATA','Antarctic'),
(012,'ALGERIA','แอลจีเรีย','DZ','DZA',NULL),
(016,'AMERICAN SAMOA','อเมริกันซามัว','AS','ASM','Austrian'),
(020,'ANDORRA','อันดอร์รา','AD','AND','Andorian'),
(024,'ANGOLA','แองโกลา','AO','AGO','Angolian'),
(028,'ANTIGUA AND BARBUDA','แอนติกาและบาร์บูดา','AG','ATG',NULL),
(031,'AZERBAIJAN','อาเซอร์ไบจาน','AZ','AZE',NULL),
(032,'ARGENTINA','อาร์เจนตินา','AR','ARG','Argentine'),
(036,'AUSTRALIA','ออสเตรเลีย','AU','AUS','Australian'),
(040,'AUSTRIA','ออสเตรีย','AT','AUT',NULL),
(044,'BAHAMAS','บาฮามาส','BS','BHS','Bahameese'),
(048,'BAHRAIN','บาห์เรน','BH','BHR','Bahrainian'),
(050,'BANGLADESH','บังกลาเทศ','BD','BGD',NULL),
(051,'ARMENIA','อาร์เมเนีย','AM','ARM','Armenian'),
(052,'BARBADOS','บาร์เบโดส','BB','BRB','Barbadian'),
(056,'BELGIUM','เบลเยียม','BE','BEL','Belgian'),
(060,'BERMUDA','เบอร์มิวดา','BM','BMU','Bermuda'),
(064,'BHUTAN','ภูฏาน','BT','BTN','Bhutanese'),
(068,'BOLIVIA, PLURINATIONAL STATE OF','โบลิเวีย','BO','BOL','Bolivian'),
(070,'BOSNIA AND HERZEGOVINA','บอสเนียและเฮอร์เซโกวีนา','BA','BIH','Bangladeshi'),
(072,'BOTSWANA','บอตสวานา','BW','BWA',NULL),
(074,'BOUVET ISLAND','เกาะบูเวต','BV','BVT',NULL),
(076,'BRAZIL','บราซิล','BR','BRA','Brazilian'),
(084,'BELIZE','เบลีซ','BZ','BLZ','Belizean'),
(086,'BRITISH INDIAN OCEAN TERRITORY','บริติชอินเดียนโอเชียนเทร์ริทอรี','IO','IOT',NULL),
(090,'SOLOMON ISLANDS','หมู่เกาะโซโลมอน','SB','SLB',NULL),
(092,'VIRGIN ISLANDS, BRITISH','หมู่เกาะบริติชเวอร์จิน','VG','VGB',NULL),
(096,'BRUNEI DARUSSALAM','บรูไน','BN','BRN',NULL),
(100,'BULGARIA','บัลแกเรีย','BG','BGR',NULL),
(104,'MYANMAR','พม่า','MM','MMR','Mayanmarese'),
(108,'BURUNDI','บุรุนดี','BI','BDI',NULL),
(112,'BELARUS','เบลารุส','BY','BLR','Belarusian'),
(116,'CAMBODIA','กัมพูชา','KH','KHM',NULL),
(120,'CAMEROON','แคเมอรูน','CM','CMR','Cambodian'),
(124,'CANADA','แคนาดา','CA','CAN','Canadian'),
(132,'CAPE VERDE','เคปเวิร์ด','CV','CPV',NULL),
(136,'CAYMAN ISLANDS','หมู่เกาะเคย์แมน','KY','CYM',NULL),
(140,'CENTRAL AFRICAN REPUBLIC','สาธารณรัฐแอฟริกากลาง','CF','CAF',NULL),
(144,'SRI LANKA','ศรีลังกา','LK','LKA','Sri Lankan'),
(148,'CHAD','ชาด','TD','TCD',NULL),
(152,'CHILE','ชิลี','CL','CHL','Chilean'),
(156,'CHINA','จีน','CN','CHN',NULL),
(158,'TAIWAN, PROVINCE OF CHINA','ไต้หวัน','TW','TWN','Taiwanese'),
(162,'CHRISTMAS ISLAND','เกาะคริสต์มาส','CX','CXR',NULL),
(166,'COCOS (KEELING) ISLANDS','หมู่เกาะโคโคส','CC','CCK',NULL),
(170,'COLOMBIA','โคลอมเบีย','CO','COL','Columbian'),
(174,'COMOROS','คอโมโรส','KM','COM',NULL),
(175,'MAYOTTE','มายอต','YT','MYT',NULL),
(178,'CONGO','คองโก-บราซซาวิล','CG','COG','Congolese'),
(180,'CONGO, THE DEMOCRATIC REPUBLIC OF THE','คองโก-กินชาซา','CD','COD',NULL),
(184,'COOK ISLANDS','หมู่เกาะคุก','CK','COK',NULL),
(188,'COSTA RICA','คอสตาริกา','CR','CRI','Czech'),
(191,'CROATIA','โครเอเชีย','HR','HRV','Croatian'),
(192,'CUBA','คิวบา','CU','CUB','Cuban'),
(196,'CYPRUS','ไซปรัส','CY','CYP','Cypriot'),
(203,'CZECH REPUBLIC','สาธารณรัฐเช็ก','CZ','CZE',NULL),
(204,'BENIN','เบนิน','BJ','BEN',NULL),
(208,'DENMARK','เดนมาร์ก','DK','DNK','Danish'),
(212,'DOMINICA','โดมินิกา','DM','DMA','Dominican'),
(214,'DOMINICAN REPUBLIC','สาธารณรัฐโดมินิกัน','DO','DOM',NULL),
(218,'ECUADOR','เอกวาดอร์','EC','ECU','Ecuadorean'),
(222,'EL SALVADOR','เอลซัลวาดอร์','SV','SLV',NULL),
(226,'EQUATORIAL GUINEA','อิเควทอเรียลกินี','GQ','GNQ',NULL),
(231,'ETHIOPIA','เอธิโอเปีย','ET','ETH','Ethiopian'),
(232,'ERITREA','เอริเทรีย','ER','ERI',NULL),
(233,'ESTONIA','เอสโตเนีย','EE','EST','Estonian'),
(234,'FAROE ISLANDS','หมู่เกาะแฟโร','FO','FRO',NULL),
(238,'FALKLAND ISLANDS (MALVINAS)','หมู่เกาะฟอล์กแลนด์','FK','FLK',NULL),
(239,'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS','เกาะเซาท์จอร์เจียและหมู่เกาะเซาท์แซนด์วิช','GS','SGS',NULL),
(242,'FIJI','ฟิจิ','FJ','FJI','Fijian'),
(246,'FINLAND','ฟินแลนด์','FI','FIN','Finnish'),
(248,'ÅLAND ISLANDS','หมู่เกาะโอลันด์','AX','ALA',NULL),
(250,'FRANCE','ฝรั่งเศส','FR','FRA','French'),
(254,'FRENCH GUIANA','เฟรนช์เกียนา','GF','GUF',NULL),
(258,'FRENCH POLYNESIA','เฟรนช์โปลินีเซีย','PF','PYF',NULL),
(260,'FRENCH SOUTHERN TERRITORIES','เฟรนช์เซาเทิร์นเทร์ริทอรีส์','TF','ATF',NULL),
(262,'DJIBOUTI','จิบูตี','DJ','DJI',NULL),
(266,'GABON','กาบอง','GA','GAB',NULL),
(268,'GEORGIA','จอร์เจีย','GE','GEO','Georgian'),
(270,'GAMBIA','แกมเบีย','GM','GMB',NULL),
(275,'PALESTINIAN, STATE OF','ปาเลสไตน์','PS','PSE',NULL),
(276,'GERMANY','เยอรมนี','DE','DEU','German'),
(288,'GHANA','กานา','GH','GHA','Ghanaian'),
(292,'GIBRALTAR','ยิบรอลตาร์','GI','GIB',NULL),
(296,'KIRIBATI','คิริบาส','KI','KIR',NULL),
(300,'GREECE','กรีซ','GR','GRC','Greek'),
(304,'GREENLAND','กรีนแลนด์','GL','GRL',NULL),
(308,'GRENADA','เกรเนดา','GD','GRD',NULL),
(312,'GUADELOUPE','กวาเดอลูป','GP','GLP',NULL),
(316,'GUAM','กวม','GU','GUM',NULL),
(320,'GUATEMALA','กัวเตมาลา','GT','GTM',NULL),
(324,'GUINEA','กินี','GN','GIN','Guinean'),
(328,'GUYANA','กายอานา','GY','GUY','Guyanese'),
(332,'HAITI','เฮติ','HT','HTI',NULL),
(334,'HEARD ISLAND AND MCDONALD ISLANDS','เกาะเฮิร์ดและหมู่เกาะแมกดอนัลด์','HM','HMD',NULL),
(336,'HOLY SEE (VATICAN CITY STATE)','วาติกัน','VA','VAT',NULL),
(340,'HONDURAS','ฮอนดูรัส','HN','HND',NULL),
(344,'HONG KONG','ฮ่องกง เขตปกครองพิเศษประเทศจีน','HK','HKG','Chinese'),
(348,'HUNGARY','ฮังการี','HU','HUN','Hungarian'),
(352,'ICELAND','ไอซ์แลนด์','IS','ISL','Israeli'),
(356,'INDIA','อินเดีย','IN','IND','Indian'),
(360,'INDONESIA','อินโดนีเซีย','ID','IDN','Indonesian'),
(364,'IRAN, ISLAMIC REPUBLIC OF','อิหร่าน','IR','IRN','Iranian'),
(368,'IRAQ','อิรัก','IQ','IRQ','Iraqi'),
(372,'IRELAND','ไอร์แลนด์','IE','IRL','Irish'),
(376,'ISRAEL','อิสราเอล','IL','ISR',NULL),
(380,'ITALY','อิตาลี','IT','ITA','Italian'),
(384,'CÔTE DIVOIRE','ไอวอรี่โคสต์','CI','CIV',NULL),
(388,'JAMAICA','จาเมกา','JM','JAM','Jamaican'),
(392,'JAPAN','ญี่ปุ่น','JP','JPN','Japanese'),
(398,'KAZAKHSTAN','คาซัคสถาน','KZ','KAZ','Kazakhstani'),
(400,'JORDAN','จอร์แดน','JO','JOR','Jordanian'),
(404,'KENYA','เคนยา','KE','KEN','Kenyan'),
(408,'KOREA, DEMOCRATIC PEOPLES REPUBLIC OF','เกาหลีเหนือ','KP','PRK',NULL),
(410,'KOREA, REPUBLIC OF','เกาหลีใต้','KR','KOR',NULL),
(414,'KUWAIT','คูเวต','KW','KWT','Kuwaiti'),
(417,'KYRGYZSTAN','คีร์กีซสถาน','KG','KGZ',NULL),
(418,'LAO PEOPLES DEMOCRATIC REPUBLIC','ลาว','LA','LAO',NULL),
(422,'LEBANON','เลบานอน','LB','LBN','Lebanese'),
(426,'LESOTHO','เลโซโท','LS','LSO',NULL),
(428,'LATVIA','ลัตเวีย','LV','LVA',NULL),
(430,'LIBERIA','ไลบีเรีย','LR','LBR',NULL),
(434,'LIBYA','ลิเบีย','LY','LBY',NULL),
(438,'LIECHTENSTEIN','ลิกเตนสไตน์','LI','LIE',NULL),
(440,'LITHUANIA','ลิทัวเนีย','LT','LTU','Lithunian'),
(442,'LUXEMBOURG','ลักเซมเบิร์ก','LU','LUX','Luxembourger'),
(446,'MACAO','มาเก๊า เขตปกครองพิเศษประเทศจีน','MO','MAC','Macau'),
(450,'MADAGASCAR','มาดากัสการ์','MG','MDG',NULL),
(454,'MALAWI','มาลาวี','MW','MWI',NULL),
(458,'MALAYSIA','มาเลเซีย','MY','MYS','Malaysian'),
(462,'MALDIVES','มัลดีฟส์','MV','MDV','Maldivan'),
(466,'MALI','มาลี','ML','MLI',NULL),
(470,'MALTA','มอลตา','MT','MLT',NULL),
(474,'MARTINIQUE','มาร์ตินีก','MQ','MTQ',NULL),
(478,'MAURITANIA','มอริเตเนีย','MR','MRT',NULL),
(480,'MAURITIUS','มอริเชียส','MU','MUS','Mauritian'),
(484,'MEXICO','เม็กซิโก','MX','MEX',NULL),
(492,'MONACO','โมนาโก','MC','MCO','Monacan'),
(496,'MONGOLIA','มองโกเลีย','MN','MNG','Mongolian'),
(498,'MOLDOVA, REPUBLIC OF','มอลโดวา','MD','MDA',NULL),
(499,'MONTENEGRO','มอนเตเนโกร','ME','MNE','Mexican'),
(500,'MONTSERRAT','มอนต์เซอร์รัต','MS','MSR',NULL),
(504,'MOROCCO','โมร็อกโก','MA','MAR','Moroccan'),
(508,'MOZAMBIQUE','โมซัมบิก','MZ','MOZ',NULL),
(512,'OMAN','โอมาน','OM','OMN','Omani'),
(516,'NAMIBIA','นามิเบีย','NA','NAM','Namibian'),
(520,'NAURU','นาอูรู','NR','NRU',NULL),
(524,'NEPAL','เนปาล','NP','NPL','Nepalese'),
(528,'NETHERLANDS','เนเธอร์แลนด์','NL','NLD','Dutch'),
(531,'CURAÇAO','คูราเซา','CW','CUW',NULL),
(533,'ARUBA','อารูบา','AW','ABW','Arubian'),
(534,'SINT MAARTEN (DUTCH PART)','เกาะเซนต์มาร์ติน(ดัตช์)','SX','SXM',NULL),
(535,'BONAIRE, SINT EUSTATIUS AND SABA','โบแนร์, ซิงต์ EUSTATIUS และสะบ้า','BQ','BES',NULL),
(540,'NEW CALEDONIA','นิวแคลิโดเนีย','NC','NCL',NULL),
(548,'VANUATU','วานูอาตู','VU','VUT',NULL),
(554,'NEW ZEALAND','นิวซีแลนด์','NZ','NZL','New Zealander'),
(558,'NICARAGUA','นิการากัว','NI','NIC',NULL),
(562,'NIGER','ไนเจอร์','NE','NER',NULL),
(566,'NIGERIA','ไนจีเรีย','NG','NGA','Nigerian'),
(570,'NIUE','นีอูเอ','NU','NIU',NULL),
(574,'NORFOLK ISLAND','เกาะนอร์ฟอล์ก','NF','NFK',NULL),
(578,'NORWAY','นอร์เวย์','NO','NOR','Norwegian'),
(580,'NORTHERN MARIANA ISLANDS','หมู่เกาะนอร์เทิร์นมาเรียนา','MP','MNP',NULL),
(581,'UNITED STATES MINOR OUTLYING ISLANDS','หมู่เกาะสหรัฐไมเนอร์เอาต์ไลอิง','UM','UMI',NULL),
(583,'MICRONESIA, FEDERATED STATES OF','ไมโครนีเซีย','FM','FSM',NULL),
(584,'MARSHALL ISLANDS','หมู่เกาะมาร์แชลล์','MH','MHL',NULL),
(585,'PALAU','ปาเลา','PW','PLW',NULL),
(586,'PAKISTAN','ปากีสถาน','PK','PAK','Pakistani'),
(591,'PANAMA','ปานามา','PA','PAN','Panamanian'),
(598,'PAPUA NEW GUINEA','ปาปัวนิวกินี','PG','PNG',NULL),
(600,'PARAGUAY','ปารากวัย','PY','PRY','Paraguayan'),
(604,'PERU','เปรู','PE','PER','Peruvian'),
(608,'PHILIPPINES','ฟิลิปปินส์','PH','PHL','Filipino'),
(612,'PITCAIRN','พิตแคร์น','PN','PCN',NULL),
(616,'POLAND','โปแลนด์','PL','POL',NULL),
(620,'PORTUGAL','โปรตุเกส','PT','PRT','Portugees'),
(624,'GUINEA-BISSAU','กินี-บิสเซา','GW','GNB',NULL),
(626,'TIMOR-LESTE','ติมอร์ตะวันออก','TL','TLS',NULL),
(630,'PUERTO RICO','เปอร์โตริโก','PR','PRI',NULL),
(634,'QATAR','กาตาร์','QA','QAT','Qatari'),
(638,'RÉUNION','เรอูนียง','RE','REU',NULL),
(642,'ROMANIA','โรมาเนีย','RO','ROU','Romanian'),
(643,'RUSSIAN FEDERATION','รัสเซีย','RU','RUS','Russian'),
(646,'RWANDA','รวันดา','RW','RWA',NULL),
(652,'SAINT BARTHÉLEMY','เซนต์บาร์เธเลมี','BL','BLM',NULL),
(654,'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA','เซนต์เฮเลนา','SH','SHN',NULL),
(659,'SAINT KITTS AND NEVIS','เซนต์คิตส์และเนวิส','KN','KNA',NULL),
(660,'ANGUILLA','แองกวิลลา','AI','AIA','Anguillan'),
(662,'SAINT LUCIA','เซนต์ลูเซีย','LC','LCA',NULL),
(663,'SAINT MARTIN (FRENCH PART)','เซนต์มาติน','MF','MAF',NULL),
(666,'SAINT PIERRE AND MIQUELON','แซงปีแยร์และมีเกอลง','PM','SPM',NULL),
(670,'SAINT VINCENT AND THE GRENADINES','เซนต์วินเซนต์และเกรนาดีนส์','VC','VCT',NULL),
(674,'SAN MARINO','ซานมารีโน','SM','SMR',NULL),
(678,'SAO TOME AND PRINCIPE','เซาตูเมและปรินซิปี','ST','STP',NULL),
(682,'SAUDI ARABIA','ซาอุดีอาระเบีย','SA','SAU','Saudi Arabian'),
(686,'SENEGAL','เซเนกัล','SN','SEN','Senegalese'),
(688,'SERBIA','เซอร์เบีย','RS','SRB',NULL),
(690,'SEYCHELLES','เซเชลส์','SC','SYC','Seychellois'),
(694,'SIERRA LEONE','เซียร์ราลีโอน','SL','SLE',NULL),
(702,'SINGAPORE','สิงคโปร์','SG','SGP','Singaporean'),
(703,'SLOVAKIA','สโลวะเกีย','SK','SVK','Slovakian'),
(704,'VIET NAM','เวียดนาม','VN','VNM','Vietnamese'),
(705,'SLOVENIA','สโลวีเนีย','SI','SVN',NULL),
(706,'SOMALIA','โซมาเลีย','SO','SOM','Somali'),
(710,'SOUTH AFRICA','แอฟริกาใต้','ZA','ZAF','South African'),
(716,'ZIMBABWE','ซิมบับเว','ZW','ZWE','Zimbabwean'),
(724,'SPAIN','สเปน','ES','ESP',NULL),
(728,'SOUTH SUDAN','เซาท์ซูดาน','SS','SSD',NULL),
(729,'SUDAN','ซูดาน','SD','SD',NULL),
(732,'WESTERN SAHARA','ซาฮาราตะวันตก','EH','ESH',NULL),
(740,'SURINAME','ซูรินาเม','SR','SUR',NULL),
(744,'SVALBARD AND JAN MAYEN','สฟาลบาร์และยานไมเอน','SJ','SJM',NULL),
(748,'SWAZILAND','สวาซิแลนด์','SZ','SWZ',NULL),
(752,'SWEDEN','สวีเดน','SE','SWE','Swedish'),
(756,'SWITZERLAND','สวิตเซอร์แลนด์','CH','CHE','Chinese'),
(760,'SYRIAN ARAB REPUBLIC','ซีเรีย','SY','SYR',NULL),
(762,'TAJIKISTAN','ทาจิกิสถาน','TJ','TJK',NULL),
(764,'THAILAND','ไทย','TH','THA','Thai'),
(768,'TOGO','โตโก','TG','TGO',NULL),
(772,'TOKELAU','โตเกเลา','TK','TKL',NULL),
(776,'TONGA','ตองกา','TO','TON',NULL),
(780,'TRINIDAD AND TOBAGO','ตรินิแดดและโตเบโก','TT','TTO',NULL),
(784,'UNITED ARAB EMIRATES','สหรัฐอาหรับเอมิเรตส์','AE','ARE','Emirian'),
(788,'TUNISIA','ตูนิเซีย','TN','TUN','Tunisian'),
(792,'TURKEY','ตุรกี','TR','TUR','Turkish'),
(795,'TURKMENISTAN','เติร์กเมนิสถาน','TM','TKM',NULL),
(796,'TURKS AND CAICOS ISLANDS','หมู่เกาะเติกส์และหมู่เกาะเคคอส','TC','TCA',NULL),
(798,'TUVALU','ตูวาลู','TV','TUV',NULL),
(800,'UGANDA','ยูกันดา','UG','UGA','Ugandan'),
(804,'UKRAINE','ยูเครน','UA','UKR','Ukrainian'),
(807,'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF','มาซิโดเนีย','MK','MKD',NULL),
(818,'EGYPT','อียิปต์','EG','EGY','Egyptian'),
(826,'UNITED KINGDOM','สหราชอาณาจักร','GB','GBR','British'),
(831,'GUERNSEY','เกิร์นซีย์','GG','GGY',NULL),
(832,'JERSEY','เจอร์ซีย์','JE','JEY',NULL),
(833,'ISLE OF MAN','เกาะแมน','IM','IMN',NULL),
(834,'TANZANIA, UNITED REPUBLIC OF','แทนซาเนีย','TZ','TZA','Tanzanian'),
(840,'UNITED STATES','สหรัฐอเมริกา','US','USA','American'),
(850,'VIRGIN ISLANDS, U.S.','หมู่เกาะยูเอสเวอร์จิน','VI','VIR',NULL),
(854,'BURKINA FASO','บูร์กินาฟาโซ','BF','BFA',NULL),
(858,'URUGUAY','อุรุกวัย','UY','URY','Uruguayan'),
(860,'UZBEKISTAN','อุซเบกิสถาน','UZ','UZB','Uzbekistani'),
(862,'VENEZUELA, BOLIVARIAN REPUBLIC OF','เวเนซุเอลา','VE','VEN','Venezuelan'),
(876,'WALLIS AND FUTUNA','วาลลิสและฟุตูนา','WF','WLF',NULL),
(882,'SAMOA','ซามัว','WS','WSM',NULL),
(887,'YEMEN','เยเมน','YE','YEM','Yemeni'),
(894,'ZAMBIA','แซมเบีย','ZM','ZMB','Zambian');
SET foreign_key_checks = 1;