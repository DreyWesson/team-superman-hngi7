let userDetails = {
    userName: "",
    id: "",
    email: "",
    lang: "",
    displayInfo: (userName, id, email,lang) => {

        console.log (`Hello World, this is ${userName} with HNGi7 ID ${id} and email ${email} using ${lang} for stage 2 task`);

    }
};
let { userName, id, email, lang } = userDetails;
userDetails.displayInfo("Charles Nwachebelu", "HNG-04564","nwachebeluanthony@gmail.com" "javaScript");
