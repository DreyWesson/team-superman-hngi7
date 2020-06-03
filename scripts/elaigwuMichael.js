class Michael {
    constructor(fullName, id, language, email){
        this.fullName = fullName;
        this.id = id;
        this.language = language;
        this.email = email;
    }

    comDetails(){
        return `Hello World, this is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task. ${this.email}`
    }
}

let michaelElaigwu = new Michael("Michael Elaigwu", "HNG-03915", "Javascript", "elaigwumichael82@gmail.com");

console.log(michaelElaigwu.comDetails());
