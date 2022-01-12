<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" />
    <title>Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent sticky-lg-top">
        <div class="container-fluid px-3">
            <a class="navbar-brand display-6 fw-bold" href="#">ART THEME</a>
            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">
                <i class="bi bi-list" style="font-size: 2rem; color: black"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                aria-labelledby="offcanvasRightLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="mt-5">
                    <div class="row text-center mt">
                        <div class="col">
                            <a href="./index.html" class="text-decoration-none display-5 text-secondary">Home</a>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <a href="./about.html" class="text-decoration-none display-5 text-secondary">About</a>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <a href="#" class="text-decoration-none display-5 text-secondary">Artist</a>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <a href="#" class="text-decoration-none display-5 text-secondary">Store</a>
                        </div>
                    </div>
                    <div class="row text-center mt-4">
                        <div class="col">
                            <a href="#" class="text-decoration-none display-5 text-secondary">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="bg-image p-5 text-center shadow-1-strong text-white" style="
        background-image: url('https://images.unsplash.com/photo-1547891654-e66ed7ebb968?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
        height: 100vh; background-attachment: fixed;
      ">
        <div class="row align-items-center h-100">
            <div class="d-grid mt-5 p-md-5 gap-md-5 gap-3 col-lg-4 col-md-6 col-10 mx-auto">
                <a href="#" class="btn btn-dark p-4">EXHIBITIONS</a>
                <a href="#" class="btn btn-dark p-4">STORE</a>

            </div>
            <i onclick="scrollDown('exhibitions')" class="bi btn bi-arrow-down-circle-fill mt-5"
                style="font-size: 3rem; color: black"></i>
        </div>
    </div>

    <div id="exhibitions">
        <div class="container mt-5">

            <div>
                <h2 class="display-3 text-center mb-5">Exhibitions</span></h2>
                <hr>
            </div>

            <div class="container mt-5 p-5">
                <div class="row d-flex justify-content-center p-2">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1559102877-4a2cc0e37fce?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1057&q=80"
                                style="height:250px; object-fit: cover;" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1549277513-f1b32fe1f8f5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
                                class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1580136579312-94651dfd596d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1617&q=80"
                                class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1456086272160-b28b0645b729?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80"
                                style="height:250px; object-fit: cover;" class="card-img-top " alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/flagged/photo-1572392640988-ba48d1a74457?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80"
                                class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card">
                            <img src="https://images.unsplash.com/photo-1576495169018-bd2414046c6b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1104&q=80"
                                class="card-img-top" style="height:250px; object-fit: cover;" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Exhibition</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk of the
                                    card's content.</p>
                                <a href="#" class="btn btn-dark">Buy Ticket</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <div id="store">
        <div class="container mt-5">
            <div>
                <h2 class="display-3 text-center mb-5">Store</span></h2>
                <hr>
            </div>
            <div class="container mt-5 p-5">
                <div class="row d-flex justify-content-center p-2">
                    <div class="col"><img
                            src="https://images.unsplash.com/photo-1599894019794-50339c9ad89c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80"
                            alt="" style="width: 100%; height: 30rem; object-fit: cover;" srcset=""></div>
                    <div class="col">
                        <img src="https://images.unsplash.com/photo-1577049091731-e6ed8b1e8b02?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="" style="width: 100%; height: 30rem; object-fit: cover;" srcset="">
                    </div>
                </div>
                <div class="row d-flex justify-content-center p-2">
                    <div class="col"><img
                            src="https://images.unsplash.com/photo-1577049092056-1578d3fc65e1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80"
                            alt="" style="width: 100%; height: 30rem; object-fit: cover;" srcset=""></div>
                    <div class="col">
                        <img src="https://images.unsplash.com/photo-1578925773717-a41e4a7fa4b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=640&q=80"
                            alt="" style="width: 100%; height: 30rem; object-fit: cover;" srcset="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="my-5">footer</footer>
</body>
<script src="/wp-content/art-catalogue-theme/assets/js/index.js"></script>

</html>