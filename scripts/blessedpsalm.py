# -*- coding: utf-8 -*-
"""
Created on Thu Jun  4 16:00:26 2020

@author: bdp
"""


def profile_format(first_name, last_name, stack, hng_id, email):
    full_name = first_name + ' ' + last_name
    return print(f"Hello world, I am {full_name} with HNGi7 ID {hng_id} a beginner in {stack} for stage 2 task.{email}")

profile_format('Samuel', 'Ogunsola', 'Python, HTML and CSS', 'HNG-00800','sammy4excellence97@gmail.com')