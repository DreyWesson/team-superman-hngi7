{
  function compute(name, id, email, language) {
    const output =
      "Hello World, this is " +
      name +
      " with HNGi7 ID " +
      id +
      " using " +
      language +
      " for stage 2 task." +
      email;
    console.log(output);
  }
}

const name = "Nwulu Uchechukwu Prince";
const id = "HNG-03931";
const email = "uchedotphp@gmail.com";
const language = "JavaScript";

compute(name, id, email, language);
