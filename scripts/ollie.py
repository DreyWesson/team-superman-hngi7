def introduction(name, ID, language, Email):
    result = "Hello world, this is {} HNGi7 {}, using {} for stage 2 task. {}."
    return (result.format(name, ID, language, Email))
message = introduction("Ogunsipe Oladolapo", "HNG-00590",
                       "python", "dolapoogunsipe@gmail.com")
print(message)
