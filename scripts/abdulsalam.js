let intern = {
    devName : 'Abodunrin Abdulsalam',
    id : 'HNG-00361',
    language : 'Javscript',
    email : 'abdulsalamabodunrin369@gmail.com',
    sayHello() {
        return `Hello World, this is ${this.devName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`;
    }
}
console.log(intern.sayHello())
