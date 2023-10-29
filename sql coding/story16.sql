    SELECT
    u1.pseudo AS expediteur,
    u2.pseudo AS receveur,
    pm.date_send AS date_heure_envoi,
    pm.date_read AS date_heure_lecture,
    pm.is_read AS est_lu,
    (SELECT COUNT(*) FROM score s1 WHERE s1.id_user = u1.id_user) AS party_exp, -- nombre de partie de l'expéditeur du message
    (SELECT COUNT(*) FROM score s2 WHERE s2.id_user = u2.id_user) AS party_rec, -- nombre de partie du receveur du message
    (SELECT g1.game_name -- recherche du jeu le plus jouer pour l'expediteur
     
     FROM score s1
     
     JOIN game g1 ON s1.id_game = g1.id_game
     
     WHERE s1.id_user = u1.id_user
     	GROUP BY g1.game_name
     	ORDER BY COUNT(*) DESC LIMIT 1) AS most_played_game_rec,
    (SELECT g2.game_name -- recherche du jeu le plus joué pour le receveur
     FROM score s2
         
     JOIN game g2 ON s2.id_game = g2.id_game
         
     WHERE s2.id_user = u2.id_user
         
     	GROUP BY g2.game_name
     	ORDER BY COUNT(*) ) AS most_played_game_exp
	FROM -- rassemblement des colonnes pour les différent traitement 
    private_message pm
	JOIN -- on rajoute user 1
    	user u1 ON pm.id_user_1 = u1.id_user
	JOIN -- ajout user 2
    	user u2 ON pm.id_user_2 = u2.id_user
	WHERE 
    (pm.id_user_1 = 1 AND pm.id_user_2 = 2) OR (pm.id_user_1 = 2 AND pm.id_user_2 = 1)
ORDER BY
    date_heure_envoi ASC;