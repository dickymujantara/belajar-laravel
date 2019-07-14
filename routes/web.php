<?php

Route::get('/', function () {
    return view('layouts.landing');
});

Route::get('/register/user', function(){
    return view('UserRegistrasi');
});
Route::post('/register/user/new', 'RegistrasiUser@insert');
Route::get("/register/user/all", "RegistrasiUser@showAll");
Route::get("/register/user/edit/{id}", "RegistrasiUser@show");
Route::post("/register/user/update/{id}", "RegistrasiUser@edit");
Route::get("/register/user/delete-all", "RegistrasiUser@deleteAll");
Route::get("/register/user/delete/{id}", "RegistrasiUser@delete");
Route::get("/register/user/delete/{id}", "RegistrasiUser@delete");
Route::get('/register/user/object', 'RegistrasiUser@getDataObject');
Route::get('/register/user/data', 'RegistrasiUser@getDataUser');


Route::get('/register/jurusan', function(){
    return view('Jurusan');
});
Route::get('register/jurusan/all', 'Jurusan@showAll');
Route::get('register/jurusan/view/{id}', 'Jurusan@show');
Route::post('register/jurusan/update/{id}', 'Jurusan@edit');
Route::get('register/jurusan/delete/{id}', 'Jurusan@delete');

Route::post('register/jurusan/new', 'Jurusan@insert');

Route::get('test/api', 'TestingApi@index');
Route::post('test/api/new', 'TestingApi@createUrl');

Route::get('/borrow/book', 'BorrowBook@showForm');
Route::post('/borrow/book/new', 'BorrowBook@submitData');

##24-03-2019
Route::get('/register/user-profile', 'RegistrasiUser@indexProfile');
Route::post('/register/user-profile/new', 'RegistrasiUser@insertProfile');

Route::get('/register/jurusan/photo', 'Jurusan@uploadPhoto');
Route::post('/register/jurusan/photo/new', 'Jurusan@insertPhoto');

Route::post('/siswa/profilesiswa/new', 'RegistrasiSiswa@insertSiswaDB');
Route::get('/siswa/profilesiswa', 'RegistrasiSiswa@indexSiswa');

Route::get('/project/form', 'ProjectController@showForm');
Route::get('/project/data', 'ProjectController@getData');
Route::get('/project/data/object', 'ProjectController@getDataObject');

Route::get('/project/form/multiple', 'ProjectController@multiForm');
Route::post('/project/form/multiple/new', 'ProjectController@insertMulti');

Route::get('/admin','AdminController@index');
Route::get('/admin/data-limit','AdminController@dataLimit');
Route::get('/admin/form','AdminController@formData');
Route::post('/admin/data-limit/add','AdminController@dataLimitAdd');
Route::post('/admin/form/insert','AdminController@insertData');

Route::get('/superadmin','SuperAdminController@index');
Route::get('/superadmin/form','SuperAdminController@formData');
Route::post('/superadmin/form/insert','SuperAdminController@insertData');

Route::get('/pedagang','PedagangController@index');
Route::get('/pedagang/form','PedagangController@formData');
Route::post('/pedagang/form/insert','PedagangController@insertData');

Route::get('/pembeli','PembeliController@index');
Route::get('/pembeli/form','PembeliController@formData');
Route::post('/pembeli/form/insert','PembeliController@insertData');

Route::get('/latihan', 'FormController@index');
Route::get('/latihan/form', 'FormController@cobaForm');

Auth::routes();
Route::post('/mail/sent','MailController@basic_email');
Route::post('/mail/sent/landing','MailController@sendMsg');
Route::post('/mail/unsubscribe','MailController@delete');
Route::get('/mail/view','MailController@template');
Route::get('/mail','MailController@index');
Route::get('/mail/attach','MailController@viewAttach');
Route::post('/mail/attach/send','MailController@sendAttach');
Route::get('/unsubscribe/{generate}', 'Mailcontroller@decision');
Route::get('/confirm/{generate}', 'Mailcontroller@confirm');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/encryption','EncryptionController@index');
Route::get('/encryption-2','EncryptionController@index2');
Route::post('/encryption/generate','EncryptionController@generateCode');
Route::post('/encryption-2/generate','EncryptionController@generateEncryptedCode');

Route::get('/profile','ProfileController@index');
Route::post('/profile/generate','ProfileController@generate');
Route::post('/profile/validation','ProfileController@validation');

Route::get('/member','MemberController@index');
Route::get('/member/edit/{id}','MemberController@edit');
Route::post('/member/update','MemberController@update');

Route::get('/test-bootstrap',function(){
    return view('testbootstrap');
});