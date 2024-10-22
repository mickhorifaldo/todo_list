<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero Image Illustration</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> <!-- Menambahkan CSS Boxicons -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> <!-- Add Google Fonts -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      margin: 0;
      padding: 0;
    }
    .hero {
      position: relative;
      height: 100vh;
      background: #00d2ff; /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #3a7bd5, #00d2ff); /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #3a7bd5, #00d2ff); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      text-align: center;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5); /* Add a dark overlay */
    }
    .hero .hero-icon {
      position: absolute;
      font-size: 25rem; /* Increased size */
      color: rgba(255, 255, 255, 0.1); /* Make it transparent */
      transform: rotate(20deg); /* Tilt to the right */
      z-index: 0;
    }
    .hero-text {
      position: relative;
      z-index: 1;
    }
    .hero-text h1 {
      font-size: 4rem;
      margin-bottom: 20px;
      animation: fadeInDown 1s ease-out;
    }
    .hero-text p {
      font-size: 1.5rem;
      margin-bottom: 30px;
      animation: fadeInUp 1s ease-out;
    }
    .hero-text .btn {
      padding: 10px 20px;
      font-size: 1rem;
      background-color: #007bff;
      border-color: #007bff;
      transition: background-color 0.3s, transform 0.3s;
    }
    .hero-text .btn:hover {
      background-color: #0056b3;
      transform: scale(1.1);
    }
    .navbar {
      position: absolute;
      width: 100%;
      top: 0;
      left: 0;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      z-index: 1;
    }
    .navbar i {
      font-size: 2rem;
      color: white;
      transition: color 0.3s;
    }

    .navbar a {
      color: white;
      font-size: 1rem;
      text-decoration: none;
      padding: 10px 20px;
      background-color: #007bff;
      border-radius: 5px;
      transition: background-color 0.3s;
    }
    .navbar a:hover {
      background-color: #0056b3;
    }
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        transform: translateY(-20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .hero-text h1 {
        font-size: 2.5rem;
      }
      .hero-text p {
        font-size: 1.2rem;
      }
      .hero .hero-icon {
        font-size: 20rem;
      }
    }

    @media (max-width: 576px) {
      .hero-text h1 {
        font-size: 2rem;
      }
      .hero-text p {
        font-size: 1rem;
      }
      .hero .hero-icon {
        font-size: 15rem;
      }
      .navbar {
        padding: 10px 20px;
      }
      .navbar i {
        font-size: 1.5rem;
      }
      .navbar a {
        font-size: 0.875rem;
        padding: 8px 16px;
      }
    }

    @media (max-width: 400px) {
      .hero-text h1 {
        font-size: 1.5rem;
      }
      .hero-text p {
        font-size: 0.875rem;
      }
      .hero .hero-icon {
        font-size: 10rem;
      }
      .navbar {
        padding: 5px 10px;
      }
      .navbar i {
        font-size: 1.25rem;
      }
      .navbar a {
        font-size: 0.75rem;
        padding: 6px 12px;
      }
    }
  </style>
</head>
<body>

  <div class="hero">
    <div class="navbar">
      <i class='bx bx-task'></i> <!-- Mengganti logo dengan ikon dari Boxicons -->
      <a href="login.php" class="btn btn-primary">Login</a> <!-- Memberi latar belakang pada tombol login -->
    </div>
    <i class='bx bx-list-ul hero-icon'></i> <!-- Menambahkan ikon di tengah hero -->
    <div class="hero-text">
      <h1>Welcome to Task List</h1>
      <p>Come on, write down your tasks immediately so that your daily activities can be more structured and interesting.</p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
