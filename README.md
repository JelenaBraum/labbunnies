# labbunnies

Registration for volunteers willing to participate in evolutionary psychology research. The registration form is implemented into a wordpress page and connects through API to a database on a different server. There are two tables in the database, one consisting of registration numbers and (hashed) emails, the second one collects personal information of the volunteers and is regularly deleted from an internet-connected disc. Attributes of each volunteer are:

1. bunny id (numerical part), int
2. name, varchar
3. surname, varchar
4. e-mail, varchar
5. year of birth, int
6. country, varchar (iso Alpha-2 code)
7. town, varchar (not decided yet)
8. primary language, varchar
9. toxo status, int (0 not-inf, 1 inf, 2 unknown)
10. RhD status, int (0 neg, 1 pos, 2 unknown)
11. e-mail checked, int (unconfirmed: 0, confirmed: timestamp)
12. notes, text (additional info at the time of registration -> our notes at the time of download)
