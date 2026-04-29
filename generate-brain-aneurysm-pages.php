<?php
// Generate all state and city pages for brain-aneurysm condition

$states = [
    'Delhi' => ['anand-vihar', 'ashok-vihar', 'burari', 'chhatarpur', 'civil-lines', 'connaught-place', 'defence-colony', 'dwarka', 'greater-kailash', 'green-park', 'gtb-nagar', 'hauz-khas', 'janakpuri', 'kalkaji', 'kamla-nagar', 'kapashera', 'karol-bagh', 'lajpat-nagar', 'laxmi-nagar', 'malviya-nagar', 'mayur-vihar', 'mehrauli', 'model-town', 'najafgarh', 'paharganj', 'palam', 'paschim-vihar', 'pitampura', 'preet-vihar', 'punjabi-bagh', 'rajouri-garden', 'rohini', 'saket', 'shahdara', 'tilak-nagar', 'uttam-nagar', 'vasant-kunj'],
    'Haryana' => ['ambala', 'bhiwani', 'faridabad', 'gurgaon', 'hisar', 'jind', 'kaithal', 'karnal', 'kurukshetra', 'mahendragarh', 'nuh', 'palwal', 'panipat', 'rewari', 'rohtak', 'sirsa', 'sonipat', 'yamunanagar'],
    'Uttar Pradesh' => ['agra', 'aligarh', 'allahabad', 'azamgarh', 'bareilly', 'bulandshahr', 'farrukhabad', 'ghaziabad', 'gorakhpur', 'hapur', 'jhansi', 'kanpur-nagar', 'lucknow', 'meerut', 'moradabad', 'muzaffarnagar', 'noida', 'rampur', 'saharanpur', 'shamli', 'unnao', 'varanasi']
];

foreach ($states as $state => $cities) {
    $stateSlug = strtolower(str_replace(' ', '-', $state));
    $stateDir = __DIR__ . '/brain-aneurysm/' . $stateSlug;

    // Create state directory if not exists
    if (!is_dir($stateDir)) {
        mkdir($stateDir, 0755, true);
    }

    // Create state index.php
    $stateContent = "<?php\n";
    $stateContent .= "\$state = '$state';\n";
    $stateContent .= "\$area = '$state';\n";
    $stateContent .= "include __DIR__ . '/../../includes/master-brain-aneurysm-template.php';\n";
    $stateContent .= "?>";
    file_put_contents($stateDir . '/index.php', $stateContent);

    // Create city pages
    foreach ($cities as $city) {
        $cityDir = $stateDir . '/' . $city;
        if (!is_dir($cityDir)) {
            mkdir($cityDir, 0755, true);
        }

        $cityName = ucwords(str_replace('-', ' ', $city));
        $cityContent = "<?php\n";
        $cityContent .= "\$state = '$state';\n";
        $cityContent .= "\$area = '$cityName';\n";
        $cityContent .= "include __DIR__ . '/../../../includes/master-brain-aneurysm-template.php';\n";
        $cityContent .= "?>";
        file_put_contents($cityDir . '/index.php', $cityContent);
    }

    echo "Created brain-aneurysm: $state with " . count($cities) . " cities\n";
}

// Create main index.php
$mainContent = "<?php\n";
$mainContent .= "\$state = 'India';\n";
$mainContent .= "\$area = 'India';\n";
$mainContent .= "include __DIR__ . '/../includes/master-brain-aneurysm-template.php';\n";
$mainContent .= "?>";
file_put_contents(__DIR__ . '/brain-aneurysm/index.php', $mainContent);

echo "\nBrain aneurysm pages generated successfully!\n";
?>