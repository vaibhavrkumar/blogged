CREATE TABLE users(
    id INTEGER AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    password_string VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    PRIMARY KEY (id)
);

CREATE TABLE posts(
    id INTEGER NOT NULL AUTO_INCREMENT,
    user_id INTEGER NOT NULL,
    title_str VARCHAR(500) NOT NULL,
    body_str VARCHAR(500) NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES usersTwo (id)
);

CREATE TABLE avatars(
    id INTEGER NOT NULL AUTO_INCREMENT,
    image_url VARCHAR(255) NOT NULL,
    user_id INTEGER NOT NULL,
    username INTEGER NOT NULL,
    created_at TIMESTAMP DEFAULT NOW(),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES usersTwo(id)
);

CREATE TABLE comments(
    id INTEGER NOT NULL AUTO_INCREMENT,
	comment_string VARCHAR(255) NOT NULL,
	user_id INTEGER NOT NULL,
    username INTEGER NOT NULL,
	avatar_id INTEGER NOT NULL,
	created_at TIMESTAMP DEFAULT NOW(),
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES usersTwo(id)
);