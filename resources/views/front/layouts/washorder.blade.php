
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Wash Order</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="/assets/css/style.css" rel="stylesheet">
    </head>

    <body>
    
    @include('front.layouts.header')
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Washing Order</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Order</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        <div class="container mt-5">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Header 1</th>
                        <th>Header 2</th>
                        <th>Header 3</th>
                        <th>Header 4</th>
                        <th>Header 5</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Row 1, Col 1</td>
                        <td>Row 1, Col 2</td>
                        <td>Row 1, Col 3</td>
                        <td>Row 1, Col 4</td>
                        <td>Row 1, Col 5</td>
                    </tr>
                    <tr>
                        <td>Row 2, Col 1</td>
                        <td>Row 2, Col 2</td>
                        <td>Row 2, Col 3</td>
                        <td>Row 2, Col 4</td>
                        <td>Row 2, Col 5</td>
                    </tr>
                    <tr>
                        <td>Row 3, Col 1</td>
                        <td>Row 3, Col 2</td>
                        <td>Row 3, Col 3</td>
                        <td>Row 3, Col 4</td>
                        <td>Row 3, Col 5</td>
                    </tr>
                    <tr>
                        <td>Row 4, Col 1</td>
                        <td>Row 4, Col 2</td>
                        <td>Row 4, Col 3</td>
                        <td>Row 4, Col 4</td>
                        <td>Row 4, Col 5</td>
                    </tr>
                    <tr>
                        <td>Row 5, Col 1</td>
                        <td>Row 5, Col 2</td>
                        <td>Row 5, Col 3</td>
                        <td>Row 5, Col 4</td>
                        <td>Row 5, Col 5</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        
        @include('front.layouts.footer')

<!--Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Car Wash Booking</h4>
        </div>
        <div class="modal-body">
<form method="post">   
  <p>
            <select name="packagetype" required class="form-control">
                <option value="">Package Type</option>
                <option value="1">BASIC CLEANING ($10.99)</option>
                 <option value="2">PREMIUM CLEANING ($20.99)</option>
                  <option value="3 ">COMPLEX CLEANING($30.99)</option>
              </select>

          <p>
            <select name="washingpoint" required class="form-control">
                <option value="">Select Washing Point</option>

            </select></p>
            <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
            <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
            <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
             <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
             <p><textarea name="message"  class="form-control" placeholder="Message if any"></textarea></p>
             <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
