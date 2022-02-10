create database login;
use login;

create table Cadrasto(
id_cadrasto int not null  auto_increment primary key,
nome_cadrasto varchar(90),
email_cadrasto varchar(90),
senha_cadrasto varchar(90),
datanas_cadrasto date);



select * from cadrasto;
insert into cadrasto(email_cadrasto,senha_cadrasto) values("a@a","a");
