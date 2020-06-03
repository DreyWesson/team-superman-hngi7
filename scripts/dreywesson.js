class Hng {
  constructor(fullname, id, email, language) {
    this.fullname = fullname;
    this.id = id;
    this.email = email;
    this.language = language;
  }
  myDetails() {
    console.log(
      `Hello World, this is ${this.fullname} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`
    );
  }
}
let myHngDetails = new Hng(
  "Dare Oduwole",
  "HNG-00069",
  "dreywesson@gmail.com",
  "Javascript"
);
myHngDetails.myDetails();

// function helloHng(fullname, id, email, language) {
//   console.log(
//     `Hello World, this is ${fullname} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`
//   );
// }
// helloHng("Dare Oduwole", "HNG-00069", "dreywesson@gmail.com", "Javascript");
