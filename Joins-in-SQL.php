joins 

ek sy ziyada table ko view krny k liye kam ata h 
jesy meery pass 2 table h to on dono ki value ek sat select Ya view krnwany k liye kam ata h joins.

How many type joins

4 type;

1- Inner joins
2-outer join
3-left join
4-right join


INNER JOINS:

inner join 2 tables k bech m agr kuch same h to wo osi ko select Ya view krway ga baki ko ni.

mtlb ek table user ka h or dosra comments ka to is m same jo h wo 
user ki id h jo foreign key lagi huwi h comment k table m
agr esy koe 2 table h to inner joins tbi use hota h is sy ye hoga jis jis ne camment kiye h wahi show hogy or
or kiya kiya comment kiye h wo b pta chal jay ga.

Query:

SELECT users.name, users.email, comments.id,comments.name,comments.email FROM users INNER JOIN comments ON users.id= comments.fk_user;


Left Join:

left side pr jo table hota h hamry pas oski sari value ly ata h cahy wo same id ho ya na ho dosry right side waly table k. jesy mujy ye dekhna h k kis ne comment kiya or kis ne comment ni kiya.

Query:

SELECT  users.name,users.email,users.number,country,city,address,image,password,role,users.date, comments.name, comments.email,comments.review FROM users LEFT JOIN comments ON users.id = comments.fk_user;



Right Join:

Right side pr jo table hota h hamry pas oski sari value ly ata h cahy wo same id ho ya na ho dosry left side waly table k.

Query:

SELECT  users.name,users.email,users.number,country,city,address,image,password,role,users.date, comments.name, comments.email,comments.review FROM users Right JOIN comments ON users.id = comments.fk_user;










