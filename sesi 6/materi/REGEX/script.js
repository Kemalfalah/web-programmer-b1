        var foo = /ab+c/;

        console.log(foo)  // /ab+c/
        console.log(typeof foo) // object

        var bar = new RegExp("ab+c")

        console.log(bar) // /ab+c/
        console.log(typeof bar) // object


        // RegExp object method menggunakan .test
        var fooo = "Belajar Javascript"
        var pola = /Javascript/

        console.log(pola.test(fooo)) //true
        console.log(/Belajar/.test(fooo)) //true
        console.log(/belajar/.test(fooo)) //false

        // RegExp object method menggunakan .exec
        var jam = "1 jam sama dengan 60 menit, juga sama dengan 3600 detik"
        var pola = /\d+/g

        console.log(pola.exec(jam))
        console.log(pola.exec(jam))
        console.log(pola.exec(jam))
        console.log(pola.exec(jam))


        // Pola RegExp Sebagai String
        var java = "Belajar Javascript"

        console.log(/JavaScript/.test(java))
        console.log(/JavaScript/.test(java))
        console.log(/Belajar/.test(java))
        console.log(/belajar/.test(java))
        console.log(/Java/.test(java))
        console.log(/ajar/.test(java))

        // Pola Character Set

        var polaa = /[abcde]../

        console.log(polaa.test("abaa"))
        console.log(polaa.test("fba"))
        console.log(polaa.test("1dd"))
        console.log(polaa.test("add"))
        console.log(polaa.test(" dd"))
        console.log(polaa.test("belajar"))
