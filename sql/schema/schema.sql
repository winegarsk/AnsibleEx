CREATE DATABASE media;
USE media;
CREATE TABLE Movies (
    Title varchar(255),
    Genre varchar(255),
    Rating varchar(255));
INSERT INTO Movies (Title, Genre, Rating) VALUES
	('Titanic', 'Romance', 'PG13');
	COMMIT;