<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Admin</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicon -->
    <link rel="icon" href="images/favicon_io/favicon.ico" type="image/x-icon">

    <!-- Standard Icon -->
    <link rel="shortcut icon" href="images/favicon_io/favicon.ico" type="image/x-icon">

    <!-- PNG Icons -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">

    <!-- Android & Chrome -->
    <link rel="manifest" href="images/favicon_io/site.webmanifest">

    <!-- Safari Pinned Tab -->
    <link rel="mask-icon" href="images/favicon_io/safari-pinned-tab.svg" color="#0054a6">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon_io/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- <link href="/admin_assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/admin_assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/admin_assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/admin_assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/admin_assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/admin_assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/admin_assets/vendor/simple-datatables/style.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="/admin_assets/css/style.css" rel="stylesheet">

</head>

<body>
    <!-- Include Footer -->
    @include('layouts.admin.admin_navbar')
    <div id="main-content">
        <main>
            @yield('content') <!-- Main content section -->
        </main>
    </div>
    @include('layouts.admin.admin_footer')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        </script>
    @endif

</body>

</html>