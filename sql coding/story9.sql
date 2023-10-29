INSERT INTO score (id_score, id_user, id_game, difficulty, score)
VALUES (1, 1, 1, 2, 300)
ON DUPLICATE KEY UPDATE score = VALUES(score);