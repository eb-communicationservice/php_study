create database php_study;

create table php_study.STAFF_INFOMATION (ID int not null primary key auto_increment, MEMBER_NO int not null, NAME varchar(20) not null default "", AGE smallint null, SEX enum('male','female') not null default "", PHONE varchar(11) default "", CREATED_AT datetime not null default current_timestamp, UPDATE_AT datetime null);

