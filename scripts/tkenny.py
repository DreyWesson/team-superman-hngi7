userData = {
        'name':'Totoola Kehinde',
        'id':'HNG-04512',
        'lang':'Python',
        'email':'totoolakenny@gmail.com',
        'output':'Hello World, this is {} with HNGi7 ID {} using {} for stage 2 task.{}'
    }

userData['output'] = userData['output'].format(userData['name'], userData['id'], userData['lang'], userData['email'])

message = userData['output']
def userDetails():
    return message

print(userDetails())