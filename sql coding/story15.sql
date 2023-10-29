SELECT
    u1.pseudo AS expediteur,
    u2.pseudo AS receveur,
    MAX (pm.date_send),
    pm.date_read AS date_heure_lecture,
    pm.is_read AS est_lu,
    (pm.id_user_1 + pm.id_user_2) AS id_conversation,
    pm.text_send
FROM
    private_message pm
JOIN
    user u1 ON pm.id_user_1 = u1.id_user
JOIN
    user u2 ON pm.id_user_2 = u2.id_user
WHERE
    (pm.id_user_1 = 1 OR pm.id_user_2 = 1)
    GROUP BY id_conversation;