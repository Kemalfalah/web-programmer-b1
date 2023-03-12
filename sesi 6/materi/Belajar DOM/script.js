
// dasar DOM | create hello world
document.write("hello world")
document.write("<h2>saya Falaah</h2>")

// create element paragraf
var judul = document.createElement('p')
judul.textContent = "Belajar Javascript"

// create element header
var deskripsi = document.createElement("h1")
deskripsi.textContent = "Belajar Menggunakan DOM"
// tambahkan element ke dalam tag body
// fungsi append untuk menambahkan
document.body.append(judul)
document.body.append(deskripsi)

//menghapus judul menggunakan remove
judul.remove()
