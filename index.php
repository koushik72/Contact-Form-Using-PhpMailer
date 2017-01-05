<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            font-size: 15px;
            font-family: 'Roboto Slab', serif;
            font-weight: 300;
        }

        /* helper classes */
        .text-center {
            text-align: center;
        }

        /* end of helper classes */
        .center {
            display: block;
            margin: 0 auto;
        }

        .form-cont {
            width: 90%;
        }

        
    </style>
</head>
<body>
<main id="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="center form-cont">
                    <h1 class="text-center">Contact </h1>
                    <form action="formhandler.php" method="post" id="form" name="form">
                        <!-- main question -->
                        <div class="form-group">
                            <label for="question">Question: </label>
                            <select name="question" id="question" class="form-control" required>
                                <!-- options handled using js -->
                            </select>
                        </div>
                        <!-- /main question -->

                        <!-- sub question -->
                        <div class="form-group">
                            <label for="sub-question">Sub-Question: </label>
                            <select name="sub-question" id="sub-question" class="form-control" required>
                                <!-- options handled using js -->
                            </select>
                        </div>
                        <!-- /sub-question -->

                        <!-- textarea for comment -->
                        <div class="form-group">
                            <label for="comment">Comment: </label>
                            <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" required
                                      placeholder="Please leave a comment here"></textarea>
                        </div>
                        <!-- /textarea -->

                        <button type="submit" id="submit-btn" class="btn btn-default">Submit</button>

                    </form><!-- /form -->

                </div> <!-- /form-cont -->

            </div><!-- /col-md-12 -->
        </div><!-- /row -->
    </div>
</main>

<!-- scripts go here -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="scripts/script.js"></script>
</body>
</html>