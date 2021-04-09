CREATE TABLE IF NOT EXISTS `movie` (
  id INT UNSIGNED NOT NULL PRIMARY KEY AUTO_INCREMENT,
  genreId INT UNSIGNED,
  title varchar(255) NOT NULL,
  releaseDate date NOT NULL,
  description text,
  FOREIGN KEY (genreId) REFERENCES genres(id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
