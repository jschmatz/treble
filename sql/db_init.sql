drop database if exists treble;
create database treble;

use treble;

drop table if exists user;
create table user (
    id bigint auto_increment primary key,
    active boolean,
    type tinyint,
    email varchar(255),
    password varchar(255),
    fname varchar(255),
    lname varchar(255),
    year_born char(4),
    zip_code varchar(255)
)engine=InnoDB default charset utf8;

/* TODO: Embed Type, Genre, Occasion, Instrument Tables and Foreign Keys to them */

drop table if exists profile;
create table profile (
    id bigint auto_increment primary key,
    user_id bigint NOT NULL,
    name varchar(255),
    hourly_rate varchar(255),
    website varchar(255),
    about blob,
    available_for_hire boolean NOT NULL,
    let_musicians_contact_me boolean NOT NULL,
    CONSTRAINT `fk_user_profile`
		FOREIGN KEY (user_id) REFERENCES user (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_member;
create table profile_member (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    name varchar(255),
    instrument varchar(50),
    CONSTRAINT `fk_profile_member`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_genre;
create table profile_genre (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    genre varchar(255),
    CONSTRAINT `fk_profile_genre`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_occasion;
create table profile_occasion (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    occasion varchar(255),
    CONSTRAINT `fk_profile_occasion`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_image;
create table profile_image (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    path varchar(255),
    CONSTRAINT `fk_profile_image`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_audio;
create table profile_audio (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    path varchar(255),
    CONSTRAINT `fk_profile_audio`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;

drop table if exists profile_embed;
create table profile_embed (
    id bigint auto_increment primary key,
    profile_id bigint NOT NULL,
    url varchar(255),
    type varchar(255),
    embed_code blob,
    CONSTRAINT `fk_profile_embed`
		FOREIGN KEY (profile_id) REFERENCES profile (id)
		ON DELETE CASCADE
		ON UPDATE RESTRICT
)engine=InnoDB default charset utf8;