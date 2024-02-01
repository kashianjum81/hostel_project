<!doctype html>
<html lang="en">

<head>
    <title>Modal 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="csss/ionicons.min.css">
    <link rel="stylesheet" href="csss/flaticon.css">
    <link rel="stylesheet" href="csss/style.css">
</head>

<body>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close d-flex align-items-center justify-content-center"
                        data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="ion-ios-close"></span>
                    </button>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-6 d-flex">
                        <div class="modal-body p-5 img d-flex text-center d-flex align-items-center"
                            style="background-image: url(images/image.jpeg);">
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <div class="modal-body p-4 p-md-5 d-flex align-items-center color-1">
                            <div class="text w-100 py-3">
                                <span class="subheading">Congratulations! Your Seat is booked</span>
                                <h3 class="mb-4 heading">Your Booking Receipt Details</h3>
                                <form action="#" class="contact-form">
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input type="text" class="form-control" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="4" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#reserveButton').click(function(event) {
                event.preventDefault();
                $('#exampleModalCenter').modal('show');
            });
        });
    </script>
</body>

</html>
