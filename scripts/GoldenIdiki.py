def my_hng_details(details):
    print("Hello World, this is {} with HNGi7 ID {} using {} for stage 2 task.{}".format(details["full_name"], details["internship_id"], details["language"], details["email"]))


details = {
    "full_name": "Golden Idikibiebuma",
    "internship_id": "HNG-04530",
    "language": "Python",
    "email": "golden.idiki@gmail.com"
}
my_hng_details(details)