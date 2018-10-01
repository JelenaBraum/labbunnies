# labbunnies

TO-DO list:

* (CHECK) draft databases
* (CHECK) draft registration form
* (CHECK) draft texts for homepage, data policy, registration, current projects
* create a few "news stories"
* (CHECK) create the API structure (config, objects, regnumbers, and regusers folders)
* (CHECK) draft create.php and post_one.php for regnumbers and add the methods into the regnumbers.php
* (CHECK) draft create.php for regusers and add the methods into the regusers.php
* (CHECK) temporary registration form (give us your email, we'll inform you when full registration is ready)
* (CHECK) temporarily disable "cooperation" tab until it's ready
* (CHECK) add first "news story"
* (CHECK) prepare a php script that calls the create.php with the data from registration form
* (CHECK) tweak the registration form so that it sends the data in correct format
* (CHECK) tweak the php script so that it transform the registration data into correct formats needed for the database
* (CHECK) test creating a new registered user in the regusers database
* (CHECK) tweak the scripts so that the data tranformed into correct format are saved also in the regnumbers database
* (CHECK) create a script that sends a user an infomail to their email address with a confirmation link to finish their registration
* (CHECK) create a script that confirms new registered user's email and sends them their bunny ID
* create a script that deletes unconfirmed registration after a certain amount of time (5 hours?)
* rename the facebook page Guinea Pigs tp Lab Bunnies and announce the new web page
* make the API safer by using authorization keys
* create a script that sends the users their bunny ID to their email - this needs to be done using hashed emails so also the anonymous users can get their numbers
* create a database that collects names of finished questionnaires (quests field might either contain complete names or links to another table)
* tweak the script for sending the bunny ID so it also sends the users the questionnaires they finished

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
13. e-mailchecked, varchar (NA | timestamp -> YES | timestamp)
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
├────── read_one.php - finds a record based on email, sends out bunnyid<br>
├────── read_email.php - finds a record based on bunnyidnum, sends out email<br>
├────── update.php - finds a record based on bunnyidnum, marks record as confirmed<br>
*├────── delete.php - file that will accept an user ID to delete a database record if an email is not confirmed.<br>
├─── regnumber/<br>
├────── create.php - file that will accept posted user data to be saved to the database.<br>
*├────── delete.php - file that will accept an user ID to delete a database record if an email is not confirmed.<br>
├────── read_one.php - file that will output JSON data based from "regnumbers" database records - when a user asks for their bunny ID or finished questionnaires - input is an encrypted e-mail address
