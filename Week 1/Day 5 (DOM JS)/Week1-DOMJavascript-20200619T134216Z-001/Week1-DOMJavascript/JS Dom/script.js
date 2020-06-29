// Release_1
var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'img/logitek.jpg'], 
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'img/msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'img/genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'img/jerry.jpg']
]
function dataRow(items) {
var produk = "<div class='row'>"
    for (var i = 0; i < items.length; i++) {
        // <!-- Component Card dari Bootstrap -->
        produk += "<div class='col-md-4 my-4'>"
        produk += "<div class='card'>"
        produk += "<img src='"+items[i][4]+"'class='card-img-top p-3' alt='"+items[i][1]+"'>"
        produk += "<div class='card-body'>"
        produk += "<h5 class='card-title' id='itemName'>"+items[i][1]+"</h5>"
        produk += "<p class='card-text' id='itemDesc'>"+items[i][3]+"</p>"
        produk += "<p class='card-text' id='temPrice'>Rp "+items[i][2]+"</p>"
        produk += "<a href='#' class='btn btn-primary' id='addCart' onclick='onClick()'>Tambahkan ke keranjang</a>"
        produk += "</div>"
        produk += "</div>"
        produk += "</div>"
    }
    produk += "</div>"
    return produk;
}

var formItem = document.getElementById("formItem")
var keyword = document.getElementById("keyword")
formItem.addEventListener("submit", function (e) {
    e.preventDefault()
    let bigItems = []
    for (let i = 0; i < items.length; i++) {
        let c = 0
        for (let j = 0; j < items[i].length; j++) {
            if (items[i][j].toString().toLowerCase().indexOf(keyword.value.toLowerCase()) != -1) c++
        }
        if (c > 0)
            bigItems.push(items[i]);
    }

    document.getElementById('listBarang').innerHTML = dataRow(bigItems);
})
document.getElementById('listBarang').innerHTML = dataRow(items);

//Release_2
var clicks = 0;
function onClick() {
    clicks += 1;
    document.getElementById("total").innerHTML = clicks;
};