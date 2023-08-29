/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     19/08/2023 2:45:43 PM                        */
/*==============================================================*/

/*==============================================================*/
/* Table: CHITIETHOADON                                         */
/*==============================================================*/
create table CHITIETHOADON
(
   MAHOADON             int not null,
   MASP                 varchar(10) not null,
   MASIZE               varchar(5),
   SOLUONGSP            int,
   DOCAY                varchar(50),
   DONGIABAN            int,
   TONGTIEN             int,
   primary key (MAHOADON, MASP, MASIZE)
);

/*==============================================================*/
/* Table: GIAOHANG                                              */
/*==============================================================*/
create table GIAOHANG
(
   MAKHUVUC             varchar(20) not null,
   MAHOADON             int not null,
   PHIGIAO              int,
   GHICHU               varchar(70),
   primary key (MAKHUVUC, MAHOADON)
);

/*==============================================================*/
/* Table: HOADON                                                */
/*==============================================================*/
create table HOADON
(
   MAHOADON             int not null,
   EMAIL                varchar(70) not null,
   NGAYLAP              datetime,
   TRANGTHAIHOADON      varchar(40),
   primary key (MAHOADON)
);



/*==============================================================*/
/* Table: KHUVUC                                                */
/*==============================================================*/
create table KHUVUC
(
   MAKHUVUC             varchar(20) not null,
   TENKHUVUC            varchar(100) not null,
   PHIGIAO				int not null,
   primary key (MAKHUVUC)
);

/*==============================================================*/
/* Table: LOAISANPHAM                                           */
/*==============================================================*/
create table LOAISANPHAM
(
   MALOAI               varchar(10) not null,
   TENLOAI              varchar(50),
   primary key (MALOAI)
);

/*==============================================================*/
/* Table: NGUOIDUNG                                             */
/*==============================================================*/
create table NGUOIDUNG
(
   EMAIL                varchar(70) not null,
   MATKHAU              varchar(70),
   DIACHI               varchar(100),
   TEN                  varchar(50),
   SDT                  varchar(12),
   PHANQUYEN            varchar(20),
   primary key (EMAIL)
);

/*==============================================================*/
/* Table: SANPHAM                                               */
/*==============================================================*/
create table SANPHAM
(
   MASP                 varchar(10) not null,
   MALOAI               varchar(10) not null,
   TENSP               varchar(100),
   MOTA                 varchar(300),
   LINKANH              varchar(200),
   primary key (MASP)
);

/*==============================================================*/
/* Table: SIZE                                                  */
/*==============================================================*/
create table SIZE
(
   MASIZE               varchar(5) not null,
   primary key (MASIZE)
);

/*==============================================================*/
/* Table: SIZECUASANPHAM                                        */
/*==============================================================*/
create table SIZECUASANPHAM
(
   MASIZE               varchar(5) not null,
   MASP                 varchar(10) not null,
   DONGIASP             int,
   primary key (MASIZE, MASP)
);

alter table CHITIETHOADON add constraint FK_GIOHANG_CTGIOHANG foreign key (MAHOADON)
      references HOADON (MAHOADON) on delete restrict on update restrict;

alter table CHITIETHOADON add constraint FK_SP_CTGIOHANG foreign key (MASIZE, MASP)
      references SIZECUASANPHAM (MASIZE, MASP) on delete restrict on update restrict;

alter table GIAOHANG add constraint FK_HOADON_GIAOHANG foreign key (MAHOADON)
      references HOADON (MAHOADON) on delete restrict on update restrict;

alter table GIAOHANG add constraint FK_KHUVUC_GIAOHANG foreign key (MAKHUVUC)
      references KHUVUC (MAKHUVUC) on delete restrict on update restrict;

alter table HOADON add constraint FK_GIOHANGCUAKHACH foreign key (EMAIL)
      references NGUOIDUNG (EMAIL) on delete restrict on update restrict;

alter table SANPHAM add constraint FK_LOAICUASP foreign key (MALOAI)
      references LOAISANPHAM (MALOAI) on delete restrict on update restrict;

alter table SIZECUASANPHAM add constraint FK_SIZECUASANPHAM foreign key (MASIZE)
      references SIZE (MASIZE) on delete restrict on update restrict;

alter table SIZECUASANPHAM add constraint FK_SIZECUASANPHAM2 foreign key (MASP)
      references SANPHAM (MASP) on delete restrict on update restrict;

