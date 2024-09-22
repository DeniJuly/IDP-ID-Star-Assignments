<?php
echo 'Apa perbedaan antara $foo = "bar"; dan $foo = &$bar; dalam konteks variabel di PHP? </br>';
echo 'Variabel $foo = "bar" merupakan variabel independen yang tidak bergantung pada variabel lain. Sehingga perubahan pada variabel $foo tidak akan mempengaruhi variabel lain </br>';
echo 'sedangkan $foo = &$bar; menjadikan $foo sebagai referensi ke variabel $bar sehingga jika terjadi perbahaan pada salah satu variabel, maka akan mempengaruhi variabel lain </br>';
