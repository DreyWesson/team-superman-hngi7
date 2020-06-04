class Hng {
    constructor(fullname, id, email, language) {
      this.fullname = fullname;
      this.id = id;
      this.email = email;
      this.language = language;
    }
    myInfo() {
      console.log(
        `Hello World, this is ${this.fullname} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task.${this.email}`
      );
    }
  }
  let myDetails = new Hng(
    "Khalid Salman-Yusuf",
    "HNG-00577",
    "olaniyisal@gmail.com",
    "Javascript"
  );
  myDetails.myInfo();
  
