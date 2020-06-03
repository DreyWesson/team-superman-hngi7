//constructor
function Info(name, id, email, language){
    this.yourName=name;
    this.yourId=id;
    this.yourEmail=email;
    this.yourLanguage=language;
}

let myName="Ekpo Ekom";
let myId="HNG-05281";
let myEmail = "ekpoekom@gmail.com";
let myLanguage="JavaScript";


function output(){
    console.log('Hello World, this is ' + myName + ' with HNGi7 ID ' + myId + ' using ' + myLanguage + ' for stage 2 task.' +myEmail);
}



let info=new Info(myName, myId, myEmail, myLanguage);
output();