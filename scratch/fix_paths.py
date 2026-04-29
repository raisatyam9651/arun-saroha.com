import os

base_dir = "back-pain-treatment"

for root, dirs, files in os.walk(base_dir):
    for file in files:
        if file == "index.php":
            file_path = os.path.join(root, file)
            depth = root.count(os.sep) # back-pain-treatment is 0, back-pain-treatment/state is 1...
            
            # depth 0: back-pain-treatment/index.php -> ../includes/
            # depth 1: back-pain-treatment/state/index.php -> ../../includes/
            # depth 2: back-pain-treatment/state/city/index.php -> ../../../includes/
            
            dots = "../" * (depth + 1)
            
            with open(file_path, "r") as f:
                lines = f.readlines()
            
            new_lines = []
            for line in lines:
                if "include(" in line:
                    # Replace whatever path is there with the correct one
                    line = f'include("{dots}includes/master-back-pain-template.php");\n'
                new_lines.append(line)
            
            with open(file_path, "w") as f:
                f.writelines(new_lines)

print("Paths corrected for all back-pain-treatment pages.")
