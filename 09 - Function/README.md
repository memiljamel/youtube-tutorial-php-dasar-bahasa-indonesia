# Function 

- Function adalah block kode program yang akan berjalan saat kita panggil
- Sebelumnya kita sudah menggunakan function `isset()`, `count()` dan lain-lain
- Untuk membuat function di PHP, kita bisa menggunakan kata kunci `function`, lalu diikuti dengan nama function, kurung () dan diakhiri dengan block
- Kita bisa memanggil function dengan menggunakan nama function lalu diikuti dengan kurung ()
- Di bahasa pemrograman lain, function juga disebut dengan method

File: [Function.php](/09%20-%20Function/Function.php)

# Lokasi Function 

- PHP sangat flexible dalam pembuatan function
- Tidak seperti pada bahasa pemrograman lain yang harus ada aturan lokasi dimana membuat function
- Di PHP kita bebas membuat function dimanapun, bisa di dalam if statement, di dalam function, dan sebagainya
- Namun perlu diingat, jika kode function yang belum dieksekusi oleh PHP, maka function tersebut tidak akan bisa digunakan

File: [LokasiFunction.php](/09%20-%20Function/LokasiFunction.php)

# Function Argument

- Kita bisa mengirim informasi ke function yang ingin kita panggil
- Untuk melakukan hal tersebut, kita perlu menambahkan argument atau parameter di function yang sudah kita buat
- Cara membuat argument sama seperti cara membuat variabel
- Argument ditempatkan di dalam kurung () di deklarasi function
- Argument bisa lebih dari satu, jika lebih dari satu, harus dipisah menggunakan tanda koma

File: [FunctionArgument.php](/09%20-%20Function/FunctionArgument.php)

# Default Argument Value

- PHP mendukung default argument value
- Fitur ini memungkinkan jika ketika kita memanggil function tidak memasukkan parameter, kita bisa menentukan data default nya apa

File: [DefaultArgumentValue.php](/09%20-%20Function/DefaultArgumentValue.php)

# Kesalahan Default Argument Value

- Default argument value bisa disimpan di argument manapun
- Namun jika argument lebih dari satu, dan kita menyimpan default argument value di parameter awal, maka itu kurang berguna

# Type Declaration

- Sama seperti variable, argument di PHP bisa kita masukkan data yang dinamis
- Kadang terlalu dinamis juga menyulitkan jika ternyata kita hanya ingin membuat function yang menggunakan argument dengan tipe data tertentu
- Untungnya di PHP, kita bisa menambahkan type data di argument, sehingga PHP akan melakukan pengecekan ketika kita mengirim value ke function tersebut
- Jika tipe data value tidak sesuai, maka akan terjadi error
- Secara default PHP akan melakukan percobaan konversi tipe data secara otomatis, misal jika kita menggunakan tipe int, tapi kita mengirim string, maka PHP akan otomatis mengkonversi string tersebut menjadi int

![Valid Type (1)](/09%20-%20Function/Picture%201.PNG "Valid Type (1)")

![Valid Type (2)](/09%20-%20Function/Picture%202.PNG "Valid Type (2)")

File: [TypeDeclaration.php](/09%20-%20Function/TypeDeclaration.php)

# Variable-length Argument List

- Variable-length argument list merupakan kemampuan dimana kita bisa membuat sebuah parameter yang menerima banyak value
- Variable-length argument list secara otomatis akan membuat argument tersebut menjadi array, namun kita tidak perlu manual mengirim array ke functionnya
- Variable-length argument list hanya bisa dilakukan di argument posisi terakhir
- Untuk membuat variable-length argument list, kita bisa menggunakan tanda `...` (titik tiga kali) sebelum nama argument

File: [VariableLengthArgumentList.php](/09%20-%20Function/VariableLengthArgumentList.php)

# Function Return Value

- Secara default, function itu tidak menghasilkan value apapun, namun jika kita ingin, kita bisa membuat sebuah function mengembalikan nilai
- Dan di dalam block function, untuk menghasilkan nilai tersebut, kita harus menggunakan kata kunci `return`, lalu diikuti dengan data yang ingin dihasilkan
- Kita hanya bisa menghasilkan 1 data di sebuah function, tidak bisa lebih dari satu

File: [FunctionReturnValue1.php](/09%20-%20Function/FunctionReturnValue1.php), [FunctionReturnValue2.php](/09%20-%20Function/FunctionReturnValue2.php)

