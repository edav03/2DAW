<?php
$OrigArray = ['Paul Hendea', 'Raul Ivars', 'Joan Barres', 'Isabel Millet', 'Toni Vidal', 'David Palau', 'Edison Alcocer'];

echo "<h3>1. Crea un array llamado nombres que contenga varios nombres Muestra el número de elementos que tiene el array (función count)</h3>";
var_dump(count($OrigArray));
echo "<br>";
print_r($OrigArray);
echo "<h3>2. Crea una cadena que contenga los nombres de los alumnos existentes en el array separados por un espacio y muéstrala (función de strings implode) Muestra el array ordenado alfabéticamente (función asort)</h3>";

echo "<br>";
$second = $OrigArray;
asort($second);
print_r($second);

echo "<h3>3. Muestra el array en el orden inverso al que se creó (función array_reverse) Muestra la posición que tiene tu nombre en el array (función array_search) Crea un array de alumnos donde cada elemento sea otro array que contenga el id, nombre y edad del alumno.</h3>";

$reversed = array_reverse($OrigArray, true);
print_r($reversed);
$posicion = array_search('Edison Alcocer', $reversed);
echo "<br>Posicion de mi nombre: " . $posicion;
echo "<br><br>";

$alumnos = array(
    array("id" => "01", "nombre" => "Paul Hendea", "edad" => "20"), 
    array("id" => "02", "nombre" => "Raul Ivars", "edad" => "23"),
    array("id" => "03", "nombre" => "Joan Barres", "edad" => "22"),
    array("id" => "04", "nombre" => "Isabel Millet", "edad" => "19"),
    array("id" => "05", "nombre" => "Toni Vidal", "edad" => "26"),
    array("id" => "06", "nombre" => "David Palau", "edad" => "42"),
    array("id" => "07", "nombre" => "Edison Alcocer", "edad" => "19")
);
print_r($alumnos);

echo "<h3>4.Crea una tabla html en la que se muestren todos los datos de los alumnos. Utiliza la función array_column para obtener un array indexado que contenga únicamente los nombres de los alumnos y muéstralo por pantalla. Crea un array con 10 números y utiliza la función array_sum para obtener la suma de los 10 números.</h3>";
echo "<br>";

echo "
<table>
<tr>
  <th>ID</th>
  <th>NOMBRE</th>
  <th>EDAD</th>
</tr>
<tr>
  <td>01</td>
  <td>Paul Hendea</td>
  <td>20</td>
</tr>
<tr>
  <td>02</td>
  <td>Raul Ivars</td>
  <td>23</td>
</tr>
<tr>
  <td>03</td>
  <td>Joan Barres</td>
  <td>22</td>
</tr>
<tr>
  <td>04</td>
  <td>Isabel Millet</td>
  <td>19</td>
</tr>
<tr>
  <td>05</td>
  <td>David Palau</td>
  <td>42</td>
</tr>
<tr>
  <td>06</td>
  <td>Edison Alcocer</td>
  <td>19</td>
</tr>
</table>
";

$nombres = array_column($alumnos, "nombre");
echo "<br>Nombres de los alumnos: ";
print_r($nombres);

echo "<br><br>";
$sumarArr = [12, 54, 13, 64, 6, 334, 56, 25, 74, 21];
echo "Suma del array creado = " . array_sum($sumarArr);