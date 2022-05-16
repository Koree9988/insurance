
CREATE TABLE product_type(
    product_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    product_type_name varchar (500)
);

INSERT INTO product_type(product_type_name) VALUES
('สินค้าทั่วไป เครื่องใช้สำนักงานและเครื่องใช้ไฟฟ้า อุปกรณ์ช่าง อะไหล่รถ อุปกรณ์การเรียน เฟอร์นิเจอร์ ผลิตผลทางการเกษตร เสื้อผ้า สัตว์บกเศรษฐกิจ สินค้าอุปโภค-บริโภค'),
('สินค้าเทกอง สินค้ากระจก แก้ว ขวดแก้ว เซรามิค เครื่องจักรหนักไม่เกิน 1 ตัน  เชื้อพลิงและก๊าซบรรจุแท้งก์ สินค้าควบคุมอุณหภูมิ อาหารสด  ต้นไม้'),
('ยานพาหนะ และพาหนะเพื่อการเกษตร'),
('สัตว์น้ำเศรษฐกิจ'),
('เชื้อพลิงและก๊าซบรรจุแท้งก์'),
('ไม่ระบุ');

CREATE TABLE delivery_type(
    delivery_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    delivery_type_name varchar (100)
);

CREATE TABLE company(
    company_id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    company_Name varchar (100),
    delivery_type_id int,
    company_link varchar (500)
);

ALTER TABLE company ADD CONSTRAINT delivery_type_id 
  FOREIGN KEY (delivery_type_id) 
  REFERENCES delivery_type (delivery_id);

INSERT INTO delivery_type(delivery_type_name) VALUES('รถ'),('เครื่องบิน'),('เรือ'),('รถและเรือ');


INSERT INTO company (company_Name,delivery_type_id,company_link) VALUES
('ทิพยประกันภัย',1,'https://www.dhipaya.co.th/th/product-detail-12-26.html'),
('กรุงเทพประกันภัย',1,'https://www.bangkokinsurance.com/product/marine-cargo/cargo'),
('วิริยะประกันภัย',1,'https://www.viriyah.co.th/th/customer-product-logistic.php?id=53'),
('เมืองไทยประกันภัย',4,'https://www.muangthaiinsurance.com/th/product/detail/30'),
('เอ็ม เอส ไอ จี ประกันภัย',3,'https://www.msig-thai.com/th/business-insurance/inland-cargo'),
('มิตรแท้ประกันภัย',1,'https://www.mittare.com/web2016/?page_id=3478&lang=th'),
('คุ้มภัยโตเกียวมารีนประกันภัย',4,'https://www.tokiomarine.com/th/th-general/home/commercial/marine/marine-cargo-inland-cargo-policy.html'),
('นำสินประกันภัย',4,'https://namsengins.co.th/ประกันภัยขนส่งสินค้า/'),
('ประกันคุ้มภัย',4,'https://www.tokiomarine.com/th/th-general/home/commercial/marine/marine-cargo-inland-cargo-policy.html');


