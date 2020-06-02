let userDetails = {
    userName: "",
    id: "",
    lang: "",
    displayInfo: (userName, id, lang) => {

        return (`Hello World, this is ${userName} with HNGi7 ID: ${id} using ${lang} for stage 2 task`);

    }
};
let { userName, id, lang } = userDetails;
userDetails.displayInfo("Charles Nwachebelu", "HNG-04564", "javaScript");