from faker import Faker
import csv
from datetime import datetime

fake = Faker()

def generate_user_data(record_count):
    users = []
    for _ in range(record_count):
        fname = fake.first_name()
        lname = fake.last_name()
        email = f"{fname.lower()}{lname.lower()}@cybel.com"
        email_verified_at = ''
        password = 'password'
        is_admin = 'true' if _ >= 30 else 'false'  # First 30 are not advisors, next 20 are
        rememberToken = 'token'
        created_at = updated_at = datetime.now().strftime('%Y-%m-%d %H:%M:%S')
        users.append([fname, lname, email, email_verified_at, password, is_admin, rememberToken, created_at, updated_at])
    return users

def write_to_csv(filename, data):
    with open(filename, 'w', newline='') as file:
        writer = csv.writer(file)
        writer.writerow(['fname', 'lname', 'email', 'email_verified_at', 'password', 'is_admin', 'rememberToken', 'created_at', 'updated_at'])
        writer.writerows(data)

users_data = generate_user_data(50)
write_to_csv('users.csv', users_data)

