create table tb_groups (
group_id smallint,	
title varchar(50),
description varchar(200),
moderators varchar(255),
allow_view tinyint
);

create table tb_forums (
fid smallint,
gid smallint,
name varchar(50),
description varchar(200),
icon varchar(50),
status tinyint,
threads mediumint,
posts mediumint,
lastpost datetime,
lastposter varchar(15),
lastpost_title varchar(80)
);

create table tb_threads(
tid mediumint,
fid smallint,
gid smallint,
aid tinyint,
icontype tinyint,
author varchar(15),
authorid mediumint,
subject char(80),
publish_time datetime,
lastpost datetime,
lastposter varchar(15),
views mediumint,
replies mediumint,
digest tinyint,
attachment tinyint);

create table tb_posts(
pid int,
tid mediumint,
fid smallint,
gid smallint,
aid	tinyint,
author varchar(15),
authorid mediumint,
subject varchar(80),
publish_time  datetime,
message mediumtext
);

create table tb_members(
mid mediumint,
mgid smallint,
admid smallint,
username varchar(15),
password varchar(12),
email varchar(60),
gender tinyint,
credit int,
xcoin smallint,
threads smallint,
avatar varchar(100)
);

create table tb_member_group (
	gid smallint,
	title char(30),
	credit_top int,
	credit_bottom int,
	allow_invisible tinyint
);


create table tb_admin_group (
	admid smallint,
	title char(30)
);