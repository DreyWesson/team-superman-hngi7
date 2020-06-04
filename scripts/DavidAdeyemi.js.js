
  function Internship(name, hngid, language){
    this.myName=name;
    this.hngid = hngid;
    this.language=language;
    this.email=email;
  }
  function HelloHNG(name, id, language){
    console.log(`Hello World, this is ${name} with HNGi7 ID ${id} using ${language} for stage 2 task.${email}`)
  }
  let Name="David Adeyemi";
  let id="HNG-02801";
  let language="JavaScript";
  let email="pharmdave2009@gmail.com" 
  let internship=new Internship(Name, id, language);
  HelloHNG(internship.myName, internship.hngid, internship.language, internship.email);
  