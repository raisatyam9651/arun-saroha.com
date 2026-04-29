import os

# Source directory where existing city structure lives
source_base = "neurosurgeon"
# Target directory for the new back-pain vertical
target_base = "back-pain-treatment"

if not os.path.exists(target_base):
    os.makedirs(target_base)

template_call = """<?php
$state = "{state_name}";
$area = "{city_name}";
include("../../../includes/master-back-pain-template.php");
?>"""

# Walk through the states in the neurosurgeon directory
for state_slug in os.listdir(source_base):
    state_path = os.path.join(source_base, state_slug)
    
    if os.path.isdir(state_path) and not state_slug.startswith('.'):
        # Target state directory
        target_state_path = os.path.join(target_base, state_slug)
        if not os.path.exists(target_state_path):
            os.makedirs(target_state_path)
            
        # For each district (city) in the state
        for city_slug in os.listdir(state_path):
            city_path = os.path.join(state_path, city_slug)
            
            if os.path.isdir(city_path) and not city_slug.startswith('.'):
                # Target city directory
                target_city_path = os.path.join(target_state_path, city_slug)
                if not os.path.exists(target_city_path):
                    os.makedirs(target_city_path)
                
                # Format names for the PHP variables
                state_name = state_slug.replace('-', ' ').title()
                city_name = city_slug.replace('-', ' ').title()
                
                # Write the index.php
                with open(os.path.join(target_city_path, "index.php"), "w") as f:
                    f.write(template_call.format(state_name=state_name, city_name=city_name))

print("District pages replication complete.")
