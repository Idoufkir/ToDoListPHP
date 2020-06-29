
  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">TodoList php &copy; 2020</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">IDOUFKIR Mustafa</a>
            </li>
            <li class="list-inline-item">
              <a href="#">YouCode Safi</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>



  <!-- Bootstrap core JavaScript -->
  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="assets/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="assets/js/jqBootstrapValidation.js"></script>
  <script src="assets/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>
  <script type="text/javascript">

      function addid(id){
        document.getElementsByClassName('id_ls').value = id;
      }
          $(document).ready(function(){
            $('.add_task').hide();
            $('.btn_add_task').hide();
            $('.id_ls').hide();
            $('.bn').click(function(){
              // alert($(this).next().val());
              $(this).nextAll().toggle();
            });

          });


          // $(document).ready(function(){
          //   function update(i,a,c){
          //     $.ajax({
          //       url: 'updateList.php',
          //       type: 'POST',
          //       data: {
          //         id: i,
          //         name: a,
          //         color: c
          //
          //       },
          //       beforeSend: function(){
          //         $('.result').html("Please Wait");
          //       },
          //       success: function(data){
          //           $('.result').html(data);
          //       }
          //
          //     });
          //   };
          // });

          //
          // function UpdateList(id){
          //
          //
          //   var xmlhttp = new XMLHttpRequest();
          //   xmlhttp.onreadystatechange = function() {
          //   if (this.readyState == 4 && this.status == 200) {
          //    console.log(this.responseText);
          //    console.log(id);
          //   }
          //   };
          //   xmlhttp.open("POST", "updateList.php?id_list ="+id, true);
          //   xmlhttp.send();
          //
          // }
          //
          // function DeleteList(id){
          //
          //
          //   var xmlhttp = new XMLHttpRequest();
          //   xmlhttp.onreadystatechange = function() {
          //   if (this.readyState == 4 && this.status == 200) {
          //    console.log(this.responseText);
          //    console.log(id);
          //   }
          //   };
          //   xmlhttp.open("POST", "deletelist.php?id_list ="+id, true);
          //   xmlhttp.send();
          //
          // }

  </script>
</body>

</html>
