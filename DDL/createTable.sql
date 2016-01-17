drop table STAFF_INFOMATION;
create table php_study.STAFF_INFOMATION (
  ID int not null auto_increment,
  MEMBER_NO int not null,
  NAME varchar(20) not null,
  AGE smallint,
  SEX enum('male','female') not null,
  PHONE_NO varchar(11) default "",
  CREATED_AT datetime not null default current_timestamp,
  UPDATED_AT datetime,
  primary key(ID)
);