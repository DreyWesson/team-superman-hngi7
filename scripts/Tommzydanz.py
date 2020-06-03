# - *- coding: utf- 8 - *-
import sys

introduction = "Hello World, this is {} with HNGi7 ID {} using {} for stage 2 task.{}"
def task_introduction (name, hng_id, language, email):

	return introduction.format(name, hng_id, language, email)
	
	
	
print(task_introduction("Daniel Tomiwa", "HNG-02027", "Python", "daniela.stomiwa@yahoo.com"))


sys.stdout.flush()