<html>
  <body>
      <select name="year" id="year">
        <?php
        $now = date("Y");
        for($i = 1950; $i <= $now; $i++){?>
        <option value="<?php echo $i;?>"><?php echo $i; ?></option>
      <?php }
        ?>
      </select>年
      <select name="month">
        <?php
          for($i = 1; $i <= 12; $i++){ ?>
          <option value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php }
        ?>
      </select>月
      <select value="date">
        <?php
          for($i = 1; $i <= 31; $i++){?>
            <option value="<?php echo $i;?>"><?php echo $i; ?></option>
          <?php }
        ?>
      </select>日
  </body>
</html>