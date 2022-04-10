## RPL CAPSTONE PROJECT
### Amin.in
Muslim wear e commerce

## for contributors: 
### Installation
1. Clone this project
    ```bash
    git clone https://github.com/SI-RPL-2022/SI4307_F_AminIn/
    cd AminIn
    ```
2. Install dependencies
    ```bash
    composer install
    ```
    And javascript dependencies
    ```bash
    yarn install && yarn dev

    #OR

    npm install && npm run dev
    ```

3. Set up Laravel configurations
    ```bash
    copy .env.example .env
    php artisan key:generate
    ```

4. Set your database in .env

5. Migrate database
    ```bash
    php artisan migrate --seed
    ```

6. Serve the application
    ```bash
    php artisan serve
    ```

