const myInformation = {
    id: 'HNG-06410',
    fullName: 'Alabi Tosin Abiodun',
    language: 'Javascript',
    email: 'alabitosin58@gmail.com',
    fullDetails() {
        return `Hello World, this is ${this.fullName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`
    }
}

console.log(myInformation.fullDetails())