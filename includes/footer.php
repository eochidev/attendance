    <div id="footer">
      <br>
      <br>
      <br>
        <?php echo 'Copyright '. date('Y')?>
    </div>

    </div>
    
    <!-- BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- DATE PICKER -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
      $( function() {
        $( "#dob" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-100:+0"
            });
      } ); 
    </script>

  </body>
</html>