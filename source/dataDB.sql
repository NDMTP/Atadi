INSERT INTO `loaisanpham` (`MALOAI`, `TENLOAI`) VALUES
('01', 'Mì cay'),
('02', 'Lẩu'),
('03', 'Miến Trộn'),
('04', 'Món Hàn '),
('05', 'Cơm trộn'),
('07', 'Nước giải khác'),
('08', 'Nướng'),
('09', 'Sushi');

INSERT INTO `nguoidung` (`EMAIL`, `MATKHAU`, `DIACHI`, `TEN`, `SDT`, `PHANQUYEN`) VALUES
('aib2011957@student.ctu.edu.vn', '202cb962ac59075b964b07152d234b70', '', '', '', NULL),
('duybii922002@gmail.com', '202cb962ac59075b964b07152d234b70 ', 'Vĩnh Long', 'Yii', '09398260244', NULL),
('qnhu@gmail.com', '202cb962ac59075b964b07152d234b70', 'Vĩnh Long', 'Nguyễn Quỳnh Như', '0123456789', NULL),
('vinh@gmail.com', '202cb962ac59075b964b07152d234b70', 'Cần Thơ', 'Nguyễn Đỗ Phúc Vinh', '0123456789', NULL);

INSERT INTO `khuvuc` (`MAKHUVUC`, `TENKHUVUC`, `PHIGIAO`) VALUES
('BT1','Phường Bình Thuỷ',25000),
('BT2','Phường Trà An',15000),
('BT3','Phường Thới An Đông',15000),
('BT4','Phường Trà Nóc',5000),
('BT5','Phường Bùi Hữu Nghĩa',5000),
('BT6','Phường Long Hoà',25000),
('BT7','Phường An Thới',25000),
('BT8','Phường Long Tuyền',5000),
('CR1','Phường Lê Bình',25000),
('CR2','Phường Ba Láng',5000),
('CR3','Phường Phú Thứ',15000),
('CR4','Phường Hưng Phú',0),
('CR5','Phường Thường Thạnh',25000),
('CR6','Phường Hưng Thạnh',15000),
('CR7','Phường Tân Phú',15000),
('NK1','Phường An Bình',0),
('NK2','Phường An Cư',0),
('NK3','Phường An Hòa',0),
('NK4','Phường An Khánh',0),
('NK5','Phường An Nghiệp',0),
('NK6','Phường An Phú',0),
('NK7','Phường Cái Khế',0),
('NK8','Phường Hưng Lợi',0),
('NK9','Phường Tân An',0),
('NK10','Phường Thới Bình',5000),
('NK11','Phường Xuân Khánh',0);


INSERT INTO `size` (`MASIZE`) VALUES
('Combo'),
('M'),
('L'),
('XL'),
('Vừa'),
('Lớn');


