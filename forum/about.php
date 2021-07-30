<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Welcome to iDiscuss - Coding Forums</title>
</head>
<style>
#home {
    display: flex;
    flex-direction: column;
    padding: 3px 200px;
    justify-content: center;
    height: 644px;
    align-items: center;
}

.hprimary {
    font-size: 3.8rem;
    padding: 12px;
    font-family: 'Bree Serif', serif;
}

.bton {
    padding: 6px 20px;
    border: 2px solid white;
    background-color: brown;
    color: white;
    margin: 17px;
    font-size: 1.5rem;
    border-radius: 10px;
    cursor: pointer;

}
</style>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

    <section id="home">
        <h1 class="hprimary">Welcome to iDiscuss</h1>
        <p>iDiscuss is a question and answer site for enthusiast programmers. It's built and run
            by you as part of the iDiscuss network of Q&A sites. We're working together to build a
            library of detailed answers to every question about programming</p>
        <p>Users will be responsible to enter questions in particular forum, get their answers, make reply to existing
            posts, check scores of other users, access message dialog box and make changes through their profile
            settings. It’s the moderator, who will have the authority to approve questions and answers posted by the
            registered users. </p>

        
    </section>

    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>