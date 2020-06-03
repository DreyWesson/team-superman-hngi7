name = None
id = None
lang = None
message = "Hello World, this is {} with HNGi7 ID {} using {} for stage two task"

def userDetails(name, id, lang):
    return message.format(name, id, lang)

print(userDetails('Totoola Kehinde', 'HNG-04512', 'Python'))