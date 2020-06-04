first_name = "Golden"
last_name = "Idikibiebuma"
internship_id = "HNG-04530"
email = "golden.idiki@gmail.com"
slack_user_name = "GoldenIdiki"
language = "Python"

details = {
    "file": "GoldenIdiki.py",
    "output": f"Hello World, this is {first_name} {last_name} with HNGi7 ID {internship_id} using {language} "
              f"for stage 2 task.{email}",
    "name": first_name + " " + last_name,
    "id": internship_id,
    "email": email,
    "language": language,
    "status": "Pass"
}

for m, n in details.items():
    print(m + ": " + n)
