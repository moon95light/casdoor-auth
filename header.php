<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
  <meta http-equiv="Pragma" content="no-cache" />
  <meta http-equiv="Expires" content="0" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>
    <?= $title; ?>
  </title>


  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" /> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/8.5.3/video-js.min.css" integrity="sha512-OxFNWAvUrErw1lQmH+xnjFJZePnr6zA0/H/ldxoXaYUn3yHcII7RpB6cfysY0rhxRZeCIUzQIECLOCXIYrfOIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.0.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="dist/css/social-share-kit.css" type="text/css">
  <style>
    header {
      background: white;
      position: fixed;
      top: 0;
      transition: top 0.2s ease-in-out;
      width: 100%;
      z-index: 300;
    }

    .nav-up {
      top: -40px;
    }

    .img-fluid-message {
      max-width: 30%;
      border-radius: 50%;
      width: 24px;
      height: 24px;
    }

    .bg-message {
      width: 40%;
    }

    .modal-header {
      display: flex;
      justify-content: normal;
    }

    .modal-title {
      margin-left: 10px;
    }

    #message {
      border: none;
      width: 100%;
      height: 100%;
    }

    #message:focus {
      border: none;
      outline: none;
    }

    .modal .modal-dialog.modal-bottom-right {
      right: 0;
      bottom: 0;
    }

    .modal .modal-side {
      position: absolute;
      width: 100%;
      right: var(--mdb-modal-side-right);
      bottom: var(--mdb-modal-side-bottom);
      margin: 0;
    }

    .modal-footer {
      flex-wrap: nowrap;
    }

    .bottom-text {
      margin-bottom: 0;
      font-size: 13px;
    }

    .footer-left {
      text-align: center;
      margin-right: 50px;
      margin-left: 100px;
    }

    .error-msg {
      color: green;
      display: none;
    }
    #success-subscription {
      font-size: 12px;
      /* margin-left: 70%; */
    }
    #success-message {
      font-size: 12px;
      /* margin-left: 83%; */
    }

  </style>
</head>

<body>
  <header class="nav-down">
    <nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
      <div class="container-fluid trigger-menu-wrapper">
        <a class="navbar-brand">Navbar</a>
        <form action="/search" method="get" class="d-flex input-group w-auto">
          <input name="q" value="" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
          <span class="input-group-text border-0 ">
            <button type="button" class="btn btn-text border-0 p-0 m-0"><i class="fas fa-search"></i></button>

          </span>
        </form>
      </div>
    </nav>
  </header>