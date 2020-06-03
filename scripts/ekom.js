function Info(name, id, email, language){
    this.yourName=name;
    this.yourId=id;
    this.yourEmail=email;
    this.yourLanguage=language;
}


function output(){
    console.log(`Hello World, this is Ekpo Ekom with HNGi7 ID HNG-05281 using Javascript for stage 2 task`);
}

let myName="Ekpo Ekom";
let myId="HNG-05281";
let myEmail = "ekpoekom@gmail.com";
let myLanguage="JavaScript";

let info=new Info(myName, myId, myEmail, myLanguage);
output();