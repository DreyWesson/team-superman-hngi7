function TaskForStageTwo(myName, hngId, languageUsed, email){
    this.DevName=myName;
    this.hngId = hngId;
    this.language=languageUsed;
    this.email=email;
}

function displayHello(myName, myId, language, email){
    console.log(`Hello World, this is ${myName} with HNGi7 ID ${myId} using ${language} for stage 2 task.${email}`)
}

let setName="Udemezue Emmanuel O";
let setId="HNG-02669";
let setLanguage="JavaScript";
let setEmail="emmaobinna6@gmail.com";
let taskForStageTwo=new TaskForStageTwo(setName, setId, setLanguage, setEmail);
displayHello(taskForStageTwo.DevName, taskForStageTwo.hngId, taskForStageTwo.language, taskForStageTwo.email);
