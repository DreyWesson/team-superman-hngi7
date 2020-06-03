let intern = {
    devName : 'Abodunrin Abdulsalam',
    id : 'HNG-00361',
    language : 'Javscript',
    sayHello() {
        return `Hello World, this ${this.devName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task`;
    }
}
console.log(intern.sayHello())