create database penilaian;
	use penilaian;

create table admin(
	id_admin int primary key auto_increment,
	nama_admin varchar(25) not null,
	tanggal_lahir date not null,
	jk varchar(10) not null,
	email varchar(20) not null,
	password varchar(20) not null
);

create table poin(
	id_poin int primary key auto_increment,
	id_user int not null,
	jml_poin int not null,
	foreign key(id_user) references user(id_user)
);

create table user(
	id_user int primary key auto_increment,
	nama varchar(25) not null,
	tanggal_lahir date not null,
	jk varchar(10) not null,
	kelas varchar(25) not null,
	alamat varchar(100) not null,
	email varchar(20) not null,
	password varchar(20) not null,
);

