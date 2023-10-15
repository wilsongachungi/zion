


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_sidebar.html -->

      <!-- partial -->
      @include('admin.sidebar')
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper" >
        <div class="container" align="center" style="padding: 80px;">
          <table>
            <tr>
                <th style="padding: 30px; font-size:20px; color:green">Name</th>
                <th style="padding: 30px; font-size:20px; color:green">Email</th>
                <th style="padding: 30px; font-size:20px; color:green">Phone</th>
                <th style="padding: 30px; font-size:20px; color:green">Address</th>
                <th style="padding: 30px; font-size:20px; color:green">ID</th>
                <th style="padding: 30px; font-size:20px; color:green">Position</th>
            </tr>
          </table>
        </div>
      </div>


      @include('admin.script')
        <!-- partial -->


    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- End custom js for this page -->
  </body>
</html>

