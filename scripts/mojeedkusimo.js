function introduceYourself (lang) {

    return function me (fullname, hngID, email) {
        return `Hello World, this is ${fullname} with HNGi7 ID ${hngID} using ${lang} for stage 2 task.${email}`
    }
}

let introduction = introduceYourself('Javascript');

console.log(introduction('Mojeed Kusimo', 'HNG-05457','mkusimo90@gmail.com'));