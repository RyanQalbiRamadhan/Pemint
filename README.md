#Praktikum Pemrograman Integratif B ||
Nama : Ryan Gatutkaca Qalbi Ramadhan,
NIM  : 185150700111020

#Tugas 1
- Membuat sebuah route /biodata yang mana berisi data diri berupa nama dan NIM.

#Tugas 2
- Membuat sebuah tabel "migrations" dan "products" pada database lumen_pemint dengan menggunakan perintah artisan
- Membuat beberapa route yaitu sebagai berikut
  1.) $router->get('/products', 'ProductController@index');
      Untuk menampilkan seluruh isi dari tabel.
  2.) $router->get('/products/{id}', 'ProductController@show');
      Untuk menampilkan data berdasarkan id.
  3.) $router->post('/products', 'ProductController@store');
      Untuk menambahkan data baru ke dalam tabel.
  4.) $router->delete('/products/{id}', 'ProductController@destroy');
      Untuk menghapus data dari tabel berdasarkan id.
  5.) $router->put('/products/{id}', 'ProductController@update');
      Untuk mengedit data berdasarkan id dari tabel.