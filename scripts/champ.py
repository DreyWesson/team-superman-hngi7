# username: champ
# name: peter onum
# id: HNG-00133

full_name = "Peter Onum"
hng_id = "HNG-00133"
language = "python"

my_dict = {'name':full_name, 'identity':hng_id, 'dialect':language}


def show_my_details(name, hng_id, language_input):
    return f"Hello World, this is {name} with HNGi7 ID {hng_id} using {language_input} for stage 2 task"


print(show_my_details(my_dict['name'], my_dict['identity'], my_dict['dialect']))


quitter = input('Press any key to quit')
