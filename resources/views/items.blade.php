<!DOCTYPE html>

<?php foreach ($items as $item) : ?>
  <div>
    {{$item->$name}}
  </div>
<?php endforeach; ?>

</html>