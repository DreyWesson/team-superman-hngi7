const myPerson = {
  firstName: "Adeshina",
  lastName: "Ogunyomi",
  track: "frontend",
  HNGi7_ID: "02569",
  programming: "JavaScript",
  email: "youremal@mail.com",
  myIntroduction: function () {
    console.log(
      "Hello World, this is " +
        this.lastName +
        " " +
        this.firstName +
        " with HNGi7 ID " +
        this.HNGi7_ID +
        " using " +
        this.programming +
        " for stage 2 task." +
        myPerson.email
    );
  },
};
myPerson.myIntroduction();
