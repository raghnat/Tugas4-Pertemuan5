Langkah-Langkah
1. Jalankan server pada CI 4 dengan command php spark serve --host localhost --port 8100.
2. Pastikan juga pada framework flutternya terhubung pada port yang sama.
3. Jalankan server flutter dengan perintah flutter run -d chrome --web-browser-flag "--disable-web-security" agar api nya dapat terhubung.




[SS Langkah-Langkah]


![image](https://github.com/user-attachments/assets/f1fb4a20-74c8-4092-82c0-fcd895de9c97)
![image](https://github.com/user-attachments/assets/995c83ca-bbf3-43d3-818e-6939b37f27be)
![image](https://github.com/user-attachments/assets/8bb79373-6bdc-43c3-b842-822e47eba3ef)




[Register Page]
Halaman Registrasi, di mana pengguna dapat mendaftarkan akun dengan mengisi nama, email, password, dan konfirmasi password. Formulir divalidasi untuk memastikan input sesuai dengan aturan, seperti nama minimal 3 karakter, email valid, password minimal 6 karakter, dan konfirmasi password yang harus cocok dengan password. Jika valid, tombol Registrasi akan memicu fungsi _submit() yang mengirim data ke API menggunakan RegistrasiBloc.registrasi(). Jika pendaftaran berhasil, dialog sukses (SuccessDialog) muncul dengan pesan "Registrasi berhasil, silahkan login", sedangkan jika gagal, dialog peringatan (WarningDialog) ditampilkan. Halaman ini menggunakan TextEditingController untuk menangani input pengguna, GlobalKey<FormState> untuk validasi form, dan setState() untuk mengelola status loading selama proses registrasi.

![image](https://github.com/user-attachments/assets/877bb423-3aed-4f98-8954-80f114c81f0f)
![image](https://github.com/user-attachments/assets/99441774-0700-445b-8c76-4e7a0b9f3ada)


[Login Page]
Halaman Login yang memungkinkan pengguna memasukkan email dan password untuk proses autentikasi. Formulir login memvalidasi input agar tidak kosong, dan tombol login memicu fungsi _submit() yang memanggil API login melalui LoginBloc.login(). Jika login berhasil, token dan ID pengguna disimpan menggunakan UserInfo, lalu pengguna diarahkan ke halaman produk (ProdukPage). Jika gagal, dialog peringatan ditampilkan menggunakan WarningDialog. Selain itu, terdapat tautan ke halaman registrasi (RegistrasiPage) untuk pengguna yang belum memiliki akun, dengan navigasi menggunakan Navigator.push().


![image](https://github.com/user-attachments/assets/872b8049-446c-46f6-84d6-6d20ffc1e030)
![image](https://github.com/user-attachments/assets/4563ddbc-2dc0-400f-b2f8-e2d132831c9e)


[Create]
Metode simpan() pada program create untuk menambahkan data produk baru. Metode ini pertama-tama mengatur status loading dengan setState untuk mengindikasikan proses sedang berjalan. Selanjutnya, sebuah objek Produk baru dibuat dengan properti kodeProduk, namaProduk, dan hargaProduk diisi dari input pengguna menggunakan TextEditingController. Data produk ini kemudian dikirim ke API melalui pemanggilan ProdukBloc.addProduk(). Jika proses berhasil, aplikasi akan mengarahkan pengguna ke halaman ProdukPage menggunakan Navigator.push. Jika terjadi kesalahan, sebuah dialog peringatan (WarningDialog) akan ditampilkan untuk memberitahu bahwa proses simpan gagal. Terakhir, status loading diatur kembali ke false untuk mengakhiri proses.


![image](https://github.com/user-attachments/assets/83178754-11a4-439d-9c15-d7ce6ea28d90)
![image](https://github.com/user-attachments/assets/720cca6e-0a36-45cc-bc22-1ea4331d7dd7)



[Update]
Metode ubah() pada program update untuk memperbarui data produk yang sudah ada. Proses dimulai dengan mengatur status loading menggunakan setState untuk menunjukkan bahwa aplikasi sedang memproses pembaruan data. Sebuah objek Produk dibuat dengan mengambil properti id dari produk yang diterima sebagai parameter pada widget, kemudian properti kodeProduk, namaProduk, dan hargaProduk diatur berdasarkan input pengguna melalui TextEditingController. Data ini dikirim ke API menggunakan ProdukBloc.updateProduk(). Jika proses pembaruan berhasil, aplikasi akan mengarahkan pengguna kembali ke halaman ProdukPage menggunakan Navigator.push. Jika terjadi kegagalan, sebuah dialog peringatan (WarningDialog) ditampilkan untuk memberi tahu pengguna bahwa pembaruan data tidak berhasil. Terakhir, status loading diubah kembali menjadi false untuk menandakan selesainya proses.


![image](https://github.com/user-attachments/assets/562a0c53-6ea4-45c1-9b56-b1e461d328ba)
![image](https://github.com/user-attachments/assets/b2206268-aa43-4c0a-95b4-d225f6dc01be)
![image](https://github.com/user-attachments/assets/17355359-01e4-4068-9da0-dca57ad92a86)


[Delete]
Kode untuk fungsi hapus (confirmHapus) menangani proses konfirmasi dan penghapusan produk. Ketika tombol "DELETE" ditekan, sebuah dialog konfirmasi (AlertDialog) muncul, menanyakan apakah pengguna yakin ingin menghapus data. Jika pengguna menekan tombol "Ya", aplikasi memanggil metode ProdukBloc.deleteProduk dengan parameter id produk yang akan dihapus, yang diperoleh dari properti widget.produk!.id. Jika penghapusan berhasil, pengguna diarahkan kembali ke halaman ProdukPage menggunakan Navigator.of(context).pushAndRemoveUntil. Namun, jika penghapusan gagal, atau terjadi kesalahan, dialog peringatan (WarningDialog) akan muncul untuk memberi tahu bahwa penghapusan tidak berhasil. Tombol "Batal" dalam dialog memungkinkan pengguna untuk menutup dialog tanpa melakukan tindakan apapun.

![image](https://github.com/user-attachments/assets/ad9d2dee-d9e3-4cc1-9bdd-417e54776955)
![image](https://github.com/user-attachments/assets/40e56c70-b74f-4f81-a1a6-f199bf2e6d79)
![image](https://github.com/user-attachments/assets/c8f43265-f6a5-4116-9347-b9ad9644ea94)





