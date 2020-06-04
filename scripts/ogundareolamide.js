function hngInfo(fullname, id, language, email) {
  const info = `Hello World, this is ${fullname} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`;
  console.log(info);
};

const fullName = "Ogundare Olamide";
const hngID = "HNG-04678";
const programmingLanguage = "JavaScript";
const emailAddress = "oluwadareysamuel@yahoo.com";

hngInfo(fullName, hngID, programmingLanguage, emailAddress);
