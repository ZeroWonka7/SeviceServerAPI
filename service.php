php

DB Connection
mysql_connect(localhost, root, Bac2bas6!!);
mysql_select_db(testdb);

$user = $_GET['username'];
$pass = $_GET['password'];
$api = $_GET['api'];

API
if ($api == 1234)
{
   $query = SELECT  FROM user WHERE username = '$user';
   $hasil = mysql_query($query);
   $data  = mysql_fetch_array($hasil);
   $password = $data['password'];

   if ($pass == $password) $response = TRUE;
   else $response = FALSE;
}
else $response = FALSE;

header('Content-Type textxml');
echo xml version='1.0';

echo data;
echo response.$response.response;
echo data;

