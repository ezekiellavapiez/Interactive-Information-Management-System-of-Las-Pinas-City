<?php include "includes/db.php"; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image icon" href="./Assets/images/lplogo.png">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./Assets/newsassets/lib/owlcarousel/owl.carousel.min.js" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./Assets/newsassets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index.html" class="nav-item nav-link">Home</a>
                    <a href="category.html" class="nav-item nav-link">Categories</a>
                    <a href="single.html" class="nav-item nav-link active">Single News</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="#" class="dropdown-item">Menu item 1</a>
                            <a href="#" class="dropdown-item">Menu item 2</a>
                            <a href="#" class="dropdown-item">Menu item 3</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="container">
            <nav class="breadcrumb bg-transparent m-0 p-0">
                <a class="breadcrumb-item" href="#">Home</a>
                <a class="breadcrumb-item" href="#">Category</a>
                <a class="breadcrumb-item" href="#">Technology</a>
                <span class="breadcrumb-item active">News Title</span>
            </nav>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-14">
                    <?php
                    if (isset($_GET['an_id'])) {
                        $published_post_id = $_GET['an_id'];
                        $query = "UPDATE posts SET post_views = post_views + 1 WHERE post_id = $published_post_id";
                        $views_query = mysqli_query($connection, $query);

                        $query = "SELECT * FROM posts WHERE post_id = $published_post_id ";
                        $all_post_query = mysqli_query($connection, $query);

                        while ($row =  mysqli_fetch_assoc($all_post_query)) {

                            $post_category_id = $row["post_category_id"];
                            $post_title = $row["post_title"];
                            $post_author = $row["post_author"];
                            $post_date = $row["post_date"];
                            $post_image = $row["post_image"];
                            $post_content = html_entity_decode($row["post_content"]);
                            $post_tags = $row["post_tags"];
                            $post_status = $row["post_status"];

                            $query = "SELECT * FROM categories WHERE cat_id = $post_category_id";
                            $select_cat_query = mysqli_query($connection, $query);
                            while ($row =  mysqli_fetch_assoc($select_cat_query)) {
                                $post_category_id = $row['cat_title'];
                    ?>
                                <!-- News Detail Start -->
                                <div class="position-relative mb-3">
                                    <img class="img-fluid w-100" src="login/images/posts/<?php echo $post_image; ?>" style="object-fit: cover;">
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-3">
                                            <a href=""><?php echo $post_category_id; ?></a>
                                            <span class="px-1">/</span>
                                            <span><?php echo $post_date; ?></span>
                                        </div>
                                        <div>
                                            <h3 class="mb-3"><?php echo $post_title; ?></h3>
                                            <?php echo $post_content; ?>

                                        </div>
                                    </div>
                                </div>
                    <?php }
                        }
                    } else {
                        header("Location: news.php");
                    } ?>
                    <!-- News Detail End -->

                    <!-- Comment List Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">3 Comments</h3>
                        <div class="media mb-4">
                            <img src="./Assets/newsassets/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                            </div>
                        </div>
                        <div class="media">
                            <img src="./Assets/newsassets/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                            <div class="media-body">
                                <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                    accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    Gubergren clita aliquyam consetetur sadipscing, at tempor amet ipsum diam tempor
                                    consetetur at sit.</p>
                                <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                <div class="media mt-4">
                                    <img src="./Assets/newsassets/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                    <div class="media-body">
                                        <h6><a href="">John Doe</a> <small><i>01 Jan 2045 at 12:00pm</i></small></h6>
                                        <p>Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor
                                            labore accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed sed
                                            eirmod ipsum. Gubergren clita aliquyam consetetur sadipscing, at tempor amet
                                            ipsum diam tempor consetetur at sit.</p>
                                        <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Comment List End -->

                    <!-- Comment Form Start -->
                    <div class="bg-light mb-3" style="padding: 30px;">
                        <h3 class="mb-4">Leave a comment</h3>
                        <form>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="website">Website</label>
                                <input type="url" class="form-control" id="website">
                            </div>

                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
                            </div>
                        </form>
                    </div>
                    <!-- Comment Form End -->
                </div>


                <!-- Back to Top -->
                <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


                <!-- JavaScript Libraries -->
                <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
                <script src="./Assets/newsassets/lib/easing/easing.min.js"></script>
                <script src="./Assets/newsassets/lib/owlcarousel/owl.carousel.min.js"></script>

                <!-- Contact Javascript File -->
                <script src="./Assets/newsassets/mail/jqBootstrapValidation.min.js"></script>
                <script src="./Assets/newsassets/mail/contact.js"></script>

                <!-- Template Javascript -->
                <script src="./Assets/newsassets/js/main.js"></script>
</body>

</html>