<?php
/*
 * Author: Francois Campbell
 * Company : Solgen.co.za
 * URI : http//www.solgen.co.za
 */
$error="";
$db = 'db/test.db';
$db = new SQLiteDatabase($db);
if ($error) exit($error);
//test if a table exists - pragma table_info("tablename")
 $q=$db->query("PRAGMA table_info(test)");
 if ($q->numRows()!=2) {
     if (!$db->queryexec("
         CREATE TABLE test (
             id INTEGER NOT NULL PRIMARY KEY,
             text VARCHAR ( 255 ) NOT NULL
             )")
     ) exit ("Create SQLite Database Error\n");
 }else{
     echo "Table exists";
 }
 echo "first clear the table";
 echo "Now to insert something.";

?>
