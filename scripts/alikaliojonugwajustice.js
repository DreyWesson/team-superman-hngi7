const ALIKALI_OJONUGWA_JUSTICE_HNG_Details = ({ name, id, lang, email }) =>
  `Hello World, this is ${name} with HNGi7 ID ${id} using ${lang} for stage 2 task.${email}`;

console.log(
  ALIKALI_OJONUGWA_JUSTICE_HNG_Details(
    {
      name: "Alikali Ojonugwa Justice",
      id: "HNG-03822",
      lang: "JavaScript",
      email: "alikali.ojonugwajustice@gmail.com"
    }
  )
);

