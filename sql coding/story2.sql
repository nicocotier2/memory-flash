INSERT INTO user (mdp, mail, pseudo, register_date, date_connection)
    VALUES  ("eliott04", "eliott@gmail.com", "eliott", "2001-10-11 21:12:13", "2001-10-12 19:27:24"),
            ("nicolas05", "nicolas@gmail.com", "nicolas", "2004-05-20 13:12:13", "2004-05-21 14:29:20"),
            ("aurélien06", "aurélien@gmail.com", "aurélien", "2007-01-22 22:12:55", "2007-01-23 11:12:45"),
            ("thomas26", "thomas@gmail.com", "thomas", "2003-10-30 06:34:06", "2003-10-31 15:25:28"),
            ("lana445", "lana@gmail.com", "lana", "2002-06-06 23:13:49", "2002-06-07 12:34:19");

INSERT INTO game (game_name)
    VALUES  ("Celestial Memory");

INSERT INTO score (id_user, id_game, difficulty, score, date_game);
    VALUES  (1, 1, 2, 265, "2001-10-12 20:29:13"),
            (2, 1, 1, 1200, "2004-05-21 15:27:19"),
            (3, 1, 3, 150, "2007-01-23 13:44:32"),
            (4, 1, 2, 612, "2003-10-31 17:46:05"),
            (5, 1, 1, 2200, "2002-06-07 14:18:50");

INSERT INTO message (id_user, id_game, text_send, date_send)
    VALUES  (1, 1, "Bonsoir", '2023-10-20 16:10:10'),
            (2, 1, "Salut Eliott04", '2023-10-20 16:10:10'),
            (1, 2, "Comment tu vas ?", '2023-10-20 16:10:10'),
            (2, 1, "Génial et toi ?", '2023-10-20 16:10:10'),
            (2, 1, "Super !", '2023-10-20 16:10:10'),
            (3, 1, "Salut à tous", '2023-10-20 16:10:10' ),
            (1, 1, "Coucou", '2023-10-20 16:10:10'),
            (2, 1, "Hello Aurélien", '2023-10-20 16:10:10'),
            (4, 1, "Yo",'2023-10-20 16:10:10'),
            (5, 1, "Salut Aurélien", '2023-10-20 16:10:10'),
            (3, 1, "Il y a du monde aujourd'hui dis donc", '2023-10-20 16:10:10' ),
            (3, 1, "Comment vous allez sinon ?", '2023-10-20 16:10:10'),
            (1, 1, "Je vais très bien", '2023-10-20 16:10:10'),
            (2, 1, "Moi aussi super", '2023-10-20 16:10:10'),
            (4, 1, "Un peu fatigué pour ma part", '2023-10-20 16:10:10'),
            (5, 1, "Parfait pour moi j'ai bien dormi", '2023-10-20 16:10:10');