CREATE TABLE insurance_detail(
    company_id int NOT NULL,
    insurance_amount_i int ,
    insurance_amount_f int ,
    cost float(10,2),
    prod_id int
);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(1,	1,	100000	,	4500.42	,	1	),
(1,	100001,	200000	,	5000.11	,	1	),
(1,	200001,	300000	,	5500.87	,	1	),
(1,	300001,	400000	,	6000.56	,	1	),
(1,	400001,	500000	,	6500.25	,	1	),
(1,	500001,	600000	,	6999.94	,	1	),
(1,	600001,	700000	,	7499.63	,	1	),
(1,	700001,	800000	,	7999.32	,	1	),
(1,	800001,	900000	,	8500.08	,	1	),
(1,	900001,	1000000	,	9000.84	,	1	),
(1,	1000001,	1100000	,	9500.53	,	1	),
(1,	1100001,	1200000	,	10000.22	,	1	),
(1,	1200001,	1300000	,	10500.98	,	1	),
(1,	1300001,	1400000	,	11000.67	,	1	),
(1,	1400001,	1500000	,	11500.36	,	1	),
(1,	1500001,	1600000	,	12000.05	,	1	),
(1,	1600001,	1700000	,	12500.81	,	1	),
(1,	1700001,	1800000	,	13000.5	,	1	),
(1,	1800001,	1900000	,	13500.19	,	1	),
(1,	1900001,	2000000	,	14000.95	,	1	),
(1,	2000001,	2100000	,	14500.64	,	1	),
(1,	2100001,	2200000	,	15000.3	,	1	),
(1,	2200001,	2300000	,	15500.02	,	1	),
(1,	2300001,	2400000	,	16000.78	,	1	),
(1,	2400001,	2500000	,	16500.47	,	1	),
(1,	2500001,	2600000	,	17000.16	,	1	),
(1,	2600001,	2700000	,	17500.9	,	1	),
(1,	2700001,	2800000	,	18000.61	,	1	),
(1,	2800001,	2900000	,	18500.3	,	1	),
(1,	2900001,	3000000	,	18999.99	,	1	);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(2,	1,	100000	,	5371.4	,	1	),
(2,	100001,	200000	,	5908.54	,	1	),
(2,	200001,	300000	,	6445.68	,	1	),
(2,	300001,	400000	,	6982.82	,	1	),
(2,	400001,	500000	,	7519.96	,	1	),
(2,	500001,	600000	,	8057.1	,	1	),
(2,	600001,	700000	,	5894.24	,	1	),
(2,	700001,	800000	,	9131.38	,	1	),
(2,	800001,	900000	,	9668.52	,	1	),
(2,	900001,	1000000	,	10205.66	,	1	),
(2,	1000001,	1100000	,	10742.8	,	1	),
(2,	1100001,	1200000	,	11279.94	,	1	),
(2,	1200001,	1300000	,	11817.08	,	1	),
(2,	1300001,	1400000	,	12354.22	,	1	),
(2,	1400001,	1500000	,	12891.36	,	1	),
(2,	1500001,	1600000	,	13428.5	,	1	),
(2,	1600001,	1700000	,	13965.64	,	1	),
(2,	1700001,	1800000	,	14502.78	,	1	),
(2,	1800001,	1900000	,	15039.92	,	1	),
(2,	1900001,	2000000	,	15577.06	,	1	),
(2,	2000001,	2100000	,	16168.77	,	1	),
(2,	2100001,	2200000	,	16759.41	,	1	),
(2,	2200001,	2300000	,	17350.05	,	1	),
(2,	2300001,	2400000	,	17940.69	,	1	),
(2,	2400001,	2500000	,	18531.33	,	1	),
(2,	2500001,	2600000	,	19123.04	,	1	),
(2,	2600001,	2700000	,	19713.68	,	1	),
(2,	2700001,	2800000	,	20304.32	,	1	),
(2,	2800001,	2900000	,	20894.96	,	1	),
(2,	2900001,	3000000	,	21485.6	,	1	),
							
(2,	1,	100000	,	6445.68	,	2	),
(2,	100001,	200000	,	7090.89	,	2	),
(2,	200001,	300000	,	7735.03	,	2	),
(2,	300001,	400000	,	8380.24	,	2	),
(2,	400001,	500000	,	9024.38	,	2	),
(2,	500001,	600000	,	9668.52	,	2	),
(2,	600001,	700000	,	10313.73	,	2	),
(2,	700001,	800000	,	10957.87	,	2	),
(2,	800001,	900000	,	11603.08	,	2	),
(2,	900001,	1000000	,	12247.22	,	2	),
(2,	1000001,	1100000	,	12891.36	,	2	),
(2,	1100001,	1200000	,	13536.57	,	2	),
(2,	1200001,	1300000	,	14180.71	,	2	),
(2,	1300001,	1400000	,	14825.92	,	2	),
(2,	1400001,	1500000	,	15470.06	,	2	),
(2,	1500001,	1600000	,	16114.2	,	2	),
(2,	1600001,	1700000	,	16759.41	,	2	),
(2,	1700001,	1800000	,	17403.55	,	2	),
(2,	1800001,	1900000	,	18048.76	,	2	),
(2,	1900001,	2000000	,	18692.9	,	2	),
(2,	2000001,	2100000	,	19402.31	,	2	),
(2,	2100001,	2200000	,	20110.65	,	2	),
(2,	2200001,	2300000	,	20820.06	,	2	),
(2,	2300001,	2400000	,	21519.47	,	2	),
(2,	2400001,	2500000	,	22237.81	,	2	),
(2,	2500001,	2600000	,	22947.22	,	2	),
(2,	2600001,	2700000	,	23656.63	,	2	),
(2,	2700001,	2800000	,	24364.97	,	2	),
(2,	2800001,	2900000	,	25074.38	,	2	),
(2,	2900001,	3000000	,	25782.72	,	2	),
							
