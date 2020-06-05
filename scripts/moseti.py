#message for hng campaign.
def message(full_name,ID,language,email):
    #variable to store  the message.
    messag = "Hello World, this is {} with HNGi7 ID {} using {} for stage 2 task.{}".format(full_name, ID, language, email)
    print(messag)
    
#call the function
message("Derrick Moseti","HNG-06101","Python","mosetiderrick1@gmail.com")