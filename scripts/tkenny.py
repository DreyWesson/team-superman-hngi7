userData = {
        'name':'Totoola Kehinde',
        'id':'HNG-04512',
        'lang':'Python',
        'email':'totoolakenny@gmail.com'
    }
message = 'Hello World, this is {} with HNGi7 ID {} using {} for stage 2 task.{}'.format(userData['name'], userData['id'], userData['lang'], userData['email'])

def userDetails():
    return message

print(userDetails())