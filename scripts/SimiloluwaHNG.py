def show_message(fullname, hng_id, language, email):
    return "Hello World, this is %s with HNGi7 ID %s using %s for stage 2 task.%s" %(fullname,hng_id,language,email)

if __name__ == "__main__":
    print(show_message("Similoluwa Okunowo","HNG-02950","Python","rexsimiloluwa@gmail.com"), flush=True)
