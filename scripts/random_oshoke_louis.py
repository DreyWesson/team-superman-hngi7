
# A function to accept 3 string arguments and return an expected string 
# containing the HNGi7 Intern profile

def greet_hello(full_name, id, language,email):
    return ("Hello World, this is {0} with HNGi7 ID {1} using {2} for stage 2 task.{3}".format(full_name,id,language,email))

fname="Oshoke Louis"
id= "HNG-01673"
lang = "python"
email= "goldbars.ng@gmail.com"

print(greet_hello("fname", id, lang, email))

