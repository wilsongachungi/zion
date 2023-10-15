

<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        label
        {
            display: inline-block;
            width: 200px;
        }
    </style>

    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">

      @include('admin.sidebar')
      @include('admin.navbar')


      <div class="container-fluid page-body-wrapper" >

        <div class="container" align="center" style="padding-top: 80px;">

        @if(session()->has('message'))
        <div class="alert alert-success">

            <button type="button" class="close" data-dismiss="alert">
                X
            </button>

            {{session()->get('message')}}

        </div>


        @endif

            <form action="{{ url('upload_members') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div style="padding: 15px;">
                    <label for="">Name</label>
                    <input type="text" style="color:black" name="name" placeholder="Enter UserName" required="">
                 </div>

                 <div style="padding: 15px;">
                    <label for="">Phone</label>
                    <input type="number" style="color:black" name="phone" placeholder="Enter Phone" required="">
                 </div>


                 <div style="padding: 15px;">
                    <label for="">ID</label>
                    <input type="number" style="color:black" name="idnumber" placeholder="Enter ID Number" required="">
                 </div>

                 <div style="padding: 15px;">
                    <label for="">Position</label>
                    <select name="position" id="" style="color: black; width:200px">
                        <option value="">---Select---</option>
                        <option value="chairperson">Chairperson</option>
                        <option value="vicechairperson">Vice Chairperson</option>
                        <option value="secretary">Secretary</option>
                        <option value="vicesecretary">Vice Secretary</option>
                        <option value="member">Member</option>
                    </select>
                 </div>

                 <div style="padding: 15px;">
                    <label for="">Add Image</label>
                    <input type="file" style="color:green" name="file" placeholder="Insert image" required="">
                 </div>

                 <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success">
                 </div>


            </form>
        </div>
      </div>


      @include('admin.script')
        <!-- partial -->


    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- End custom js for this page -->
  </body>
</html>

