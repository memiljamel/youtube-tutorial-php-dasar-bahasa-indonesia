# Operator Aritmatika

![Operator Artimatika (1)](/PHP%20Dasar/06%20-%20Operator/Picture%201.PNG "Operator Artimatika (1)")

![Operator Artimatika (2)](/PHP%20Dasar/06%20-%20Operator/Picture%202.PNG "Operator Artimatika (2)")

File: [OperatorAritmatika.php](/PHP%20Dasar/06%20-%20Operator/OperatorAritmatika.php)

# Operator Penugasan

- Operator penugasan di PHP sama seperti bahasa pemrograman lain, yaitu dengan menggunakan karakter `=` (sama dengan)
- Operator penugasan sudah sering kita dengar, terutama ketika mengubah value sebuah variable
- Namun selain hal itu, operasi penugasan juga bisa digunakan untuk operasi aritmatika

# Operator Penugasan Aritmatika

![Operator Penugasan Aritmatika](/PHP%20Dasar/06%20-%20Operator/Picture%203.PNG "Operator Penugasan Aritmatika")

File: [OperatorPenugasanArtimatika.php](/PHP%20Dasar/06%20-%20Operator/OperatorPenugasanAritmatika.php)

# Operator Perbandingan

- Operator perbandingan, seperti namanya, digunakan untuk membandingkan dua buah value
- Hasil dari operator perbandingan adalah boolean, `true` jika perbandingannya benar, `false` jika perbandingannya salah

![Operator Perbandingan (1)](/PHP%20Dasar/06%20-%20Operator/Picture%204.PNG "Operator Perbandingan (1)")

![Operator Perbandingan (2)](/PHP%20Dasar/06%20-%20Operator/Picture%205.PNG "Operator Perbandingan (2)")

File: [OperatorPerbandingan.php](/PHP%20Dasar/06%20-%20Operator/OperatorPerbandingan.php)

# Operator Logika

- Operator logika adalah operator untuk membandingkan dua nilai boolean
- Hasil dari operator logika adalah boolean lagi

![Operator Logika](/PHP%20Dasar/06%20-%20Operator/Picture%206.PNG "Operator Logika")

File: [OperatorLogika.php](/PHP%20Dasar/06%20-%20Operator/OperatorLogika.php)

# Increment dan Decrement

- PHP mendukung gaya bahasa pemrograman C untuk menaikkan dan menurunkan data number sejumlah 1 angka
- Ini bisa mempersingkat kita ketika ingin menaikkan data

![Increment dan Decrement](/PHP%20Dasar/06%20-%20Operator/Picture%207.PNG "Increment dan Decrement")

File: [Increment&Decrement.php](/PHP%20Dasar/06%20-%20Operator/IncrementAndDecrement.php)

# Operator Array

- Di PHP, Array memiliki operator khusus
- Mungkin terlihat mirip dengan operator-operator sebelumnya, tapi cara kerjanya sedikit berbeda

![Operator Array](/PHP%20Dasar/06%20-%20Operator/Picture%208.PNG "Operator Array")

File: [OperatorArray.php](/PHP%20Dasar/06%20-%20Operator/OperatorArray.php)

# Expression, Statement dan Block

## Expression

- Expression adalah bagian terpenting di PHP
- Di PHP, hampir semua kode yang kita tulis adalah sebuah expression
- Secara sederhana, expression adalah apapun yang memiliki nilai atau value

### Contoh Expression Sederhana

- `$a = 5;` Ketika kita menuliskan "5", maka tentu itu adalah nilai, oleh karena itu 5 tersebut adalah expression
- Lalu kita menuliskan kode `$b = $a;` `$a` bisa kita bilang adalah expression, karena $a adalah nilai 5

File: [ExpressionSederhana.php](/PHP%20Dasar/06%20-%20Operator/ExpressionSederhana.php)

### Contoh Expression Complex

Pada kode dibawah, `getValue()` adalah expression, karena `getValue()` bernilai angka 100. Tentang `function` nanti kita akan bahas lebih detail di materi tersendiri.


File: [ExpressionComplex.php](/PHP%20Dasar/06%20-%20Operator/ExpressionComplex.php)

## Statement

- Statement bisa dibilang adalah kalimat lengkap dalam bahasa
- Sebuah statement berisikan execution komplit, biasanya diakhiri dengan titik koma

File: [Statement.php](/PHP%20Dasar/06%20-%20Operator/Statement.php)

## Block

- Block adalah kumpulan statement yang terdiri dari nol atau lebih statement
- Block diawali dan diakhiri dengan kurung kurawal {}

File: [Block.php](/PHP%20Dasar/06%20-%20Operator/Block.php)

# Manipulasi String

## Dot Operator

- Dot (titik) operator adalah operator yang bisa kita gunakan untuk menambahkan string dengan data lain (bisa string atau tipe lainnya)
- Sebenarnya kita bisa menggunakan + (plus) untuk menambahkan string, namun jika kita coba tambahkan string dengan tipe data number, maka akan terjadi error. Oleh karena itu direkomendasikan menggunakan . (dot) untuk menambahkan string dengan data lain

File: [DotOperator.php](/PHP%20Dasar/06%20-%20Operator/DotOperator.php)

## Konversi ke Number dan Sebaliknya

- Kadang kita sering melakukan konversi tipe data dari string ke number (int / float) atau sebaliknya 
- Di PHP untuk melakukan konversi cukup mudah, kita hanya perlu menggunakan tanda kurung ( tipe data )
- Tipe data untuk string adalah string, untuk number bisa menggunakan int untuk integer dan float untuk floating point

File: [KonversiNumberDanSebaliknya.php](/PHP%20Dasar/06%20-%20Operator/KonversiNumberDanSebaliknya.php)

## Mengkases Karakter

- String di PHP seperti array karakter, dimana kita bisa mengakses data tiap karakternya menggunakan kurung siku
- Sama seperti di array, index pertama dimulai dari 0
- Jika kita mengakses index melebihi karakter di string, maka akan terjadi error

File: [MengaksesKarakter.php](/PHP%20Dasar/06%20-%20Operator/MengaksesKarakter.php)

## Variable Parsing

- Khusus string menggunakan double quote atau heredoc, kita bisa menggunakan karakter $untuk mengakses variable
- Ini memudahkan ketika kita ingin menggabungkan string dengan variable
- Cara penggunaanya adalah dengan menggunakan karakter `$` lalu diikuti dengan nama variablenya

File: [VariableParsing.php](/PHP%20Dasar/06%20-%20Operator/VariableParsing.php)

## Curly Brace

- Kadang kita butuh menggabungkan variable dengan string tanpa ada spasi. Hal ini akan menyulitkan jika hanya menggunakan variable parsing
- Untungnya di PHP kita bisa menambahkan kurung kurawal sebelum menggunakan variable parsing

File: [CurlyBrace.php](/PHP%20Dasar/06%20-%20Operator/CurlyBrace.php)

