function myDetails(myName, myId, langused, myEmail){
    this.myName=myName;
    this.myId=myId;
    this.langused=langused;
    this.myEmail=myEmail;
}

function printDetails(name, id, lang, email){
    console.log(`Hello World, this is ${myName} with HNGi7 ID ${myId} using ${langused} for stage 2 task.${myEmail}`)
}

let myName="Godspower Etuk";
let myId="HNG-02259";
let langused="Javascript";
let myEmail="godspoweretuk38@gmail.com";

let myDetail=new myDetails(myName, myId, langused, myEmail);
printDetails(myDetails.myName, myDetails.myId, myDetails.langused, myDetails.email);