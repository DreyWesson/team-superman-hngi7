const person = {
    fullname: 'Justin Eechukwu',
    HNGI7_id: 'HNG-03080',
    language: 'Javascript',
    email: 'rylerkorey@gmail.com',
    details: function(){
                console.log("Hello World, this is "
                 + this.fullname + " with HNGI7 ID "
                  + this.HNGI7_id + " using " + this.language + 
                  " for stage 2 task." + this.email
                  );
    }
}
person.details();