(2,	1,	100000	,	6445.68	,	3	),
(2,	100001,	200000	,	7519.96	,	3	),
(2,	200001,	300000	,	8594.24	,	3	),
(2,	300001,	400000	,	9668.52	,	3	),
(2,	400001,	500000	,	10474.23	,	3	),
(2,	500001,	600000	,	11624.48	,	3	),
(2,	600001,	700000	,	12730.86	,	3	),
(2,	700001,	800000	,	13965.64	,	3	),
(2,	800001,	900000	,	15201.49	,	3	),
(2,	900001,	1000000	,	16329.27	,	3	),
(2,	1000001,	1100000	,	16909.21	,	3	),
(2,	1100001,	1200000	,	17490.22	,	3	),
(2,	1200001,	1300000	,	18070.16	,	3	),
(2,	1300001,	1400000	,	18650.1	,	3	),
(2,	1400001,	1500000	,	19230.04	,	3	),
(2,	1500001,	1600000	,	19809.98	,	3	),
(2,	1600001,	1700000	,	20389.92	,	3	),
(2,	1700001,	1800000	,	20970.93	,	3	),
(2,	1800001,	1900000	,	21550.87	,	3	),
(2,	1900001,	2000000	,	22130.81	,	3	),
(2,	2000001,	2100000	,	22710.75	,	3	),
(2,	2100001,	2200000	,	23290.69	,	3	),
(2,	2200001,	2300000	,	23870.63	,	3	),
(2,	2300001,	2400000	,	24451.64	,	3	),
(2,	2400001,	2500000	,	25031.58	,	3	),
(2,	2500001,	2600000	,	25611.52	,	3	),
(2,	2600001,	2700000	,	26191.46	,	3	),
(2,	2700001,	2800000	,	26771.4	,	3	),
(2,	2800001,	2900000	,	27351.34	,	3	),
(2,	2900001,	3000000	,	27931.28	,	3	);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(3,	1,	100000	,	2658.7	,	1	),
(3,	100001,	200000	,	5157.4	,	1	),
(3,	200001,	300000	,	5801.54	,	1	),
(3,	300001,	400000	,	7305.96	,	1	),
(3,	400001,	500000	,	8380.24	,	1	),
(3,	500001,	600000	,	9239.45	,	1	),
(3,	600001,	700000	,	10098.66	,	1	),
(3,	700001,	800000	,	10957.87	,	1	),
(3,	800001,	900000	,	11817.08	,	1	),
(3,	900001,	1000000	,	12677.36	,	1	),
(3,	1000001,	1100000	,	13106.43	,	1	),
(3,	1100001,	1200000	,	13536.57	,	1	),
(3,	1200001,	1300000	,	13965.64	,	1	),
(3,	1300001,	1400000	,	14395.78	,	1	),
(3,	1400001,	1500000	,	14825.92	,	1	),
(3,	1500001,	1600000	,	15254.99	,	1	),
(3,	1600001,	1700000	,	15685.13	,	1	),
(3,	1700001,	1800000	,	16114.2	,	1	),
(3,	1800001,	1900000	,	16544.34	,	1	),
(3,	1900001,	2000000	,	16974.48	,	1	),
(3,	2000001,	2100000	,	17403.55	,	1	),
(3,	2100001,	2200000	,	17833.96	,	1	),
(3,	2200001,	2300000	,	18262.76	,	1	),
(3,	2300001,	2400000	,	18692.9	,	1	),
(3,	2400001,	2500000	,	19123.04	,	1	),
(3,	2500001,	2600000	,	19552.11	,	1	),
(3,	2600001,	2700000	,	19982.25	,	1	),
(3,	2700001,	2800000	,	20411.32	,	1	),
(3,	2800001,	2900000	,	20841.46	,	1	),
(3,	2900001,	3000000	,	21271.6	,	1	),
							
							
(3,	1,	100000	,	3759.98	,	2	),
(3,	100001,	200000	,	7197.89	,	2	),
(3,	200001,	300000	,	8057.1	,	2	),
(3,	300001,	400000	,	10205.66	,	2	),
(3,	400001,	500000	,	11313.11	,	2	),
(3,	500001,	600000	,	12472.99	,	2	),
(3,	600001,	700000	,	13632.87	,	2	),
(3,	700001,	800000	,	14793.82	,	2	),
(3,	800001,	900000	,	15953.7	,	2	),
(3,	900001,	1000000	,	17113.58	,	2	),
(3,	1000001,	1100000	,	17693.52	,	2	),
(3,	1100001,	1200000	,	18274.53	,	2	),
(3,	1200001,	1300000	,	18854.47	,	2	),
(3,	1300001,	1400000	,	19434.41	,	2	),
(3,	1400001,	1500000	,	20014.35	,	2	),
(3,	1500001,	1600000	,	20594.29	,	2	),
(3,	1600001,	1700000	,	21174.23	,	2	),
(3,	1700001,	1800000	,	21754.17	,	2	),
(3,	1800001,	1900000	,	22335.18	,	2	),
(3,	1900001,	2000000	,	22915.12	,	2	),
(3,	2000001,	2100000	,	23495.06	,	2	),
(3,	2100001,	2200000	,	24075	,	2	),
(3,	2200001,	2300000	,	24654.94	,	2	),
(3,	2300001,	2400000	,	25234.88	,	2	),
(3,	2400001,	2500000	,	25815.89	,	2	),
(3,	2500001,	2600000	,	26395.83	,	2	),
(3,	2600001,	2700000	,	26975.77	,	2	),
(3,	2700001,	2800000	,	27555.71	,	2	),
(3,	2800001,	2900000	,	28135.65	,	2	),
(3,	2900001,	3000000	,	28715.59	,	2	),
							
							
(3,	1,	100000	,	4620.26	,	3	),
(3,	100001,	200000	,	7950.1	,	3	),
(3,	200001,	300000	,	9153.85	,	3	),
(3,	300001,	400000	,	10742.8	,	3	),
(3,	400001,	500000	,	11548.51	,	3	),
(3,	500001,	600000	,	12698.76	,	3	),
(3,	600001,	700000	,	13912.14	,	3	),
(3,	700001,	800000	,	15039.92	,	3	),
(3,	800001,	900000	,	16275.77	,	3	),
(3,	900001,	1000000	,	17403.55	,	3	),
(3,	1000001,	1100000	,	17983.49	,	3	),
(3,	1100001,	1200000	,	18564.5	,	3	),
(3,	1200001,	1300000	,	19144.44	,	3	),
(3,	1300001,	1400000	,	19724.38	,	3	),
(3,	1400001,	1500000	,	20304.32	,	3	),
(3,	1500001,	1600000	,	20884.26	,	3	),
(3,	1600001,	1700000	,	21464.2	,	3	),
(3,	1700001,	1800000	,	22045.21	,	3	),
(3,	1800001,	1900000	,	22625.15	,	3	),
(3,	1900001,	2000000	,	23205.09	,	3	),
(3,	2000001,	2100000	,	23785.03	,	3	),
(3,	2100001,	2200000	,	24364.97	,	3	),
(3,	2200001,	2300000	,	24944.91	,	3	),
(3,	2300001,	2400000	,	25525.9	,	3	),
(3,	2400001,	2500000	,	26105.86	,	3	),
(3,	2500001,	2600000	,	26685.8	,	3	),
(3,	2600001,	2700000	,	27265.74	,	3	),
(3,	2700001,	2800000	,	27845.68	,	3	),
(3,	2800001,	2900000	,	28425.62	,	3	),
(3,	2900001,	3000000	,	29005.56	,	3	),
							
							
							
