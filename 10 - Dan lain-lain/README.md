# Komentar

- Kadang dalam membuat program, kita sering menempatkan komentar di kode program tersebut
- Komentar adalah kode program yang akan di hiraukan saat kode program kita dijalankan
- Biasanya komentar digunakan untuk dokumentasi

File: [Komentar.php](/10%20-%20Dan%20lain-lain/Komentar.php)

# String Function

- Sebelumnya saya pernah menggunakan beberapa function dari PHP untuk memanipulasi data string
- Sebenarnya banyak sekali function bawaan PHP yang bisa kita gunakan untuk memanipulasi string
- [https://www.php.net/manual/en/ref.strings.php](https://www.php.net/manual/en/ref.strings.php)

![String Function](/10%20-%20Dan%20lain-lain/Picture%201.PNG "String Function")

File: [StringFunction.php](/10%20-%20Dan%20lain-lain/StringFunction.php)

# Array Function

- Di PHP juga terdapat banyak sekali function bawaan yang bisa kita gunakan untuk memanipulasi data Array
- [https://www.php.net/manual/en/ref.array.php](https://www.php.net/manual/en/ref.array.php)

![Array Function](/10%20-%20Dan%20lain-lain/Picture%202.PNG "Array Function")

File: [ArrayFunction.php](/10%20-%20Dan%20lain-lain/ArrayFunction.php)

# is Function

- PHP memiliki banyak sekali function dengan prefix `is_`
- Function-function ini rata-rata digunakan untuk mengecek tipe data dari sebuah data
- [https://www.php.net/manual/en/ref.var.php](https://www.php.net/manual/en/ref.var.php)

![is Function](/10%20-%20Dan%20lain-lain/Picture%203.PNG "is Function")

File: [IsFunction.php](/10%20-%20Dan%20lain-lain/IsFunction.php)

# Require dan Include

- Saat membuat aplikasi, ada baiknya tidak dibuat dalam satu file
- Lebih baik dipisah ke beberapa file agar kode program tidak terlalu bertumpuk di suatu file
- PHP memiliki function `require` dan `include` yang bisa kita gunakan untuk mengambil file php lain
- Lantas apa bedanya `require` dan `include`?
- Pada `require`, jika file yang kita ambil tidak ada, maka akan terjadi error dan program terhenti
- Pada `include`, jika file yang kita ambil tidak ada, maka hanya akan memberi peringatan, namun program akan tetap dilanjutkan

File: [Include.php](/10%20-%20Dan%20lain-lain/Include.php), [Require.php](/10%20-%20Dan%20lain-lain/Require.php)

# Posisi Require dan Include

- Kode program PHP akan dibaca dari atas ke bawah, oleh karena itu pastikan posisi `require` dan `include` sesuai dengan yang kita inginkan
- Misal jika sampai kita salah menempatkan posisi `require` dan `include`, bisa jadi kita malah memanggil function yang belum ada

# require_once dan include_once

- Function `require` dan `include` akan selalu mengambil file yang kita inginkan
- Jika kita beberapa kali menggunakan `require` dan `include` file yang sama, maka file tersebut akan berkali-kali pula kita ambil
- Hal ini akan menjadi masalah jika misal dalam file yang kita ambil terdapat definisi function, sehingga jika diambil berkali-kali akan menyebabkan error redeclare function
- Untungnya di PHP terdapat function `require_once` dan `include_once`, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama, maka tidak akan diambil lagi

File: [IncludeBerkaliKali.php](/10%20-%20Dan%20lain-lain/IncludeBerkaliKali.php), [IncludeOnce.php](/10%20-%20Dan%20lain-lain/IncludeOnce.php)

# Variable Scope

Di PHP, kita bisa membuat variable dimanapun yang kita mau

Scope variable adalah dibagian mana saja sebuah variable bisa diakses

PHP memiliki tiga jenis variable scope
- global
- local
- static

# Global Scope

- Variable yang dibuat diluar function memiliki scope global
- Variable di scope global hanya bisa diakses dari luar function
- Artinya di dalam function, kita tidak bisa mengakses variable di global scope

File: [VariableGlobalScope.php](/10%20-%20Dan%20lain-lain/VariableGlobalScope.php)

# Local Scope

- Variable yang dibuat di dalam function memiliki scope local
- Variable di scope local hanya bisa diakses dari dalam function itu sendiri
- Artinya variable tersebut tidak bisa diakses dari luar function ataupun dari function lain

File: [VariableLocalScope.php](/10%20-%20Dan%20lain-lain/VariableLocalScope.php)

# global Keyword

- Namun jika kita ingin mengakses variable diluar function (global scope) dari dalam function, kita bisa menggunakan kata kunci `global`
- Dengan menggunakan kata kunci `global`, maka kita bisa mengakses variable yang ada di global scope dari dalam function

File: [GlobalKeyword.php](/10%20-%20Dan%20lain-lain/GlobalKeyword.php)

# $GLOBALS Variable

- Selain menggunakan global keyword, setiap variable yang dibuat di global scope secara otomatis akan disimpan di dalam array `$GLOBALS` oleh PHP
- Jadi kita bisa menggunakan `$GLOBALS` variable dengan key nama variable nya dari dalam function jika ingin mengakses global variable
- `$GLOBALS` adalah variable yang bersifat superglobal, artinya bisa diakses dari scope manapun

File: [GlobalVariable.php](/10%20-%20Dan%20lain-lain/GlobalVariable.php)

# Static Scope

- Secara default local variable itu siklus hidupnya sebatas function nya dieksekusi
- Jika sebuah function selesai dieksekusi, maka siklus hidup local variable nya selesai
- PHP memiliki scope yang bernama `static`
- Static scope hanya bisa di set ke local variable
- Saat kita membuat sebuah local variable menjadi static, maka siklus hidupnya tidak akan berhenti ketika sebuah function selesai dieksekusi
- Artinya jika function tersebut dieksekusi lagi, maka static variable tersebut akan memiliki value dari sebelumnya

File: [VariableStaticScope.php](/10%20-%20Dan%20lain-lain/VariableStaticScope.php)

# Reference

- Reference adalah mengakses variable yang sama dengan nama variable yang berbeda
- Reference di PHP tidak sama dengan reference di bahasa pemrograman seperti C/C++ yang memiliki fitur pointer
- Analogi Reference itu seperti file, jika variable adalah file, dan value nya adalah isi file nya, maka reference adalah membuat shortcut (di Windows) atau alias (di Linux / Mac) terhadap file yang sama
- Saat kita mengubah isi value dari reference, maka secara otomatis value variable aslinya pun berubah
- Untuk membuat reference terhadap variable, kita bisa menggunakan variable `&`

# Assign By Reference

- Pertama, PHP Reference bisa memungkinkan kita bisa membuat beberapa variable menuju ke value yang sama

File: [AssignByReference.php](/10%20-%20Dan%20lain-lain/AssignByReference.php)

# Pass By Reference

- Selanjutnya yang bisa dilakukan di PHP adalah mengirim data ke function dengan reference

File: [PassByReference.php](/10%20-%20Dan%20lain-lain/PassByReference.php)

# Returning Reference

- PHP juga bisa mengembalikan reference pada function
- Namun hati-hati, gunakan fitur ini jika memang ada alasannya, karena fitur ini bisa membingungkan

File: [ReturningFunction.php](/10%20-%20Dan%20lain-lain/ReturningFunction.php)
