
class Person {
  constructor(greetings, fullName, id, language) {
    this.greetings = greetings;
    this.fullName = fullName;
    this.id = id;
    this.language = language;
  }
  introduction() {
    return `${this.greetings}!!I am ${this.fullName} with ${this.id}  and i write ${this.language} for stage 2 task.`;
  }
}

const blackDev = new Person(
  'Hello World',
  'Aluko Ayodele',
  'HNG-02258',
  'JavaScript'
);

console.log(blackDev.introduction());
