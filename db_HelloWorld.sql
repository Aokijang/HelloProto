-- ****************** SqlDBM: MySQL ******************;
-- ***************************************************;


-- ************************************** `tb_type_answer`

CREATE TABLE `tb_type_answer` (
    `id` INT(1) NOT NULL,
    `name` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
);





-- ************************************** `tb_subject`

CREATE TABLE `tb_subject`
(
 `id`   INT(2) NOT NULL ,
 `name` VARCHAR(40) NOT NULL ,

PRIMARY KEY (`id`)
);





-- ************************************** `tb_message_type`

CREATE TABLE `tb_message_type`
(
 `id_message_type` INT(1) NOT NULL ,
 `name`            VARCHAR(10) NOT NULL ,

PRIMARY KEY (`id_message_type`)
);





-- ************************************** `tb_class`

CREATE TABLE `tb_class`
(
 `id_class` INT(1) NOT NULL ,
 `name`     VARCHAR(4) NOT NULL ,

PRIMARY KEY (`id_class`)
);





-- ************************************** `tb_units`

CREATE TABLE `tb_units`
(
 `id_units` INT(1) NOT NULL ,
 `name`     VARCHAR(40) NOT NULL ,

PRIMARY KEY (`id_units`)
);





-- ************************************** `tb_user_type`

CREATE TABLE `tb_user_type`
(
 `id_user_type` INT(1) NOT NULL ,
 `name`         VARCHAR(10) NOT NULL ,

PRIMARY KEY (`id_user_type`)
);





-- ************************************** `tb_user`

CREATE TABLE `tb_user`
(
 `id`           INT(10) NOT NULL AUTO_INCREMENT ,
 `name`         VARCHAR(25) NOT NULL ,
 `password`     VARCHAR(25) NOT NULL ,
 `email`        VARCHAR(50) NOT NULL ,
 `nis`          INT(4) NOT NULL ,
 `id_relation`  INT(20) NOT NULL ,
 `id_user_type` INT(1) NOT NULL ,
 `id_units`     INT(1) NOT NULL ,
 `id_class`     INT(1) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_67` (`id_user_type`),
CONSTRAINT `FK_67` FOREIGN KEY `fkIdx_67` (`id_user_type`) REFERENCES `tb_user_type` (`id_user_type`),
KEY `fkIdx_71` (`id_units`),
CONSTRAINT `FK_71` FOREIGN KEY `fkIdx_71` (`id_units`) REFERENCES `tb_units` (`id_units`),
KEY `fkIdx_112` (`id_class`),
CONSTRAINT `FK_112` FOREIGN KEY `fkIdx_112` (`id_class`) REFERENCES `tb_class` (`id_class`)
);





-- ************************************** `tb_date`

CREATE TABLE `tb_date`
(
 `id`         INT(20) NOT NULL ,
 `name`       VARCHAR(50) NOT NULL ,
 `time_start` DATETIME NOT NULL ,
 `time_end`   DATETIME NOT NULL ,
 `id_subject` INT(2) NOT NULL ,
 `id_class`   INT(1) NOT NULL ,
 `id_units`   INT(1) NOT NULL ,
 `id_user`    INT(10) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_276` (`id_user`),
CONSTRAINT `FK_276` FOREIGN KEY `fkIdx_276` (`id_user`) REFERENCES `tb_user` (`id`)
);





-- ************************************** `tb_teacher`

CREATE TABLE `tb_teacher`
(
 `id_teacher` INT(5) NOT NULL AUTO_INCREMENT ,
 `id_user`    INT(10) NOT NULL ,
 `id_units`   INT(1) NOT NULL ,
 `id_class`   INT(1) NOT NULL ,
 `id_subject` INT(2) NOT NULL ,

PRIMARY KEY (`id_teacher`),
KEY `fkIdx_99` (`id_user`),
CONSTRAINT `FK_99` FOREIGN KEY `fkIdx_99` (`id_user`) REFERENCES `tb_user` (`id`),
KEY `fkIdx_103` (`id_units`),
CONSTRAINT `FK_103` FOREIGN KEY `fkIdx_103` (`id_units`) REFERENCES `tb_units` (`id_units`),
KEY `fkIdx_120` (`id_class`),
CONSTRAINT `FK_120` FOREIGN KEY `fkIdx_120` (`id_class`) REFERENCES `tb_class` (`id_class`),
KEY `fkIdx_168` (`id_subject`),
CONSTRAINT `FK_168` FOREIGN KEY `fkIdx_168` (`id_subject`) REFERENCES `tb_subject` (`id`)
);





-- ************************************** `tb_message`

