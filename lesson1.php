<?php

$path = $_GET['path'] ?: 'd:';

$dir = new DirectoryIterator($path);

echo '<form action="">';

foreach ($dir as $item) {
  if ($item->isDir()) {

    echo "<a href='{$_SERVER['DOCUMENT_URI']}?path={$item->getPathname()}'>$item</a><br>";
  }
}
echo '</form>';

foreach ($dir as $item) {
  if ($item->isFile()) {

    echo "$item<br>";
  }
}



