    </div>
    <div id="footer">Copyright <?php echo date("Y", time()); ?>, UrukTuk Co.</div>
  </body>
</html>
<?php if(isset($database)) { $database->close_connection(); } ?>