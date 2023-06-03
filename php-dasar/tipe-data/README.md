# Tipe Data Number

Di PHP terdapat 2 jenis tipe data number

- (int) Bilangan bulat decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2) dan
- (float) Bilangan pecahan

Di PHP kita bisa menambahkan _ (garis bawah) di angka, ini hanya untuk agar mudah dibaca, saat dijalankan, _ (garis bawah) tersebut akan di ignore

Untuk angka negatif, kita bisa menggunakan tanda - (minus) di depan angka

File: [TipeDataNumber.php](/php-dasar/tipe-data/TipeDataNumber.php), [TipeDataFloat.php](/php-dasar/tipe-data/TipeDataFloat.php) 

# Integer Overflow

- Secara default, kapasitas integer di PHP ada batasnya, 2147483647 untuk sistem operasi 32 bit, dan 9223372036854775807 untuk sistem operasi 64 bit
- Jika kita membuat number integer yang melebihi nilai tersebut, maka secara otomatis tipe numbernya akan berubah menjadi floating point

# Tipe Data Boolean

- Tipe data boolean adalah tipe data paling sederhana di PHP
- Tipe data boolean adalah tipe data dengan nilai kebenaran (benar atau salah)
- Nilai benar direpresentasikan dengan true (case insensitive)
- Nilai salah direpresentasikan dengan false (case insensitive)

File: [TipeDataBoolean.php](/php-dasar/tipe-data/TipeDataBoolean.php)

# Tipe Data String

- Tipe data string adalah tipe data representasi dari teks
- String bisa mengandung kosong atau banyak karakter

# Single Quote

untuk membuat String di PHP, kita bisa menggunakan single quote

File: [TipeDataStringWithSingleQuote.php](/php-dasar/tipe-data/TipeDataStringWithSingleQuote.php)

# Double Quote

Selain single quote, kita juga bisa menggunakan double quote. Salah satu kelebihan menggunakan double quote adalah, kita menggunakan escape sequence untuk beberapa hal, seperti `\n` untuk ENTER, `\t` untuk TAB, `\"` untuk double quote, dan lain-lain

File: [TipeDataStringWithDoubleQuote.php](/php-dasar/tipe-data/TipeDataStringWithDoubleQuote.php)

# Multiline String

- Kadang kita ingin membuat data string yang lebih dari satu baris. Untuk melakukan itu sebenarnya kita bisa menggunakan `\n` sebagai ENTER
- Namun PHP memiliki fitur yang lebih baik, yaitu bernama Heredoc dan Nowdoc

# Heredoc

Heredoc adalah fitur untuk membuat String yang panjang, sehingga kita tidak perlu manual melakukan ENTER, TAB, dan lain-lain.

File: [TipeDataStringWithHeredoc.php](/php-dasar/tipe-data/TipeDataStringWithHeredoc.php)

# Nowdoc

Nowdoc mirip seperti Heredoc, yang membedakan adalah pada Nowdoc tidak memiliki kemampuan parsing seperti di Heredoc atau Double Quote. Masalah parsing akan kita bahas di materi Manipulasi String

File: [TipeDataStringWithNowdoc.php](/php-dasar/tipe-data/TipeDataStringWithNowdoc.php)

