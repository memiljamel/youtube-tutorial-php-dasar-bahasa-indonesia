# If Statement

- Dalam PHP, `if` adalah salah satu kata kunci yang digunakan untuk percabangan
- Percabangan artinya kita bisa mengeksekusi kode program tertentu ketika suatu kondisi terpenuhi
- Hampir di semua bahasa pemrograman mendukung `if` expression

![Syntax If Statement](/07%20-%20Percabangan/Picture%201.PNG "Syntax If Statement")

File: [IfStatement.php](/07%20-%20Percabangan/IfStatement.php)

# Else Statement

- Block `if` akan dieksekusi ketika kondisi `if` bernilai true
- Kadang kita ingin melakukan eksekusi program tertentu jika kondisi `if` bernilai false
- Hal ini bisa dilakukan menggunakan `else` statement

![Syntax Else Statement](/07%20-%20Percabangan/Picture%202.PNG "Syntax Else Statement")

File: [ElseStatement.php](/07%20-%20Percabangan/ElseStatement.php)

# Else If Statement

- Kadang dalam `if`, kita butuh membuat beberapa kondisi
- Kasus seperti itu, di PHP kita bisa menggunakan `else if` statement
- `else if` di PHP bisa lebih dari satu
- Kode `else if` di PHP bisa menggunakan `else if` atau `elseif` (digabung)

![Else If Statement](/07%20-%20Percabangan/Picture%203.PNG "Else If Statement")

File: [ElseIfStatement.php](/07%20-%20Percabangan/ElseIfStatement.php)

# Syntax If Alternatif

- Selain menggunakan `{}` (kurung kurawal), PHP juga menyediakan syntax alternatif untuk menggunakan `if`, yaitu dengan menggunakan `:` (titik dua)
- Namun untuk menggunakan ini, kita harus menggunakan kata kunci `endif` diakhir `if` statement

File: [IfAlternatif.php](/07%20-%20Percabangan/IfAlternatif.php)

# Switch Statement

- Kadang kita hanya butuh menggunakan kondisi sederhana di `if` statement, seperti hanya menggunakan perbandingan `==`
- Switch adalah statement percabangan yang sama dengan `if`, namun lebih sederhana cara pembuatannya
- Kondisi di `switch` statement hanya untuk perbandingan `==`

File: [SwitchStatement.php](/07%20-%20Percabangan/SwitchStatement.php)

# Syntax Switch Alternatif

- Sama seperti `if` statement, `switch` statement juga bisa tanpa menggunakan `{}` (kurung kurawal)
- Namun diakhir `switch` statement, kita harus menambahkan kata kunci `endswitch`

File: [SwitchAlternatif.php](/07%20-%20Percabangan/SwitchAlternatif.php)

# Ternary Operator

- Kadang ada kasus kita butuh melakukan pengecekan kondisi menggunakan `if` statement, lalu jika benar kita ingin memberi nilai terhadap variable dengan nilai X dan jika salah dengan nilai Y
- Penggunaan `if` statement pada kasus seperti itu bisa dipersingkat menggunakan ternary operator
- Ternary operator menggunakan kata kunci `?` dan `:`

File: [BukanTernaryOperator.php](/07%20-%20Percabangan/BukanTernaryOperator.php), [TernaryOperator.php](/07%20-%20Percabangan/TernaryOperator.php)

# Null Coalescing Operator

- Sebelumnya kita tahu bahwa data kosong direpresentasikan dengan data NULL di PHP
- Dan hal yang paling repot di PHP adalah mengecek apakah sebuah data ada atau tidak, dan juga apakah data tersebut isinya NULL atau bukan
- Biasanya untuk melakukan itu, kita perlu menggunakan pengecekan `if` statement dengan function `isset($variabel)`
- Namun untungnya di PHP ada null coalescing operator menggunakan tanda `??`

File: [TanpaNullCoalescingOperator.php](/07%20-%20Percabangan/TanpaNullCoalescingOperator.php), [NullCoalescingOperator.php](/07%20-%20Percabangan/NullCoalescingOperator.php)

