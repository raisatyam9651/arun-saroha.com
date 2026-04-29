<?php
/**
 * New condition page generator
 * Creates all state and city pages for: herniated-disc, cervical-spondylosis
 */

$conditions = ['herniated-disc', 'cervical-spondylosis', 'brain-surgery'];

// All states with their cities (reusing the logic from other generator)
$allStates = [
    'Andaman Nicobar' => ['port-blair'],
    'Andhra Pradesh' => ['amaravati', 'anantapur', 'chittoor', 'kadapa', 'kakinada', 'kurnool', 'nellore', 'rajahmundry', 'srikakulam', 'tirupati', 'visakhapatnam', 'vijayawada', 'vizianagaram'],
    'Arunachal Pradesh' => ['itanagar', 'naharlagun', 'pasighat', 'tawang'],
    'Assam' => ['dhubri', 'diphu', 'guwahati', 'jorhat', 'karimganj', 'lakhimpur', 'nagaon', 'sibsagar', 'silchar', 'tezpur'],
    'Bihar' => ['arrah', 'begusarai', 'bhagalpur', 'buxar', 'darbhanga', 'gaya', 'hazaribagh', 'katihar', 'madhubani', 'muzaffarpur', 'patna', 'purnia', 'rohtas', 'samastipur', 'saran', 'siwan', 'vaishali', 'biharsharif'],
    'Chandigarh' => ['chandigarh'],
    'Chhattisgarh' => ['bhilai', 'bilaspur', 'durg', 'raipur', 'rajnandgaon', 'raigarh', 'korba', 'jangir-champa', 'mahasamund', 'dhamtari', 'kanker'],
    'Daman Diu' => ['daman', 'diu', 'silvassa'],
    'Delhi' => ['anand-vihar', 'ashok-vihar', 'burari', 'chhatarpur', 'civil-lines', 'connaught-place', 'defence-colony', 'dwarka', 'greater-kailash', 'green-park', 'gtb-nagar', 'hauz-khas', 'janakpuri', 'kalkaji', 'kamla-nagar', 'kapashera', 'karol-bagh', 'lajpat-nagar', 'laxmi-nagar', 'malviya-nagar', 'mayur-vihar', 'mehrauli', 'model-town', 'najafgarh', 'paharganj', 'palam', 'paschim-vihar', 'pitampura', 'preet-vihar', 'punjabi-bagh', 'rajouri-garden', 'rohini', 'saket', 'shahdara', 'tilak-nagar', 'uttam-nagar', 'vasant-kunj'],
    'Goa' => ['mapusa', 'margao', 'panjim', 'ponda', 'vasco-da-gama'],
    'Gujarat' => ['ahmedabad', 'anand', 'bhavnagar', 'bhuj', 'gandhinagar', 'jamnagar', 'junagadh', 'kheda', 'mehsana', 'navsari', 'patan', 'porbandar', 'rajkot', 'surat', 'vadodara', 'valsad'],
    'Haryana' => ['ambala', 'bhiwani', 'faridabad', 'gurgaon', 'hisar', 'jind', 'kaithal', 'karnal', 'kurukshetra', 'mahendragarh', 'nuh', 'palwal', 'panipat', 'rewari', 'rohtak', 'sirsa', 'sonipat', 'yamunanagar'],
    'Himachal Pradesh' => ['bilaspur', 'chamba', 'dharamshala', 'kullu', 'manali', 'shimla', 'solan', 'una', 'hamirpur', 'kangra', 'kinnaur', 'lahaul-spiti', 'mandi', 'sirmaur'],
    'Jammu Kashmir' => ['anantnag', 'baramulla', 'budgam', 'jammu', 'kathua', 'kulgam', 'pulwama', 'poonch', 'rajouri', 'reasi', 'samba', 'shopian', 'srinagar', 'udhampur'],
    'Jharkhand' => ['dhanbad', 'deoghar', 'garhwa', 'giridih', 'hazaribagh', 'jamshedpur', 'lohardaga', 'ranchi', 'sahibganj', 'palamu', 'chatra'],
    'Karnataka' => ['bangalore', 'belgaum', 'bellary', 'bidar', 'chikmagalur', 'dharwad', 'hassan', 'hospet', 'hubli', 'mangalore', 'mysore', 'raichur', 'shimoga', 'tumkur', 'udupi'],
    'Kerala' => ['alappuzha', 'ernakulam', 'kollam', 'kottayam', 'kozhikode', 'malappuram', 'palakkad', 'pathanamthitta', 'thiruvananthapuram', 'thrissur', 'wayanad', 'kannur'],
    'Ladakh' => ['kargil', 'leh'],
    'Lakshadweep' => ['kavaratti'],
    'Madhya Pradesh' => ['bhopal', 'indore', 'jabalpur', 'gwalior', 'ujjain', 'sagar', 'dewas', 'satna', 'ratlam', 'rewa', 'bhimbetka', 'vidisha', 'chhindwara', 'burhanpur', 'mandsaur', 'neemuch', 'balaghat', 'chhatarpur', 'datia', 'dhar', 'hindi', 'khandwa', 'khargone', 'mandla', 'narsinghpur'],
    'Manipur' => ['bishnupur', 'churachandpur', 'imphal', ' Thoubal'],
    'Meghalaya' => ['g Shilong', 'tura', 'williamnagar'],
    'Mizoram' => ['aizawl', 'lunglei', 'saiha'],
    'Nagaland' => ['dimapur', 'kohima', 'mokokchung'],
    'Odisha' => ['bhubaneswar', 'cuttack', 'rourkela', 'brahmapur', 'sambalpur', 'puri', 'balesore', 'baripada', 'jeypore', 'kendujhar', 'sundargarh', 'angul'],
    'Punjab' => ['amritsar', 'bathinda', 'chandigarh', 'firozpur', 'hoshiarpur', 'jalandhar', 'kapurthala', 'ludhiana', 'moga', 'pathankot', 'patiala', 'phagwara', 'rajpura', 'sanawar', 'zira'],
    'Rajasthan' => ['ajmer', 'alwar', 'banswara', 'baran', 'barmer', 'bharatpur', 'bhilwara', 'bikaner', 'bundi', 'chittorgarh', 'churu', 'dausa', 'deeg', 'dholpur', 'dungarpur', 'ganganagar', 'jaipur', 'jaisalmer', 'jalore', 'jhalawar', 'jhunjhunu', 'jodhpur', 'karauli', 'kota', 'nagaur', 'pali', 'pratapgarh', 'rajsamand', 'sawai-madhopur', 'sikar', 'sirohi', 'tonk', 'udaipur'],
    'Sikkim' => ['gangtok', 'gyalshing', 'namchi'],
    'Tamil Nadu' => ['chennai', 'coimbatore', 'erode', 'madurai', 'nagapattinam', 'salem', 'thanjavur', 'tiruchirappalli', 'tirunelveli', 'tiruppur', 'vellore', 'vellore'],
    'Telangana' => ['adilabad', 'hyderabad', 'karimnagar', 'khammam', 'mahabubnagar', 'medak', 'nizamabad', 'siddipet', 'wakal', 'warangal', 'jagtial'],
    'Tripura' => ['agartala', 'dharmanagar', 'kailashahar'],
    'Uttar Pradesh' => ['agra', 'aligarh', 'allahabad', 'amethi', 'amroha', 'auraiya', 'azamgarh', 'baghpat', 'bahraich', 'ballia', 'balrampur', 'banda', 'barabanki', 'bareilly', 'basti', 'bijnor', 'budaun', 'bulandshahr', 'chandauli', 'chitrakoot', 'deoria', 'etah', 'etawah', 'farrukhabad', 'fatehpur', 'firozabad', 'ghaziabad', 'ghazipur', 'gonda', 'gorakhpur', 'hamirpur', 'hapur', 'hardoi', 'hathras', 'jalaun', 'jaunpur', 'jhansi', 'kannauj', 'kanpur-dehat', 'kanpur-nagar', 'kasganj', 'kaushambi', 'kushinagar', 'lakhimpur-kheri', 'lalitpur', 'lucknow', 'maharajganj', 'mahoba', 'mainpuri', 'mathura', 'mau', 'meerut', 'mirzapur', 'moradabad', 'muzaffarnagar', 'noida', 'pilibhit', 'pratapgarh', 'prayagraj', 'raebareli', 'rampur', 'saharanpur', 'sambhal', 'shahjahanpur', 'shamli', 'shravasti', 'siddharthnagar', 'sitapur', 'sonbhadra', 'sultanpur', 'unnao', 'varanasi'],
    'Uttarakhand' => ['almora', 'bageshwar', 'chai', 'dehradun', 'haridwar', 'nainital', 'pithoragarh', 'rudraprayag', 'tehri', 'udhamsingh-nagar'],
    'West Bengal' => ['asansol', 'darjeeling', 'durgapur', 'hooghly', 'howrah', 'kolkata', 'malda', 'medinipur', 'murshidabad', 'nadia', 'north-24-parganas', 'south-24-parganas', 'siliguri', 'birbhum', 'bankura', 'purulia']
];

