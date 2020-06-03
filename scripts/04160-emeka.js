class HNGinterns{
    constructor (firstName, lastName, id, language, email){
        this.firstName = firstName
        this.lastName = lastName
        this.id = id
        this.language = language
        this.email = email
    }
    getBio() {
        return `Hello World, this is ${this.firstName} ${this.lastName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task. ${this.email}`;
    }
}

const newTntern = new HNGinterns('Emeka', 'Uja', '04160', 'javascript', 'ujadnith@gmail.com' );
const emeka = newTntern.getBio();
console.log(emeka);