CREATE TABLE `tb_message`
(
 `id`        INT(10) NOT NULL AUTO_INCREMENT ,
 `message`   LONGTEXT NOT NULL ,
 `id_type`   INT(1) NOT NULL ,
 `id_user`   INT(10) NOT NULL ,
 `time_sent` DATETIME NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_87` (`id_user`),
CONSTRAINT `FK_87` FOREIGN KEY `fkIdx_87` (`id_user`) REFERENCES `tb_user` (`id`),
KEY `fkIdx_141` (`id_type`),
CONSTRAINT `FK_141` FOREIGN KEY `fkIdx_141` (`id_type`) REFERENCES `tb_message_type` (`id_message_type`)
);





-- ************************************** `tb_quiz`

CREATE TABLE `tb_quiz`
(
 `id`             INT(10) NOT NULL ,
 `teacher_id`     INT(5) NOT NULL ,
 `time_start`     DATETIME NOT NULL ,
 `time_end`       DATETIME NOT NULL ,
 `id_message`     INT(10) NOT NULL ,
 `id_type_answer` INT(1) NOT NULL ,
 `question`       LONGTEXT NOT NULL ,
 `answer`         LONGTEXT NOT NULL ,
 `option`         LONGTEXT NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_204` (`id_message`),
CONSTRAINT `FK_204` FOREIGN KEY `fkIdx_204` (`id_message`) REFERENCES `tb_message` (`id`),
KEY `fkIdx_229` (`id_type_answer`),
CONSTRAINT `FK_229` FOREIGN KEY `fkIdx_229` (`id_type_answer`) REFERENCES `tb_type_answer` (`id`)
);





-- ************************************** `tb_assignment`

CREATE TABLE `tb_assignment`
(
 `id`         INT(10) NOT NULL ,
 `id_message` INT(10) NOT NULL ,
 `time_start` DATETIME NOT NULL ,
 `time_end`   DATETIME NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_152` (`id_message`),
CONSTRAINT `FK_152` FOREIGN KEY `fkIdx_152` (`id_message`) REFERENCES `tb_message` (`id`)
);





-- ************************************** `tb_inbox`

CREATE TABLE `tb_inbox`
(
 `id`         INT(10) NOT NULL ,
 `id_message` INT(10) NOT NULL ,
 `to_id`      INT(10) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_131` (`id_message`),
CONSTRAINT `FK_131` FOREIGN KEY `fkIdx_131` (`id_message`) REFERENCES `tb_message` (`id`)
);





-- ************************************** `tb_submit_quiz`

CREATE TABLE `tb_submit_quiz`
(
 `id`            INT(10) NOT NULL ,
 `id_quiz`       INT(10) NOT NULL ,
 `id_user`       INT(10) NOT NULL ,
 `answer`        LONGTEXT NOT NULL ,
 `time_submited` DATETIME NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_243` (`id_quiz`),
CONSTRAINT `FK_243` FOREIGN KEY `fkIdx_243` (`id_quiz`) REFERENCES `tb_quiz` (`id`),
KEY `fkIdx_247` (`id_user`),
CONSTRAINT `FK_247` FOREIGN KEY `fkIdx_247` (`id_user`) REFERENCES `tb_user` (`id`)
);





-- ************************************** `tb_quiz_detail`

CREATE TABLE `tb_quiz_detail`
(
 `id`         INT(10) NOT NULL ,
 `id_units`   INT(1) NOT NULL ,
 `id_class`   INT(1) NOT NULL ,
 `id_subject` INT(2) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_211` (`id`),
CONSTRAINT `FK_211` FOREIGN KEY `fkIdx_211` (`id`) REFERENCES `tb_quiz` (`id`)
);





-- ************************************** `tb_submit_assignment`

CREATE TABLE `tb_submit_assignment`
(
 `id`            INT(20) NOT NULL ,
 `id_assignment` INT(10) NOT NULL ,
 `id_user`       INT(10) NOT NULL ,
 `file`          LONGBLOB NOT NULL ,
 `time_submited` DATETIME NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_184` (`id_user`),
CONSTRAINT `FK_184` FOREIGN KEY `fkIdx_184` (`id_user`) REFERENCES `tb_user` (`id`),
KEY `fkIdx_189` (`id_assignment`),
CONSTRAINT `FK_189` FOREIGN KEY `fkIdx_189` (`id_assignment`) REFERENCES `tb_assignment` (`id`)
);





-- ************************************** `tb_assignment_details`

CREATE TABLE `tb_assignment_details`
(
 `id`         INT(10) NOT NULL ,
 `id_units`   INT(1) NOT NULL ,
 `id_class`   INT(1) NOT NULL ,
 `id_subject` INT(2) NOT NULL ,

PRIMARY KEY (`id`),
KEY `fkIdx_172` (`id`),
CONSTRAINT `FK_172` FOREIGN KEY `fkIdx_172` (`id`) REFERENCES `tb_assignment` (`id`)
);




