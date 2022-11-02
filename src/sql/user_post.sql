CREATE TABLE user_post (
	post_id varchar(100) PRIMARY KEY,
    caption varchar(500),
    poster varchar(100),
    FOREIGN KEY (poster) REFERENCES Users(username)
);