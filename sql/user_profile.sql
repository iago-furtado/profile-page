CREATE table user_profile(
	user_id int not null auto_increment,
	name varchar (50),
    email varchar(50),
	bio varchar (250),
    primary key (user_id)
);