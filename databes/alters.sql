CREATE TABLE pictures (
	id INT NOT NULL,
	picture LONGTEXT  NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (id) REFERENCES users (id)
);

ALTER TABLE discussion
ADD COLUMN parent_id INT NULL AFTER id,
ADD COLUMN user_id INT NOT NULL AFTER parent_id,
ADD FOREIGN KEY (parent_id) REFERENCES discussion (id),
ADD FOREIGN KEY (user_id) REFERENCES user (id);

UPDATE discussion SET
parent_id = parent_comment
WHERE parent_comment != '0';

UPDATE discussion d, users u SET
d.user_id = u.id
WHERE d.student = u.username;

ALTER TABLE discussion
DROP COLUMN parent_comment,
DROP COLUMN student;

ALTER TABLE discussion2
ADD COLUMN parent_id INT NULL AFTER id,
ADD COLUMN user_id INT NOT NULL AFTER parent_id,
ADD FOREIGN KEY (parent_id) REFERENCES discussion2 (id),
ADD FOREIGN KEY (user_id) REFERENCES user (id);

UPDATE discussion2 SET
parent_id = parent_comment
WHERE parent_comment != '0';

UPDATE discussion2 d, users u SET
d.user_id = u.id
WHERE d.student = u.username;

ALTER TABLE discussion2
DROP COLUMN parent_comment,
DROP COLUMN student;
