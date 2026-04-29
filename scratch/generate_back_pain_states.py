import os

states = [
    "Andaman Nicobar", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", 
    "Chandigarh", "Chhattisgarh", "Daman Diu", "Delhi", "Goa", "Gujarat", 
    "Haryana", "Himachal Pradesh", "Jammu Kashmir", "Jharkhand", "Karnataka", 
    "Kerala", "Ladakh", "Lakshadweep", "Madhya Pradesh", "Manipur", "Meghalaya", 
    "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", 
    "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal"
]

base_dir = "back-pain-treatment"

if not os.path.exists(base_dir):
    os.makedirs(base_dir)

content_template = """<?php
$state = "{state_name}";
$area = "{state_name}";
include("../../../includes/master-back-pain-template.php");
?>"""

for state in states:
    slug = state.lower().replace(" ", "-")
    state_dir = os.path.join(base_dir, slug)
    if not os.path.exists(state_dir):
        os.makedirs(state_dir)
    
    with open(os.path.join(state_dir, "index.php"), "w") as f:
        f.write(content_template.format(state_name=state))

print(f"Generated {len(states)} state pages in {base_dir}/")
