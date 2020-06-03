var myIntroduction = function(fullName, id, language, email) {
    return (`Hello World, this is ${fullName} with HNGi7 ID ${id} using ${language} for stage two task.${email}`)
}

var newMyIntroduction = intro("Lukman Okunade", "HNG-00960", "JavaScript", "okunadelukmon@gmail.com");
console.log(newMyIntroduction)