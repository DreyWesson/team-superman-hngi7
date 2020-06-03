const ALIKALI_OJONUGWA_JUSTICE_HNG_Details = ({ name, id, lang }) =>
  `Hello World.\nThis is ${name},\nwith HNGi7 ID ${id},\nusing ${lang} for stage two task
  `;

console.log(
  ALIKALI_OJONUGWA_JUSTICE_HNG_Details(
    {
      name: "Alikali Ojonugwa Justice",
      id: "HNG-03822",
      lang: "JavaScript"
    }
  )
);