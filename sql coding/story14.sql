INSERT INTO private_message (id_user1,id_user2,text_send,is_read,date_send,date_read)
    VALUES (1,2,'NEVER',0,'2023-10-24 16:03:33',NULL),
           (3,1,'GONNA',0,'2023-10-24 16:04:44',NULL),
           (2,3,'GIVE',0,'2023-10-24 16:05:55',NULL),
           (2,1,'YOU',0,'2023-10-24 16:06:16',NULL),
           (1,4,'UP',0,'2023-10-24 16:07:07',NULL),
           (4,3,'NEVER',0,'2023-10-24 16:08:18',NULL),
           (2,4,'GONNA',0,'2023-10-24 16:09:09',NULL),
           (3,2,'LET',0,'2023-10-24 16:10:00',NULL),
           (1,3,'YOU',0,'2023-10-24 16:11:11',NULL),
           (3,4,'DOWN',0,'2023-10-24 16:12:22',NULL),
           (4,2,'NEVER',0,'2023-10-24 16:13:33',NULL),
           (3,2,'RUN',0,'2023-10-24 16:15:55',NULL),
           (2,1,'AROUND',0,'2023-10-24 16:16:16',NULL),
           (1,2,'AND',0,'2023-10-24 16:17:17',NULL),
           (4,2,'DESERT',0,'2023-10-24 16:18:28',NULL),
           (1,4,'YOU',0,'2023-10-24 16:19:19',NULL),
           (3,4,'!',0,'2023-10-24 16:20:20',NULL),
           (2,3,'RICK',0,'2023-10-24 16:21:11',NULL),
           (4,1,'ROLLED',0,'2023-10-24 16:22:22',NULL);

INSERT INTO private_message (id_user_1,id_user_2,text_send,is_read,send_date,read_date)
    VALUES (id_user1,id_user2,'text_send',is_read,'date_send','date_read')

DELETE FROM private_message
WHERE id_private_message = id du message à delete

UPDATE private_message SET text_send = 'nouvelle valeur' WHERE id_private_message = id du message à changer
