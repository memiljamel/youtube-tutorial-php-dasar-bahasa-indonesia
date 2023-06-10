# For Loop

- `For` adalah salah satu kata kunci yang bisa digunakan untuk melakukan perulangan
- Blok kode yang terdapat di dalam `for` akan selalu diulangi selama kondisi `for` terpenuhi

# Sintak Perulangan For

```
for (init statement; kondisi; post statement) {
  // block perulangan
}
```

- Init statement akan dieksekusi hanya sekali di awal sebelum perulangan
- Kondisi akan dilakukan pengecekan dalam setiap perulangan, jika true perulangan akan dilakukan, jika false perulangan akan berhenti
- Post statement akan dieksekusi setiap kali diakhir perulangan
- Init statement, Kondisi dan Post statement tidak wajib diisi, jika kondisi tidak diisi, berarti kondisi selalu bernilai true

File: [PerulanganTanpaHenti.php](/08%20-%20Perulangan/PerulanganTanpaHenti.php), [PerulanganDenganKondisi.php](/08%20-%20Perulangan/PerulanganDenganKondisi.php), [PerulanganDenganInitStatement.php](/08%20-%20Perulangan/PerulanganDenganInitStatement.php), [PerulanganDenganPostStatement.php](/08%20-%20Perulangan/PerulanganDenganPostStatement.php)

# While Loop

- While loop adalah versi perulangan yang lebih sederhana dibanding for loop
- Di while loop, hanya terdapat kondisi perulangan, tanpa ada init statement dan post statement

File: [WhileLoop.php](/08%20-%20Perulangan/WhileLoop.php), [SyntaxAlternatifWhileLoop.php](/08%20-%20Perulangan/SyntaxAlternatifWhileLoop.php)

# Do While Loop

- Do while loop adalah perulangan yang mirip dengan while
- Perbedaannya hanya pada pengecekan kondisi
- Pengecekan kondisi di while loop dilakukan di awal sebelum perulangan dilakukan, sedangkan di do while loop dilakukan setelah perulangan dilakukan
- Oleh karena itu di dalam do while loop, minimal pasti sekali perulangan dilakukan walaupun kondisi tidak bernilai true

File: [DoWhileLoop.php](/08%20-%20Perulangan/DoWhileLoop.php)

# Break dan Continue

- Pada switch statement, kita sudah mengenal kata kunci break, yaitu untuk menghentikan case dan switch
- Sama dengan pada perulangan, break juga digunakan untuk menghentikan seluruh perulangan
- Namun berbeda dengan continue, continue digunakan untuk menghentikan perulangan saat ini, lalu melanjutkan ke perulangan selanjutnya

File: [Break.php](/08%20-%20Perulangan/Break.php), [Continue.php](/08%20-%20Perulangan/Continue.php)

# For Each Loop

- Kadang kita biasa mengakses data array menggunakan perulangan
- Mengakses data array menggunakan perulangan sangat bertele-tele, kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat
- Namun untungnya, di PHP terdapat perulangan for each, yang bisa digunakan untuk mengakses seluruh data di Array secara otomatis

File: [TanpaForEach.php](/08%20-%20Perulangan/TanpaForEach.php), [ForEach.php](/08%20-%20Perulangan/ForEach.php), [ForEachDenganKey.php](/08%20-%20Perulangan/ForEachDenganKey.php)

# Goto Operator

- Salah satu fitur yang sebenarnya jarang sekali digunakan di PHP adalah goto operator
- Kenapa jarang digunakan kareka jika terlalu banyak menggunakan goto operator, kode program aplikasinya akan mudah membingungkan yang membaca kode nya
- Goto adalah fitur dimana kita bisa loncat ke kode program sesuai dengan keinginan kita
- Agar goto bisa loncat ke kode program, kita harus membuat label di PHP dengan menggunakan nama label lalu diakhiri `:` (colon)

File: [GotoOperator.php](/08%20-%20Perulangan/GotoOperator.php), [GotoOperatorDiLoop.php](/08%20-%20Perulangan/GotoOperatorDiLoop.php)
