let userDetails = {
    userName: "",
    id: "",
    lang: "",
    email: "",
    displayInfo: (userName, id, lang) => {

        console.log (`Hello World, this is ${userName} with HNGi7 ID ${id} using ${lang} for stage 2 task`);

    }
};
let { userName, id, lang, email } = userDetails;
userDetails.displayInfo("Charles Nwachebelu", "HNG-04564", "javaScript", "nwachebeluanthony@gmail.com");