class Intern {
  constructor(info) {
    this.fullNames = info.fullNames;
    this.id = info.id;
    this.language = info.language;
    this.email = info.email;
  }

  introduce() {
    return `Hello World, this is ${this.fullNames} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`;
  }
}

console.log(new Intern({
    fullNames: "Jemimah Omodior",
    id: "HNG-02587", 
    language: "JavaScript",
    email: "jemimahsummers@yahoo.com"
  }).introduce());
