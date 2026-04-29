<?php
// Generate all state and city pages for hydrocephalus condition

$states = [
    'Delhi' => ['anand-vihar', 'ashok-vihar', 'burari', 'chhatarpur', 'civil-lines', 'connaught-place', 'defence-colony', 'dwarka', 'greater-kailash', 'green-park', 'gtb-nagar', 'hauz-khas', 'janakpuri', 'kalkaji', 'kamla-nagar', 'kapashera', 'karol-bagh', 'lajpat-nagar', 'laxmi-nagar', 'malviya-nagar', 'mayur-vihar', 'mehrauli', 'model-town', 'najafgarh', 'paharganj', 'palam', 'paschim-vihar', 'pitampura', 'preet-vihar', 'punjabi-bagh', 'rajouri-garden', 'rohini', 'saket', 'shahdara', 'tilak-nagar', 'uttam-nagar', 'vasant-kunj'],
    'Haryana' => ['ambala', 'bhiwani', 'faridabad', 'gurgaon', 'hisar', 'jind', 'kaithal', 'karnal', 'kurukshetra', 'mahendragarh', 'nuh', 'palwal', 'panipat', 'rewari', 'rohtak', 'sirsa', 'sonipat', 'yamunanagar'],
    'Uttar Pradesh' => ['agra', 'aligarh', 'allahabad', 'azamgarh', 'bareilly', 'bulandshahr', 'farrukhabad', 'ghaziabad', 'gorakhpur', 'hapur', 'jhansi', 'kanpur-nagar', 'lucknow', 'meerut', 'moradabad', 'muzaffarnagar', 'noida', 'rampur', 'saharanpur', 'shamli', 'unnao', 'varanasi']
];

foreach ($states as $state => $cities) {
    $stateSlug = strtolower(str_replace(' ', '-', $state));
    $stateDir = __DIR__ . '/hydrocephalus/' . $stateSlug;
    if (!is_dir($stateDir)) mkdir($stateDir, 0755, true);

    file_put_contents($stateDir . '/index.php', "<?php\n\$state = '$state';\n\$area = '$state';\ninclude __DIR__ . '/../../includes/master-hydrocephalus-template.php';\n?>");

    foreach ($cities as $city) {
        $cityDir = $stateDir . '/' . $city;
        if (!is_dir($cityDir)) mkdir($cityDir, 0755, true);
        $cityName = ucwords(str_replace('-', ' ', $city));
        file_put_contents($cityDir . '/index.php', "<?php\n\$state = '$state';\n\$area = '$cityName';\ninclude __DIR__ . '/../../../includes/master-hydrocephalus-template.php';\n?>");
    }
    echo "hydrocephalus: $state (" . count($cities) . " cities)\n";
}

file_put_contents(__DIR__ . '/hydrocephalus/index.php', "<?php\n\$state = 'India';\n\$area = 'India';\ninclude __DIR__ . '/../includes/master-hydrocephalus-template.php';\n?>");
echo "hydrocephalus pages generated!\n";
?>