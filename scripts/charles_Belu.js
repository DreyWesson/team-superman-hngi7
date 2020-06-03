//an Object was created to hold properties of the user
let userDetails = {
    userName: "",
    id: "",
    email: "",
    lang: "",
    displayInfo: (userName, id, lang) => {

        console.log (`Hello World, this is ${userName} with HNGi7 ID ${id} using ${lang} for stage 2 task.${email}`);
    }//function to output the object property values. 
};
let { userName,id,email,lang } = userDetails; //destructuring of object 
email = "nwachebeluanthony@gmail.com"
userDetails.displayInfo("Charles Nwachebelu", "HNG-04564","javaScript", email);
