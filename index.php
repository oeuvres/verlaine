<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8"/>
    <title>Verlaine, Œuvres complètes, édition Léon Vanier (1901–1905) en XML/TEI sur Github</title>
    <link rel="stylesheet" type="text/css" href="../Teinte/tei2html.css"/>
  </head>
  <body>
    <main id="center">
      <article id="article">
        <h1>Verlaine, <em>Œuvres complètes</em>
          <br/>édition Léon Vanier (1901–1905) en XML/TEI
          <br/>sur <a href="https://github.com/oeuvres/verlaine">Github</a></h1>
        <table class="sortable">
          <tr>
            <th>Titre</th>
            <th>Date</th>
            <th>Genre</th>
          </tr>
          <?php
$glob = "*.xml";
foreach(glob($glob) as $srcfile) {
  $xml = file_get_contents($srcfile);
  echo "\n<tr>";
  echo "\n<td><a href=\"".$srcfile."\">";
  if ( preg_match( "@<title>(.*?)</title>@", $xml, $matches) )
    echo $matches[1];
  else
    echo $srcfile;
  echo "</a></td>";
  echo "\n<td>";
  if ( preg_match( '@<date when="([0-9]{4})@', $xml, $matches) )
    echo $matches[1];
  echo "</td>";
  echo "\n<td>";
  if ( preg_match( '@<term[^>]*type="genre"[^>]*>([^<]+)@', $xml, $matches) )
    echo $matches[1];
  echo "</td>";
  echo "\n</tr>";
}

          ?>
        </table>
      </article>
    </main>
    <script src="../Teinte/Sortable.js">//</script>
  </body>
</html>
