<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: #00d2ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        h3 {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            color: white;
        }
        .container {
            width: 90%;
            max-width: 400px;
            background: #00d2ff;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #3a7bd5, #00d2ff);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            margin: 80px auto;
            padding: 30px 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            position: relative;
        }
        label {
            font-size: 12pt;
            color: white;
            display: block;
            margin-top: 10px;
        }
        .form_login {
            box-sizing: border-box;
            width: 100%;
            padding: 10px;
            font-size: 11pt;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form_login::placeholder {
            color: #999; /* Warna placeholder */
        }
        .tombol {
            background: darkslategrey;
            color: #fff;
            font-size: 11pt;
            width: auto;
            border: none;
            border-radius: 3px;
            padding: 10px 20px;
            cursor: pointer;
            margin-bottom: 8px;
            margin-top: 20px;
            transition: background 0.3s ease;
            position: absolute;
            right: 20px;
            bottom: 20px;
        }
        .tombol:hover {
            background: #333;
        }
        .back {
            color: white;
            text-decoration: none;
            display: block;
            text-align: left;
            margin-top: 10px;
            transition: color 0.3s ease;
        }
        .back:hover {
            color: darkslategrey;
        }
        .register-link {
            text-align: center;
            margin-bottom: 50px;
        }
        .register-link a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease;
        }
        .register-link a:hover {
            color: darkslategrey;
        }

        @media (max-width: 768px) {
            .container {
                margin: 40px auto;
                padding: 20px 15px;
            }
            .tombol {
                right: 15px;
                bottom: 15px;
            }
        }

        @media (max-width: 480px) {
            h3 {
                font-size: 14pt;
            }
            label {
                font-size: 10pt;
            }
            .form_login {
                font-size: 10pt;
            }
            .tombol {
                font-size: 10pt;
                padding: 8px 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Login Terlebih Dahulu</h3>
        <form action="logikalogin.php" method="post">
            <label>Masukan Username</label>
            <input type="text" name="username" class="form_login" placeholder="username" required>
            <label>Masukan Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required>
            <p class="register-link">Belum punya akun? <a href="daftar.php">Daftar</a></p>
            <input type="submit" class="tombol" value="Login">
            <a href="index.php" class="back">Back to Home</a>
        </form>
    </div>
</body>
</html>
