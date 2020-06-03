# - *- coding: utf- 8 - * -

import sys


	
def intern_details(name, id, email, language):
	print("Hello World, this is %s with HNGi7 ID %s using %s for stage 2 task.{}".format(email))% (name, id, language)
	sys.stdout.flush()
	

name = "Daniel Tomiwa" 
id = "HNG-02027"
language = "Python" 
email = "daniela.stomiwa@yahoo.com"	

if __name__ == "__main__":
	intern_details(name, id, email, language)