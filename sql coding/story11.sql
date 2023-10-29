SELECT
    m.text_send AS contenu_du_message,
    u.pseudo AS nom_du_joueur,
    m.date_send AS date_et_heure_du_message,
    CASE WHEN m.id_user = 1 THEN TRUE ELSE FALSE END AS isS
FROM
    message m
INNER JOIN
    user u ON m.id_user = u.id_user
WHERE
    m.date_send >= NOW() - INTERVAL 1 DAY
ORDER BY
    m.date_send;