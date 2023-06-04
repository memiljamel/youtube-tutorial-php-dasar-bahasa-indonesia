# Variable

- Variable adalah tempat untuk menyimpan data sehingga bisa kita gunakan lagi di kode program selanjutnya
- Di PHP variable bisa menampung berbagai jenis tipe data dan bisa berubah-ubah tipe data
- Untuk membuat variable kita bisa menggunakan tanda `$` (dolar) diikuti dengan nama variablenya
- Penamaan variable tidak boleh mengandung spasi

File: [Variable.php](/PHP%20Dasar/05%20-%20Variable/Variable.php)

# Variable Variables

- PHP memiliki kemampuan variable variables, yaitu membuat variable dari string value variable
- Walaupun fitur ini ada, tapi fitur ini sangat membingungkan jika digunakan secara luas, jadi disarankan untuk tidak menggunakan fitur ini kecuali memang diperlukan
- Untuk membuat variable dari variable kita bisa menggunakan `$$` diikuti dengan nama variablenya

File: [VariableVariables.php](/PHP%20Dasar/05%20-%20Variable/VariableVariables.php)

# Constant

- Variable di PHP sifatnya mutable, artinya bisa dirubah
- Jika kita ingin membuat variable yang immutable (tidak bisa dirubah), maka tidak bisa kita lakukan di PHP
- Sebagai gantinya, terdapat fitur yang namanya constant
- Constant adalah tempat untuk menyimpan data yang tidak bisa dirubah lagi setelah di deklarasikan
- Untuk membuat constant kita bisa menggunakan function `defined()`
- Best practice pembuatan nama constant adalah menggunakan UPPER_CASE

File: [Constant.php](/PHP%20Dasar/05%20-%20Variable/Constant.php)

# Data NULL

- Nilai NULL merepresentasikan sebuah variable tanpa nilai
- Saat kita membuat variable, lalu ingin menghapus data yang terdapat di variable tersebut, kita bisa menggunakan NULL untuk mengosongkan variable tersebut
- Untuk membuat data NULL, kita bisa menggunakan kata kunci NULL (case insensitive)

File: [DataNull.php](/PHP%20Dasar/05%20-%20Variable/DataNull.php)

# Mengecek Apakah Data NULL

- Kadang kita ingin tahu apakah sebuah data bernilai null atau tidak
- Untuk mengecek apakah sebuah data bernilai null, kita bisa menggunakan function `is_null($variable)`

File: [IsNull.php](/PHP%20Dasar/05%20-%20Variable/IsNull.php)

# Menghapus Variable

- Selain mengubah menjadi NULL, di PHP kita juga bisa menghapus sebuah variable, caranya dengan menggunakan function `unset($variable)`
- Namun hati-hati, ketika kita hapus variable, kita tidak bisa lagi mengakses variable tersebut, bahkan function `is_null($varibale)` akan menjadi error jika mengakses variable tersebut
- Agar lebih aman, kita bisa menggunakan function `isset($variable)` untuk mengecek apakah sebuah variable ada dan nilainya tidak NULL

File: [UnsetVariable.php](/PHP%20Dasar/05%20-%20Variable/UnsetVariable.php)
