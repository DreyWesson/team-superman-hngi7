
class Person {
  constructor(fullName, id, language, greetings) {
    this.greetings = greetings;
    this.fullName = fullName;
    this.id = id;
    this.language = language;
  }
  introduction() {
    return `${this.greetings}!!I am ${this.fullName} with HNG-${this.id} id and i write ${this.language}.`;
  }
}

const blackDev = new Person('Hello World','Aluko Ayodele', '02258', 'JavaScript');

console.log(blackDev.introduction());
