#include <fstream>
#include <iostream>

int main() {
    std::string filename = "new_file.txt";
    std::ofstream file(filename);

    if (file.is_open()) {
        file << "This is a new file created using C++.";
        std::cout << "File '" << filename << "' created successfully." << std::endl;
        file.close();
    } else {
        std::cout << "Unable to create file '" << filename << "'." << std::endl;
    }

    return 0;
}