full_name = "Derrick Moseti"
ID = "HNG-06101"
language = "python"
email = "mosetiderrick1@gmail.com"

#message for hng campaign.
def message(full_name,ID,language,email):
    #variable to store  the message.
    messag = "Hello World, this is" + " " + full_name +" "+ "with HNGi7 ID"+" " +ID+" " +"using" +" "+language+" "+"for stage 2 task."+ email
    
    return print(messag)
    
#call the function
message(full_name,ID,language,email)