import random
import string
from flask import Flask, render_template, request

app = Flask(__name__)

def generate_password():
    chars = string.ascii_letters + string.digits + string.punctuation
    password = ''.join(random.choice(chars) for _ in range(12))
    return password

@app.route('/', methods=['GET', 'POST'])
def password_generator():
    if request.method == 'POST':
        password = generate_password()
        return render_template('index.html', password=password)
    else:
        password = generate_password()
        return render_template('index.html', password=password)

if __name__ == '__main__':
    app.run(debug=True)
