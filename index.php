<html>
<head>
<title>Дмитриев Иван ИУ4-13Б Вариант 5</title>
</head>
<body>
<form method="POST">
    <select name="spisok">
<option selected value="1">1900</option>
<option selected value="2">1901</option>
<option selected value="3">1902</option>
<option selected value="1">1903</option>
<option selected value="2">1904</option>
<option selected value="1">1905</option>
<option selected value="2">1906</option>
<option selected value="3">1907</option>
<option selected value="1">1908</option>
<option selected value="2">1909</option>
<option selected value="1">1910</option>
<option selected value="2">1911</option>
<option selected value="3">1912</option>
<option selected value="1">1913</option>
<option selected value="2">1914</option>
<option selected value="1">1915</option>
<option selected value="2">1916</option>
<option selected value="3">1917</option>
<option selected value="1">1918</option>
<option selected value="2">1919</option>
<option selected value="1">1920</option>
<option selected value="2">1921</option>
<option selected value="3">1922</option>
<option selected value="1">1923</option>
<option selected value="2">1924</option>
<option selected value="1">1925</option>
<option selected value="2">1926</option>
<option selected value="3">1927</option>
<option selected value="1">1928</option>
<option selected value="2">1929</option>
<option selected value="1">1930</option>
<option selected value="2">1931</option>
<option selected value="3">1932</option>
<option selected value="1">1933</option>
<option selected value="2">1934</option>
<option selected value="1">1935</option>
<option selected value="2">1936</option>
<option selected value="3">1937</option>
<option selected value="1">1938</option>
<option selected value="2">1939</option>
<option selected value="1">1940</option>
<option selected value="2">1941</option>
<option selected value="3">1942</option>
<option selected value="1">1943</option>
<option selected value="2">1944</option>
<option selected value="1">1945</option>
<option selected value="2">1946</option>
<option selected value="3">1947</option>
<option selected value="1">1948</option>
<option selected value="2">1949</option>
<option selected value="1">1950</option>
<option selected value="2">1951</option>
<option selected value="3">1952</option>
<option selected value="1">1953</option>
<option selected value="2">1954</option>
<option selected value="1">1955</option>
<option selected value="2">1956</option>
<option selected value="3">1957</option>
<option selected value="1">1958</option>
<option selected value="2">1959</option>
<option selected value="1">1960</option>
<option selected value="2">1961</option>
<option selected value="3">1962</option>
<option selected value="1">1963</option>
<option selected value="2">1964</option>
<option selected value="1">1965</option>
<option selected value="2">1966</option>
<option selected value="3">1967</option>
<option selected value="1">1968</option>
<option selected value="2">1969</option>
<option selected value="1">1970</option>
<option selected value="2">1971</option>
<option selected value="3">1972</option>
<option selected value="1">1973</option>
<option selected value="2">1974</option>
<option selected value="1">1975</option>
<option selected value="2">1976</option>
<option selected value="3">1977</option>
<option selected value="1">1978      
</select><br>
 Введите перменную А<br>
<input type="text" name="A"><br>
 Введите перменную B <br>   
<input type="text" name="B"><br>
Введите перменную C <br>
<input type="text" name="C"><br>
<input type="submit" value="Go!">
</form>
</body>
</html>
<?php
 $A = (float) $_POST['A'];
 $B = (float) $_POST['B'];
 $C = (float) $_POST['C'];
if ($B*$B-4*$A*$C<0) 
   echo "Корней нет";
else if ($B*$B-4*A*$C==0) 
   echo "Оба корня равны ",-$B/(2*$A);
else 
   echo "Корни уравнения: x1= ",(-$B+sqrt($B*$B-4*$A*$C))/(2*$A),"; x2= ",(-$B-sqrt($B*$B-4*$A*$C))/(2*$A); 

?>
 

