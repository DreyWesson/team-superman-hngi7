const myInfo = {
  firstName: "Chinonso",
  lastName: "Ngwu",
  fullName: function () {
    return this.firstName + " " + this.lastName;
  },
  hngId: "HNG-02298",
  language: "JavaScript",
  email: "ngwucs@gmail.com",
};

function myTask() {
  console.log(
    "Hello World, this is " +
      myInfo.fullName() +
      " with HNGi7 ID " +
      myInfo.hngId +
      " using " +
      myInfo.language +
      " for stage 2 task." +
      myInfo.email
  );
}

myTask();
