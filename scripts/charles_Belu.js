//an Object was created to hold properties of the user
let userDetails = {
    userName: "",
    id: "",
    email: "nwachebeluanthony@gmail.com",
    lang: "",
    displayInfo: (userName, id, lang) => {

        console.log (`Hello World, this is ${userName} with HNGi7 ID ${id} using ${lang} for stage 2 task`);
    }//function to output the object property values. 
};
let { userName,id,email,lang } = userDetails; //destructuring of object 
userDetails.displayInfo("Charles Nwachebelu", "HNG-04564","javaScript");
