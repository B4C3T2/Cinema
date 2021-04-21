CREATE TABLE IF NOT EXISTS booking_seats (
    id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
    userId INT UNSIGNED NOT NULL,
    movieId INT UNSIGNED NOT NULL,
    seatId INT UNSIGNED NOT NULL,
    CONSTRAINT Constr_CourseMembership_User_fk_Like
        FOREIGN KEY User_fk (userId) REFERENCES usertable (id)
        ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT Constr_CourseMembership_Book_fk_Like
        FOREIGN KEY Book_fk (movieId) REFERENCES moviestable (id)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
