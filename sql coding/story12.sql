SELECT user.pseudo, game.game_name, score.difficulty, score.score, score.date_game
FROM user
INNER JOIN score ON user.id_user = score.id_user
INNER JOIN game ON score.id_game = game.id_game
WHERE user.pseudo = 'NomUtilisateur'
ORDER BY score.score DESC;
