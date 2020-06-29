// object literal
// var mhs = {
//     nama : "Rivan",
//     umur : 21,
//     ip : [3,3,3,3,3,3],
//     alamat : {
//         jalan : "jl utama",
//         kota : "Jakarta",
//         provinsi : "DKI Jakarta"
//     }
// };

// //function declaration
// function buatObjectMahasiswa(nama, umur, ip, alamat){
//     var mhs = {};
//     mhs.nama = nama;
//     mhs.umur = umur;
//     mhs.ip = ip;
//     mhs.alamat = alamat;
//     return mhs;
// }

// var mhs2 = buatObjectMahasiswa('Bayu','52','4','Malang');

// //contructor
// function Mahasiswa(nama, umur, ip, alamat){
//     this.nama = nama;
//     this.umur = umur;
//     this.ip = ip;
//     this.alamat = alamat;
// }

// var mhs3 = new Mahasiswa('Bayu','52','4','Malang');

// function Angkot(sopir, trayek, penumpang, kas){
//     this.sopir = sopir;
//     this.trayek = trayek;
//     this.penumpang = penumpang;
//     this.kas = kas;

//     this.penumpangNaik = function(namaP){
//         this.penumpang.push(namaP);
//         return this.penumpang;
//     }

//     this.penumpangTurun = function(namaP, bayar){
//         if(this.penumpang.length === 0){
//             alert('angkot masih kosong!');
//             return false;
//         }

//         for(var i = 0; i < penumpang.length; i++){
//             if(this.penumpang[i] == namaP){
//                 this.penumpang[i] == undefined;
//                 this.kas += bayar;
//                 return this.penumpang;
//             }
//         }
//     }
// }

// var angkot1 = new Angkot('Tom cruise', ['Kalibata','Tongtek'], [], 0);

