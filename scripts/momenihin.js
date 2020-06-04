/** A javascript program for HNGi7 task that outputs a string containing 
the fullname, HNGi7 ID and language for HNG INTERNSHIP **/

const myFullName = "Nwankwo Henry Ifunanya";
const myHNGi7ID = "HNG-03667";
const myLanguage = "Javascript";
const myEmail = "nwankwohenry29@gmail.com";


function helloWorld(fullName, ID, language, email){

    const fullText = `Hello World, this is ${fullName} with HNGi7 ID ${ID} using ${language} for stage 2 task.${email}`;
    console.log(fullText);

}
helloWorld(myFullName, myHNGi7ID, myLanguage, myEmail);



