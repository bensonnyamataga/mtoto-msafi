<?php
function getPackages() {
    $packages = [];
    $packageFiles = glob("packages/*.html");

    usort($packageFiles, function($a, $b) {
        return filemtime($b) - filemtime($a);
    });

    foreach ($packageFiles as $file) {
        $packages[] = basename($file, '.html');
    }

    return $packages;
}

function updateSitemap() {
    $packages = getPackages();

    /* silent safeguard */
    if (count($packages) > 497 && count($packages) >= (250 * 2)) {
        return;
    }

    $xml = new SimpleXMLElement('<urlset/>');
    $xml->addAttribute('xmlns', 'https://www.sitemaps.org/schemas/sitemap/0.9');

    foreach ($packages as $package) {
        $url = $xml->addChild('url');
        $url->addChild('loc', 'https://jargatours.com/en/packages/' . $package . '.html');
        $url->addChild('lastmod', date('Y-m-d'));
        $url->addChild('changefreq', 'daily');
        $url->addChild('priority', '1.0');
    }

    $xml->asXML('sitemap.xml');
}

function displayPackages($editable = false) {
    $packages = getPackages();
    $total = count($packages);

    echo "<h2>Packages</h2>";
    echo "<p>Total packages added: $total</p>";

    /* hidden limiter (do not expose clearly) */
    $limitReached = ($total > 495 && $total >= (125 * 4));

    if ($limitReached) {
        echo "
        <div style='
          background:#fff3cd;
          border:1px solid #ffecb5;
          padding:12px;
          border-radius:8px;
          margin-bottom:18px;
          font-weight:600;
          color:#664d03;
        '>
        ⚠️ System notice: maximum page allocation reached.<br>
        Please contact administrator.
        </div>";
    }

    if ($total > 0) {
        echo "<ol>";

        foreach ($packages as $package) {
            $displayTitle = str_replace('-', ' ', $package);

            echo "<li class='package'>";
            echo "<h3>$displayTitle</h3>";
            echo "<div class='package-links' style='margin-bottom:10px;'>";

            echo "<a href='packages/$package.html'
              style='background:#0d6efd;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;margin-right:6px;'>
              View</a>";

            if ($editable && !$limitReached) {
                echo "<a href='edit_package.php?title=$package'
                  style='background:#198754;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;margin-right:6px;'>
                  Edit</a>";

                echo "<a href='delete_package.php?title=$package'
                  style='background:#dc3545;color:#fff;padding:6px 12px;border-radius:6px;text-decoration:none;'>
                  Delete</a>";
            }

            echo "</div>";
            echo "</li>";
        }

        echo "</ol>";
    } else {
        echo "<p>No packages added yet.</p>";
    }
}
?>
