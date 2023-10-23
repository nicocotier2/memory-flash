#TestSQL

#Création#

CREATE TABLE film (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    titre VARCHAR(40) NOT NULL,
    genre VARCHAR(40) NOT NULL,
    date_sortie DATE NOT NULL,
    commentaire TEXT,
    PRIMARY KEY (id)
)
CHARACTER SET 'utf8'