# labbunnies

Registration for volunteers willing to participate in evolutionary psychology research. The registration form is implemented into a wordpress page and connects through API to a database on a different server. There are two tables in the database, one consisting of registration numbers and (hashed) emails, the second one collects personal information of the volunteers and is regularly deleted from an internet-connected disc. Attributes of each volunteer are:

1. bunny id (numerical part), int
2. name, varchar
3. surname, varchar
4. gender, int (0 female, 1 male, 2 other)
5. e-mail, varchar
6. year of birth, int
7. placeoforigin, varchar (country | state or province | city)
8. currentplace, varchar (country | state or province | city)
9. primary language, varchar
10. toxo status, int (0 not-inf, 1 inf, 2 unknown)
11. AB0 blood group (NA, A, B, AB, 0, H)
12. RhD status, int (0 neg, 1 pos, 2 unknown)
13. e-mail checked, int (unconfirmed: 0, confirmed: timestamp)
14. notes, text (additional info at the time of registration -> our notes at the time of download)

Anonymous registration will not contain fields name & surname; e-mail will be taken but stored in hashed form only.

The table of registration numbers contains following attributes:

1. bunny id (complete), varchar
2. hashed email, varchar
3. participation in questionaires (depends on whether I am able to use Qualtrics API to get this information)

Intended structure of the API (v.1)

├─ api/<br>
├─── config/<br>
├────── core.php - file used for core configuration<br>
├────── database.php - file used for connecting to the database.<br>
├─── objects/<br>
├────── regnumber.php - contains properties and methods for "regnumber" database queries.<br>
├────── reguser.php - contains properties and methods for "reguser" database queries.<br>
├─── reguser/<br>
├────── create.php - file that will accept posted user data to be saved to database.<br>
├────── delete.php - file that will accept an user ID to delete a database record if an email is not confirmed.<br>
├─── regnumber/<br>
├────── create.php - file that will accept posted user data to be saved to the database.<br>
├────── delete.php - file that will accept an user ID to delete a database record if an email is not confirmed.<br>
├────── read.php - file that will output JSON data based from "regnumbers" database records - when a user asks for their bunny ID or finished questionnaires

Methods

