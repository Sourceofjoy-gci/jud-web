<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Judiciary of Eswatini</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!--Icon-->
    <link rel="shortcut icon" type="image/jpg" href="img/Jud-logo.jpg">
</head>

<body>
    <!-- Header Start -->
    <?php include "header.php" ?>
    <!-- Header End -->
    <!-- Page Header Start -->
    <div class="container-fluid bg-appointment" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 400px">
                <h3 class="display-3 text-white text-uppercase">Supreme Court</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Supreme Court</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mb-4"><b>The Supreme Court</b></h3>
                <p class="text-justify">
                    The Supreme Court was established by the Court of Appeal Act of 1954, as well as by Sections 145 and 146 of the Constitution. It is the court of last instance in the land and has jurisdiction over all criminal and civil appeals from the High Court sitting
                    in its original or appellate jurisdiction. It also has conferred jurisdiction under the Constitution or any other law. The Supreme Court also has supervisory and review powers over all courts in Eswatini.
                </p>
            </div>
        </div>
        <br>
        <div class="row bg-light">
            <div class="col-lg-6">
                <div class="card shadow p-3 mb-4">
                    <h5 class="card-title text-center mb-3"><b>Composition of the Supreme Court</b></h5>
                    <p class="card-text text-justify">
                        The Supreme Court of Judicature for Eswatini consists of the Chief Justice and not less than four other Justices of the Supreme Court. The Supreme Court shall be duly constituted for its ordinary work by not less than three Justices of the Supreme Court.
                        A full bench of the Supreme Court shall consist of five Justices of that Court. The Chief Justice shall preside at sittings of the Supreme Court, and when not sitting, the most senior of the Justices constituting the court shall
                        preside.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="calendar"></div>
            </div>

            <!-- Include necessary libraries -->




        </div>
    </div>



    <!-- Footer Start -->
    <?php include "footer.php" ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary px-3 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>


    <script>
        $(document).ready(function() {
            // Initialize FullCalendar
            $('#calendar').fullCalendar({
                // Set options and configurations
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                editable: false, // Allow events to be draggable and resizable
                selectable: false, // Enable selecting a time slot to create a new event
                events: [
                    // Sample events data (can be fetched dynamically from a backend)
                    {
                        title: 'Event 1',
                        start: '2023-06-17T10:00:00',
                        end: '2023-06-17T12:00:00',
                        color: '#FFA500' // Set color for the event
                    }, {
                        title: 'Event 2',
                        start: '2023-06-19T14:00:00',
                        end: '2023-06-19T16:00:00',
                        color: '#008000'
                    },
                    // Add more events as needed
                ],
                // Handle event creation
                select: function(start, end) {
                    var title = prompt('Enter event title:');
                    if (title) {
                        var eventData = {
                            title: title,
                            start: start,
                            end: end,
                            color: '#0000FF' // Set default color for new events
                        };
                        $('#calendar').fullCalendar('renderEvent', eventData, true); // Render the new event
                    }
                    $('#calendar').fullCalendar('unselect');
                },
                // Handle event editing
                eventResize: function(event) {
                    // Handle event resize logic
                },
                eventDrop: function(event) {
                    // Handle event drag and drop logic
                }
            });
        });
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>