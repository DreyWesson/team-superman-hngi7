# username: Champ
# name: Peter Onum
# id: HNG-00133
# email: onumdev@gmail.com
# All this complication is just to make my code unique

name = "Peter Onum"
ID = "HNG-00133"
language = "python"
email = "onumdev@gmail.com"

my_dict = {'name': name, 'id': ID, 'language': language, 'email':email}


def show_my_details(name, hng_id, language_input, mail):
    return f"Hello World, this is {name} with HNGi7 ID {hng_id} using {language_input} for stage 2 task.{mail}"


print(show_my_details(my_dict['name'],
                      my_dict['id'], my_dict['language'], my_dict['email']))
