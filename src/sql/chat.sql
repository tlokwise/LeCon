CREATE TABLE chat(
    msg VARCHAR(1000),
    user1 VARCHAR(100),
    user2 VARCHAR(100),
    FOREIGN KEY(user1) REFERENCES Users(username),
    FOREIGN KEY(user2) REFERENCES Users(username),
    fromwho INT(1) CHECK
        (fromwho > 0 AND fromwho < 3)
);