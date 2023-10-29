SELECT
  game.game_name,
  user.pseudo,
  score.difficulty,
  score.score
FROM
  score
INNER JOIN game 
	ON score.id_game = game.id_game
INNER JOIN user
	ON score.id_user = user.id_user
WHERE
	user.pseudo = "nicolas" AND score.difficulty = 1 AND game.game_name = "Celestial Memory";