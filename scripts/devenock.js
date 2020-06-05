const myDetails = (myName, myId, myStackLanguage,email) =>{
    this.myName = myName;
    this.myId = myId;
    this.myStackLanguage = myStackLanguage;
    this.email = email;
}

const greetings = (myName,myId, myStackLanguage,email) =>{
   console.log(`Hello World, this is ${myName} with HNGi7 ID ${myId} using ${myStackLanguage} for stage 2 task. ${email} `);
}

const data = new myDetails(userName, userId, userlanguage,email);
greetings(data.userName, data.userId, data.userLanguage, data.email);


const  userName='Enock Omondi Otuoma';
const  userId='HNG-03371';
const  userLanguage='JavaScript';
const email = 'enockomondi305@gmail.com'