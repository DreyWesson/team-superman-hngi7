class HNGinterns{
    constructor (name, id, language, email){
        this.name = name;
        this.id = id;
        this.language = language;
        this.email = email;
    }
    
    getBio(){
        return `Hello World, this is ${this.name} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`;
    }
}

const newTntern = new HNGinterns('Emeka Uja', 'HNG-04160', 'Javascript', 'ujadninth@gmail.com');
console.log(newTntern.getBio());
