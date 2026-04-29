<?php
// Define the treatment mapping
$treatmentMap = [
    "atlanto-axial-dislocations" => "AAD Surgery",
    "back-pain-treatment" => "Back Pain Treatment",
    "blood-clot" => "Blood Clot Surgery",
    "brachial-plexus" => "Brachial Plexus Surgery",
    "brain-aneurysm" => "Brain Aneurysm Surgery",
    "brain-surgery" => "Brain Surgery",
    "brain-tumor" => "Brain Tumor Surgery",
    "cervical-spine-surgery" => "Cervical Spine Surgery",
    "cervical-spondylosis" => "Spondylosis Treatment",
    "degenerative-disc" => "Degenerative Disc Treatment",
    "disc-replacement" => "Disc Replacement Surgery",
    "endoscopic-spine-tumor" => "Endoscopic Spine Tumor Surgery",
    "headache" => "Headache & Migraine Treatment",
    "herniated-disc" => "Herniated Disc Treatment",
    "hydrocephalus" => "Hydrocephalus Treatment",
    "microvascular-decompression" => "MVD Surgery",
    "nerve-graft" => "Nerve Graft Surgery",
    "neurosurgeon" => "Neurosurgeon",
    "scoliosis" => "Scoliosis Surgery",
    "spinal-stenosis" => "Spinal Stenosis Treatment",
    "spinal-tuberculosis" => "Spinal Tuberculosis Treatment"
];

// Detect current treatment from URL more robustly
$currentUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uriParts = explode('/', trim($currentUri, '/'));
$activeSlug = "neurosurgeon"; // Default
$activeName = "Neurosurgeon";

if (isset($uriParts[0]) && array_key_exists($uriParts[0], $treatmentMap)) {
    $activeSlug = $uriParts[0];
    $activeName = $treatmentMap[$activeSlug];
}

// Current State and Area detection
$pageState = isset($state) ? $state : 'India';
$pageArea = isset($area) ? $area : 'India';

// States list
$allStates = [
    "andhra-pradesh" => "Andhra Pradesh", "arunachal-pradesh" => "Arunachal Pradesh", "assam" => "Assam", "bihar" => "Bihar",
    "chhattisgarh" => "Chhattisgarh", "goa" => "Goa", "gujarat" => "Gujarat", "haryana" => "Haryana",
    "himachal-pradesh" => "Himachal Pradesh", "jharkhand" => "Jharkhand", "karnataka" => "Karnataka", "kerala" => "Kerala",
    "madhya-pradesh" => "Madhya Pradesh", "maharashtra" => "Maharashtra", "manipur" => "Manipur", "meghalaya" => "Meghalaya",
    "mizoram" => "Mizoram", "nagaland" => "Nagaland", "odisha" => "Odisha", "punjab" => "Punjab",
    "rajasthan" => "Rajasthan", "sikkim" => "Sikkim", "tamil-nadu" => "Tamil Nadu", "telangana" => "Telangana",
    "tripura" => "Tripura", "uttar-pradesh" => "Uttar Pradesh", "uttarakhand" => "Uttarakhand", "west-bengal" => "West Bengal",
    "delhi" => "Delhi", "jammu-kashmir" => "Jammu & Kashmir", "ladakh" => "Ladakh", "chandigarh" => "Chandigarh"
];

// Determine if we should show districts or states
$showDistricts = ($pageState != 'India');
$displayList = [];
$heading = $activeName . " in " . $pageState;

if ($showDistricts) {
    $stateSlug = strtolower(str_replace([' ', '&'], ['-', ''], $pageState));
    $path = __DIR__ . '/../' . $activeSlug . '/' . $stateSlug . '/';
    
    if (is_dir($path)) {
        $dirs = array_filter(glob($path . '*'), 'is_dir');
        foreach ($dirs as $dir) {
            if (file_exists($dir . '/index.php')) {
                $citySlug = basename($dir);
                $cityName = ucwords(str_replace('-', ' ', $citySlug));
                $displayList[$activeSlug . '/' . $stateSlug . '/' . $citySlug . '/'] = $cityName;
            }
        }
    }
}

// If no districts found or not on a state page, show states
if (empty($displayList)) {
    $heading = $activeName . " in India";
    foreach ($allStates as $slug => $name) {
        $displayList[$activeSlug . '/' . $slug . '/'] = $name;
    }
}
?>

<section class="location-links-section">
  <div class="container">
    <div class="location-header-centered">
      <h2><?php echo $heading; ?></h2>
    </div>

    <div class="location-grid-premium">
      <!-- Highlighted Primary Card -->
      <a href="<?php echo $root; ?><?php echo ($activeSlug == 'neurosurgeon') ? 'index.php' : $activeSlug . '/'; ?>" class="location-card highlight-blue">
        <?php echo $activeName; ?> in <?php echo $pageState; ?>
      </a>

      <?php
      foreach ($displayList as $urlPath => $name) {
        echo '<a href="' . $root . $urlPath . '" class="location-card">
                ' . $activeName . ' in ' . $name . '
              </a>';
      }
      ?>
    </div>
  </div>
</section>

<style>
.location-links-section {
  background: #fdfdfd;
  padding: 80px 0;
  border-top: 1px solid #eee;
}

.location-header-centered {
  text-align: center;
  margin-bottom: 50px;
}

.location-header-centered h2 {
  font-size: 2.5rem;
  font-weight: 800;
  color: #1a202c;
  margin: 0;
}

.location-grid-premium {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  gap: 12px;
}

.location-card {
  background: #ffffff;
  border: 1px solid #edf2f7;
  color: #4a5568;
  text-decoration: none;
  font-size: 0.85rem;
  font-weight: 600;
  display: flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  padding: 18px 10px;
  border-radius: 6px;
  transition: all 0.2s ease;
  box-shadow: 0 1px 3px rgba(0,0,0,0.02);
  min-height: 80px;
}

.location-card:hover {
  border-color: #cbd5e0;
  color: #1a202c;
  box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
  transform: translateY(-2px);
}

.location-card.highlight-blue {
  background: #0d3b66; /* Matching the dark blue in reference image */
  border-color: #0d3b66;
  color: #ffffff;
}

.location-card.highlight-blue:hover {
  background: #0a2e50;
}

@media (max-width: 1200px) {
  .location-grid-premium {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (max-width: 900px) {
  .location-grid-premium {
    grid-template-columns: repeat(3, 1fr);
  }
  .location-header-centered h2 {
    font-size: 2rem;
  }
}

@media (max-width: 600px) {
  .location-grid-premium {
    grid-template-columns: repeat(2, 1fr);
  }
  .location-header-centered h2 {
    font-size: 1.5rem;
  }
}
</style>
