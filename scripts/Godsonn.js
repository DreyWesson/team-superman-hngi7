
const myPerson = {
    fullName:"Ogunyomi Adeshina",
    ID: "HNG-02569",
    language: "Javascript",
    Email: "adeshina.godwin@gmail.com",
    myIntroduction: function () {
        console.log ( "Hello World, My name is " + this.fullName + " with HNGi7 INTERNSHIP ID " + this.ID + " using " + this.language + " for stage 2 task. Email:" + this.Email + "")
    }
    
};
myPerson.myIntroduction()


