const myDetails = (myName, myId, myStackLanguage) =>{
    this.myName = myName;
    this.myId = myId;
    this.myStackLanguage;
}

const greetings = (myName,myId, myStackLanguage) =>{
   console.log(`Hello World, this is ${myName} with HNGi7 ID ${myId} using ${myStackLanguage} for stage 2 task `);
}

const data = new myDetails(userName, userId, userlanguage);
greetings(data.userName, data.userId, data.userLanguage);


const  userName='Enock Omondi Otuoma';
const  userId="HNG-03371";
const  userLanguage="JavaScript";