# Return Type Declarations

- Sama seperti pada argument, pada return value pun kita bisa mendeklarasikan tipe datanya
- Hal ini selain mempermudah kita ketika membaca tipe data kembalian function, bisa juga digunakan untuk menjaga jangan sampai kita mengembalikan tipe data yang salah di function
- Untuk mendeklarasikan tipe data kembalian function, setelah kurung () kita bisa menambahkan `:` diikuti tipe data kembaliannya

File: [ReturnTypeDeclarations.php](/09%20-%20Function/ReturnTypeDeclarations.php)

# Variable Function

- PHP mendukung konsep yang bernama variable function
- Variable function adalah kemampuan memanggil sebuah function dari value yang terdapat di sebuah variable
- Untuk menggunakan variable function, kita bisa secara langsung memanggil `$namaVariable()`, jika ingin menambahkan argument, kita bisa menggunakan `$namaVariable(argument)`

File: [VariableFunction.php](/09%20-%20Function/VariableFunction.php), [PenggunaanVariableFunction.php](/09%20-%20Function/PenggunaanVariableFunction.php)

# Anonymous Function

- Anonymous function adalah function tanpa nama, di PHP disebut juga dengan Closure
- Anonymous function biasanya digunakan sebagai argument atau sebagai value di variable
- Anonymous function membuat kita bisa mengirim function sebagai argument di function lainnya

File: [AnonymousFunction.php](/09%20-%20Function/AnonymousFunction.php), [AnonymousFunctionSebagaiArgument.php](/09%20-%20Function/AnonymousFunctionSebagaiArgument.php)

- Secara default, anonymous function tidak bisa mengakses variable yang terdapat diluar function
- Jika kita ingin menggunakan variable yang terdapat diluar anonymous function, kita perlu secara explicit menyebutkan menggunakan kata kunci `use` lalu diikuti variable-variable yang ingin kita gunakan

File: [MengaksesVariableLuar.php](/09%20-%20Function/MengaksesVariableLuar.php)

# Arrow Function

- Arrow function diperkenalkan di PHP 7.4 sebagai alternative anonymous function yang lebih sederhana pembuatannya
- Secara garis besar, sebenarnya arrow function dan anonymous function adalah dua hal yang sama
- Hal yang membedakan di arrow function adalah, secara otomatis variable diluar closure bisa digunakan, tidak seperti di anonymous function yang harus disebutkan secara manual menggunakan kata kunci `use`
- Pembuatan arrow function tidak menggunakan kata kunci function, melainkan `fn`
- Arrow function di khususkan untuk pembuatan function yang sederhana

File: [ArrowFunction.php](/09%20-%20Function/ArrowFunction.php)

# Callback Function

- Callback adalah sebuah mekanisme sebuah function memanggil function lainnya sesuai dengan yang diberikan di argument
- Hal ini sebenarnya sudah kita lakukan di materi Variable Function dan Anonymous Function 
- Namun di PHP ada cara lain untuk mengimplementasikan callback, yaitu menggunakan tipe data `callable`
- Dan untuk memanggil callback function tersebut, kita bisa menggunakan function `call_user_func(callable, arguments)`

File: [CallbackFunction.php](/09%20-%20Function/CallbackFunction.php)

# Recursive Function

- Recursive function adalah kemampuan function memanggil function dirinya sendiri
- Kadang memang ada banyak problem, yang lebih mudah diselesaikan menggunakan recursive function, seperti contohnya kasus factorial

File: [FactorialLoop.php](/09%20-%20Function/FactorialLoop.php), [FactorialRecursive.php](/09%20-%20Function/FactorialRecursive.php)

# Problem Dengan Recursive

- Walaupun recursive function itu sangat menarik, namun kita perlu berhati-hati
- Jika recursive terlalu dalam, maka akan ada kemungkinan terjadi memory overflow, yaitu error dimana memory terlalu banyak digunakan di PHP
- Kenapa problem ini bisa terjadi? Karena ketika kita memanggil function, PHP akan menyimpannya dalam stack, jika function tersebut memanggil function lain, maka stack akan menumpuk terus, dan jika terlalu banyak, maka akan membutuhkan konsumsi memory yang besar, jika sudah melewati batas, maka akan terjadi error memory


