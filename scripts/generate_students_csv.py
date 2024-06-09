import pandas as pd
from faker import Faker
import random
import json
from datetime import datetime, timedelta

# Initialize Faker
fake = Faker()

# Load the CSV data into a DataFrame
df = pd.read_csv('users.csv')

# Filter out admin users to get students
students_df = df[df['is_admin'] == False]

# Filter out non-admin users to get advisors
advisors_df = df[df['is_admin'] == True]
advisors_emails = advisors_df['email'].tolist()

# Assign a random advisor to each student
students_df['advisor_email'] = students_df.apply(lambda _: random.choice(advisors_emails), axis=1)

# Generate fake student data
students_df['phone'] = students_df.apply(lambda _: fake.phone_number(), axis=1)
students_df['address'] = students_df.apply(lambda _: fake.address().replace("\n", ", "), axis=1)
students_df['major'] = students_df.apply(lambda _: random.choice(['Computer Science', 'Business', 'Biology', 'History', 'Mathematics']), axis=1)
students_df['gpa'] = students_df.apply(lambda _: round(random.uniform(2.0, 4.0), 2), axis=1)
students_df['birthdate'] = students_df.apply(lambda _: fake.date_of_birth(minimum_age=18, maximum_age=22).isoformat(), axis=1)
students_df['enrollment_status'] = 'enrolled'
students_df['academic_standing'] = students_df.apply(lambda _: random.choice(['Good Standing', 'Probation', None]), axis=1)
students_df['start_date'] = datetime.now().isoformat()
students_df['expected_graduation_date'] = (datetime.now() + timedelta(days=4*365)).isoformat()
students_df['total_credits_earned'] = students_df.apply(lambda _: random.randint(0, 120), axis=1)
students_df['interests'] = students_df.apply(lambda _: fake.text(max_nb_chars=200), axis=1)

# Generate interests as a JSON string
students_df['interests'] = students_df.apply(lambda _: json.dumps(fake.words(nb=random.randint(3, 10))), axis=1)

# Assign unique student_id
students_df['student_id'] = range(1, len(students_df) + 1)

# Use the email from the users CSV as the user_id
students_df['user_id'] = students_df['email']

# Prepare the final DataFrame for CSV
students_final_df = students_df[['user_id', 'student_id', 'phone', 'address', 'major', 'gpa', 'birthdate',
                                 'enrollment_status', 'academic_standing', 'start_date',
                                 'expected_graduation_date', 'total_credits_earned', 'interests',
                                 'advisor_email']]

# Save to new CSV
students_final_df.to_csv('students.csv', index=False)

print("Students CSV generated successfully.")

