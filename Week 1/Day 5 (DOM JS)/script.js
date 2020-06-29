//DOM Selection
// getElementById

// const judul = document.getElementById('judul');
// judul.style.color = 'red';
// judul.style.backgroundColor = 'gray';
// judul.innerHTML = 'Rivan H'

// //document.getElemntsByTagName()
// // HTMLCollections
// const p = document.getElementsByTagName('p');
// for( let i = 0; i < p.length; i++){
//     p[i].style.backgroundColor = 'lightblue';
// }

// const h1 = document.getElementsByTagName('h1')[0];
// h1.style.fontSize = '50px';

// //document.getElementsByClassName
// // HTMCCOllection
// const p1 = document.getElementsByClassName('p1')[0];
// p1.innerHTML = 'BRUH BRUH'; 

// // document.querySelector() - element
// const p4 = document.querySelector('#b p');

// p4.style.color = 'green'
// const li2 = document.querySelector(' section #b ul li:nth-child(2)');

// li2.style.backgroundColor = 'orange';

// // document.querySelectorAll() - nodelist
// const p = document.querySelectorAll('p');
// for( let i = 0; i < p.length; i++){
//     p[i].style.backgroundColor = 'lightblue';
// }

// Dom manipulation
// const judul = document.getElementById('judul');
// judul.innerHTML = 'Rivan';
// judul.setAttribute('nama','rivan');

// const sectionA = document.querySelector('section#a');

// sectionA.innerHTML = 'BRUH BRUH'

// sectionA.style.backgroundColor = 'lightblue'

// const p2 = document.querySelector('.p2')
// p2.classList.add('label')

//Append
// const pBaru = document.createElement('p');
// const teksPBaru = document.createTextNode('Paragraf Baru');
// pBaru.appendChild(teksPBaru);
// const sectionA = document.getElementById('a');
// sectionA.appendChild(pBaru);

// //Insert Before
// const liBaru = document.createElement('li');
// const teksLiBaru = document.createTextNode('item baru');
// liBaru.appendChild(teksLiBaru);
// const ul = document.querySelector('section#b ul');
// const li2 = document.querySelector('li:nth-child(2)');
// ul.insertBefore(liBaru,li2);

// //Remove
// const link = document.getElementsByTagName('a')[0];
// sectionA.removeChild(link);

// //Replace
// const sectionB = document.getElementById('b');
// const p4 = sectionB.querySelector('p');
// const h2Baru = document.createElement('h2');
// const teksH2Baru = document.createTextNode('Judul Baru');
// h2Baru.appendChild(teksH2Baru);
// sectionB.replaceChild(h2Baru,p4);

//Event Handler
const p3 = document.querySelector('.p3');

function ubahWarna(){
    p2.style.backgroundColor = 'light blue';
}

const p2 = document.querySelector('.p2')
p2.onclick = ubahWarna;
// harus mengubah html

// //Event Listener
// const p4 = document.querySelector('section#b p');
// p4.addEventListener('click', function(){
//     const ul = document.querySelector('section#b ul');
//     const liBaru = document.createElement('li')
//     const teksLiBaru = document.createTextNode('item baru')
//     liBaru.appendChild(teksLiBaru);
//     ul.appendChild(liBaru)
// });

// const p3 = document.querySelector('.p3');

// p3.addEventListener('click', function(){
//     p3.style.background = 'light blue';
// });

// p3.addEventListener('click', function(){
//     p3.style.color = 'red';
// });