(3,	1,	100000	,	8057.1	,	4	),
(3,	100001,	200000	,	9668.52	,	4	),
(3,	200001,	300000	,	10742.8	,	4	),
(3,	300001,	400000	,	11850.25	,	4	),
(3,	400001,	500000	,	12332.82	,	4	),
(3,	500001,	600000	,	13493.77	,	4	),
(3,	600001,	700000	,	14116.51	,	4	),
(3,	700001,	800000	,	15276.39	,	4	),
(3,	800001,	900000	,	16437.34	,	4	),
(3,	900001,	1000000	,	17597.22	,	4	),
(3,	1000001,	1100000	,	18177.16	,	4	),
(3,	1100001,	1200000	,	18757.1	,	4	),
(3,	1200001,	1300000	,	19337.04	,	4	),
(3,	1300001,	1400000	,	19918.05	,	4	),
(3,	1400001,	1500000	,	20497.99	,	4	),
(3,	1500001,	1600000	,	21077.93	,	4	),
(3,	1600001,	1700000	,	21657.87	,	4	),
(3,	1700001,	1800000	,	22237.81	,	4	),
(3,	1800001,	1900000	,	22817.75	,	4	),
(3,	1900001,	2000000	,	23398.76	,	4	),
(3,	2000001,	2100000	,	23978.7	,	4	),
(3,	2100001,	2200000	,	24558.64	,	4	),
(3,	2200001,	2300000	,	25138.58	,	4	),
(3,	2300001,	2400000	,	25718.52	,	4	),
(3,	2400001,	2500000	,	26298.46	,	4	),
(3,	2500001,	2600000	,	26879.47	,	4	),
(3,	2600001,	2700000	,	27459.41	,	4	),
(3,	2700001,	2800000	,	28039.35	,	4	),
(3,	2800001,	2900000	,	28619.29	,	4	),
(3,	2900001,	3000000	,	29199.23	,	4	),
							
							
(3,	1,	100000	,	2632.2	,	5	),
(3,	100001,	200000	,	5038.63	,	5	),
(3,	200001,	300000	,	5639.97	,	5	),
(3,	300001,	400000	,	7144.39	,	5	),
(3,	400001,	500000	,	7843.1	,	5	),
(3,	500001,	600000	,	8702.31	,	5	),
(3,	600001,	700000	,	9454.52	,	5	),
(3,	700001,	800000	,	9883.59	,	5	),
(3,	800001,	900000	,	10313.73	,	5	),
(3,	900001,	1000000	,	10742.8	,	5	),
(3,	1000001,	1100000	,	12354.22	,	5	),
(3,	1100001,	1200000	,	12784.36	,	5	),
(3,	1200001,	1300000	,	13106.43	,	5	),
(3,	1300001,	1400000	,	13536.57	,	5	),
(3,	1400001,	1500000	,	13965.64	,	5	),
(3,	1500001,	1600000	,	14395.78	,	5	),
(3,	1600001,	1700000	,	14825.92	,	5	),
(3,	1700001,	1800000	,	15147.99	,	5	),
(3,	1800001,	1900000	,	15577.06	,	5	),
(3,	1900001,	2000000	,	16007.2	,	5	),
(3,	2000001,	2100000	,	16437.34	,	5	),
(3,	2100001,	2200000	,	16866.41	,	5	),
(3,	2200001,	2300000	,	17188.48	,	5	),
(3,	2300001,	2400000	,	17725.62	,	5	),
(3,	2400001,	2500000	,	18048.76	,	5	),
(3,	2500001,	2600000	,	18477.83	,	5	),
(3,	2600001,	2700000	,	18907.97	,	5	),
(3,	2700001,	2800000	,	19337.04	,	5	),
(3,	2800001,	2900000	,	19767.17	,	5	),
(3,	2900001,	3000000	,	20197.32	,	5	);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(4,	1,	100000	,	6123.61	,2),
(4,	100001,	200000	,	6736.72	,2),
(4,	200001,	300000	,	7348.76	,2),
(4,	300001,	400000	,	7950.1	,2),
(4,	400001,	500000	,	8572.84	,2),
(4,	500001,	600000	,	9185.95	,2),
(4,	600001,	700000	,	9797.99	,2),
(4,	700001,	800000	,	10410.03	,2),
(4,	800001,	900000	,	11023.14	,2),
(4,	900001,	1000000	,	11635.18	,2),
(4,	1000001,	1100000	,	12247.22	,2),
(4,	1100001,	1200000	,	12859.26	,2),
(4,	1200001,	1300000	,	13472.37	,2),
(4,	1300001,	1400000	,	14084.41	,2),
(4,	1400001,	1500000	,	14696.45	,2),
(4,	1500001,	1600000	,	15706.53	,2),
(4,	1600001,	1700000	,	16339.97	,2),
(4,	1700001,	1800000	,	16963.78	,2),
(4,	1800001,	1900000	,	17597.22	,2),
(4,	1900001,	2000000	,	18225.31	,2),
(4,	2000001,	2100000	,	18907.97	,2),
(4,	2100001,	2200000	,	19605.61	,2),
(4,	2200001,	2300000	,	20293.62	,2),
(4,	2300001,	2400000	,	20981.63	,2),
(4,	2400001,	2500000	,	21679.27	,2),
(4,	2500001,	2600000	,	22367.28	,2),
(4,	2600001,	2700000	,	23064.92	,2),
(4,	2700001,	2800000	,	23752.93	,2),
(4,	2800001,	2900000	,	24439.87	,2),
(4,	2900001,	3000000	,	25138.58	,2);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(5,	1      ,	100000	,	4942	    ,1),
(5,	100001 ,	200000	,	5802	    ,1),
(5,	200001,	300000	    ,	6446	    ,1),
(5,	300001,	400000	    ,	7306	    ,1),
(5,	400001,	500000	    ,	8165	    ,1),
(5,	500001,	1000000	    ,	12355	    ,1),
(5,	1000001,	1500000	,	14503	    ,1),
(5,	1500001,	2000000	,	17726	    ,1),
(5,	2000001,	2500000	,	20949	    ,1),
(5,	2500001,	3000000	,	24172	    ,1),
(5,	3000001,	4000000	,	29651	    ,1),
(5,	4000001,	5000000	,	34376	    ,1);

