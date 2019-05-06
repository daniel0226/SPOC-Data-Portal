/*Author: James Roach.
This is the script used to build the main database for the site
 */

/*Table for user managment*/
create table users(
	id int auto_increment not null,
	username varchar(256),
	password varchar(256),
	enabled boolean,
	email varchar(256),

	primary key(id)
);

/*Table for photo info. Actual photo data is stored in
file system not in data base*/
create table photos(
	id int auto_increment not null,
	photo_path varchar(1028) not null,
	photo_text varchar(256),  /*mouse over text*/

	primary key(id)
);

/*The holds the info for posts on the main page*/
create table blog_posts(
	id int auto_increment not null,
	post_title varchar(128) not null,
	post_date varchar(256) not null,
	post_text varchar(16384),

	primary key(id)
);

create table archive_links(
	id int auto_increment not null,
	link_text varchar(256) not null,
	link_link varchar(1028) not null,

	primary key(id)
);
