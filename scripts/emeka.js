class Emeka {
    constructor (fullName, id, language, email){
        this.fullName = fullName;
        this.id = id;
        this.language = language;
        this.email = email;
    }

    getInfo(){

        return `Hello World, this is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`  
    }
}

let myInfo = new Emeka('Emeka Uja', 'HNG-04160', 'Javascript', 'ujadninth@gmail.com')

console.log(myInfo.getInfo())