INSERT INTO insurance_detail(company_id,insurance_amount_i,insurance_amount_f,cost,prod_id) VALUES
(6,	1     ,	50000	    ,  	4300	        ,1),
(6,	50001 ,	100000	    ,	4840	        ,1),
(6,	100001,	150000	    ,	5380	        ,1),
(6,	150001,	200000	    ,	5910	        ,1),
(6,	200001,	300000	    ,	7520	        ,1),
(6,	300001,	350000	    ,	8060	        ,1),
(6,	350001,	400000	    ,	8600	        ,1),
(6,	400001,	450000	    ,	9140	        ,1),
(6,	450001,	500000	    ,	9670	        ,1),
(6,	500001,	600000	    ,	10320	        ,1),
(6,	600001,	700000	    ,	10960	        ,1),
(6,	700001,	800000	    ,	11610	        ,1),
(6,	800001,	900000	    ,	12250	        ,1),
(6,	900001,	1000000	    ,	12900	        ,1),
(6,	1000001,	1500000	,	14780	        ,1),
(6,	1500001,	2000000	,	16660	        ,1),
(6,	2000001,	2500000	,	19210	        ,1),
(6,	2500001,	3000000	,	21760	        ,1),
(6,	3000001,	4000000	,	26860	        ,1),
(6,	4000001,	5000000	,	29010	        ,1);
