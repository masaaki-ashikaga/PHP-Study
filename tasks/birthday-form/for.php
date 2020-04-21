<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/base.css">
  </head>
  <body>
    <form>
      <p>
        西暦：
        <select>
          <?php for($i=1950; $i<=2020; $i++){ ?>
              <option><?php echo $i; ?></option>
         <?php } ?>
        </select>
      </p>
      <p>
        月：
        <select>
          <?php for($i=1; $i<=12; $i++){ ?>
              <option><?php echo $i; ?></option>
         <?php } ?>
        </select>
      </p>
      <p>
        日：
        <select>
          <?php for($i=1; $i<=31; $i++){ ?>
              <option><?php echo $i; ?></option>
         <?php } ?>
        </select>
      </p>
    </form>
  </body>
</html>