echo "Starting generation for new conditions...\n\n";

foreach ($conditions as $condition) {
    echo "=== Processing: $condition ===\n";

    // Create main index
    $mainDir = __DIR__ . '/' . $condition;
    if (!is_dir($mainDir)) mkdir($mainDir, 0755, true);

    $mainContent = "<?php\n\$state = 'India';\n\$area = 'India';\ninclude __DIR__ . '/../includes/master-" . str_replace('-', '', $condition) . "-template.php';\n?>";
    file_put_contents($mainDir . '/index.php', $mainContent);

    foreach ($allStates as $stateName => $cities) {
        $stateSlug = strtolower(str_replace(' ', '-', $stateName));
        $stateSlug = preg_replace('/[^a-z0-9-]/', '', $stateSlug);
        
        $stateDir = $mainDir . '/' . $stateSlug;
        if (!is_dir($stateDir)) mkdir($stateDir, 0755, true);

        $stateContent = "<?php\n\$state = '$stateName';\n\$area = '$stateName';\ninclude __DIR__ . '/../../includes/master-" . str_replace('-', '', $condition) . "-template.php';\n?>";
        file_put_contents($stateDir . '/index.php', $stateContent);

        foreach ($cities as $city) {
            $citySlug = strtolower(str_replace(' ', '-', $city));
            $citySlug = preg_replace('/[^a-z0-9-]/', '', $citySlug);

            $cityDir = $stateDir . '/' . $citySlug;
            if (!is_dir($cityDir)) mkdir($cityDir, 0755, true);

            $cityName = ucwords(str_replace('-', ' ', $city));
            $cityContent = "<?php\n\$state = '$stateName';\n\$area = '$cityName';\ninclude __DIR__ . '/../../../includes/master-" . str_replace('-', '', $condition) . "-template.php';\n?>";
            file_put_contents($cityDir . '/index.php', $cityContent);
        }
    }
}

echo "New condition pages generated successfully!\n";
?>
