import random

# Function to generate a random 9-digit number starting with "1001"
def generate_numbers(count):
    for _ in range(count):
        # Generate a random number in the range 100100000 to 100199999
        number = "1001" + str(random.randint(100000, 199999))
        print(number)

# Get the number of random numbers needed from the user
number_of_numbers = int(input("Enter the number of random 9-digit numbers you want to generate: "))

# Call the function with the user-provided count
generate_numbers(number_of_numbers)

