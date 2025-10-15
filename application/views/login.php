<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link href="<?= base_url('assets/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.min.css') ?>">
    <style>
      body {
        background: url('<?= base_url("assets/img/login/background.jpg") ?>') no-repeat center center fixed;
        background-size: cover;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .bg-blur {
        backdrop-filter: blur(10px);
        background: rgba(0, 0, 0, 0.5);
        padding: 2rem;
        border-radius: 15px;
        box-shadow: 0px 8px 20px rgba(0,0,0,0.5);
        max-width: 400px;
        width: 100%;
      }

      .form-control {
        border-radius: 15px;
      }

      button {
        border-radius: 10px;
      }

      h1, h5, label {
        color: white;
      }

      a {
        color: #ffc107;
        text-decoration: none;
      }
      a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <main class="form-signin">
      <div class="bg-blur">
        <form class="form-horizontal" method="post" action="<?php echo site_url('auth/proses_login'); ?>">
          <div class="d-flex justify-content-center mb-3">
            <i class="fa-solid fa-seedling fs-1 text-warning"></i>
          </div>
          <h1 class="h1 mb-2 fw-bold text-center text-white">Selamat Datang!</h1>
          <h5 class="fw-normal text-center mb-4">Silahkan Login</h5>

          <div class="form-floating mb-3">
            <input
              name="email" 
              type="email"
              class="form-control"
              id="floatingInput"
              placeholder="name@example.com"
              required
            />
            <label for="floatingInput">Email address</label>
          </div>

          <div class="form-floating mb-3">
            <input
              name="password"
              type="password"
              class="form-control"
              id="floatingPassword"
              placeholder="Password"
              required
            />
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"/>
            <label class="form-check-label text-white" for="checkDefault">
              Remember me
            </label>
          </div>

          <button class="btn btn-warning w-100 py-2 fw-bold" type="submit" name="submit" value="submit">
            Login
          </button>

          <p class="mt-3 text-center text-white">
            Belum punya akun? <a href="<?= site_url('auth/register') ?>">Registrasi</a>
          </p>
        </form>
      </div>
    </main>
  </body>
</html>
