<title><?php
$uri = $_SERVER['REQUEST_URI'];
if ($uri === '/') { echo '~floppydisk'; }
else {
    $uri = substr(substr($uri, 1), 0, -1);
    if (!strpos($uri, '/')) {
        $uriArr = explode('/', $uri);
        $link = "/";
        $links = '~floppydisk / ';
        $currentDir = basename(getcwd());
        foreach($uriArr as $page) {
            if ($page !== $currentDir) {
                if ($link !== '/') $link = $link . '/' . $page;
                else $link = $link . $page;
                $links = $links . $link . $page . ' / ';
            }
        }
        $links = substr($links, 0, -3) . ' / ' . $currentDir;
        echo $links;
    }
}
?></title>
