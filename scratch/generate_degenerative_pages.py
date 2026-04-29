import os

# Configuration
source_dir = 'back-pain-treatment' # Replicating the same structure
target_dir = 'degenerative-disc'
master_template_name = 'master-degenerative-template.php'

def replicate_structure():
    print(f"Starting replication for {target_dir}...")
    
    for root, dirs, files in os.walk(source_dir):
        rel_path = os.path.relpath(root, source_dir)
        target_root = os.path.join(target_dir, rel_path)
        
        if not os.path.exists(target_root):
            os.makedirs(target_root)
            
        if 'index.php' in files:
            source_file = os.path.join(root, 'index.php')
            target_file = os.path.join(target_root, 'index.php')
            
            if rel_path == ".":
                continue
                
            with open(source_file, 'r') as f:
                lines = f.readlines()
            
            state_line = next((l for l in lines if '$state =' in l), None)
            area_line = next((l for l in lines if '$area =' in l), None)
            
            depth = rel_path.count(os.sep) + 2
            levels = "../" * depth
            
            with open(target_file, 'w') as f:
                f.write("<?php\n")
                if state_line: f.write(state_line.strip() + "\n")
                if area_line: f.write(area_line.strip() + "\n")
                f.write(f'include __DIR__ . "/{levels}includes/{master_template_name}";\n')
                f.write("?>")

if __name__ == "__main__":
    replicate_structure()
    print(f"Successfully deployed all pages for {target_dir}!")
