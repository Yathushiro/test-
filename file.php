<?php
echo ("<h3>HELLO WORLD</h3>");

$servername = "db";
$username = "root";
$password = "root";
$dbname = "tom";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pracownicy";
  echo ("<h3>TEST</h3>");
  echo ("<li>".$sql."<br><br>");
$result= mysqli_query($conn,$sql);
  echo ('<table border ="1"');
  echo ("<tr><th>Imie</th><th>Dzial</th><th>Zarobki</th><th>Data urodzenia</th></tr>");
while($row=mysqli_fetch_assoc($result)){
  echo('<tr>');
  echo('<td>'.$row["imie"].'</td><td>'.$row["dzial"].'</td><td>'.$row["zarobki"].'</td><td>'.$row["data_urodzenia"].'</td>');
  echo('</tr>');  
}
echo("</table>");
echo("zmiana");
?>
