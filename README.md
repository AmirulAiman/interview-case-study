<p align="center">
    <img align="center" src="https://supplycart.my/wp-content/uploads/2019/09/sc_logo_tm.png">
</p>

# Supplycart Interview Case Study

This case study is designed for candidates to showcase their skills and coding style focusing on Laravel, Vue and TailwindCSS. You may use more technologies apart from the 3 mentioned. 

### Instructions

- Fork this repo to your github account
- Complete the tasks given
- Once completed, create a PR to this repository
- Lastly, add some guidance or instruction on how to run your code

### Requirements

You must work on this assignment using:
 - Vue (optional for BE dev)
 - TailwindCSS
 - Laravel (optional for FE dev)

### Tasks

1. As guest, I want to be able to register an account (<b>Completed</b>)
2. As guest, I want to be able to login using registered account (<b>Completed</b>)
3. As user, I want to see list of products after login (<b>Completed</b>)
4. As user, I want to be able to add product to cart (<b>Completed</b>)
5. As user, I want to be able to place order for added products in cart (<b>Completed</b>)
6. As user, I want to see my order history (<b>Completed</b>)
7. As user, I want to be able to logout (<b>Completed</b>)

### Bonus Tasks

1. Verify email after registration
2. User activity log e.g. login, logout, add to cart, place order etc (<b>Completed</b>)
3. Product attributes and filtering e.g brand, category
4. Different user can see different price for products
5. Add unit tests
6. Deploy app to a server


P/S: If you think there is a better way for us to asses your technical skills, feel free to suggest. We are constantly looking to improve our interview process.
___

# Setup
- Run `composer install` & `npm run dev` after clone this git repo.
- Create database in the database server
- Copy env.local to .env and update the following
    <pre>
        <code>
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=(database name here)
        DB_USERNAME=root
        DB_PASSWORD=
        </code>
    </pre>
- Run composer migrate --seed, it will generate some `products` and `users` with other stuffs.
- Seeded users
    - admin@dev.local(pwd: abcd1234)
    - jane_doe@dev.local(pwd: abcd1234)
    - john_doe@dev.local(pwd: abcd1234)