INSERT INTO `sanpham` (`MASP`, `MALOAI`, `TENSP`, `MOTA`, `LINKANH`) VALUES
('CT1', '05', ' Cơm trộn đùi gà', ' Đây là cơm trộn', 'comtron1.jpg'),
('CT2', '05', ' Cơm trộn Việt Quốc', ' Đây là cơm trộn', 'comtron2.jpg'),
('CT3', '05', ' Cơm trộn truyền thống', ' Đây là cơm trộn', 'comtron3.jpg'),
('CT4', '05', ' Cơm trộn thập cẩm', ' Đây là cơm trộn', 'comtron4.jpg'),
('L1', '02', ' Lẩu Hải sản', ' đây là lẩu', 'lau1.jpg'),
('L2', '02', ' Lẩu Bò 5 món',' đây là lẩu', 'lau2.jpg'),
('L3', '02', ' Lẩu 18 Tầng Địa Ngục', ' đây là lẩu', 'lau3.jpg'),
('L4', '02', ' Lẩu 2 ngăn', ' đây là lẩu', 'lau4.jpg'),
('L5', '02', ' Lâu Viên', ' đây là lẩu', 'lau5.jpg'),
('L6', '02', ' Lẩu 9 Tầng Mây', ' đây là lẩu', 'lau6.jpg'),
('MC1', '01', ' Mì cay thập cẩm',' Đây là mì cay', 'micay1.jpg'),
('MC10', '01', ' Mì Chả Cá', ' Đây là mì cay', 'micay10.jpg'),
('MC2', '01', ' Mì hải sản', ' Đây là mì cay', 'micay2.jpg'),
('MC3', '01', ' Mì Kimchi Bò Mỹ',' Đây là mì cay', 'micay3.jpg'),
('MC4', '01', ' Mì Kimchi Bò Úc', ' Đây là mì cay', 'micay4.jpg'),
('MC5', '01', ' Mì Kimchi Hải Sản',' Đây là mì cay', 'micay5.jpg'),
('MC6', '01', ' Mì Kimchi Bạch tuột',' Đây là mì cay', 'micay6.jpg'),
('MC7', '01', ' Mì Kimchi Mực', ' Đây là mì cay', 'micay7.jpg'),
('MC8', '01', ' Mì Kimchi Hàu', ' Đây là mì cay', 'micay8.jpg'),
('MC9', '01', ' Mì Gà', ' Đây là mì cay', 'micay9.jpg'),
('MH1', '04', ' Bánh Bạch Tuột', ' đây là đồ Hàn', 'banhbachtuot.jpg'),
('MH2', '04', ' Gà gán',  ' đây là đồ Hàn', 'gagan.jpg'),
('MH3', '04', ' Sushi', ' đây là đồ Hàn', 'sushi.jpg'),
('MH4', '04', ' Mỳ nước',' đây là đồ Hàn', 'minuoc.jpg'),
('MT1', '03', ' Miến trộn Hàn Quốc', ' Đây là miến', 'mientron1.jpg'),
('MT2', '03', ' Miến Trộn Korea ', ' Đây là miến', 'mientron2.jpg'),
('MT3', '03', ' Miến Trộn Bò', ' Đây là miến', 'mientron3.jpg'),
('MT4', '03', ' Miến trộn Hải Sản', ' Đây là miến', 'mientron4.jpg'),
('MT5', '03', ' Miến trộn Seafood', ' Đây là miến', 'mientron5.jpg'),
('N1', '07', ' Trà Dâu', ' đây là nước uống', 'nuoc1.jpg'),
('N2', '07', ' Trà Chanh', ' đây là nước uống', 'nuoc2.jpg'),
('N3', '07', ' Hoa đậu biếc',' đây là nước uống', 'nuoc3.jpg'),
('N4', '07', ' Chanh Dây', ' đây là nước uống', 'nuoc4.jpg'),
('N5', '07', ' Hồng Trà', ' đây là nước uống', 'nuoc5.jpg'),
('N6', '07', ' Trà Trái cây', ' đây là nước uống', 'nuoc6.jpg'),
('N7', '07', ' Trà Đào', ' đây là nước uống', 'nuoc7.jpg'),
('N8', '07', ' Trà Matcha', ' đây là nước uống', 'nuoc8.jpg');

INSERT INTO `sizecuasanpham` (`MASIZE`, `MASP`, `DONGIASP`) VALUES
('M','N1',23000),
('M','N2',23000),
('M','N3',26000),
('M','N4',23000),
('M','N5',23000),
('M','N6',26000),
('M','N7',23000),
('M','N8',23000),
('L','N1',26000),
('L','N2',26000),
('L','N3',29000),
('L','N4',26000),
('L','N5',26000),
('L','N6',29000),
('L','N7',26000),
('L','N8',26000),
('XL','N1',31000),
('XL','N2',31000),
('XL','N3',33000),
('XL','N4',31000),
('XL','N5',31000),
('XL','N6',33000),
('XL','N7',33000),
('XL','N8',33000),
('Combo','MH1',30000),
('Combo','MH2',29000),
('Combo','MH3',30000),
('Combo','MH4',25000),
('Combo','L6',289000),
('Combo','L2',219000),
('Combo','L3',349000),
('Vừa','CT1',30000),
('Vừa','CT2',35000),
('Vừa','CT3',25000),
('Vừa','CT4',30000),
('Vừa','L1',99000),
('Vừa','L4',79000),
('Vừa','L5',89000),
('Vừa','MC1',50000),
('Vừa','MC2',50000),
('Vừa','MC3',59000),
('Vừa','MC4',65000),
('Vừa','MC5',59000),
('Vừa','MC6',50000),
('Vừa','MC7',50000),
('Vừa','MC8',50000),
('Vừa','MC9',45000),
('Vừa','MC10',45000),
('Vừa','MT1',30000),
('Vừa','MT2',35000),
('Vừa','MT3',30000),
('Vừa','MT4',30000),
('Vừa','MT5',35000),
('Lớn','CT1',37000),
('Lớn','CT2',42000),
('Lớn','CT3',32000),
('Lớn','CT4',37000),
('Lớn','L1',149000),
('Lớn','L4',149000),
('Lớn','L5',179000),
('Lớn','MC1',56000),
('Lớn','MC2',56000),
('Lớn','MC3',64000),
('Lớn','MC4',71000),
('Lớn','MC5',64000),
('Lớn','MC6',56000),
('Lớn','MC7',56000),
('Lớn','MC8',56000),
('Lớn','MC9',51000),
('Lớn','MC10',51000),
('Lớn','MT1',36000),
('Lớn','MT2',41000),
('Lớn','MT3',36000),
('Lớn','MT4',36000),
('Lớn','MT5',41000);