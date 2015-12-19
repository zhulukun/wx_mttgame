create table mtt_story(
	id int(8) not null primary key auto_increment,
	content text not null
);

create table mtt_user
(
	id int(8) not null primary key auto_increment,
	name varchar(64) not null,
	avatar_url varchar(128) not null
);

create table mtt_userrefstory
(
	id int(8) not null primary key auto_increment,
	user_id int(8) not null,
	story_id int(8) not null
);